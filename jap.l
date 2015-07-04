%{
/* C++ string header, for string ops below */
#include <string>
#include <iostream>
#include <ego/ego.h>

#define YYERROR_VERBOSE
#define YYSTYPE ego::ParseNode

using namespace std;

#include <jap.tab.hh>
typedef yy::parser::token token;

#include <ego/ego.cpp>
extern ego::FileParser *kicker;
ego::FileParser *kicker;

void p(const char *);
void incrChars();
int simpleLexAction(int);

void registerLexToken(int type);
void printError(string type, string msg);

%}

%option debug 
%option nodefault 
/*%option noyywrap */
%option c++
%option yylineno

/**  more definitions */
NEWLINE     (\r|\n|\r\n)
WHITESPACE  [ \t]+
LETTER      [A-Za-z_]
DIGIT       [0-9]
ID          {LETTER}({LETTER}|{DIGIT})*
VAR         \${ID}
FLOAT1      {DIGIT}+\.{DIGIT}*
FLOAT2      {DIGIT}*\.{DIGIT}+
FLOATF      -?({FLOAT1}|{FLOAT2})([eE][+-]?{DIGIT}+)?
INTF        -?{DIGIT}+
ANY_CHAR    [^]
TOKEN       [;\:,\.\[\]\(\)\|\^\&\+\-\/\*\=\%\!\~\$\<\>\?\@\{\}]

%%

"/*"    {
    int c;
    
    while((c = kicker->lexer->yyinput()) != 0 && c != EOF) {
        kicker->xState->incrChars();
        
        if(c == '\n') {
            kicker->xState->incrLines();
        } else if(c == '*') {
            if((c = kicker->lexer->yyinput()) == '/')
                break;
        } else {
            //unput(c);
        }
    }
}

"//"    {
    int c;
    
    while((c = kicker->lexer->yyinput()) != 0 && c != EOF) {
        kicker->xState->incrChars();
        
        if(c == '\n') {
            kicker->xState->incrLines();
            break;
        } else {
            //unput(c);
        }
    }
    
    kicker->xState->registerRawToken(token::T_WHITESPACE, string("\n"), kicker->xState->getNumLines(), kicker->xState->getNumChars());
}

"package" {
    return simpleLexAction(token::T_PACKAGE);
}

"import" {
    return simpleLexAction(token::T_IMPORT);
}

"class" {
    return simpleLexAction(token::T_CLASS);
}

"public" {
    return simpleLexAction(token::T_PUBLIC);
}

"protected" {
    return simpleLexAction(token::T_PROTECTED);
}

"private" {
    return simpleLexAction(token::T_PRIVATE);
}

"function" {
    return simpleLexAction(token::T_FUNCTION);
}

"echo" {
	return simpleLexAction(token::T_ECHO);
}

"print" {
	return simpleLexAction(token::T_ECHO);
}

"+=" {
	return simpleLexAction(token::T_PLUS_EQUAL);
}

"-=" {
	return simpleLexAction(token::T_MINUS_EQUAL);
}

"*=" {
	return simpleLexAction(token::T_MUL_EQUAL);
}

"/=" {
	return simpleLexAction(token::T_DIV_EQUAL);
}

".=" {
	return simpleLexAction(token::T_CONCAT_EQUAL);
}

"%=" {
	return simpleLexAction(token::T_MOD_EQUAL);
}

"&=" {
	return simpleLexAction(token::T_AND_EQUAL);
}

"|=" {
	return simpleLexAction(token::T_OR_EQUAL);
}

"^=" {
	return simpleLexAction(token::T_XOR_EQUAL);
}

"<<=" {
	return simpleLexAction(token::T_SL_EQUAL);
}

">>=" {
	return simpleLexAction(token::T_SR_EQUAL);
}

"||" {
	return simpleLexAction(token::T_BOOLEAN_OR);
}

"&&" {
	return simpleLexAction(token::T_BOOLEAN_AND);
}

"==" {
	return simpleLexAction(token::T_IS_EQUAL);
}

"!=" {
	return simpleLexAction(token::T_IS_NOT_EQUAL);
}

