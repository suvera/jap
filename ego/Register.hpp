/*
 * Register.hpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */

#ifndef REGISTER_HPP_
#define REGISTER_HPP_

namespace ego {

class Register {
public:
	static classesByPkg knownTypes;

	classMap classRegistry;

	classesByPkg classByPkg;
	

	Register();
	virtual ~Register();

	void registerClass(SClass*);

	SClass* getClass(string fullName);

	string getFullClassName(string name);
	
	bool hasType(string);
};

}

#endif /* REGISTER_HPP_ */
