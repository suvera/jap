/*
 * ClassVariable.hpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */

#ifndef CLASSVARIABLE_HPP_
#define CLASSVARIABLE_HPP_

#include <ego/Variable.hpp>

namespace ego {

class ClassVariable {
private:
    friend class cereal::access;
    template<class Archive>
    void serialize(Archive & ar)
    {
        ar(
        	CEREAL_NVP(value)
			, CEREAL_NVP(name)
			, CEREAL_NVP(type)
			, CEREAL_NVP(isStatic)
			, CEREAL_NVP(isPublic)
            , CEREAL_NVP(isPrivate)
            , CEREAL_NVP(isProtected)
            , CEREAL_NVP(isConst)
            , CEREAL_NVP(qualifiedType)
            , CEREAL_NVP(typeTable)
            , CEREAL_NVP(clsName)
        );    
    }
public:
	string value;
    BIGINT valNode;

	string name;
	string caseLessName;

	// variable data type
	string type;
	NameWithGenerics qualifiedType;

	TypeGenericGroup typeTable;

	bool isStatic;

	bool isPublic;

	bool isPrivate;

	bool isProtected;
    
    bool isConst;

    string clsName;



    /* methods */

	ClassVariable();

	ClassVariable(string name);

	void initAll();

	string getQualifiedType();

};

//CEREAL_REGISTER_TYPE(ego::ClassVariable);

}

#endif /* CLASSVARIABLE_HPP_ */
