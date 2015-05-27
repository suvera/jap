/*
 * ClassMethod.cpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */
#include <iostream>
#include <string>
#include <vector>
#include <map>
#include <unordered_map>
#include <ego/ClassMethod.hpp>
using namespace std;

namespace ego {

localVariables ClassMethod::getLocalVars() {
	return this->localVars;
}

Variable* ClassMethod::addLocalVar(Variable *var) {
	std::shared_ptr<Variable> obj (var);

	this->localVars[var->caseLessName] = obj;
	this->localVarList.push_back(var->caseLessName);
}

Variable* ClassMethod::addLocalVar(string name, string type) {
	Variable *var = new Variable();
	var->name = name;
	var->caseLessName = toLower(name);
	var->type = type;

	this->addLocalVar(var);

	return var;
}

Variable* ClassMethod::addLocalVar(string name, string type, string value) {
	Variable *var = new Variable();
	var->name = name;
	var->caseLessName = toLower(name);
	var->type = type;
	var->value = value;

	this->addLocalVar(var);

	return var;
}

Variable* ClassMethod::getLocalVar(string name) {
	try {
	    name = toLower(name);

		std::shared_ptr<Variable> obj = this->localVars.at(name);

		return obj.get();
	} catch (const std::out_of_range& oor) {
		throwError(
				"No Local variable defined in the method " + this->name
						+ " of the class ");
	}
}
bool ClassMethod::hasLocalVar(string name) {
	try {
	    name = toLower(name);

		this->localVars.at(name);
		return true;
	} catch (const std::out_of_range& oor) {
		return false;
	}
}

void ClassMethod::addArg(Variable *var) {
	std::shared_ptr<Variable> obj (var);

	this->args.push_back(obj);
}

Variable* ClassMethod::getArg(int pos) {
	try {
		std::shared_ptr<Variable> obj = this->args.at(pos);

		return obj.get();
	} catch (const std::out_of_range& oor) {
		throwError(
				"No Argument " + std::to_string(pos) + " exist for the method " + this->name
						+ " of the class ");
	}
}

int ClassMethod::getArgCount() {
	return this->args.size();
}

methodArgs ClassMethod::getArgs() {
	return this->args;
}

void ClassMethod::setArgs(methodArgs args) {
	this->args = args;
}

bool ClassMethod::returnsVoid() {
    return (this->returnType == "void");
}

/**
 * return qualified type as a string
 */
string ClassMethod::getQualifiedType() {
	return this->qualifiedType.getQualified<ego::TypeGenericGroup>(&this->typeTable);
}

/**
 * Match this method access modifier with other method
 */
bool ClassMethod::matchAccessModifier(ClassMethod* other) {
    if (this->isStatic == other->isStatic
        && this->isPublic == other->isPublic
        && this->isPrivate == other->isPrivate
        && this->isProtected == other->isProtected
        && this->isFuture == other->isFuture
        && this->isFinal == other->isFinal
        && this->isAbstract == other->isAbstract
    ) {
        return true;
    }
    return false;
}

/**
 * Match this method return type with other method
 */
bool ClassMethod::matchReturnType(ClassMethod* other) {
    if (this->getQualifiedType() == other->getQualifiedType()) {
        return true;
    }

    return false;
}


/**
 * Match this method argument list with other method
 */
bool ClassMethod::matchArgumentTypes(ClassMethod* other) {

    if (this->getArgCount() != other->getArgCount()) {
        return false;
    }

    for (int i = 0; i < this->getArgCount(); i++) {
        Variable* thisVar = this->getArg(i);
        Variable* otherVar = other->getArg(i);

        if (thisVar->getQualifiedType() != otherVar->getQualifiedType()) {
            return false;
        }
    }

    return true;
}


/**
 * Constructor
 */
ClassMethod::ClassMethod() {
	this->initAll();
}

/**
 * Constructor
 */
ClassMethod::ClassMethod(string name) {
	this->initAll();

	this->name = name;
	this->caseLessName = toLower(name);
}

/**
 * Constructor  initializer
 */
void ClassMethod::initAll() {
	this->isStatic = false;
	this->isPublic = false;
	this->isPrivate = false;
	this->isProtected = false;
	this->isFuture = false;
	this->hasExceptions = false;
	this->isFinal = false;
	this->isAbstract = false;
	this->isConstructor = false;
	this->isDestructor = false;
}



}
