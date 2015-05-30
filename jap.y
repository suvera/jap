%{
#include <math.h>
#include <iostream>
#include <string>
using namespace std;
#include "jap.tab.hh"
typedef yy::parser::semantic_type semtcNode;
#include <ego/ParserHelper.hpp>
%}

%require  "2.7"
%debug
//%pure-parser
%expect 0
%locations




%token END 0 "end of file"

%token T_PACKAGE       "package (T_PACKAGE)"
%token T_IMPORT      "import (T_IMPORT)"

%left ','
%right T_PRINT
%token T_PRINT        "print (T_PRINT)"
%token T_ECHO       "echo (T_ECHO)"

%left '=' T_PLUS_EQUAL T_MINUS_EQUAL T_MUL_EQUAL T_DIV_EQUAL T_CONCAT_EQUAL T_MOD_EQUAL T_AND_EQUAL T_OR_EQUAL T_XOR_EQUAL T_SL_EQUAL T_SR_EQUAL T_POW_EQUAL
%token T_PLUS_EQUAL   "+= (T_PLUS_EQUAL)"
%token T_MINUS_EQUAL  "-= (T_MINUS_EQUAL)"
%token T_MUL_EQUAL    "*= (T_MUL_EQUAL)"
%token T_DIV_EQUAL    "/= (T_DIV_EQUAL)"
%token T_CONCAT_EQUAL ".= (T_CONCAT_EQUAL)"
%token T_MOD_EQUAL    "%= (T_MOD_EQUAL)"
%token T_AND_EQUAL    "&= (T_AND_EQUAL)"
%token T_OR_EQUAL     "|= (T_OR_EQUAL)"
%token T_XOR_EQUAL    "^= (T_XOR_EQUAL)"
%token T_SL_EQUAL     "<<= (T_SL_EQUAL)"
%token T_SR_EQUAL     ">>= (T_SR_EQUAL)"
%left '?' ':'

%left T_BOOLEAN_OR
%token T_BOOLEAN_OR   "|| (T_BOOLEAN_OR)"
%left T_BOOLEAN_AND 
%token T_BOOLEAN_AND  "&& (T_BOOLEAN_AND)"

%left '|'
%left '^'
%left '&'

%nonassoc T_IS_EQUAL T_IS_NOT_EQUAL T_IS_IDENTICAL T_IS_NOT_IDENTICAL
%token T_IS_EQUAL     "== (T_IS_EQUAL)"
%token T_IS_NOT_EQUAL "!= (T_IS_NOT_EQUAL)"
%token T_IS_IDENTICAL "=== (T_IS_IDENTICAL)"
%token T_IS_NOT_IDENTICAL "!== (T_IS_NOT_IDENTICAL)"

%nonassoc '<' T_IS_SMALLER_OR_EQUAL '>' T_IS_GREATER_OR_EQUAL
%token T_IS_SMALLER_OR_EQUAL "<= (T_IS_SMALLER_OR_EQUAL)"
%token T_IS_GREATER_OR_EQUAL ">= (T_IS_GREATER_OR_EQUAL)"

%left T_SL T_SR
%token T_SL "<< (T_SL)"
%token T_SR ">> (T_SR)"
%left '+' '-' '.'
%left '*' '/' '%'
%right '!'

%nonassoc T_INSTANCEOF
%token T_INSTANCEOF  "instanceof (T_INSTANCEOF)"
%right '~' T_INC T_DEC T_INT_CAST T_DOUBLE_CAST T_STRING_CAST T_ARRAY_CAST T_OBJECT_CAST T_BOOL_CAST T_UNSET_CAST '@'

%right T_POW
%token T_INC "++ (T_INC)"
%token T_DEC "-- (T_DEC)"
%token T_INT_CAST    "(int) (T_INT_CAST)"
%token T_DOUBLE_CAST "(double) (T_DOUBLE_CAST)"
%token T_STRING_CAST "(string) (T_STRING_CAST)"
%token T_ARRAY_CAST  "(array) (T_ARRAY_CAST)"
%token T_OBJECT_CAST "(object) (T_OBJECT_CAST)"
%token T_BOOL_CAST   "(bool) (T_BOOL_CAST)"

%right '['
%nonassoc T_NEW T_CLONE
%token T_NEW       "new (T_NEW)"
%token T_CLONE     "clone (T_CLONE)"
%token T_EXIT      "exit (T_EXIT)"

%token T_IF        "if (T_IF)"
%left T_ELSEIF
%token T_ELSEIF    "elseif (T_ELSEIF)"
%left T_ELSE
%token T_ELSE      "else (T_ELSE)"

%left T_ID
%token T_ID    "identifier (T_ID)"

%token T_LNUMBER   "integer number (T_LNUMBER)"
%token T_DNUMBER   "floating-point number (T_DNUMBER)"
%token T_BOOLEAN   "bool (T_BOOLEAN)"
%token T_STRING    "string (T_STRING)"
%token T_ARRAY     "array (T_ARRAY)"
%token T_VOID     "void (T_VOID)"
%token T_NULL     "null (T_NULL)"

