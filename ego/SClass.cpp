/**
 * @author rama
 */
#include <iostream>
#include <string>
#include <vector>
#include <map>
#include <unordered_map>
using namespace std;
#include "ego/SClass.hpp"

namespace ego {


SClass::SClass() {
	this->initAll();
}

ClassMethod* SClass::getMethod(string name) {
	try {
		std::shared_ptr<ClassMethod> obj = this->methods.at(name);

		return obj.get();

	} catch (const std::out_of_range& oor) {
		throwError(
				"No method defined in the class " + this->name
						+ " with the name " + name);
	}
}

bool SClass::hasMethod(string name) {
	try {
		this->methods.at(name);

		return true;
	} catch (const std::out_of_range& oor) {
		return false;
	}
}

ClassVariable* SClass::getVariable(string name) {
	try {
		std::shared_ptr<ClassVariable> obj = this->variables.at(name);

		return obj.get();
	} catch (const std::out_of_range& oor) {
		throwError(
				"No variable defined in the class " + this->name
						+ " with the name " + name);
	}
}

bool SClass::hasVariable(string name) {
	try {
		this->variables.at(name);
		return true;
	} catch (const std::out_of_range& oor) {
		return false;
	}
}

ClassMethod* SClass::addMethod(ClassMethod* method) {
	std::shared_ptr<ClassMethod> mtd (method);
	this->methods[method->caseLessName] = mtd;
	this->methodList.push_back(method->caseLessName);
}

ClassVariable* SClass::addVariable(ClassVariable* var) {
	std::shared_ptr<ClassVariable> obj (var);

	this->variables[var->caseLessName] = obj;
	this->variableList.push_back(var->caseLessName);
}

string SClass::getFullName() const {
	return string(this->pkg + "." + this->name);
}

bool SClass::isMethodConstructor(ClassMethod* method) {
	return (method->caseLessName == CLASS_CONSTRUCTOR);
}

string SClass::getQualifiedType() {
	return this->qualifiedName.getQualified<ego::TypeGenericGroup>(&this->typeTable);
}

// this is a stand alone function
bool isValidGenericType(NameWithGenerics name, string val, SClass* cls) {
	if (name.isGeneric == true && name.name == val) {
		return true;
	}

	int size = name.genericTypes.size();
	bool suc = false;
	if (size > 0) {
		for (int i = 0; i < size; i++) {
			suc = ego::isValidGenericType(cls->typeTable.getItem(name.genericTypes[i]), val, cls);

			if (suc) {
				break;
			}
		}
	}

	return suc;
}

bool SClass::isValidGenericType(string val) {
	return ego::isValidGenericType(this->qualifiedName, val, this);
}

/**
 * resolve short ClassName to full name
 */
string SClass::resolveClassName(string clsName) {

    if (this->classShortNameMap.hasKey(clsName)) {
		return this->classShortNameMap.at(clsName);
	}

	/*
	throwError(
		"No Class found in the class " + this->name
		+ " with the name " + clsName);
	*/

    return clsName;
}

/**
 * register a class name
 */
bool SClass::registerImportedClasses() {
	vector<string> classes = findClasses(this->classDir);

	for (int i = 0; i < classes.size(); i++) {
		this->registerClassNameMap(classes[i],
				this->pkg.length() > 0 ? string(this->pkg + "." + classes[i]) : classes[i]);
	}


	string pkg;
	for (int i = 0; i < this->imports.size(); i++) {
		if (this->imports.at(i) == 0) {

			this->registerClassNameMap(classNameByPkg(this->imports.key(i)), this->imports.key(i));

		} else {
			pkg = this->imports.key(i);

			classes = findClassesPkg(pkg);

			for (int j = 0; j < classes.size(); j++) {
				this->registerClassNameMap(classes[j],
						pkg.length() > 0 ? string(pkg + "." + classes[j]) : classes[j]);
			}
		}
	}

    return true;
}

/**
 * register short ClassName map
 */
bool SClass::registerClassNameMap(string shortName, string fullName) {
    // no overwriting
    if (!this->classShortNameMap.hasKey(shortName)) {
		this->classShortNameMap.add(shortName, fullName);
	}

    return true;
}

/**
 * check given class is parent class of this
 */
bool SClass::instanceOf(string fullName) {
	fullName = toLower(fullName);

	if (toLower(this->getFullName()) == fullName) {
		return true;
	}

	return this->heirarchy.hasKey(fullName);;
}

bool SClass::instanceOf(SClass* cls) {
	return this->instanceOf(cls->getFullName());
}

/**
 * Add Class Name in to class Heirarchy
 */
void SClass::addToHeirarchy(string fullName, int type) {
	this->heirarchyCase.add(fullName, type);

	this->heirarchy.add(toLower(fullName), type);
}

/**
 * create Inheritance on a class
 */
void SClass::createInheritance() {
	this->heirarchy.clear();
	this->createInheritance(this);
}

void SClass::createInheritance(SClass* initiator) {

    // check circular dependency here,  Classes must not be inherited itself circularly.
    if (this->hasParent && this->parent == NULL) {
        this->parent = GetClass<SClass>(this->resolveClassName(this->parentType.name));

    	if (initiator->instanceOf(this->parent->getFullName())) {
			die(string("Error: Class circular inheritance, "
					+ initiator->getFullName()
					+ " and "
					+ this->parent->getFullName() + " "
				)
			);
    	}

        initiator->addToHeirarchy(this->parent->getFullName(), 1);

        this->parent->createInheritance(initiator);
    }

    if (this->isImplements) {
        for (int i = 0; i < this->implements.size(); i++) {
            this->interfaces[i] = GetClass<SClass>(this->resolveClassName(this->implements[i].name));

        	if (initiator->instanceOf(this->interfaces[i]->getFullName())) {
				die(string("Error: interface circular inheritance, "
						+ initiator->getFullName()
						+ " and "
						+ this->interfaces[i]->getFullName() + " "
					)
				);
        	}

            initiator->addToHeirarchy(this->interfaces[i]->getFullName(), 2);

            this->interfaces[i]->createInheritance(initiator);
        }
    }

    // apply
    this->applyInheritance();
}

/**
 * Find variables and methods from parents
 */
void SClass::applyInheritance() {
    if (this->hasParent) {
    	PtrMap<ClassMethod> parentMethods;
    	this->parent->applyInheritance();

    	/**
    	 * Inherit Variables
    	 * Variables can be overridden at any access modifier or data type in child classes
    	 */
        for (int i = 0; i < this->parent->variableList.size(); i++) {
        	ClassVariable* var = this->parent->getVariable(this->parent->variableList[i]);

            if (!var->isPrivate) {
        	    this->inheVariables.add(var->caseLessName, var);
        	}
        }

        for (int i = 0; i < this->parent->inheVariables.size(); i++) {
            ClassVariable* var = this->parent->inheVariables.at(i);

            if (!var->isPrivate) {
        	    this->inheVariables.add(var->caseLessName, var);
        	}
        }

    	/**
    	 * Inherit Methods
    	 *  TODO:
    	 *     - Derived Class Access Modifier Narrowing down should throw an error
    	 *     - Derived Class Access Modifier Broadening up is OKAY.
    	 *     - Arguments can be any, no problem with that
    	 *     - The return type should match
    	 */
        for (int i = 0; i < this->parent->methodList.size(); i++) {
        	ClassMethod* method = this->parent->getMethod(this->parent->methodList[i]);

            if (!method->isPrivate) {
            	parentMethods.add(method->caseLessName, method);
        	    this->inheMethods.add(method->caseLessName, method);
        	}
        }

        for (int i = 0; i < this->parent->inheMethods.size(); i++) {
            ClassMethod* method = this->parent->inheMethods.at(i);

            if (!method->isPrivate) {
            	parentMethods.add(method->caseLessName, method);
        	    this->inheMethods.add(method->caseLessName, method);
        	}
        }

        // check this class methods with parent inherited methods
        for (int i = 0; i < parentMethods.size(); i++) {
        	ClassMethod* method = parentMethods.at(i);

			if (this->hasMethod(method->caseLessName)) {
				ClassMethod* oldMethod = this->getMethod(method->caseLessName);

				if ((method->isPublic && !oldMethod->isPublic) || (method->isProtected && oldMethod->isPrivate)) {
					die(string("Error: Class overridden method access cannot be narrow down as per parent method , '"
							+ oldMethod->clsName
							+ "' and '"
							+ method->clsName + "' "
						)
					);
				}

				if (!oldMethod->matchReturnType(method)) {
					die(string("Error: Class overridden method return type signature does not match with parent method , '"
							+ oldMethod->clsName
							+ "' and '"
							+ method->clsName + "' "
						)
					);
				}

			} else if (method->isAbstract && !this->isAbstract) {
				die(string("Error: Class must implement abstract method, class '"
						+ this->getFullName()
						+ "' and method '"
						+ method->name + "' "
					)
				);
			}

        } // for loop end


    } // hasParent if end

    /**
     * Interface Inheritance
     *  - abstract methods may not implement interface methods
     *  - But, Method signature and return type and argument signature should match with the implementation
     */
    if (this->isImplements) {
        PtrMap<ClassMethod> interfaceMethods;

        for (int j = 0; j < this->implements.size(); j++) {
        	this->interfaces[j]->applyInheritance();

        	/**
        	 * Inherit Methods
        	 */
            for (int i = 0; i < this->interfaces[j]->methodList.size(); i++) {
            	ClassMethod* method = this->interfaces[j]->getMethod(this->interfaces[j]->methodList[i]);
            	string methodName = this->interfaces[j]->methodList[i];

                if (interfaceMethods.hasKey(method->caseLessName)) {
                    ClassMethod* oldMethod = interfaceMethods.at(method->caseLessName);

                    if (!oldMethod->matchAccessModifier(method)) {
                        die(string("Error: interface method access signature does not match with other interface , '"
                                + oldMethod->clsName
                                + "' and '"
                                + method->clsName + "' "
                            )
                        );
                    }

                    if (!oldMethod->matchReturnType(method)) {
                        die(string("Error: interface method return type signature does not match with other interface , '"
                                + oldMethod->clsName
                                + "' and '"
                                + method->clsName + "' "
                            )
                        );
                    }

                    if (!oldMethod->matchArgumentTypes(method)) {
                        die(string("Error: interface method Argument type signature does not match with other interface , '"
                                + oldMethod->clsName
                                + "' and '"
                                + method->clsName + "' "
                            )
                        );
                    }

                } else {

                    interfaceMethods.add(method->caseLessName, method);
                    this->inheMethods.add(method->caseLessName, method);

                }
            }


            for (int i = 0; i < this->interfaces[j]->inheMethods.size(); i++) {

                ClassMethod* method = this->interfaces[j]->inheMethods.at(i);
                string methodName = this->interfaces[j]->inheMethods.key(i);

                if (interfaceMethods.hasKey(method->caseLessName)) {
                    ClassMethod* oldMethod = interfaceMethods.at(method->caseLessName);

                    if (!oldMethod->matchAccessModifier(method)) {
                        die(string("Error: interface method access signature does not match with other interface , '"
                                + oldMethod->clsName
                                + "' and '"
                                + method->clsName + "' "
                            )
                        );
                    }

                    if (!oldMethod->matchReturnType(method)) {
                        die(string("Error: interface method return type signature does not match with other interface , '"
                                + oldMethod->clsName
                                + "' and '"
                                + method->clsName + "' "
                            )
                        );
                    }

                    if (!oldMethod->matchArgumentTypes(method)) {
                        die(string("Error: interface method Argument type signature does not match with other interface , '"
                                + oldMethod->clsName
                                + "' and '"
                                + method->clsName + "' "
                            )
                        );
                    }

                } else {

                    interfaceMethods.add(method->caseLessName, method);
                    this->inheMethods.add(method->caseLessName, method);

            	}
            }
        }


        // Check current implementation of interface in this class
        for (int i = 0; i < interfaceMethods.size(); i++) {
            ClassMethod* method = interfaceMethods.at(i);

            if (this->hasMethod(method->caseLessName)) {
                ClassMethod* oldMethod = this->getMethod(method->caseLessName);

                if (!oldMethod->matchAccessModifier(method)) {
                    die(string("Error: interface method access signature does not match with current implementation , '"
                            + oldMethod->clsName
                            + "' and '"
                            + method->clsName + "' "
                        )
                    );
                }

                if (!oldMethod->matchReturnType(method)) {
                    die(string("Error: interface method return type signature does not match with current implementation , '"
                            + oldMethod->clsName
                            + "' and '"
                            + method->clsName + "' "
                        )
                    );
                }

                if (!oldMethod->matchArgumentTypes(method)) {
                    die(string("Error: interface method Argument type signature does not match with current implementation , '"
                            + oldMethod->clsName
                            + "' and '"
                            + method->clsName + "' "
                        )
                    );
                }

            } else if (!this->isAbstract) {
                die(string("Error: Class must implement interface method, class '"
                        + this->getFullName()
                        + "' and method '"
                        + method->name + "' "
                    )
                );
            }
        }

    }
}


void SClass::initAll() {
	this->isInterface = false;
	this->isFinal = false;
	this->isAbstract = false;
	this->hasParent = false;
	this->isImplements = false;
}


void save_class(SClass *s, string filename){
    // make an archive
	std::ofstream os(filename, std::ios::binary);
    if (os.good()) {
    	cereal::BinaryOutputArchive ar(os);
    	ar( *s );
    }

    filename = string(filename + ".xml");
    std::ofstream osX(filename);
	if (osX.good()) {
		cereal::XMLOutputArchive arX(osX);
		arX( *s );
	}
}

SClass* restore_class(string filename)
{
	//std::cout << "restore_class: " << filename << "\n";
    // open the archive
    std::ifstream ifs(filename);
    //SClass *s = new SClass();
    SClass *s = new SClass();

    if (ifs.good() && ifs.is_open()) {
    	cereal::BinaryInputArchive ar(ifs);
		// restore the SClass from the archive
    	ar(*s);
    }

    fileIO::path filePath = fileIO::path(filename);
    s->classDir = filePath.parent_path().string();

    s->registerImportedClasses();
    s->createInheritance();

    //SClass *e = &s;

    //cout << "Restored class name: " << s->pkg << "." << s->name << "\n";

    return s;
}




}

