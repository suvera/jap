/*
 * Register.cpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */

#include "ego/Register.hpp"

namespace ego {

classesByPkg Register::knownTypes = {
		{DATA_TYPE_INT, DATA_TYPE_INT},
		{DATA_TYPE_FLOAT, DATA_TYPE_FLOAT},
		{DATA_TYPE_BOOL, DATA_TYPE_BOOL},
		{DATA_TYPE_STRING, DATA_TYPE_STRING},
		{DATA_TYPE_ARRAY, DATA_TYPE_ARRAY},
		{DATA_TYPE_SARRAY, DATA_TYPE_SARRAY},
		{DATA_TYPE_VOID, DATA_TYPE_VOID}
};


Register::Register() {
	// TODO Auto-generated constructor stub

}

Register::~Register() {
	// TODO Auto-generated destructor stub
}
	
bool Register::hasType(string typeName) {
	try {
		Register::knownTypes.at(typeName);
		return true;
	} catch (const std::out_of_range& oor) {
	}
	
	try {
		this->classRegistry.at(typeName);
		return true;
	} catch (const std::out_of_range& oor) {
	}
	
	try {
		this->classByPkg.at(typeName);
		return true;
	} catch (const std::out_of_range& oor) {
	}
	
	return false;
}

void Register::registerClass(SClass* cls) {
	// We still load new classes with Same Short name
	this->classRegistry[cls->getFullName()] = cls;

	try {
		this->classByPkg.at(cls->name);
	} catch (const std::out_of_range& oor) {
		this->classByPkg[cls->name] = cls->pkg;
	}
}

SClass* Register::getClass(string fullName) {
	try {
		fullName = this->getFullClassName(fullName);
		
		return this->classRegistry.at(fullName);
	} catch (const std::out_of_range& oor) {
		throwError("No class exists with the name " + fullName + "");
	}
}

string Register::getFullClassName(string name) {

	// check whether this is pkg name
	if (name.find_last_of(".") != string::npos) {
		return name;
	}

	try {
		string pkg = this->classByPkg.at(name);
		return string(pkg + "." + name);
	} catch (const std::out_of_range& oor) {
		throwError("No class import with the name " + name + "");
	}
}

}