%token T_LNUMBER_NAME   "integer keyword (T_LNUMBER_NAME)"
%token T_DNUMBER_NAME   "float keyword (T_DNUMBER_NAME)"
%token T_BOOLEAN_NAME   "bool keyword (T_BOOLEAN_NAME)"
%token T_STRING_NAME    "string keyword (T_STRING_NAME)"
%token T_ARRAY_NAME     "array keyword (T_ARRAY_NAME)"
%token T_SARRAY_NAME     "array with string as key (T_SARRAY_NAME)"

%token T_BAD_CHARACTER

%token T_DO         "do (T_DO)"
%token T_WHILE      "while (T_WHILE)"
%token T_FOR        "for (T_FOR)"
%token T_SWITCH     "switch (T_SWITCH)"
%token T_CASE       "case (T_CASE)"
%token T_DEFAULT    "default (T_DEFAULT)"
%token T_BREAK      "break (T_BREAK)"
%token T_CONTINUE   "continue (T_CONTINUE)"
%token T_FUNCTION   "function (T_FUNCTION)"
%token T_CONST      "const (T_CONST)"
%token T_RETURN     "return (T_RETURN)"
%token T_TRY        "try (T_TRY)"
%token T_CATCH      "catch (T_CATCH)"
%token T_FINALLY    "finally (T_FINALLY)"
%token T_THROW      "throw (T_THROW)"


%right T_STATIC T_ABSTRACT T_FINAL T_PRIVATE T_PROTECTED T_PUBLIC
%token T_STATIC     "static (T_STATIC)"
%token T_FUTURE     "future (T_FUTURE)"
%token T_ABSTRACT   "abstract (T_ABSTRACT)"
%token T_FINAL      "final (T_FINAL)"
%token T_PRIVATE    "private (T_PRIVATE)"
%token T_PROTECTED  "protected (T_PROTECTED)"
%token T_PUBLIC     "public (T_PUBLIC)"

%token T_CLASS      "class (T_CLASS)"
%token T_TRAIT      "trait (T_TRAIT)"
%token T_INTERFACE  "interface (T_INTERFACE)"
%token T_EXTENDS    "extends (T_EXTENDS)"
%token T_IMPLEMENTS "implements (T_IMPLEMENTS)"
%token T_OBJECT_OPERATOR "-> (T_OBJECT_OPERATOR)"
%token T_DOUBLE_ARROW    "=> (T_DOUBLE_ARROW)"

%token T_SELF    "self (T_SELF)"
%token T_PARENT    "parent (T_PARENT)"
%token T_THIS    "this (T_THIS)"


%token T_CLASS_C         "__CLASS__ (T_CLASS_C)"
%token T_TRAIT_C         "__TRAIT__ (T_TRAIT_C)"
%token T_METHOD_C        "__METHOD__ (T_METHOD_C)"
%token T_LINE            "__LINE__ (T_LINE)"
%token T_FILE            "__FILE__ (T_FILE)"
%token T_NS_C            "__NAMESPACE__ (T_NS_C)"
%token T_DIR             "__DIR__ (T_DIR)"

%token T_WHITESPACE      "whitespace (T_WHITESPACE)"
%token T_PAAMAYIM_NEKUDOTAYIM ":: (T_PAAMAYIM_NEKUDOTAYIM)"

%token T_POW             "** (T_POW)"
%token T_POW_EQUAL       "**= (T_POW_EQUAL)"

%token T_TOKEN      "non-alpha character (T_TOKEN)"

%token T_EMPTY


%% /* Rules */

start : file_structure { 
        //std::cout << "parsing rules end\n";
        ego_file_processing_end();
    }
    
file_structure : package_decl imports_decl classes_decl { 
        //std::cout << "parsing rules end\n"; 
    }

package_decl : 
    %empty { 
        $$ = ego_empty_node(); 
    }
    | T_PACKAGE full_package_name ';' {
    
        if (kicker->pkg.compare($2.sVal) != 0) {
            ego::throwError("Package does not exist in proper named directory, package path and file path should be relatively correct.");
            //kicker->pkg = $2.sVal;
        }
        kicker->parseState->curPkg = $2.sVal;
        
        //std::cout << "package found: " << $2.sVal << "\n";
    }

full_package_name : 
    T_ID { 
        $$ = $1;
    }            
    | full_package_name '.' T_ID {
        $$.assign($1.sVal+$2.sVal+$3.sVal);
    }

imports_decl : 
    %empty { 
        $$ = ego_empty_node(); 
    }
    | imports_decl import_decl

import_decl : 
    T_IMPORT import_name_decl ';' { 
        //std::cout << "import found: " << $2.sVal << "\n";; 
    }

import_name_decl : 
    full_package_name {
        $$ = $1;
        kicker->importClass($1.sVal);
    }
    | full_package_name '.' '*' {
        $$.assign($1.sVal+$2.sVal+$3.sVal);
        kicker->importPackage($1.sVal);
    }

classes_decl : 
    class_decl
    | classes_decl class_decl

class_decl :
    simple_class_decl '{' class_props_decl '}'
    | T_ABSTRACT simple_class_decl {
            kicker->parseState->curClass->isAbstract = true;
        } '{' class_props_decl '}' {
        //std::cout << "abstract class found: " << $2.sVal << "\n";
    }
    | T_FINAL simple_class_decl {
            kicker->parseState->curClass->isFinal = true;
        } '{' class_props_decl '}' {
        //std::cout << "final class found: " << $2.sVal << "\n";
    }

