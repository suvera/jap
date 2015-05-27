/*
 * ClassMethod.hpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */

#ifndef CLASSMETHOD_HPP_
#define CLASSMETHOD_HPP_

#include <vector>
#include <ego/Variable.hpp>

namespace ego {

typedef unordered_map<std::string, std::shared_ptr<Variable>> localVariables;
typedef vector<std::shared_ptr<Variable>> methodArgs;

class ClassMethod {
private:
	friend class cereal::access;
    template<class Archive>
    void serialize(Archive & ar)
    {
        ar(
        	CEREAL_NVP(isFuture)
            , CEREAL_NVP(hasExceptions)
            , CEREAL_NVP(exceptions)
            , CEREAL_NVP(name)
            , CEREAL_NVP(returnType)
            , CEREAL_NVP(isStatic)
            , CEREAL_NVP(isPublic)
            , CEREAL_NVP(isPrivate)
            , CEREAL_NVP(isProtected)
            , CEREAL_NVP(isFinal)
            , CEREAL_NVP(isAbstract)
            , CEREAL_NVP(args)
            , CEREAL_NVP(localVars)
            , CEREAL_NVP(caseLessName)
			, CEREAL_NVP(isConstructor)
			, CEREAL_NVP(isDestructor)
			, CEREAL_NVP(qualifiedType)
			, CEREAL_NVP(typeTable)
			, CEREAL_NVP(localVarList)
			, CEREAL_NVP(clsName)
        );
    }
public:

	bool isFuture;

	bool hasExceptions;

	string exceptions;

	string name;
	string caseLessName;

	// method return type
	string returnType;
	NameWithGenerics qualifiedType;

	TypeGenericGroup typeTable;

	bool isStatic;

	bool isPublic;

	bool isPrivate;

	bool isProtected;

	bool isFinal;

	bool isAbstract;
	
	bool isConstructor;
	
	bool isDestructor;

	ego::ParseNode body;

    methodArgs args;
    
	localVariables localVars;
	vector<string> localVarList;

    string clsName;


    /* Methods */
	ClassMethod();

	ClassMethod(string name);

	void initAll();

	// Methods
	localVariables getLocalVars();
    
    void addArg(Variable *var);
    Variable* getArg(int pos);
    int getArgCount();
    methodArgs getArgs();
    void setArgs(methodArgs args);

	Variable* addLocalVar(Variable *var);

	Variable* addLocalVar(string name, string type);

	Variable* addLocalVar(string name, string type, string value);

	Variable* getLocalVar(string name);

	bool hasLocalVar(string name);

	bool returnsVoid();

	string getQualifiedType();

	bool matchAccessModifier(ClassMethod*);

	bool matchReturnType(ClassMethod*);

	bool matchArgumentTypes(ClassMethod*);

};

//CEREAL_REGISTER_TYPE(ego::ClassMethod);

}

#endif /* CLASSMETHOD_HPP_ */