"===" {
	return simpleLexAction(token::T_IS_IDENTICAL);
}

"!==" {
	return simpleLexAction(token::T_IS_NOT_IDENTICAL);
}

"<=" {
	return simpleLexAction(token::T_IS_SMALLER_OR_EQUAL);
}

">=" {
	return simpleLexAction(token::T_IS_GREATER_OR_EQUAL);
}

"<<" {
	return simpleLexAction(token::T_SL);
}

">>" {
	return simpleLexAction(token::T_SR);
}

"instanceof" {
	return simpleLexAction(token::T_INSTANCEOF);
}

"++" {
	return simpleLexAction(token::T_INC);
}

"--" {
	return simpleLexAction(token::T_DEC);
}

"(int)" {
	return simpleLexAction(token::T_INT_CAST);
}

"(double)" {
	return simpleLexAction(token::T_DOUBLE_CAST);
}

"(string)" {
	return simpleLexAction(token::T_STRING_CAST);
}

"(array)" {
	return simpleLexAction(token::T_ARRAY_CAST);
}

"(bool)" {
	return simpleLexAction(token::T_BOOL_CAST);
}

"new" {
	return simpleLexAction(token::T_NEW);
}

"clone" {
	return simpleLexAction(token::T_CLONE);
}

"elseif" {
	return simpleLexAction(token::T_ELSEIF);
}

"else if" {
	return simpleLexAction(token::T_ELSEIF);
}

"if" {
    //std::cout << "lex: IF found\n";
	return simpleLexAction(token::T_IF);
}

"else" {
	return simpleLexAction(token::T_ELSE);
}

{INTF} {
	return simpleLexAction(token::T_LNUMBER);
}

{FLOATF} {
	return simpleLexAction(token::T_DNUMBER);
}

"true" {
	return simpleLexAction(token::T_BOOLEAN);
}

"false" {
	return simpleLexAction(token::T_BOOLEAN);
}

"void" {
	return simpleLexAction(token::T_VOID);
}

"int" {
	return simpleLexAction(token::T_LNUMBER_NAME);
}

"float" {
	return simpleLexAction(token::T_DNUMBER_NAME);
}

"double" {
	return simpleLexAction(token::T_DNUMBER_NAME);
}

"bool" {
	return simpleLexAction(token::T_BOOLEAN_NAME);
}

"string" {
	return simpleLexAction(token::T_STRING_NAME);
}

"array" {
	return simpleLexAction(token::T_ARRAY_NAME);
}

"sarray" {
	return simpleLexAction(token::T_SARRAY_NAME);
}

"do" {
	return simpleLexAction(token::T_DO);
}

"while" {
	return simpleLexAction(token::T_WHILE);
}

"for" {
	return simpleLexAction(token::T_FOR);
}

"switch" {
	return simpleLexAction(token::T_SWITCH);
}

"case" {
	return simpleLexAction(token::T_CASE);
}

"default" {
	return simpleLexAction(token::T_DEFAULT);
}

"break" {
	return simpleLexAction(token::T_BREAK);
}

"continue" {
	return simpleLexAction(token::T_CONTINUE);
}

"const" {
	return simpleLexAction(token::T_CONST);
}

"return" {
	return simpleLexAction(token::T_RETURN);
}

"try" {
	return simpleLexAction(token::T_TRY);
}

"catch" {
	return simpleLexAction(token::T_CATCH);
}

"finally" {
	return simpleLexAction(token::T_FINALLY);
}

"throw" {
	return simpleLexAction(token::T_THROW);
}

"static" {
	return simpleLexAction(token::T_STATIC);
}

"future" {
	return simpleLexAction(token::T_FUTURE);
}

"abstract" {
	return simpleLexAction(token::T_ABSTRACT);
}

"final" {
	return simpleLexAction(token::T_FINAL);
}

"trait" {
	return simpleLexAction(token::T_TRAIT);
}

"interface" {
	return simpleLexAction(token::T_INTERFACE);
}

"extends" {
	return simpleLexAction(token::T_EXTENDS);
}

