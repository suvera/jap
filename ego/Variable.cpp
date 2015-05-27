/*
 * Variable.cpp
 *
 * to represent local variables
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */
#include <iostream>
#include <string>
#include <vector>
#include <map>
#include <unordered_map>
using namespace std;

#include "ego/Variable.hpp"

namespace ego {

Variable::Variable() {
	this->initAll();
}

string Variable::getName() const {
	return name;
}

string Variable::getType() const {
	return type;
}

string Variable::getValue() const {
	return value;
}

void Variable::setName(string name) {
	this->name = name;
}

void Variable::setType(string type) {
	this->type = type;
}

void Variable::setValue(string value) {
	this->value = value;
}

Variable::Variable(string v, string t) :
	name(v), type(t) {
	this->caseLessName = toLower(v);
}

bool Variable::getIsFormal() const {
    return isFormal;
}

void Variable::setIsFormal(bool isFormal) {
    this->isFormal = isFormal;
}

string Variable::getQualifiedType() {
	return this->qualifiedType.getQualified<ego::TypeGenericGroup>(&this->typeTable);
}

void Variable::initAll() {
	this->isFormal = false;
}

}
