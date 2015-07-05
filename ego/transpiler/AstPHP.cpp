/*
 * AstPHP.cpp
 *
 *  Created on: Feb 8, 2015
 *      Author: rnarmala
 */

#include <ego/transpiler/AstPHP.hpp>

namespace ego {

typedef yy::parser::token tkType;

string AstPHP::EOL = "\n";
string AstPHP::TAB = "    ";
string AstPHP::EOL_CHAR = ";";

AstPHP::AstPHP() {
	this->extension = "php";
	this->tab = 0;
	this->nsEnabled = false;
}

AstPHP::AstPHP(ego::FileParser *kicker) {
	this->fileParser = kicker;
	this->extension = "php";
	this->tab = 0;
	this->nsEnabled = false;
}

AstPHP::~AstPHP() {
	// TODO Auto-generated destructor stub
}

void AstPHP::add(string s) {
	this->output.append(s);
}
void AstPHP::add(const char *s) {
	this->output.append(s);
}

void AstPHP::addEndStmt() {
	this->add(string(AstPHP::EOL_CHAR + AstPHP::EOL));
}
void AstPHP::addEndLine() {
	this->add(AstPHP::EOL);
}
void AstPHP::addTab() {
	for (int i = 0; i < this->tab; i++) {
		this->add(AstPHP::TAB);
	}
}

string AstPHP::getTab() {
	string s;
	for (int i = 0; i < this->tab; i++) {
		s.append(AstPHP::TAB);
	}

	return s;
}

void AstPHP::incrTab() {
	this->tab++;
}
void AstPHP::decrTab() {
	if (this->tab != 0) {
		this->tab--;
	}
}

void AstPHP::astPackage() {
	if (this->nsEnabled && this->fileParser->pkg.length() > 0) {
		this->add("namespace \\");
		string s = this->fileParser->pkg;
		std::replace( s.begin(), s.end(), '.', '\\');
		this->add(s);
		this->addEndStmt();
	}
}

void AstPHP::astImports() {
	for ( int i = 0; i < this->fileParser->imports.size(); i++) {
	//auto it = this->fileParser->imports.begin(); it != this->fileParser->imports.end(); ++it ) {
		string s = this->fileParser->imports.key(i);

		std::replace(s.begin(), s.end(), '.', DIR_DIVIDER);

	    //std::cout << " " << it->first << ":" << it->second;
		if (this->fileParser->imports.at(i) == 1) {
			this->add("_import_package('");
			this->add(s);
			this->add("')");
		} else {
			this->add("require_once('");
			this->add(s);
			this->add("')");
		}
		this->addEndStmt();
	}
}

void AstPHP::astClasses() {

	for (int i = 0; i < this->fileParser->classList.size(); i++) {
		this->curCls = this->fileParser->classList[i];
		this->astClass(this->curCls);
	}
}


void AstPHP::astClass(SClass* cls) {

	//cout << "hasParent: " << cls->hasParent << endl;

	if (cls->isFinal) {
		this->add("final ");
	}

	if (cls->isAbstract) {
		this->add("abstract ");
	}

	if (cls->isInterface) {
		this->add("interface ");
	} else {
		this->add("class ");
	}

	this->add(cls->name);
	this->add(" ");

	if (cls->hasParent) {
		this->add("extends ");
		// TODO: full qualified type
		this->add(cls->parentType.name);
		this->add(" ");
	}

	if (cls->isImplements) {
		this->add("implements ");
		for (int i=0; i < cls->implements.size(); i++) {
			//this->add(cls->implements);
		}

		this->add(" ");
	}

	this->add("{");
	this->add(AstPHP::EOL);

	this->incrTab();

	this->_processClassVariables(cls);

	this->_processClassMethods(cls);

	this->decrTab();

	this->add(AstPHP::EOL);
	this->add("}");
	this->add(AstPHP::EOL);
}

void AstPHP::_processClassVariables(SClass* cls) {
	std::shared_ptr<ego::ClassVariable> obj;
	string name;
	ClassVariable* cVar;

	for (int i = 0; i < cls->variableList.size(); i++) {
	//for ( auto it = cls->variables.begin(); it != cls->variables.end(); ++it ) {
		//name = it->first;

		name = cls->variableList[i];

		//cout << "X name: " << name << endl;
		obj = cls->variables.at(name);
		cVar = (ClassVariable*) obj.get();
		//cout << "X 1 - value: " << cVar->valNode.sType << ": " << cVar->valNode.sVal << endl;

		//cout << "X _processClassVariable: " << name << endl;
		this->_processClassVariable(cVar, cls);
	}
}

void AstPHP::_processClassMethods(SClass* cls) {
	string name;
	std::shared_ptr<ego::ClassMethod> obj;
	ClassMethod* method;

	for (int i = 0; i < cls->methodList.size(); i++) {
	//for ( auto it = cls->methods.begin(); it != cls->methods.end(); ++it ) {
		//name = it->first;

		name = cls->methodList[i];

		//it->second;
		obj = cls->methods.at(name);
		method = (ClassMethod*) obj.get();

		this->_processClassMethod(method, cls);
	}
}

void AstPHP::_processClassVariable(ClassVariable* var, SClass* cls) {
	//cout << "X in processClassVariable"<< endl;
	this->addTab();

	//cout << "X isPublic: " << var->isPublic << endl;



	if (var->isConst) {
		this->add("const ");
	} else {
		if (var->isPublic) {
			this->add("public ");
		} else if (var->isProtected) {
			this->add("protected ");
		} else if (var->isPrivate) {
			this->add("private ");
		}

		if (var->isStatic) {
			this->add("static ");
		}

		this->add("$");
	}

	// ignore data type
	//this->add(var->type);

	this->add(var->name);

	//cout << "X var name: " << var->name << endl;
	if (var->value.length() > 0) {
		this->add(" = ");
		//cout << "X value: " << var->valNode.sType << ": " << var->valNode.sVal << endl;
		this->add(this->astNode(var->valNode, NULL));
	}
	//cout << "X var name end: " << var->name << endl;

	this->addEndStmt();

}

void AstPHP::_processClassMethod(ClassMethod* method, SClass* cls) {
    this->curMethod = method;
    
	this->addTab();

	if (method->isPublic) {
		this->add("public ");
	} else if (method->isProtected) {
		this->add("protected ");
	} else if (method->isPrivate) {
		this->add("private ");
	}

	if (method->isStatic || method->isFuture) {
		this->add("static ");
	}

	if (method->isFinal) {
		this->add("final ");
	}

	if (method->isAbstract) {
		this->add("abstract ");
	}

	// ignore data type
	//this->add(method->returnType);

	// ignore exceptions
	//if(method->hasExceptions);
	//this->add(method->exceptions);

	this->add("function ");
	this->add(method->name);
	this->add("(");

	for (int i = 0; i < method->args.size(); i++) {
		std::shared_ptr<ego::Variable> obj = (std::shared_ptr<ego::Variable>) method->args.at(i);
		Variable* arg = obj.get();

		if (i > 0) {
			this->add(", ");
		}

		// ignore Variable type
		// this->add(arg->type);

		this->add("$");
		this->add(arg->name);

		if (arg->value.length() > 0) {
			this->add(" = ");
			this->add(this->astNode(arg->valNode, NULL));
		}
	}


	this->add(")");

	if (method->isAbstract || cls->isInterface) {
		this->add(";");
		this->addEndLine();
	} else {
		this->add(" {");
		this->addEndLine();

		this->incrTab();

		this->add(this->astNode(&method->body, NULL));

		this->decrTab();

		this->addTab();
		this->add("}");
		this->addEndLine();
	}

}


void AstPHP::translate() {
	this->add("<?php");
	this->add(AstPHP::EOL);

	this->astPackage();
	this->astImports();
	this->astClasses();

	ofstream myfile;
	myfile.open (string(this->fileParser->pkgTargetBase + DIR_DIVIDER + this->fileParser->filePath.stem().string() + "." + this->extension));
	if (myfile.is_open()) {
		myfile << this->output;
		myfile.close();
	} else {
		cout << "Unable to open file";
	}

}

string AstPHP::astNode(ego::ParseNode p, AstProcessObject* parent = NULL) {
	//cout << "Pass by value in astNode" << endl;
	return this->astNode(&p, parent);
}

string AstPHP::astNode(BIGINT p, AstProcessObject* parent = NULL) {
	//cout << "Pass by value in astNode" << endl;
	ego::ParseNode node = this->fileParser->table->getItem(p);
	return this->astNode(&node, parent);
}

ego::ParseNode AstPHP::_getNodeObject(BIGINT p) {
    return this->fileParser->table->getItem(p);
}

string AstPHP::astNode(ego::ParseNode *p, AstProcessObject* parent = NULL) {
	string s, tmp;

	if (p == NULL) {
		cout << "astNode is null\n";
		return s;
	}
	//cout << "something astNode\n";
	//cout << "Node: " << p->astType << "\n";
	//cout << "Node Sval: " << p->sVal << endl;
	//cout << "something astNode right\n";

	switch (p->astType) {

	case AST_STATEMENTS:

		//cout << "astNode.op1: " << p->op1->astType << endl;
		//cout << "astNode.op2: " << p->op2->astType << endl;

		if (p->op1) {
			s.append(this->astNode(p->op1));
			s.append(AstPHP::EOL);
		}

		if (p->op2) {
			s.append(this->astNode(p->op2));
			s.append(AstPHP::EOL);
		}

		return s;
		break;

	case AST_VAR_DEFINE_STMT:
	case AST_VAR_DEFINE_EXPR:
		s.append(this->getTab());

		// PHP does not need a DataType hint
		//s.append(this->astNode(p->op1));
		
		s.append(this->astNode(p->op2));

		if (p->astType != AST_VAR_DEFINE_EXPR) {
			s.append(AstPHP::EOL_CHAR);
		}

		return s;
		break;

	case AST_VAR_DEFINE:
		tmp = this->astNode(p->op2);
		
		if (tmp.length() > 0) {
			s.append(this->astNode(p->op1));
			s.append(tmp);
		}
		
		return s;
		break;

	case AST_VAR_DEFINE_MULTIPLE:
		s.append(this->astNode(p->op1));
		
		s.append(AstPHP::EOL_CHAR);
		s.append(AstPHP::EOL);
		
        s.append(this->getTab());
		s.append(this->astNode(p->op2));
		
		return s;
		break;
		
	case AST_VAR_DEFINITION:
		//s.append(this->astNode(p->op1));
		//s.append(" ");
		s.append("$");
		s.append(this->astNode(p->op2));
		
		return s;
		break;

	case AST_RIGHT_ASSIGNMENT:
		//operator
		s.append(this->astNode(p->op));

		s.append(" ");

		//cout << "S: " << s << endl;
		// expression
		s.append(this->astNode(p->op1));

		return s;
		break;

	case AST_IF_STMT:
	case AST_ELSE_IF_STMT:
	case AST_ELSE_STMT:
		s = "";

		if (p->astType == AST_ELSE_IF_STMT) {
			s.append("else if (" + this->astNode(p->op1) + ")");
		} else if (p->astType == AST_ELSE_STMT) {
			s.append("else");
		} else {
            s = this->getTab();
			s.append("if (" + this->astNode(p->op1) + ")");
		}

		s.append(" {");
		s.append(AstPHP::EOL );

		this->incrTab();

		s.append(this->astNode(p->op2));

		this->decrTab();

		s.append(this->getTab());
		s.append("} ");
		//s.append(AstPHP::EOL);

		return s;
		break;

	case AST_IF_ELSE_IF_STMT:
		s = this->astNode(p->op1);

		s.append(this->astNode(p->op2));

		return s;
		break;

	case AST_IF_ELSE_IF_ELSE_STMT:
		s =this->astNode(p->op1);

		s.append(this->astNode(p->op2));

		s.append(this->astNode(p->op));

		return s;
		break;

	case AST_WHILE_STMT:
	case AST_DO_WHILE_STMT:
		s =this->getTab();

		if (p->astType == AST_WHILE_STMT) {
			s.append("while (" + this->astNode(p->op1) + ")");
		} else {
			s.append("do ");
		}


		s.append(" {" + AstPHP::EOL );

		this->incrTab();

		s.append(this->astNode(p->op2));

		this->decrTab();

		s.append(this->getTab());
		s.append("} ");

		if (p->astType == AST_DO_WHILE_STMT) {
			s.append("while (" + this->astNode(p->op1) + ") " + AstPHP::EOL_CHAR);
		}

		//s.append(AstPHP::EOL);

		return s;

		break;

	case AST_SWITCH_STMT:
		s =this->getTab();
		s.append("switch (");
		s.append(this->astNode(p->op1) + ") {");
		s.append(AstPHP::EOL);

		this->incrTab();

		s.append(this->astNode(p->op2));

		this->decrTab();

		s.append(this->getTab());
		s.append("}");
		//s.append(AstPHP::EOL);

		return s;
		break;

	case AST_CASE_STMT:
		s = this->getTab();
		s.append("case ");
		s.append(this->astNode(p->op1) + ":");
		s.append(AstPHP::EOL);
		return s;
		break;

	case AST_MULTI_CASE_STMT:
	case AST_MULTI_CASE_STMT_WITH_BODY:
		s =this->getTab();
		s.append(this->astNode(p->op1));
		s.append(this->astNode(p->op2));
		s.append(AstPHP::EOL);
		return s;
		break;

	case AST_CASE_STMT_WITH_BODY:
		s =this->getTab();
		s.append(this->astNode(p->op1));

		this->incrTab();
		s.append(this->astNode(p->op2));
		this->decrTab();

		s.append(this->astNode(p->op));
		s.append(AstPHP::EOL);
		return s;
		break;

	case AST_DEFAULT_STMT:
		s =this->getTab();
		s.append("default:");
		s.append(AstPHP::EOL);
		return s;
		break;

	case AST_BREAK_STMT:
		s =this->getTab();
		s.append("break" + AstPHP::EOL_CHAR);
		return s;
		break;

	case AST_CONTINUE_STMT:
		s =this->getTab();
		s.append("continue" + AstPHP::EOL_CHAR);
		return s;
		break;

	case AST_TRY_CATCH_STMT:
		s =this->getTab();

		s.append("try {");
		s.append(AstPHP::EOL);
		this->incrTab();
		s.append(this->astNode(p->op1));
		this->decrTab();
		s.append("} ");

		s.append(this->astNode(p->op2));

		s.append(this->astNode(p->op));

		return s;
		break;

	case AST_MULTI_CATCH_STMT:
		s =this->getTab();
		s.append(this->astNode(p->op1));
		s.append(this->astNode(p->op2));
		s.append(AstPHP::EOL);
		return s;
		break;

	case AST_CATCH_STMT:
		s =this->getTab();

		s.append("catch (");
		s.append(this->astNode(p->op1));
		s.append(" $" + this->astNode(p->op));
		s.append(") {");

		this->incrTab();
		s.append(this->astNode(p->op2));
		this->decrTab();

		s.append("} ");

		return s;
		break;

	case AST_FINALLY_STMT:
		s =this->getTab();

		s.append("finally {");
		s.append(AstPHP::EOL);
		this->incrTab();
		s.append(this->astNode(p->op1));
		this->decrTab();
		s.append("} ");

		return s;
		break;

	case AST_THROW_STMT:
		s =this->getTab();

		s.append("throw ");
		s.append(this->astNode(p->op1));

		s.append(AstPHP::EOL_CHAR);
		//s.append(AstPHP::EOL);

		return s;
		break;

	case AST_ASSIGNMENT_STMT:
		s =this->getTab();

		s.append(this->astNode(p->op1));

		s.append(this->astNode(p->op));

		s.append(this->astNode(p->op2));

		s.append(AstPHP::EOL_CHAR);
		//s.append(AstPHP::EOL);

		return s;
		break;

	case AST_ECHO_STMT:
		s =this->getTab();

		s.append("echo ");
		s.append(this->astNode(p->op1));

		s.append(AstPHP::EOL_CHAR);
		//s.append(AstPHP::EOL);

		return s;
		break;

	case AST_RETURN_STMT:
		s =this->getTab();

		s.append("return ");
		s.append(this->astNode(p->op1));

		s.append(AstPHP::EOL_CHAR);
		//s.append(AstPHP::EOL);

		return s;
		break;

	case AST_EXPR_STMT:
		s =this->getTab();

		s.append(this->astNode(p->op1));

		s.append(AstPHP::EOL_CHAR);
		s.append(AstPHP::EOL);

		return s;
		break;

	case AST_EMPTY_STMT:
		return string("");
		break;

	case AST_ADD:
	case AST_SUB:
	case AST_MUL:
	case AST_DIV:
	case AST_MOD:
	case AST_CONCAT:
		s.append(this->astNode(p->op1));

		s.append(this->astNode(p->op));

		s.append(this->astNode(p->op2));

		return s;
		break;

	case AST_GT:
	case AST_LT:
	case AST_LT_OR_EQ:
	case AST_GT_OR_EQ:
	case AST_EQUAL:
	case AST_NOT_EQUAL:
	case AST_IDENTICAL:
	case AST_NOT_IDENTICAL:
		s.append(this->astNode(p->op1));

		s.append(this->astNode(p->op));

		s.append(this->astNode(p->op2));

		return s;
		break;

	case AST_AND_AND:
	case AST_OR_OR:
		s.append(this->astNode(p->op1));

		s.append(this->astNode(p->op));

		s.append(this->astNode(p->op2));

		return s;
		break;

	case AST_AND:
	case AST_OR:
	case AST_XOR:
	case AST_SHIFT_LEFT:
	case AST_SHIFT_RIGHT:
		s.append(this->astNode(p->op1));

		s.append(this->astNode(p->op));

		s.append(this->astNode(p->op2));

		return s;
		break;

	case AST_NEGATION:
		s = "";

		s.append(this->astNode(p->op));

		s.append(this->astNode(p->op1));

		return s;
		break;

	case AST_ARRAY_MULTI:
		s = "";

		s.append(this->astNode(p->op1));

		s.append(this->astNode(p->op2));

		//cout << "AST_ARRAY_MULTI: " << s << "\n";
		return s;
		break;

	case AST_ARRAY_INDEX_EXPR:
		s = "";

		s.append("[" + this->astNode(p->op1) + "]");

		//cout << "AST_ARRAY_INDEX_EXPR: " << s << "\n";
		return s;
		break;

	case AST_ARRAY_INDEX_EMPTY:
		s = "";

		s.append("[]");

		return s;
		break;

	case AST_LOCAL_VARIABLE:
		s = "";

		s.append("$");
		s.append(this->astNode(p->op1));

		return s;
		break;

	case AST_THIS_VARIABLE:
		s = "$";

		s.append(this->astNode(p->op1));

		return s;
		break;

	case AST_STATIC_VARIABLE:
    case AST_SELF_STATIC_VARIABLE:
    {
		s = "";

        ego::ParseNode _node = _getNodeObject(p->op1);
        
        if (parent) {
            if (p->astType == AST_SELF_STATIC_VARIABLE) {
                parent->callingCls = curCls;
            } else {
                parent->callingCls = ClassLoader::getClass(this->curCls->resolveClassName(_node.sVal));
            }
        }

        

        ego::ParseNode _node2 = _getNodeObject(p->op2);
        
        bool flag = false;
        if (parent && parent->isCallingMethod) {
            parent->callingMethod = parent->callingCls->getMethod(toLower(_node2.sVal));
            
            if (parent->callingMethod->isFuture) {
                s.append("FutureClient::functionJob(\"");
                s.append(parent->callingCls->getFullName());
                s.append("\", \"");
                s.append(_node2.sVal);
                s.append("\"");
                
                flag = true;
            }
        } 
        
        if (!flag) {
            s.append(this->astNode(&_node, parent));
            s.append(this->astNode(p->op, parent));
            s.append(this->astNode(&_node2, parent));
        }
        
		return s;
    }
	break;

    
	case AST_OBJECT_PROPERTY_ACCESS:
	case AST_OBJECT_PROPERTY_CHAIN:
	case AST_STATIC_PROPERTY_CHAIN:
	case AST_STATIC_ARRAY_VARIABLE:
		s = "";

		s.append(this->astNode(p->op1));

		s.append(this->astNode(p->op2));

		return s;
		break;

	case AST_LOCAL_ARRAY_VARIABLE:
		s = "";

		s.append("$");
		s.append(this->astNode(p->op1));

		s.append(this->astNode(p->op2));

		return s;
		break;

	case AST_METHOD_CALL:
		s = "";

        s.append("->");
        
		s.append(this->astNode(p->op1));

		s.append(this->astNode(p->op2));

		return s;
		break;

    case AST_STATIC_METHOD_CALL:
    {
		s = "";
        
        AstProcessObject process;
        process.isCallingMethod = true;
        
        s.append(this->astNode(p->op1, &process));

        s.append(this->astNode(p->op2, &process));
        
		return s;
    }
	break;
        
	case AST_OBJECT_ATRIBUTE:
		s = "";

		s.append("->");

		//s.append(this->astNode(p->op1));
        s.append(p->sVal);

		return s;
		break;

	case AST_EMPTY_ARGS:
		s = "";
        
        if (parent && parent->callingMethod && parent->callingMethod->isFuture) {
            // this is a future method
            // no need to open parenthesis
            s.append(")");
        } else {
            s.append("()");
        }

		return s;
		break;

	case AST_ACTUAL_ARGS:
    {
		s = "";

        if (parent && parent->callingMethod && parent->callingMethod->isFuture) {
            // this is a future method
            // no need to open parenthesis
            s.append(", ");
        } else {
            s.append("(");
        }
        
		s.append(this->astNode(p->op1, parent));
        
        s.append(")");

		return s;
    }
	break;
        
	case AST_ACTUAL_ARG:
		s = "";

		s.append(this->astNode(p->op1));

		return s;
		break;

	case AST_ACTUAL_ARG_LIST:
		s = "";

		s.append(this->astNode(p->op1));

		s.append(", ");

		s.append(this->astNode(p->op2));

		return s;
		break;

	case AST_NEW_OBJECT:
		s = "";

		s.append("new ");

		s.append(this->astNode(p->op1));

		//s.append("(");
		s.append(this->astNode(p->op2));
		//s.append(")");

		return s;
		break;

	case AST_INCR_DECR:
		//s = this->getTab();

		s.append(this->astNode(p->op1));

		s.append(this->astNode(p->op));

		//s.append(AstPHP::EOL_CHAR);
		//s.append(AstPHP::EOL);

		return s;
		break;

	case AST_INTEGER:
	case AST_DOUBLE:
	case AST_BOOLEAN:
		return p->sVal;
		break;

	case AST_STRING:
		return string("\"" + escape_string(p->sVal) + "\"");
		break;

	case AST_NULL:
		return string("NULL");
		break;

	case AST_QUALYFIED_NAME:
		return p->sVal;
		break;

	case AST_METHOD_NO_BODY:
		return string(";");
		break;

	default:
		return this->astLexNode(p);
		break;

	}
}

string AstPHP::astLexNode(ego::ParseNode *p) {

	if (p == NULL) {
		return string("");
	}

	//cout << "something astLexNode\n";
	//cout << "Lex Node: " << p->sType << ": " << p->sVal << endl;

	switch(p->sType) {
		case tkType::T_ID:
			return p->sVal;
			break;

		case tkType::T_PAAMAYIM_NEKUDOTAYIM:
			return p->sVal;
			break;

		case tkType::T_SELF:
			return p->sVal;
			break;

		case tkType::T_PARENT:
			return p->sVal;
			break;

		case tkType::T_THIS:
			return p->sVal;
			break;

		case 0:
		case tkType::T_EMPTY:
			return string("");
			break;

		default:
			return p->sVal;
			break;
	}
}

string AstPHP::astLexNode(ego::ParseNode p) {
	return this->astLexNode(&p);
}


}