"implements" {
	return simpleLexAction(token::T_IMPLEMENTS);
}

"->" {
	return simpleLexAction(token::T_OBJECT_OPERATOR);
}

"=>" {
	return simpleLexAction(token::T_DOUBLE_ARROW);
}

"self" {
	return simpleLexAction(token::T_SELF);
}

"parent" {
	return simpleLexAction(token::T_PARENT);
}

"this" {
	return simpleLexAction(token::T_THIS);
}

"::" {
	return simpleLexAction(token::T_PAAMAYIM_NEKUDOTAYIM);
}

"**" {
	return simpleLexAction(token::T_POW);
}
"null" {
	return simpleLexAction(token::T_NULL);
}

"**=" {
	return simpleLexAction(token::T_POW_EQUAL);
}


{TOKEN} {
    p("Token lex ");
    incrChars();
    registerLexToken(token::T_TOKEN);
    
    const char *text = kicker->lexer->YYText();
    return text[0];
}

{WHITESPACE}  { 
    p("WHITESPACE lex found"); 
    incrChars();
    registerLexToken(token::T_WHITESPACE);
}
{NEWLINE} { 
    p("NEWLINE lex found"); 
    incrChars();
    kicker->xState->incrLines();
    registerLexToken(token::T_WHITESPACE);
}

{VAR} {
    incrChars();
    
    const char *text = kicker->lexer->YYText();
    string s = string(text+1);
    
    kicker->xState->setLastString(s);
    
    registerLexToken(token::T_VAR);
    
    return token::T_VAR;
}

{ID} {
    return simpleLexAction(token::T_ID);
}

"\""    {
    int c;
    string str;
    
    while((c = kicker->lexer->yyinput()) != 0 && c != EOF) {
        kicker->xState->incrChars();
        
        if(c == '\n') {
            kicker->xState->incrLines();
        }
        
        if (c == '"'){
            break;
        } else {
            str.push_back(c);
        }
    }
    
    kicker->xState->setLastString(str);
    
    registerLexToken(token::T_STRING);
    return token::T_STRING; //simpleLexAction(token::T_STRING);
}

. { 
    incrChars();
    p("unknown character found");
    exit(255); 
}

%%

#include "jap.tab.cc"
#include <jap.cpp>


/*
 * Methods
*/
void p(const char* msg) {
    //std::cout << msg << " " << kicker->lexer->YYText() << endl;
}

void registerLexToken(int type) {
    kicker->xState->registerRawToken(type, kicker->xState->getLastString(), kicker->xState->getNumLines(), kicker->xState->getNumChars());
}


void incrChars() {
    kicker->xState->setLastString(kicker->lexer->YYText());
    kicker->xState->incrChars(kicker->lexer->YYLeng());
}

int simpleLexAction(int t) {
    incrChars();
    registerLexToken(t);
    
    return t;
}

/**
* When the scanner receives an end-of-file indication from YY_INPUT, 
* it then checks the `yywrap()' function. If `yywrap()' returns false 
* (zero), then it is assumed that the function has gone ahead and 
* set up yyin to point to another input file, and scanning continues. If it 
* returns true (non-zero), then the scanner terminates, returning 0 to its caller. 
* Note that in either case, the start condition remains 
* unchanged; it does not revert to INITIAL.
*/
int yyFlexLexer::yywrap() {
    kicker->xState->setEofReached(true);
    //std::cout << "End of file reached" << std::endl;
    return 1; 
}

void ego::throwError(string err) {
    printError(string("Error: "), err);

	exit(EXIT_FAILURE);
}

void yy::parser::error(const yy::parser::location_type& loc, const std::string& msg) {
    printError(string("Parse error: "), msg);
    exit(EXIT_FAILURE);
}

void printError(string type, string msg) {
    ego::LexState *xState = kicker->xState;
    
    std::cerr << type << msg << " on line "
	    << xState->getNumLines() << " on column " << xState->columnPos
        << " on character " << xState->getNumChars()
	    << " '" << xState->getLastString() << "' "
        << std::endl
        << "at '" << xState->getLastTokens(6) << "' "
        << std::endl;
}


