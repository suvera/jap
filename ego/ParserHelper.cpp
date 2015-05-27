/*
 * ParserHelper.cpp
 *
 *  Created on: Mar 6, 2015
 *      Author: rnarmala
 */

#include "ParserHelper.hpp"
using namespace ego;

int yylex(yy::parser::semantic_type *sNode, const yy::parser::location_type* loc) {

    //std::cout << "Lex: token ID: " << sNode->sVal << "\n";
    int token = kicker->lexer->yylex();

    if (token == yy::parser::token::T_STRING) {
        sNode->assign(kicker->xState->lastString);
    } else {
        sNode->assign(kicker->lexer->YYText());
    }

    sNode->sType = token;

    return token;
}

/**
 * file parsing done
 * do something here
 */
void ego_file_processing_end() {
	bool classFileMatched = false;
	for (int i = 0; i < kicker->classList.size(); i++) {
		SClass* cls = kicker->classList[i];

		if (kicker->filePath.stem().string() == cls->name) {
			classFileMatched = true;
			break;
		}
	}

	if (!classFileMatched) {
		ego::throwError("File name and Class name does not match");
	}
}

/**
 * check local variable
 */
void ego_check_local_variable(Variable* var) {
    ClassMethod *method = kicker->parseState->curMethod;

    if (method->hasLocalVar(var->caseLessName)) {
        ego::throwError(string(
                "Variable has declared twice '"
                + var->name + "' "
            ));
    }
}

/**
 * check class variable
 */
void ego_check_class_variable(ClassVariable* var) {
    SClass *cls = kicker->parseState->curClass;

    if (cls->hasVariable(var->caseLessName)) {
        ego::throwError(string(
                        "Class attribute already exists with name '" + var->name
                        + "' in the class " + cls->name));
    }
}

/**
 * check class method
 */
void ego_check_class_method(ClassMethod *method) {
    SClass *cls = kicker->parseState->curClass;

    if (cls->hasMethod(method->caseLessName)) {
        ego::throwError(
                string(
                        "method already exists with name " + method->name
                                + " in the class " + cls->name));
    }

	if (method->isConstructor) {
		if (!method->returnsVoid()) {
			ego::throwError(
                string("constructor must be defined with VOID, '" + method->name
                + "' in the class " + cls->name));
		}
	}
}

// register Class Variable
ego::ClassVariable* ego_register_class_variable(semtcNode* type, semtcNode* name, semtcNode* modifier) {
    ego::ClassVariable* var = new ego::ClassVariable(name->sVal);
    var->type = type->sVal;
    var->qualifiedType = ego_get_qualified_type<ego::ClassVariable>(type, var, NULL);

	typedef yy::parser::token sTOKEN;

    YYSTYPE access = ego_get_from_table(modifier->op1);
    YYSTYPE scope = ego_get_from_table(modifier->op2);

	if (access.sType == sTOKEN::T_PUBLIC) {
		var->isPublic = true;
	} else if (access.sType == sTOKEN::T_PRIVATE) {
		var->isPrivate = true;
	} else if (access.sType == sTOKEN::T_PROTECTED) {
		var->isProtected = true;
	} else {
		ego::throwError(string("Cannot define class property without access specifier."));
	}

	if (scope.sType == sTOKEN::T_CONST) {
		var->isConst = true;
	} else if (scope.sType == sTOKEN::T_STATIC) {
		var->isStatic = true;
	} else if (scope.sType != sTOKEN::T_EMPTY) {
		ego::throwError(string("Cannot define a class property with '" + scope.sVal + "' keyword."));
	}

    if (var->isConst) {
        if (name->sVal != toUpper(name->sVal)) {
            ego::throwError(string("Constants must be defined with UPPER CASE letters for the sake of code readability '" + name->sVal + "'."));
        }
    }

    ego_check_class_variable(var);

    var->clsName = kicker->parseState->curClass->getFullName();

    kicker->parseState->curClass->addVariable(var);
    kicker->parseState->curVar = var;

    return var;
}


