/*
 * SClass.hpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */

#ifndef SCLASS_HPP_
#define SCLASS_HPP_

#include <ego/ClassVariable.hpp>
#include <ego/ClassMethod.hpp>

namespace ego {

typedef unordered_map<std::string, std::shared_ptr<ego::ClassVariable>> classVariables;
typedef unordered_map<std::string, std::shared_ptr<ego::ClassMethod>> classMethods;


/* SClass */
class SClass {
private:
	friend class cereal::access;
    template<class Archive>
    void serialize(Archive & ar)
    {
        ar(
            CEREAL_NVP(pkg)
            , CEREAL_NVP(name)
            , CEREAL_NVP(isInterface)
            , CEREAL_NVP(isFinal)
            , CEREAL_NVP(isAbstract)
            , CEREAL_NVP(hasParent)
            , CEREAL_NVP(isImplements)
            , CEREAL_NVP(implements)
            , CEREAL_NVP(variables)
            , CEREAL_NVP(methods)
            , CEREAL_NVP(imports)
            , CEREAL_NVP(caseLessName)
            , CEREAL_NVP(qualifiedName)
			, CEREAL_NVP(parentType)
			, CEREAL_NVP(typeTable)
			, CEREAL_NVP(variableList)
			, CEREAL_NVP(methodList)
			, CEREAL_NVP(classShortNameMap)
        );
    }
public:
	string pkg;
	string name;
	string caseLessName;

	bool isInterface;

	bool isFinal;
	bool isAbstract;

	bool hasParent;
	NameWithGenerics parentType;

	bool isImplements;
	vector<NameWithGenerics> implements;

	classVariables variables;
	classMethods methods;

	//to maintain order
	vector<string> variableList;
	vector<string> methodList;

	IMap imports;
	
	NameWithGenerics qualifiedName;
	TypeGenericGroup typeTable;

    // mapping short names; class names
    // Short Name => Full Name
	SMap classShortNameMap;
	

	// no serialize
	// must be loaded on restore_class()
	SClass* parent = NULL;
	vector<SClass*> interfaces;
	IMap heirarchy;
	IMap heirarchyCase;
	string classDir;
	PtrMap<ClassVariable> inheVariables;
	PtrMap<ClassMethod> inheMethods;


	/* Methods */

    ClassMethod* getMethod(string);
    bool hasMethod(string);

    ClassVariable* getVariable(string);
    bool hasVariable(string);

    ClassMethod* addMethod(ClassMethod*);
    ClassVariable* addVariable(ClassVariable*);

    string getFullName() const;

    SClass();
    
    void initAll();
	
	bool isMethodConstructor(ClassMethod*);
	string getQualifiedType();

	bool isValidGenericType(string);

    string resolveClassName(string);

    bool registerImportedClasses();

    bool registerClassNameMap(string, string);

    void createInheritance(SClass*);

    void createInheritance();

    bool instanceOf(string);

    bool instanceOf(SClass*);

    void addToHeirarchy(string, int);

    void applyInheritance();

};


//CEREAL_REGISTER_TYPE(ego::SClass);

// Imported classes
// FullClassName => SClass object
typedef std::unordered_map<std::string, SClass*> classMap;

}





#endif /* SCLASS_HPP_ */