simple_class_decl : 
    T_CLASS def_class_name {
		ego::SClass* curCls = new ego::SClass();
		
		curCls->imports = kicker->imports;
		
		curCls->name = $2.sVal;
        curCls->caseLessName = toLower($2.sVal);
        curCls->pkg = kicker->parseState->curPkg;
		
		kicker->clsName = $2.sVal;
        kicker->cls = curCls;
		kicker->parseState->curClass = curCls;

		kicker->cls->classDir = kicker->filePath.parent_path().string();
        
		kicker->classList.push_back(kicker->parseState->curClass);
		ego::ClassLoader::registerClass(kicker->parseState->curClass, true);
		
	} optional_class_generics {
        ego::NameWithGenerics nameType (kicker->parseState->curClass->name);
        kicker->parseState->curClass->qualifiedName = nameType;
        
		if ($4.astType != 0) {
            ego_get_qualified_type<ego::SClass>(&$4, kicker->parseState->curClass, &kicker->parseState->curClass->qualifiedName);
		}
	} optional_extends optional_implements {
        //TODO: Evaluate the Full Class
    }
//
def_class_name : 
    T_ID {
        $$ = $1;
    }
    | T_ARRAY_NAME {
        $$ = $1;
    }
    | T_SARRAY_NAME {
        $$ = $1;
    }
//
	
optional_class_generics : 
	%empty { 
        $$ = ego_empty_node(); 
    }
    | '<' class_generic_hints '>' { 
        $$ = $2;
    }
//

class_generic_hints :
	data_type_hint {
		$$ = ego_empty_node();
		$$.op1 = ego_add_to_table($1);
		$$.astType = AST_DATA_TYPE_FORMAL_HINT_LIST;
	}
	| class_generic_hints ',' data_type_hint {
		$$ = ego_empty_node();
		$$.op1 = ego_add_to_table($1);
		$$.op2 = ego_add_to_table($3);
		$$.astType = AST_DATA_TYPE_FORMAL_HINT_LIST;
	}
//

generic_hint :
	'?' T_ID {
		$$ = $2;
		$$.astType = AST_DATA_TYPE_GENERIC_HINT_NAME;
	}
	//| '?' T_EXTENDS full_package_name {
	// yet to support
	//}
//

optional_extends : 
    %empty { 
        $$ = ego_empty_node();
    }
    | T_EXTENDS full_package_name optional_class_generics {
        
		ego::SClass* curCls = kicker->parseState->curClass;
		
		if ($2.sVal.length() > 0) {
            curCls->hasParent = true;
			
			ego::NameWithGenerics parent ($2.sVal);
            curCls->parentType = parent;
			
			if ($3.astType != 0) {
                ego_get_qualified_type<ego::SClass>(&$3, kicker->parseState->curClass, &curCls->parentType);
			}
			
            //TODO: Evaluate the Parent Class
        }
    }
//

optional_implements : 
    %empty { 
        $$ = ego_empty_node();
    }
    | T_IMPLEMENTS class_implements_list { 
        $$ = $2;
    }
//

class_implements_list : 
    full_package_name optional_class_generics {
		ego::NameWithGenerics parent ($1.sVal);
        // TODO: check interface exist or not
		
		if ($2.astType != 0) {
            ego_get_qualified_type<ego::SClass>(&$2, kicker->parseState->curClass, &parent);
		}
		
		kicker->parseState->curClass->implements.push_back(parent);
    }
    | class_implements_list ',' full_package_name optional_class_generics {
		ego::NameWithGenerics parent ($3.sVal);
		
        // TODO: check interface $3.sVal exist or not
		
		if ($4.astType != 0) {
            ego_get_qualified_type<ego::SClass>(&$4, kicker->parseState->curClass, &parent);
		}
		
		kicker->parseState->curClass->implements.push_back(parent);
    }
//

class_props_decl : 
    %empty { 
        $$ = ego_empty_node(); 
    }
    | class_props_decl class_property_decl 
//

class_property_decl : 
    access_modifier scope_modifier {
		//std::cout << "some class property/method found: " << "\n";
		YYSTYPE p;
		p.op1 = ego_add_to_table($1);
		p.op2 = ego_add_to_table($2);
		
		kicker->parseState->lastNodeId = ego_add_to_table(p);
	} class_method_or_variable
//

class_method_or_variable : 
    class_attribute_decl_part {
    }
    | class_method_decl_part {
    }
//

access_modifier : 
	T_PUBLIC {
		$$ = $1;
	}
	| T_PRIVATE {
		$$ = $1;
	}
	| T_PROTECTED {
		$$ = $1;
	}
//

scope_modifier : 
    %empty {
		$$ = ego_empty_node();
	}
    | T_FUTURE {
		$$ = $1;
	}
	| T_STATIC {
		$$ = $1;
	}
	| T_ABSTRACT {
		$$ = $1;
	}
    | T_CONST {
		$$ = $1;
	}
//