#define DATA_TYPE_INT "int"
#define DATA_TYPE_FLOAT "float"
#define DATA_TYPE_BOOL "bool"
#define DATA_TYPE_STRING "string"
#define DATA_TYPE_ARRAY "array"
#define DATA_TYPE_SARRAY "sarray"

// get fully qualyfied Type name
template<class VARTABLE>
ego::NameWithGenerics ego_get_qualified_type(semtcNode* type, VARTABLE* var, ego::NameWithGenerics* parent=NULL) {
	ego::NameWithGenerics varType;

	switch (type->astType) {
		case AST_DATA_TYPE_INT:
		{
			varType.name = DATA_TYPE_INT;
            varType.isKnown = true;
		}
		break;

		case AST_DATA_TYPE_FLOAT:
		{
			varType.name = DATA_TYPE_FLOAT;
            varType.isKnown = true;
		}
		break;

		case AST_DATA_TYPE_BOOL:
		{
			varType.name = DATA_TYPE_BOOL;
            varType.isKnown = true;
		}
		break;

		case AST_DATA_TYPE_STRING:
		{
			varType.name = DATA_TYPE_STRING;
            varType.isKnown = true;
		}
		break;

        case AST_DATA_TYPE_GENERIC_HINT_NAME:
        {
            varType.name = type->sVal;
            varType.isGeneric = true;
        }
        break;

        case AST_DATA_TYPE_VOID:
        {
            varType.name = type->sVal;
            varType.isVoid = true;
        }
        break;

		case AST_DATA_TYPE_ARRAY:
		{
			varType.name = DATA_TYPE_ARRAY;

			YYSTYPE itemType = ego_get_from_table(type->op1);
			ego::NameWithGenerics varSubType = ego_get_qualified_type<VARTABLE>(&itemType, var, parent);

			BIGINT pos = var->typeTable.addItem(varSubType);

			varType.genericTypes.push_back(pos);
		}
		break;

		case AST_DATA_TYPE_SARRAY:
		{
			varType.name = DATA_TYPE_SARRAY;

            YYSTYPE itemType = ego_get_from_table(type->op1);
			ego::NameWithGenerics varSubType = ego_get_qualified_type<VARTABLE>(&itemType, var, parent);

			BIGINT pos = var->typeTable.addItem(varSubType);

			varType.genericTypes.push_back(pos);
		}
		break;

		case AST_DATA_TYPE_OBJECT:
		{
			// at this moment class may not defined.
			varType.name = type->sVal;
		}
		break;

		case AST_DATA_TYPE_OBJECT_GENERICS:
		{
			YYSTYPE clsType = ego_get_from_table(type->op1);
			YYSTYPE subType = ego_get_from_table(type->op2);

			// at this moment class may not defined.
			varType.name = clsType.sVal;

			// TODO:
			ego_get_qualified_type<VARTABLE>(&subType, var, &varType);
		}
		break;

		case AST_DATA_TYPE_ACTUAL_HINT_LIST:
        case AST_DATA_TYPE_FORMAL_HINT_LIST:
		{
			// TODO:
			YYSTYPE op1Type = ego_get_from_table(type->op1);

            ego::NameWithGenerics varSubType = ego_get_qualified_type<VARTABLE>(&op1Type, var, parent);
			BIGINT pos = var->typeTable.addItem(varSubType);

			parent->genericTypes.push_back(pos);


            if (type->op2 > 0) {
                YYSTYPE op2Type = ego_get_from_table(type->op2);

                ego::NameWithGenerics varSubType2 = ego_get_qualified_type<VARTABLE>(&op2Type, var, parent);
                BIGINT pos = var->typeTable.addItem(varSubType2);

                parent->genericTypes.push_back(pos);
            }
		}
		break;

		default:
		{
			ego::throwError(string("Unknown actual type '" + type->sVal + "' "));
		}
		break;
	}

	return varType;
}

