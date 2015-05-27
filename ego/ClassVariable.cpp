/*
 * ClassVariable.cpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */
#include <iostream>
#include <string>
#include <vector>
#include <map>
#include <unordered_map>
#include <ego/ClassVariable.hpp>
using namespace std;

namespace ego {

ClassVariable::ClassVariable() {
	this->initAll();
}

ClassVariable::ClassVariable(string name) {
	this->initAll();
	this->name = name;
	this->caseLessName = toLower(name);
}

string ClassVariable::getQualifiedType() {
	return this->qualifiedType.getQualified<ego::TypeGenericGroup>(&this->typeTable);
}

void ClassVariable::initAll() {
	this->isStatic = false;
	this->isPublic = false;
	this->isPrivate = false;
	this->isProtected = false;
	this->isConst = false;
}

}