class_attribute_decl_part : 
    data_type_hint '$' T_ID {
        //kicker->validator->validate_data_type_name(&$1, false);
        
		YYSTYPE modifier = ego_get_from_table(kicker->parseState->lastNodeId);
        
        // register variable
        ego::ClassVariable* var = ego_register_class_variable(&$1, &$3, &modifier);
		
	} scalar_const_assignment ';' {
        if (kicker->parseState->curVar->isConst) {
            if ($5.sType == token::T_EMPTY) {
                ego::throwError(string("Class Constants must be initialized '" + kicker->parseState->curVar->name + "' with values."));
            }
        }
        
        kicker->parseState->curVar->value = $5.sVal;
		// Assign Value
		kicker->parseState->curVar->valNode = ego_add_to_table($5);
		
		//kicker->validator->check_class_variable(kicker->parseState->curVar);
    }
//

class_method_decl_part : 
    return_data_type T_ID {

        //kicker->validator->validate_data_type_name(&$1, true);
        
		YYSTYPE modifier = ego_get_from_table(kicker->parseState->lastNodeId);
        
        // register method
        ego::ClassMethod* method = ego_register_class_method(&$1, &$2, &modifier);
		
    } '(' formal_param_list ')' method_body {
        kicker->parseState->curMethod->body = $7;
		
		//kicker->validator->check_class_method(kicker->parseState->curMethod);
    }
//

method_body : 
    ';' {
        $$ = ego_empty_node();
        $$.astType = AST_METHOD_NO_BODY;
        
        if (!kicker->parseState->curClass->isInterface && !kicker->parseState->curMethod->isAbstract) {
            ego::throwError(string("Method '" + kicker->parseState->curMethod->name + "' is not declared as 'abstract'"));
        }
    }
    | closed_stmt_list {
        $$ = $1;
    }
	
return_data_type : 
    data_type_hint { 
		$$ = $1; 
	} 
    | T_VOID { 
		$$ = $1; 
        $$.astType = AST_DATA_TYPE_VOID;
	}
//

data_type_hint : 
	generic_hint { 
		$$ = $1; 
	}
    | T_LNUMBER_NAME { 
		$$ = $1; 
		$$.astType = AST_DATA_TYPE_INT; 
	} 
    | T_DNUMBER_NAME { 
		$$ = $1; 
		$$.astType = AST_DATA_TYPE_FLOAT; 
	} 
    | T_BOOLEAN_NAME { 
		$$ = $1; 
		$$.astType = AST_DATA_TYPE_BOOL; 
	}
    | T_STRING_NAME { 
		$$ = $1; 
		$$.astType = AST_DATA_TYPE_STRING; 
	}
	| class_type { 
		$$ = $1;
	}
	| T_ARRAY_NAME '<' data_type_hint '>' {
		$$ = $1;

		$$.op1 = ego_add_to_table($3);
		
		$$.astType = AST_DATA_TYPE_ARRAY; 
	}
	| T_SARRAY_NAME '<' data_type_hint '>' {
		$$ = $1;
		
		$$.op1 = ego_add_to_table($3);
		
		$$.astType = AST_DATA_TYPE_SARRAY; 
	}
//

class_type :
    full_package_name { 
		$$ = $1; 
		$$.astType = AST_DATA_TYPE_OBJECT; 
	}
    | full_package_name '<' data_type_hints '>' { 
		$$ = ego_empty_node();
		$$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
		$$.astType = AST_DATA_TYPE_OBJECT_GENERICS; 
	}
//  

data_type_hints :
	data_type_hint {
		$$ = ego_empty_node();
		$$.op1 = ego_add_to_table($1);
		$$.astType = AST_DATA_TYPE_ACTUAL_HINT_LIST; 
	}
	| data_type_hints ',' data_type_hint {
		$$ = ego_empty_node();
		$$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
		$$.astType = AST_DATA_TYPE_ACTUAL_HINT_LIST; 
	}
//
	
// Scalar data can be assigned to instance variables  or formal arguments on initialization
scalar_const_assignment : 
    %empty { 
        $$ = ego_empty_node(); 
    } 
    | '=' scalar_const_to_assign { 
        $$ = $2; 
    }

scalar_const_to_assign : 
    scalar_const { $$ = $1; }
    | class_constant { $$ = $1; }
    
    
scalar_const : 
    T_LNUMBER { 
        $$ = $1; 
        $$.astType = AST_INTEGER; 
    } 
    | T_DNUMBER {
        $$ = $1; 
        $$.astType = AST_DOUBLE; 
    } 
    | T_BOOLEAN {
        $$ = $1; 
        $$.astType = AST_BOOLEAN; 
    } 
    | T_STRING {
        $$ = $1; 
        $$.astType = AST_STRING; 
    }
    | T_NULL {
        $$ = $1; 
        $$.astType = AST_NULL; 
    }
//   | T_ARRAY { 
//        $$ = $1; // Arrays are not scalar types
//    }

class_constant: 
    full_package_name T_PAAMAYIM_NEKUDOTAYIM T_ID {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op = ego_add_to_table($2);
        $$.op2 = ego_add_to_table($3);
        $$.astType = AST_STATIC_VARIABLE;
    }
    | T_SELF T_PAAMAYIM_NEKUDOTAYIM T_ID {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2);
        $$.op2 = ego_add_to_table($3);
        $$.astType = AST_SELF_STATIC_VARIABLE;
    }