// Local variable
ego::Variable* ego_register_method_variable(semtcNode* type, semtcNode* name, semtcNode* assgnmt) {
    ego::Variable* var = new ego::Variable(name->sVal, type->sVal);

    var->value = assgnmt->sVal;

    // Assign Value
    var->valNode = ego_add_to_table(*assgnmt);

	var->qualifiedType = ego_get_qualified_type<ego::Variable>(type, var, NULL);

	ego_check_local_variable(var);

	var->clsName = kicker->parseState->curClass->getFullName();
	var->methodName = kicker->parseState->curMethod->name;

    kicker->parseState->curMethod->addLocalVar(var);

    return var;
}



// register method
ego::ClassMethod* ego_register_class_method(semtcNode* type, semtcNode* name, semtcNode* modifier) {
	// TODO:
	// 1. check return_data_type exist or not
	// 2. Check name should *NOT* match the __construct()  or class name
	// 3. check Construtor should return VOID only
	// 4. Check Construtor name should match the __construct()  or class name
    ego::ClassMethod* method = new ego::ClassMethod(name->sVal);

    typedef yy::parser::token sTOKEN;

    if (type->sType == sTOKEN::T_VOID) {
        method->returnType = "void";
    } else {
        method->returnType = type->sVal;
    }

    method->qualifiedType = ego_get_qualified_type<ego::ClassMethod>(type, method, NULL);

    YYSTYPE access = ego_get_from_table(modifier->op1);
    YYSTYPE scope = ego_get_from_table(modifier->op2);

    SClass* cls = kicker->parseState->curClass;

	if (access.sType == sTOKEN::T_PUBLIC) {
		method->isPublic = true;
	} else if (access.sType == sTOKEN::T_PRIVATE) {
		if (cls->isInterface) {
			ego::throwError(string("Cannot define a method with 'private' specifier in interface."));
		}
		method->isPrivate = true;
	} else if (access.sType == sTOKEN::T_PROTECTED) {
		if (cls->isInterface) {
			ego::throwError(string("Cannot define a method with 'protected' specifier in interface."));
		}
		method->isProtected = true;
	} else {
		ego::throwError(string("Cannot define a method without access specifier."));
	}


	if (scope.sType == sTOKEN::T_FUTURE) {
		if (cls->isInterface) {
			ego::throwError(string("Cannot define a method with 'future' specifier in interface."));
		}
		method->isStatic = true;
		method->isFuture = true;
	} else if (scope.sType == sTOKEN::T_STATIC) {
		if (cls->isInterface) {
			ego::throwError(string("Cannot define a method with 'static' specifier in interface."));
		}
		method->isStatic = true;
	} else if (scope.sType == sTOKEN::T_ABSTRACT) {
		method->isAbstract = true;
	} else if (scope.sType != sTOKEN::T_EMPTY) {
		ego::throwError(string("Cannot define a method with const keyword."));
	}

	if (kicker->parseState->curClass->isMethodConstructor(method)) {
		if (cls->isInterface) {
			ego::throwError(string("Cannot define a method with constructor name in interface."));
		}
		method->isConstructor = true;
	}

	ego_check_class_method(method);

	method->clsName = kicker->parseState->curClass->getFullName();

    kicker->parseState->curClass->addMethod(method);
    kicker->parseState->curMethod = method;

    return method;
}

bool varIsObject(semtcNode* type) {
    return (type->astType == AST_DATA_TYPE_OBJECT_GENERICS || type->astType == AST_DATA_TYPE_OBJECT);
}

ego::ParseNode ego_empty_node() {
    ego::ParseNode a;
    a.sType = yy::parser::token::T_EMPTY;
    return a;
}

BIGINT ego_add_to_table(ego::ParseNode a) {
    return kicker->table->addItem(a);
}

ego::ParseNode ego_get_from_table(BIGINT a) {
    return kicker->table->getItem(a);
}


