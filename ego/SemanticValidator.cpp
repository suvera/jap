/*
 * SemanticValidator.cpp
 *
 *  Created on: Feb 19, 2015
 *      Author: rnarmala
 */

#include <ego/FileParser.hpp>

namespace ego {

SemanticValidator::SemanticValidator() {
}

SemanticValidator::SemanticValidator(ParsingState* x, SmartNodeGroup* g) {
    this->xState = x;
    this->table = g;
}

string SemanticValidator::getErrorDetail() {
    SClass *cls = this->cls;
    ClassMethod *method = this->method;

    string s;

    if (method != NULL) {
        s.append(" [ in the method ");
        s.append(method->name);
        s.append("] ");
    }
    s += "  in the class " + cls->name;

    return s;

}

string SemanticValidator::find_return_type(BIGINT id, ParentTypeNode* parent=NULL) {
    ego::ParseNode node = this->table->getItem(id);
    return this->find_return_type(&node, parent);
}

string SemanticValidator::find_return_type(ego::ParseNode* expr, ParentTypeNode* parent=NULL) {
    SClass *cls = this->cls;
    ClassMethod *method = this->method;

    switch (expr->astType) {
        case AST_INTEGER:
            return string(DATA_TYPE_INT);
        break;

        case AST_DOUBLE:
            return string(DATA_TYPE_FLOAT);
        break;

        case AST_BOOLEAN:
            return string(DATA_TYPE_BOOL);
        break;

        case AST_STRING:
            return string(DATA_TYPE_STRING);
        break;

        case AST_DATA_TYPE_OBJECT:
        	return cls->resolveClassName(expr->sVal);
        break;

        case AST_NULL:
            return string(DATA_VALUE_NULL);
        break;

        case AST_DATA_TYPE_ARRAY:
			//return cls->resolveClassName(expr->sVal);
		break;

        case AST_DATA_TYPE_SARRAY:
			//return cls->resolveClassName(expr->sVal);
		break;

        case AST_DATA_TYPE_OBJECT_GENERICS:
			//return cls->resolveClassName(expr->sVal);
		break;

        case AST_DATA_TYPE_VOID:
        	return string(DATA_TYPE_VOID);
        break;

        case AST_ADD:
        case AST_SUB:
        case AST_MUL:
        case AST_DIV:
        case AST_MOD:
        {
            string leftType = this->find_return_type(expr->op1);
            string rightType = this->find_return_type(expr->op2);

            if (!is_number_type(leftType) || !is_number_type(rightType)) {
                ego::throwError(string("expression is not evaluated to Number type in the method "
                                        + this->getErrorDetail()));
            }

            if (AST_DIV == expr->astType) {
                return string(DATA_TYPE_FLOAT);
            } else {
                if (is_float_type(leftType) || is_float_type(rightType) ) {
                    return string(DATA_TYPE_FLOAT);
                }

                return string(DATA_TYPE_INT);
            }
        }
        break;

        case AST_CONCAT:
        {
			string leftType = this->find_return_type(expr->op1);
			string rightType = this->find_return_type(expr->op2);

			if (!is_string_type(leftType) || !is_string_type(rightType)) {
				ego::throwError(string("expression is not evaluated to string type in the method "
										+ this->getErrorDetail()));
			}

			return string(DATA_TYPE_STRING);
		}
        break;

        case AST_INCR_DECR:
        {
            string leftType = this->find_return_type(expr->op1);
            if (!is_number_type(leftType)) {
                ego::throwError(string("expression is not evaluated to Number type in the method "
                                        + this->getErrorDetail()));
            }

            if (is_float_type(leftType)) {
                return string(DATA_TYPE_FLOAT);
            }

            return string(DATA_TYPE_INT);
        }
        break;

        case AST_LT:
        case AST_GT:
        case AST_LT_OR_EQ:
        case AST_GT_OR_EQ:
        {
            string leftType = this->find_return_type(expr->op1);
            string rightType = this->find_return_type(expr->op2);

            if (!is_number_type(leftType) || !is_number_type(rightType)) {
                ego::throwError(string("expression is not evaluated to Number type in the method "
                                        + this->getErrorDetail()));
            }

            return string(DATA_TYPE_BOOL);
        }
        break;

        case AST_EQUAL:
        case AST_NOT_EQUAL:
        case AST_IDENTICAL:
        case AST_NOT_IDENTICAL:
            return string(DATA_TYPE_BOOL);
            break;

        case AST_AND_AND:
        case AST_OR_OR:
            return string(DATA_TYPE_BOOL);
            break;


        case AST_AND:
        case AST_OR:
        case AST_XOR:
        case AST_SHIFT_LEFT:
        case AST_SHIFT_RIGHT:
        case AST_NEGATION:
        {
            string leftType = this->find_return_type(expr->op1);
            if (!is_int_type(leftType)) {
                ego::throwError(string("expression is not evaluated to Integer type in the method "
                                        + this->getErrorDetail()));
            }

            return string(DATA_TYPE_INT);
        }
        break;

        case AST_NEW_OBJECT:
		{
            ego::ParseNode node = this->table->getItem(expr->op1);
            return cls->resolveClassName(node.sVal);
		}
        break;

        case AST_LOCAL_VARIABLE:
        case AST_LOCAL_ARRAY_VARIABLE:
		{
            ego::ParseNode node = this->table->getItem(expr->op1);
            Variable* localVar = method->getLocalVar(node.sVal);
            return localVar->type;
		}
        break;


        case AST_THIS_VARIABLE:
            return cls->getFullName();
        break;

        case AST_STATIC_VARIABLE:
        case AST_SELF_STATIC_VARIABLE: 
        {
            ego::ParseNode clsNode = this->table->getItem(expr->op1);
            ego::ParseNode idNode = this->table->getItem(expr->op2);

            SClass* varCls;
            bool isSelf = false;
			
            if (clsNode.sVal == "self") {
                varCls = cls;
                isSelf = true;
            } else {
                varCls = ClassLoader::getClass(this->cls->resolveClassName(clsNode.sVal));
            }

            ClassVariable* var = varCls->getVariable(idNode.sVal);

            if (!var->isStatic) {
                ego::throwError(string("Class property accessed as Static is not defined as static "
                        + varCls->getFullName() + "::" + var->name
                        + ","
                        + this->getErrorDetail()));
            }

            if (!isSelf && !var->isPublic) {
                ego::throwError(string("Protected/Private static properties cannot be accessed outside of the class "
                        + varCls->getFullName() + "::" + var->name
                        + ","
                        + this->getErrorDetail()));
            }

            return var->type;
        }
        break;

        case AST_STATIC_ARRAY_VARIABLE:
        {
            return this->find_return_type(expr->op1);
        }
        break;


        case AST_OBJECT_PROPERTY_ACCESS:
        {
            string type = this->find_return_type(expr->op1);

            if (is_scalar_type(type) || type == "null" || type == "self") {
                ego::throwError(string("Class property/method accessed with a non-object in the method "
                        + this->getErrorDetail()));
            }

            ParentTypeNode* parentNode = new ParentTypeNode();
            parentNode->type = type;
            parentNode->nodeId = expr->op1;

            return this->find_return_type(expr->op2, parentNode);
        }
        break;


        case AST_OBJECT_PROPERTY_CHAIN: 
        {
            string parentType = this->find_return_type(expr->op1, parent);

            SClass* parentCls = ClassLoader::getClass(this->cls->resolveClassName(parentType));

            ParentTypeNode* parentNode = new ParentTypeNode();
            parentNode->type = parentCls->getFullName();
            parentNode->nodeId = expr->op1;

            return this->find_return_type(expr->op2, parentNode);
        }
        break;

        case AST_OBJECT_ATRIBUTE:
        {
            SClass* parentCls = ClassLoader::getClass(this->cls->resolveClassName(parent->type));

            //ego::ParseNode node = this->table->getItem(expr->op1);
            ClassVariable* var = parentCls->getVariable(expr->sVal);

            if (var->isStatic) {
                ego::throwError(string("Class Static property cannot be accessed with an object "
                        + parentCls->getFullName() + "::" + var->name
                        + ","
                        + this->getErrorDetail()));
            }

            bool isSelf = (parentCls->getFullName() == cls->getFullName());

            if (!isSelf && !var->isPublic) {
                ego::throwError(string("Protected/Private properties cannot be accessed outside of the class "
                        + parentCls->getFullName() + "::" + var->name
                        + ","
                        + this->getErrorDetail()));
            }

            return var->type;
        }
        break;

        case AST_METHOD_CALL:
        {
            SClass* parentCls = ClassLoader::getClass(this->cls->resolveClassName(parent->type));

            ego::ParseNode node = this->table->getItem(expr->op1);
            ClassMethod* pMethod = parentCls->getMethod(node.sVal);

            if (pMethod->isStatic) {
                ego::throwError(string("Class Static method cannot be accessed with an object "
                        + parentCls->getFullName() + "::" + pMethod->name
                        + ","
                        + this->getErrorDetail()));
            }

            bool isSelf = (parentCls->getFullName() == cls->getFullName());

            if (!isSelf && !pMethod->isPublic) {
                ego::throwError(string("Protected/Private properties cannot be accessed outside of the class "
                        + parentCls->getFullName() + "::" + pMethod->name
                        + ","
                        + this->getErrorDetail()));
            }

            // TODO: get actual arguments from Syntax Tree
            ego::ParseNode actualArgNode = this->table->getItem(expr->op2);

            for (int i=0; i < pMethod->getArgCount(); i++) {
                Variable* var = pMethod->getArg(i);
            }

            return pMethod->returnType;
        }
        break;

        case AST_STATIC_PROPERTY_CHAIN:
        {
            string type = this->find_return_type(expr->op1);

            ParentTypeNode* parentNode = new ParentTypeNode();
            parentNode->type = type;
            parentNode->nodeId = expr->op1;

            this->find_return_type(expr->op2, parentNode);
        }
        break;

        case AST_STATIC_METHOD_CALL:
        {
            ego::ParseNode tmpNode = this->table->getItem(expr->op1);
            ego::ParseNode clsNode = this->table->getItem(tmpNode.op1);
            ego::ParseNode idNode = this->table->getItem(tmpNode.op2);


            bool isSelf = false;
            SClass* varCls;
            
            if (clsNode.sVal == "self") {
                varCls = cls;
                isSelf = true;
            } else {
                varCls = ClassLoader::getClass(this->cls->resolveClassName(clsNode.sVal));
            }

            ClassMethod* pMethod = varCls->getMethod(idNode.sVal);

            if (!pMethod->isStatic) {
                ego::throwError(string("Class method accessed as Static is not defined as static "
                        + varCls->getFullName() + "::" + pMethod->name
                        + ", "
                        + this->getErrorDetail()));
            }

            if (!isSelf && !pMethod->isPublic) {
                ego::throwError(string("Protected/Private static method cannot be accessed outside of the class "
                        + varCls->getFullName() + "::" + pMethod->name
                        + ", "
                        + this->getErrorDetail()));
            }

            return pMethod->returnType;
        }
        break;

        case AST_ASSIGNMENT:
        {
            ego::ParseNode tmpNode = this->table->getItem(expr->op);

            string leftType = this->find_return_type(expr->op1);
            string rightType = this->find_return_type(expr->op2);

            string err = string("Invalid assignment, left and right data types does not match '"
                    + leftType + "' = '" + rightType + "' "
                    + this->getErrorDetail());

            if (tmpNode.sVal == "=") {

                if (ClassLoader::isKnownType(leftType) != ClassLoader::isKnownType(rightType) ) {
                    ego::throwError(err);
                } else if (!ClassLoader::isKnownType(leftType)) {
                    SClass* leftCls = ClassLoader::getClass(cls->resolveClassName(leftType));
                    SClass* rightCls = ClassLoader::getClass(cls->resolveClassName(rightType));

                    if (!rightCls->instanceOf(rightCls)) {
                        ego::throwError(err);
                    }

                } else if (leftType != rightType) {
                    ego::throwError(err);
                }

                return leftType;
            } else if (tmpNode.sVal == "+=" || tmpNode.sVal == "-=" || tmpNode.sVal == "*=") {
                if (!is_number_type(leftType) || !is_number_type(rightType)) {
                    ego::throwError(err);
                }

                if (is_float_type(leftType) || is_float_type(rightType)) {
                    return string(DATA_TYPE_FLOAT);
                }

                return string(DATA_TYPE_INT);
            } else if (tmpNode.sVal == "/=") {
                if (!is_number_type(leftType) || !is_number_type(rightType)) {
                    ego::throwError(err);
                }

                return string(DATA_TYPE_FLOAT);
            } else if (tmpNode.sVal == "%=") {
                if (!is_number_type(leftType) || !is_number_type(rightType)) {
                    ego::throwError(err);
                }

                return string(DATA_TYPE_INT);
            } else if (tmpNode.sVal == ".=") {
                if (!is_scalar_type(leftType) || !is_scalar_type(rightType)) {
                    ego::throwError(err);
                }

                return string(DATA_TYPE_STRING);
            } else if (tmpNode.sVal == "&=" || tmpNode.sVal == "|=" || tmpNode.sVal == "<<=" || tmpNode.sVal == ">>=") {
                if (!is_int_type(leftType) || !is_int_type(rightType)) {
                    ego::throwError(err);
                }

                return string(DATA_TYPE_INT);
            }
        }
        break;

		case AST_ARRAY_OF_DATA_WRAPPER:
		{
			string valueType = this->find_return_type(expr->op1, parent);

			return string("array<" + valueType + ">");
		}
		break;

		case AST_SARRAY_OF_DATA_WRAPPER:
		{
			string valueType = this->find_return_type(expr->op1, parent);

			return string("sarray<" + valueType + ">");
		}
		break;

		case AST_SARRAY_MAP:
		{
			string s;
			string keyType = this->find_return_type(expr->op1, parent);

			if (!is_string_type(keyType) || keyType == DATA_VALUE_NULL) {
				ego::throwError(string("array key type must be string, found '" + keyType + "' " + this->getErrorDetail()));
			}

			string rValueType = this->find_return_type(expr->op2, parent);

			return rValueType;
		}
		break;

		case AST_SARRAY_OF_DATA:
		case AST_ARRAY_OF_DATA:
		{
			string s;
			string valueType = this->find_return_type(expr->op1, parent);
			
			if (parent != NULL) {
				if (parent->type != valueType) {
					ego::throwError(string("array value type did not match, expected '" + parent->type + "' but found '" + valueType + "' " + this->getErrorDetail()));
				}
			}
			
			s.append(valueType);

			if (expr->op2 > 0) {
				string rValueType = this->find_return_type(expr->op2, parent);
			
				if (parent != NULL) {
					if (parent->type != rValueType) {
						ego::throwError(string("array value type did not match, expected '" + parent->type + "' but found '" + rValueType + "' " + this->getErrorDetail()));
					}
				}
				
				if (rValueType != valueType) {
					ego::throwError(string("array values cannot be of mixed type  '" + rValueType + "', '" + valueType + "' " + this->getErrorDetail()));
				}

				s.append(",");
				s.append(rValueType);
			}
			
			return s;
		}
		break;
		
		case AST_ARRAY_MULTI:
		break;
		
		case AST_ARRAY_INDEX_EXPR:
		break;
		
    }
}

void SemanticValidator::check_method_main(ClassMethod *method) {
    SClass *cls = this->cls;

    if (!method->isStatic) {
        ego::throwError(string("method main must be static in the class " + cls->name));
    } else if (method->isPrivate || method->isProtected || method->isFuture || method->isAbstract) {
        ego::throwError(string("method main cannot be private/protected/future/abstract in the class " + cls->name));
    }

    if (method->args.size() != 2) {
        ego::throwError(string("method main should be declared with two arguments in the class " + cls->name));
    }

    if (method->getArgCount() != 2) {
        ego::throwError(string("method main should be declared with two arguments in the class " + cls->name));
    }

    Variable* arg1 = method->getArg(0);
    if (arg1->type != "array") {
        ego::throwError(string("method main should accept first argument as array in the class " + cls->name));
    }

    Variable* arg2 = method->getArg(1);
    if (arg2->type != DATA_TYPE_INT) {
        ego::throwError(string("method main should accept second argument as int in the class " + cls->name));
    }
}

/**
 * This will be called on "return statement" from jap.y
 */
void SemanticValidator::check_return_statement(ego::ParseNode* expr, ClassMethod *method) {
    SClass *cls = this->cls;

    if (method->returnsVoid()) {
        if (expr != NULL) {
            ego::throwError(string("method " + method->name + " with void type must not return anything in the class " + cls->name));
        }
    } else {
        if (expr == NULL) {
            ego::throwError(string("method " + method->name + " with return type " + method->returnType + " must return something in the class " + cls->name));
        }

        string actualReturned = this->find_return_type(expr);
        string returnDef = method->getQualifiedType();

        if (!type_matched(actualReturned, returnDef)) {
            ego::throwError(string(
                    "Method return type does not match with actual returning value '"
            		+ returnDef
            		+ "' != '"
            		+ actualReturned
                    + "' in the method '"
                    + method->name
                    + "' in the class " + cls->name
                  ));
        }
    }
}

void SemanticValidator::check_local_variable(Variable* var, bool isObject = false) {
    ClassMethod *method = this->method;

    if ( (isObject || var->value.length() > 0) && this->find_return_type(var->valNode) != var->type) {
        ego::throwError(string(
                "Variable type does not match with the assigned value '"
                + var->name + "' "
                + this->getErrorDetail()
              ));
    }
}


void SemanticValidator::check_assignment(ego::ParseNode* node) {
    this->find_return_type(node);
}

void SemanticValidator::check_local_variable_type(ego::ParseNode* node) {
	// Must not use ? generics on local varaible definition
	
	this->check_local_variable_type_no_generics(node);
	
	this->check_local_variable_type_exists(node);
	
}

void SemanticValidator::check_local_variable_type_no_generics(ego::ParseNode* node) {
	// Must not use ? generics on local varaible definition
	switch (node->astType) {
		case AST_DATA_TYPE_GENERIC_HINT_NAME:
		{
			ego::throwError(string(
                "Variable must not be declared with ? Generics " + this->getErrorDetail()
            ));
		}
		break;
	}
	
	if (node->op1 > 0) {
		ego::ParseNode opNode = this->table->getItem(node->op1);
		this->check_local_variable_type_no_generics(&opNode);
	}
	
	if (node->op2 > 0) {
		ego::ParseNode opNode = this->table->getItem(node->op2);
		this->check_local_variable_type_no_generics(&opNode);
	}
}

void SemanticValidator::check_local_variable_type_exists(ego::ParseNode* node) {
	// Must not use ? generics on local varaible definition
	if (node->astType > 0) {
		if (!ClassLoader::hasType(node->sVal)) {
			ego::throwError(string(
                "No type exist with name '" + node->sVal + "' " + this->getErrorDetail()
            ));
		}
	}
	
	if (node->op1 > 0) {
		ego::ParseNode opNode = this->table->getItem(node->op1);
		this->check_local_variable_type_exists(&opNode);
	}
	
	if (node->op2 > 0) {
		ego::ParseNode opNode = this->table->getItem(node->op2);
		this->check_local_variable_type_exists(&opNode);
	}
}

void SemanticValidator::validate_data_type_name(ego::ParseNode* node, bool isMethod=false) {
	SClass *cls = this->cls;

	switch (node->astType) {
		case AST_DATA_TYPE_GENERIC_HINT_NAME:
		{
			if (!cls->isValidGenericType(node->sVal)) {
				ego::throwError(string(
					"There is no generic type '" + node->sVal + "' defined in this class. " + this->getErrorDetail()
				));
			}
		}
		break;

		case AST_DATA_TYPE_VOID:
		{
			if (!isMethod) {
				ego::throwError(string(
					"void is not a valid data type of a variable '" + node->sVal + "' " + this->getErrorDetail()
				));
			}
		}
		break;

		case AST_DATA_TYPE_ARRAY:
		case AST_DATA_TYPE_SARRAY:
		{
			YYSTYPE itemType = this->table->getItem(node->op1);

			this->validate_data_type_name(&itemType, isMethod);
		}
		break;

		case AST_DATA_TYPE_OBJECT:
		{
			if (!ClassLoader::hasType(node->sVal)) {
				ego::throwError(string(
					"unknown data type '" + node->sVal + "' " + this->getErrorDetail()
				));
			}
		}
		break;

		case AST_DATA_TYPE_INT:
		case AST_DATA_TYPE_FLOAT:
		case AST_DATA_TYPE_BOOL:
		case AST_DATA_TYPE_STRING:
		{
			if (!ClassLoader::hasType(node->sVal)) {
				ego::throwError(string(
					"unknown data type '" + node->sVal + "' " + this->getErrorDetail()
				));
			}
		}
		break;

		case AST_DATA_TYPE_OBJECT_GENERICS:
		{
			YYSTYPE clsType = this->table->getItem(node->op1);
			YYSTYPE subType = this->table->getItem(node->op2);

			if (!ClassLoader::hasType(clsType.sVal)) {
				ego::throwError(string(
					"unknown data type '" + node->sVal + "' " + this->getErrorDetail()
				));
			}

			this->validate_data_type_name(&subType, isMethod);
		}
		break;

		case AST_DATA_TYPE_ACTUAL_HINT_LIST:
		case AST_DATA_TYPE_FORMAL_HINT_LIST:
		{
			YYSTYPE op1Type = this->table->getItem(node->op1);

			this->validate_data_type_name(&op1Type, isMethod);

			if (node->op2 > 0) {
				YYSTYPE op2Type = this->table->getItem(node->op2);

				this->validate_data_type_name(&op2Type, isMethod);
			}
		}
		break;

		default:
		{
			ego::throwError(string("Unknown actual type '" + node->sVal + "' "));
		}
		break;
	}

}

/**
 *  check Semantics
 *
 */
void SemanticValidator::checkSemantics(SClass *cls) {
    this->cls = cls;

    if (this->cls->isInterface) {
    	this->checkInterface();
    } else {
    	this->checkClass();
    }

    // check class variables
    this->checkClassVariables();

    // check class method signatures
    this->checkClassMethods();

    // check class method body. method->body;
}

/**
 * Check interface definition
 */
void SemanticValidator::checkInterface() {
/*
TODO:
- interfaces
    - Check they have same method
    - Check normal class has implemented them actually
*/
    if (this->cls->isAbstract) {
		ego::throwError(string(
			"Interface cannot be declared with abstract '"
			+ this->cls->name
			+ "' "
		));
    }

    if (this->cls->isFinal) {
		ego::throwError(string(
			"Interface cannot be declared with final '"
			+ this->cls->name
			+ "' "
		));
    }

    for (int i = 0; i < this->cls->methodList.size(); i++) {
    	ClassMethod* method = this->cls->getMethod(this->cls->methodList[i]);

        if (method->isFinal) {
    		ego::throwError(string(
    			"Methods of a Interface cannot be declared with final '"
    			+ method->name
    			+ "' in the interface '"
    			+ this->cls->name
    			+ "' "
    		));
        }

        if (method->isStatic) {
			ego::throwError(string(
				"Methods of a Interface cannot be declared with static/future '"
				+ method->name
				+ "' in the interface '"
				+ this->cls->name
				+ "' "
			));
		}

        if (!method->isPublic) {
			ego::throwError(string(
				"Methods of a Interface must be public '"
				+ method->name
				+ "' in the interface '"
				+ this->cls->name
				+ "' "
			));
		}
    }

    this->cls->createInheritance();

    if (this->cls->hasParent) {
    }


}

/**
 * Check class definition
 */
void SemanticValidator::checkClass() {
/*
TODO:
- Check that the "package pkg",  "pkg"  is not imported in the same file
- Classes must not inherited itself circularly.
- final class check
    - Cannot be inherited
- abstract class check
    - at least one method must be abstract OR must be inherited from another abstract  OR   has interfaces but has not implemented at least one function of them
- interfaces
    - Check they have same method
    - Check normal class has implemented them actually
*/
    this->cls->createInheritance();

    if (this->cls->hasParent) {
    	if (this->cls->parent->isFinal) {
    		ego::throwError(string(
    			"Could not inherit from a final class '"
				+ this->cls->parent->name
				+ "' for the class "
				+ this->cls->name
			));
    	}
    }

    if (this->cls->isAbstract) {
    	//
    }
}

/**
 * check Types
 *
 */
void SemanticValidator::checkTypes(SClass *cls) {
    this->cls = cls;
}

/**
 * Method
 *
 */
void SemanticValidator::checkClassVariables() {
	SClass *cls = this->cls;

	for (int i = 0; i < cls->variableList.size(); i++) {
		this->checkClassVariable(cls->getVariable(cls->variableList[i]));
	}
}

/**
 * Method
 *
 */
void SemanticValidator::checkClassVariable(ClassVariable* var) {
	SClass *cls = this->cls;

	string typeStr = var->qualifiedType.getQualified<ego::TypeGenericGroup>(&cls->typeTable);

	if (typeStr == DATA_TYPE_VOID || typeStr == DATA_VALUE_NULL) {
		ego::throwError(string("variables cannot be defined with void/null type '"
							+ typeStr
							+ ", for variable '"
							+ var->name
							+ "' in the class "
							+ cls->name
						));
	}

	if (!ClassLoader::hasType(typeStr)) {
		if (!cls->isValidGenericType(typeStr)) {
			ego::throwError(string("invalid type '"
					+ typeStr
					+ ", for variable '"
					+ var->name
					+ "' in the class "
					+ cls->name
				));
		}
	}

	if (var->value.length() > 0 && this->find_return_type(var->valNode) != typeStr) {
		ego::throwError(string("Class attribute data type does not match with the value '"
				+ var->name
				+ "' in the class "
				+ cls->name
			));
	}
}

/**
 * Method
 *
 */
void SemanticValidator::checkClassMethods() {
	SClass *cls = this->cls;

	for (int i = 0; i < cls->methodList.size(); i++) {
		this->method = cls->getMethod(cls->methodList[i]);
		this->checkClassMethod(this->method);
		this->method = NULL;
	}
}

/**
 * Method
 *
 */
void SemanticValidator::checkClassMethod(ClassMethod* method) {
	SClass *cls = this->cls;

	if (method->caseLessName == "main") {
		this->check_method_main(method);
	}

	if (method->caseLessName == cls->caseLessName) {
        ego::throwError(string("Name of the method '" + method->name + "' must not be as same as class name '" + cls->name + "'"));
	}

	if (method->isFuture) {
		// check all arguments should be of scalar type
		for (int i=0; i < method->getArgCount(); i++) {
			Variable* arg = method->getArg(i);

			if (!ego::is_scalar_type(arg->type)) {
				ego::throwError(string("future method " + method->name + " must not accept arguments other than scalar type in the class " + cls->name));
			}
		}
	}

	string typeStr = method->qualifiedType.getQualified<ego::TypeGenericGroup>(&cls->typeTable);

	if (typeStr == DATA_VALUE_NULL) {
		ego::throwError(string("return type of a method cannot be null type '"
							+ typeStr
							+ ", for method '"
							+ method->name
							+ "' in the class "
							+ cls->name
						));
	}

	if (!ClassLoader::hasType(typeStr)) {
		if (!cls->isValidGenericType(typeStr)) {
			ego::throwError(string("invalid type '"
					+ typeStr
					+ ", for method '"
					+ method->name
					+ "' in the class "
					+ cls->name
				));
		}
	}

	// TODO: Check return type also
	// Traverse the body and make sure that
	// 1. it has return statement
	// 2. Type should match
}

/**
 * Method
 *
 */
void SemanticValidator::checkClassMethodBody(ClassMethod* method) {
	this->processNode(&method->body, method);
}

/**
 * check semantics of a node
 */
void SemanticValidator::processNode(ego::ParseNode* node, ClassMethod* method) {

	switch (node->astType) {
		case AST_RETURN_STMT:
		{
			this->check_return_statement(node, method);
		}
		break;

		case AST_NEW_OBJECT:
		{
			ego::ParseNode newNode = this->table->getItem(node->op1);
			string clsName = newNode.sVal;
			if (newNode.op1) {
				ego::ParseNode clsNameNode = this->table->getItem(node->op1);
				clsName = clsNameNode.sVal;
			}

			ego::SClass* objCls = ClassLoader::getClass(this->cls->resolveClassName(clsName));

			if (objCls->isInterface) {
				ego::throwError("Interface cannot be used to create new object.");
			}
			if (objCls->isAbstract) {
				ego::throwError("Abstract class cannot be used to create new object.");
			}
		}
		break;

		case AST_ASSIGNMENT:
		{
			this->check_assignment(node);
		}
		break;
	}

	// recursively check the tree
	if (node->op1) {
		ego::ParseNode newNode = this->table->getItem(node->op1);
		this->processNode(&newNode, method);
	}

	if (node->op) {
		ego::ParseNode newNode = this->table->getItem(node->op);
		this->processNode(&newNode, method);
	}

	if (node->op2) {
		ego::ParseNode newNode = this->table->getItem(node->op2);
		this->processNode(&newNode, method);
	}
}

/**
 * Method
 *
 */
void SemanticValidator::checkLocalVariables(ClassMethod* method) {
	SClass *cls = this->cls;

	for (int i = 0; i < method->localVarList.size(); i++) {
		this->checkLocalVariable(method, method->getLocalVar(method->localVarList[i]));
	}
}

/**
 * Method
 *
 */
void SemanticValidator::checkLocalVariable(ClassMethod* method, ego::Variable* var) {
	SClass *cls = this->cls;

	string typeStr = var->qualifiedType.getQualified<ego::TypeGenericGroup>(&method->typeTable);

	if (typeStr == DATA_TYPE_VOID || typeStr == DATA_VALUE_NULL) {
		ego::throwError(string("variables cannot be defined with void/null type '"
							+ typeStr
							+ ", for variable '"
							+ var->name
							+ "' in the class "
							+ cls->name
						));
	}

	if (!ClassLoader::hasType(typeStr)) {
		if (!cls->isValidGenericType(typeStr)) {
			ego::throwError(string("invalid type '"
					+ typeStr
					+ ", for variable '"
					+ var->name
					+ "' in the class "
					+ cls->name
				));
		}
	}

	if (var->value.length() > 0 && this->find_return_type(var->valNode) != typeStr) {
		ego::throwError(string("Class attribute data type does not match with the value '"
				+ var->name
				+ "' in the class "
				+ cls->name
			));
	}
}

// get actual argument types by argument list NODE
void SemanticValidator::_getActualArgTypes(ego::ParseNode* node, vector<string>& list) {
    if (node->astType == AST_ACTUAL_ARG) {
    
        list.push_back(this->find_return_type(node->op1, NULL));
        
    } else if (node->astType == AST_ACTUAL_ARG_LIST) {
    
        ego::ParseNode node1 = this->table->getItem(node->op1);
        this->_getActualArgTypes(&node1, list);
        
        ego::ParseNode node2 = this->table->getItem(node->op2);
        this->_getActualArgTypes(&node2, list);
    }
}

// get actual argument types by argument list NODE
vector<string> SemanticValidator::getActualArgTypes(ego::ParseNode* node) {
    vector<string> args;
    
    if (node->astType == AST_ACTUAL_ARGS) {
        ego::ParseNode argsNode = this->table->getItem(node->op1);
        
        _getActualArgTypes(&argsNode, args);
    }
    
    return args;
}

// check if two types are compatible?
bool SemanticValidator::isTypeCompatibe(string a, string b) {
    if (is_scalar_type(a) && is_scalar_type(b)) {
        return a == b;
    } else if (!is_scalar_type(a) && !is_scalar_type(b)) {
    } else {
        return false;
    }
}


// namespace end
}