formal_param_list: 
    %empty { $$ = ego_empty_node(); } 
    | formal_parameter {
        // THIS is not needed
        //$$ = $1; 
    } 
    | formal_param_list ',' formal_parameter { 
        //$$ = $1; 
    } 


formal_parameter : 
    data_type_hint '$' T_ID scalar_const_assignment {
        //kicker->validator->validate_data_type_name(&$1, false);
       
        ego::Variable* var = ego_register_method_variable(&$1, &$3, &$4);
        var->isFormal = true;
        kicker->parseState->curMethod->addArg(var);
        
        $$ = $3;
        
        //kicker->validator->check_local_variable(var, varIsObject(&$1));
    }

closed_stmt_list : 
    '{' stmt_list '}' { 
        $$ = $2;
    }


// **************************************************************
// *** STATEMENTS Definition
stmt_list : 
    %empty { 
        $$ = ego_empty_node();
    }
    | stmt_list stmt {
        // xxxxx_stmt_list
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_STATEMENTS;
        
    }

stmt :
    variable_definition_stmt { 
        $$ = $1;
        $$.astType = AST_VAR_DEFINE_STMT;
        
    }
    | if_stmt { 
        $$ = $1;
        //$$.astType = AST_IF_STMT;
    }
    | while_stmt { 
        $$ = $1;
        $$.astType = AST_WHILE_STMT;
    }
    | do_while_stmt { 
        $$ = $1;
        $$.astType = AST_DO_WHILE_STMT;
    }
    | switch_stmt { 
        $$ = $1;
        $$.astType = AST_SWITCH_STMT;
    }
    | break_stmt { 
        $$ = $1;
        $$.astType = AST_BREAK_STMT;
    }
    | continue_stmt { 
        $$ = $1;
        $$.astType = AST_CONTINUE_STMT;
    }
    | try_catch_stmt { 
        $$ = $1;
        $$.astType = AST_TRY_CATCH_STMT;
    }
    | throw_stmt { 
        $$ = $1;
        $$.astType = AST_THROW_STMT;
    }
    | variable_assignment_stmt { 
        $$ = $1;
        $$.astType = AST_ASSIGNMENT_STMT;
    }
    | echo_stmt { 
        $$ = $1;
        $$.astType = AST_ECHO_STMT;
    }
    | return_stmt { 
        $$ = $1;
        $$.astType = AST_RETURN_STMT;
    }
    | expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.astType = AST_EXPR_STMT;
    }
    | ';' { 
        $$ = $1;
        $$.astType = AST_EMPTY_STMT;
    }

// 1. Local Variable Definition
variable_definition_stmt : variable_definitions_expr ';' {
        //std::cout << "Many Local Variables defined: " << $3.sVal << "\n";
		$$ = $1;
		$$.astType = AST_VAR_DEFINE_STMT;
    }
//

// This is not a Algebra exression
variable_definitions_expr : 
	data_type_hint {
        //kicker->validator->validate_data_type_name(&$1, false);
		kicker->parseState->lastNodeId = ego_add_to_table($1);
	} variable_definitions {
        //std::cout << "Many Local Variables defined: " << $3.sVal << "\n";
		
		$$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
		$$.astType = AST_VAR_DEFINE_EXPR;
    }
//

// Should be used with variable_definitions_expr
variable_definitions : 
	variable_definition_part {
		//std::cout << "Local Variable defined: " << $1.sVal << "\n";
		$$ = $1;
	}
	| variable_definitions ',' variable_definition_part {
		//std::cout << "Local Variable defined: " << $1.sVal << "\n";
		
		$$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
		$$.astType = AST_VAR_DEFINE_MULTIPLE;
	}
//

// Should be used with variable_definitions_expr
variable_definition_part : 
	'$' T_ID optional_assignment_expr {
		
		YYSTYPE curVarType = ego_get_from_table(kicker->parseState->lastNodeId);
		//kicker->validator->check_local_variable_type(&curVarType);
		
		ego::Variable* var = ego_register_method_variable(&curVarType, &$2, &$3);
		
		YYSTYPE p;
        p.op1 = kicker->parseState->lastNodeId;
        p.op2 = ego_add_to_table($2);
        p.astType = AST_VAR_DEFINITION;
		
		$$ = ego_empty_node();
        $$.op1 = ego_add_to_table(p);
        $$.op2 = ego_add_to_table($3);
		$$.astType = AST_VAR_DEFINE;
		
		//kicker->validator->check_local_variable(var, varIsObject(&curVarType));
	}
//

optional_assignment_expr : 
    %empty { 
        $$ = ego_empty_node(); 
    }
    | '=' expr {
        
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($2);
        $$.op = ego_add_to_table($1);
        $$.astType = AST_RIGHT_ASSIGNMENT; 
        
    }

// 2. IF Statement definition
if_stmt : 
    if_stmt_only { 
        $$ = $1;
    }
    | if_stmt_only else_stmt { 
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2= ego_add_to_table($2);
        $$.astType = AST_IF_ELSE_IF_STMT;
    }
    | if_stmt_only multiple_else_if_stmt { 
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2= ego_add_to_table($2);
        $$.astType = AST_IF_ELSE_IF_STMT;
    }
    | if_stmt_only multiple_else_if_stmt else_stmt {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
        $$.op = ego_add_to_table($3);
        $$.astType = AST_IF_ELSE_IF_ELSE_STMT;
    }

if_stmt_only : 
    T_IF parenthesis_expr closed_stmt_list {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($2);
        $$.op2 = ego_add_to_table($3);
        $$.astType = AST_IF_STMT;
    }

multiple_else_if_stmt : 
    else_if_stmt {
        $$ = $1;
        $$.astType = AST_ELSE_IF_STMT;
    }
    | multiple_else_if_stmt else_if_stmt {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
        $$.sType = $2.sType;
        $$.astType = AST_IF_ELSE_IF_STMT;
    }

else_if_stmt : T_ELSEIF parenthesis_expr closed_stmt_list {
        $$ = $1;
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
    }

else_stmt : T_ELSE closed_stmt_list {
        $$ = $1;
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_ELSE_STMT;
    }

// 3. While statement definition    
while_stmt : T_WHILE {
        kicker->parseState->loopFound();
    } parenthesis_expr closed_stmt_list {
        $$ = $1;
        $$.op1 = ego_add_to_table($3);
        $$.op2 = ego_add_to_table($4);
        
        kicker->parseState->loopClosed();
    }

// 4. Do-While statement definition
do_while_stmt : T_DO {
        kicker->parseState->loopFound();
    } closed_stmt_list T_WHILE parenthesis_expr ';' {
        $$ = $1;
        $$.op1 = ego_add_to_table($3);
        $$.op2 = ego_add_to_table($5);
        kicker->parseState->loopClosed();
    }

// 5. Switch statement definition
switch_stmt : T_SWITCH {
        kicker->parseState->switchFound();
    } parenthesis_expr switch_closed_stmt_list {
        kicker->parseState->switchClosed();
        
        $$ = $1;
        $$.op1 = ego_add_to_table($3);
        $$.op2 = ego_add_to_table($4);
        $$.astType = AST_SWITCH_STMT;
    }

switch_closed_stmt_list : 
    '{' switch_stmt_list '}' {
        $$ = $1;
    }

switch_stmt_list : 
    switch_stmt_case {
        $$ = $1;
    }
    | switch_stmt_list switch_stmt_case {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_MULTI_CASE_STMT_WITH_BODY;
    }

switch_stmt_case : 
    multi_switch_case_word {
        kicker->parseState->caseFound();
    }  stmt_list break_stmt {
        // stmt_list includes break statement as well
        kicker->parseState->caseClosed();
        
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
        $$.op = ego_add_to_table($3);
        $$.astType = AST_CASE_STMT_WITH_BODY;
        
    }

multi_switch_case_word : 
    switch_case_word {
        $$ = $1;
    }
    | multi_switch_case_word switch_case_word {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_MULTI_CASE_STMT;
    }

switch_case_word : 
    T_CASE scalar_const ':' {
        $$ = $1;
        $$.op1 = ego_add_to_table($1);
        $$.astType = AST_CASE_STMT;
    }
    | T_DEFAULT ':' {
        $$ = $1;
        $$.astType = AST_DEFAULT_STMT;
    }

// 6. Break statement definition
break_stmt : T_BREAK ';' {
    if (!kicker->parseState->inCaseOrLoop()) {
        ego::throwError("Wrong placement of BREAK statement");
    }
    
    $$ = $1;
}

// 7. Continue statement definition
continue_stmt : T_CONTINUE ';' {
        if (!kicker->parseState->inLoop()) {
            ego::throwError("Wrong placement of CONTINUE statement");
        }
        
        $$ = $1;
    }

// 8. Try-Catch statement definition
try_catch_stmt:  
    T_TRY closed_stmt_list catch_multiple optional_finally {
        $$ = $1;
        $$.op1 = ego_add_to_table($2);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($4);
    }

catch_multiple : 
    catch_one {
        $$ = $1;
    }
    | catch_multiple catch_one {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_MULTI_CATCH_STMT;
    }

catch_one : T_CATCH '(' full_package_name '$' T_ID ')' closed_stmt_list {
        $$ = $1;
        $$.op1 = ego_add_to_table($3);
        $$.op = ego_add_to_table($5);
        $$.op2 = ego_add_to_table($7);
        $$.astType = AST_CATCH_STMT;
    }

optional_finally : T_FINALLY closed_stmt_list {
        $$ = $1;
        $$.op1 = ego_add_to_table($2);
        $$.astType = AST_FINALLY_STMT;
    }

// 9. Throw statement definition
throw_stmt:  T_THROW expr ';' {
        $$ = $1;
        $$.op1 = ego_add_to_table($2);
    }

// 10. Variable Assignment Statement
variable_assignment_stmt : 
    l_variable '=' expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($2);
        $$.astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
    | l_variable T_PLUS_EQUAL expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($2);
        $$.astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
    | l_variable T_MINUS_EQUAL expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($2);
        $$.astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
    | l_variable T_MUL_EQUAL expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($2);
        $$.astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
    | l_variable T_DIV_EQUAL expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($2);
        $$.astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
    | l_variable T_CONCAT_EQUAL expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($2);
        $$.astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
    | l_variable T_MOD_EQUAL expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($2);
        $$.astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
    | l_variable T_AND_EQUAL expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($2);
        $$.astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
    | l_variable T_OR_EQUAL expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($2);
        $$.astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
    | l_variable T_XOR_EQUAL expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($2);
        $$.astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
    | l_variable T_SL_EQUAL expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($2);
        $$.astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
    | l_variable T_SR_EQUAL expr ';' {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($3);
        $$.op = ego_add_to_table($2);
        $$.astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }

// 11. ECHO statement
echo_stmt:  T_ECHO expr ';' {
        $$ = $1;
        $$.op1 = ego_add_to_table($2);
    }

// 12. Return statement
return_stmt:  
    T_RETURN ';' {
        $$ = $1;

        //kicker->validator->check_return_statement(NULL, kicker->parseState->curMethod);
    }
    | T_RETURN expr ';' {
        $$ = $1;
        $$.op1 = ego_add_to_table($2);

        //kicker->validator->check_return_statement(&$2, kicker->parseState->curMethod);
    }

// *******************************************************************


// *******************************************************************
// EXPRESSION definition
expr :    
    scalar_const { $$ = $1; }
    | arithmetic_expr  { $$ = $1; }
    | parenthesis_expr { $$ = $1; }
    | new_object_create_expr { $$ = $1; }
    | variable { $$ = $1; }
    | object_property_access { $$ = $1; }
    | static_method_access { $$ = $1; }
	| array_of_expr { $$ = $1; }
	| sarray_of_expr { $$ = $1; }

// 0. Expression: inside parenthesis
parenthesis_expr : '(' expr ')' { $$ = $2; }

// 1. Expression: Arithmetic
arithmetic_expr :  
    simple_arithmetic_expr { $$ = $1; }
    | comparison_expr { $$ = $1; }
    | logical_expr { $$ = $1; }
    | bitwise_expr { $$ = $1; }

simple_arithmetic_expr : 
    expr '+' expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_ADD; 
    }
    | expr '-' expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_SUB; 
    }
    | expr '*' expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_MUL; 
    }
    | expr '/' expr {
        $$ = ego_empty_node();
         $$.op1 = ego_add_to_table($1); 
         $$.op = ego_add_to_table($2); 
         $$.op2 = ego_add_to_table($3); 
         $$.astType = AST_DIV; 
    }
    | expr '%' expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_MOD; 
    }
    | expr '.' expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_CONCAT; 
    }
    | variable variable_unary_op {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.astType = AST_INCR_DECR; 
    }


comparison_expr : 
    expr '<' expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_LT; 
    }
    | expr '>' expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_GT; 
    }
    | expr T_IS_SMALLER_OR_EQUAL expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_LT_OR_EQ; 
    }
    | expr T_IS_GREATER_OR_EQUAL expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_GT_OR_EQ; 
    }
    | expr T_IS_EQUAL expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_EQUAL; 
    }
    | expr T_IS_NOT_EQUAL expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_NOT_EQUAL; 
    }
    | expr T_IS_IDENTICAL expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_IDENTICAL; 
    }
    | expr T_IS_NOT_IDENTICAL expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_NOT_IDENTICAL; 
    }

logical_expr : 
    expr T_BOOLEAN_AND expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
		$$.op = ego_add_to_table($2); 
		$$.op2 = ego_add_to_table($3); 
		$$.astType = AST_AND_AND; 
	}
    | expr T_BOOLEAN_OR expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
		$$.op = ego_add_to_table($2); 
		$$.op2 = ego_add_to_table($3); 
		$$.astType = AST_OR_OR; 
	}

bitwise_expr : 
    expr '&' expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_AND; 
    }
    | expr '|' expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_OR; 
    }
    | expr '^' expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_XOR; 
    }
    | expr T_SL expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_SHIFT_LEFT; 
    }
    | expr T_SR expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3); 
        $$.astType = AST_SHIFT_RIGHT; 
    }
    | '~' expr {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($2); 
        $$.op = ego_add_to_table($1); 
        $$.astType = AST_NEGATION; 
    }


// 2. Expression: new object creation
new_object_create_expr : 
    T_NEW class_type function_call_notation {
        //Do not check Class exists or not here
		
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($2); 
        $$.op = ego_add_to_table($1); 
        $$.op2 = ego_add_to_table($3);
        $$.astType = AST_NEW_OBJECT;
    }
//

// 3. array_of_expr
array_of_expr :
	'[' array_of_data ']' {
        $$ = ego_empty_node();
		$$.op1 = ego_add_to_table($2);
		$$.astType = AST_ARRAY_OF_DATA_WRAPPER;
	}
//

array_of_data :
	expr {
		$$ = ego_empty_node();
		$$.op1 = ego_add_to_table($1);
		$$.astType = AST_ARRAY_OF_DATA;
	}
	| array_of_data ',' expr {
		$$ = ego_empty_node();
		$$.op1 = ego_add_to_table($1);
		$$.op2 = ego_add_to_table($3);
		$$.astType = AST_ARRAY_OF_DATA;
	}
//

// 4. sarray_of_expr
sarray_of_expr :
	'{' sarray_of_data '}' {
		$$ = ego_empty_node();
		$$.op1 = ego_add_to_table($2);
		$$.astType = AST_SARRAY_OF_DATA_WRAPPER;
	}
//

sarray_of_data :
	sarray_map {
		$$ = ego_empty_node();
		$$.op1 = ego_add_to_table($1);
		$$.astType = AST_SARRAY_OF_DATA;
	}
	| sarray_of_data ',' sarray_map {
		$$ = ego_empty_node();
		$$.op1 = ego_add_to_table($1);
		$$.op2 = ego_add_to_table($3);
		$$.astType = AST_SARRAY_OF_DATA;
	}
//

sarray_map : 
	expr ':' expr {
		$$ = ego_empty_node();
		$$.op1 = ego_add_to_table($1);
		$$.op2 = ego_add_to_table($3);
		$$.astType = AST_SARRAY_MAP;
	}
//


// *****************************************************************************

// *****************************************************************************
// Additional helper definitions
function_call_notation : 
    '(' ')' {
        $$.astType = AST_EMPTY_ARGS;
    }
    | '(' actual_param_list ')' { 
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($2); 
        $$.astType = AST_ACTUAL_ARGS;
    }

actual_param_list: 
    actual_parameter { 
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.astType = AST_ACTUAL_ARG;
    }
    | actual_param_list ',' actual_parameter { 
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op = ego_add_to_table($2); 
        $$.op2 = ego_add_to_table($3);
        $$.astType = AST_ACTUAL_ARG_LIST;
    }

actual_parameter : expr { $$ = $1; }

variable_unary_op : T_DEC { $$ = $1; }
    | T_INC { $$ = $1; }

// ***********************************************************************************
// Object Property detections
object_property_access : 
    variable object_property_chain {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_OBJECT_PROPERTY_ACCESS;
    }

object_property_chain : 
    object_method_or_attribute {
        $$ = $1;
    }
    | object_property_chain object_method_or_attribute {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_OBJECT_PROPERTY_CHAIN;
    }

object_method_or_attribute : 
    simple_object_property {
        $$ = $1;
        $$.astType = AST_OBJECT_ATRIBUTE;
    }
    | simple_object_property function_call_notation {
        $$ = ego_empty_node();

        $$.op1 = ego_add_to_table($1); // function name
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_METHOD_CALL;
    }

simple_object_property : 
    T_OBJECT_OPERATOR T_ID {
        $$ = $2;
    }

static_method_access : 
    static_method_call { 
        $$ = $1; 
    }
    | static_method_call object_property_chain {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_STATIC_PROPERTY_CHAIN;
    }

static_method_call : 
    class_constant function_call_notation {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_STATIC_METHOD_CALL;
    }

// Left Assignment Variable
l_variable : 
    variable {
        // Local variable can be used as left assignment
        // But not this
        if ($1.sType == yy::parser::token::T_THIS) {
            ego::throwError("'this' must not be used in left side of assignment");
        }
        $$ = $1;
    }
    | object_property_access {
        if ($1.astType == AST_METHOD_CALL) {
            ego::throwError("Method call must not be used on Left side assignment");
        }
        
        $$ = $1;
    }
// ***********************************************************************************
// Variable detections
variable : 
    local_variable {
        //std::cout << "Local Variable found\n";
        $$ = $1;
    }
    | this_variable  {
		if (kicker->parseState->curMethod->isStatic) {
            ego::throwError("'this' must not be used in the static method.");
        }
        //std::cout << "this->object Variable found\n";
        $$ = $1;
    }
    | static_variable  {
        //std::cout << "static Variable found\n";
        $$ = $1;
    }
//

local_variable : 
    variable_id { 
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.astType = AST_LOCAL_VARIABLE; 
    }
    | variable_id array_expression { 
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_LOCAL_ARRAY_VARIABLE; 
    }
//

variable_id : '$' T_ID { $$ = $2; }
//

this_variable : T_THIS { 
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1); 
        $$.astType = AST_THIS_VARIABLE;
    }
//

static_variable : 
    class_constant { 
        $$ = $1;
        $$.astType = AST_STATIC_VARIABLE;
    }
    | class_constant array_expression { 
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_STATIC_ARRAY_VARIABLE;
    }
//

// Array Notation
array_expression : 
    //array_expression_no_index {
    //    $$ = $1;
    //}
    //| 
	array_expression_chain {
        $$ = $1;
    }
//

array_expression_chain:
    array_expression_index {
        $$ = $1;
    }
    | array_expression_chain array_expression_index {
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($1);
        $$.op2 = ego_add_to_table($2);
        $$.astType = AST_ARRAY_MULTI;
    }
//

array_expression_index : 
    '[' scalar_const ']' { 
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($2);
        $$.astType = AST_ARRAY_INDEX_EXPR;
    }
    | '[' variable ']' { 
        $$ = ego_empty_node();
        $$.op1 = ego_add_to_table($2);
        $$.astType = AST_ARRAY_INDEX_EXPR;
    }
//
/*
array_expression_no_index : '['  ']' {
        //this should be only if we use as Left Side assignments
        $$ = $1;
        $$.astType = AST_ARRAY_INDEX_EMPTY;
    }
*/
//

//sss
%%



/**
* **********************************************************************
* Methods
* **********************************************************************
*/
#include <ego/ParserHelper.cpp>

/* Custom Code */
