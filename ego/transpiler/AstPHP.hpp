/*
 * AstPHP.hpp
 *
 *  Created on: Feb 8, 2015
 *      Author: rnarmala
 */

#ifndef ASTPHP_HPP_
#define ASTPHP_HPP_

namespace ego {

class AstProcessObject {
public:
    SClass *callingCls = NULL;
    ClassMethod *callingMethod = NULL;
    ClassVariable *callingVar = NULL;
    
    bool isCallingMethod = false;
};


class AstPHP {
private:
	void _processClassVariables(SClass*);

	void _processClassMethods(SClass*);

	void _processClassVariable(ClassVariable*, SClass*);

	void _processClassMethod(ClassMethod*, SClass*);
    
    ego::ParseNode _getNodeObject(BIGINT p);

public:

	static string EOL;
	static string TAB;
	static string EOL_CHAR;

	string output;
	string extension;
	int tab;

	bool nsEnabled = false;

	ego::FileParser *fileParser;
    
    ego::SClass *curCls = NULL;
    
    ego::ClassMethod *curMethod = NULL;

	AstPHP();
	AstPHP(ego::FileParser *kicker);
	virtual ~AstPHP();

	void translate();

	void add(string s);
	void add(const char *s);

	void addEndStmt();
	void addEndLine();
	void addTab();
	string getTab();

	void incrTab();
	void decrTab();

	void astPackage();
	void astImports();
	void astClasses();
	void astClass(SClass*);

	string astNode(ego::ParseNode *p, AstProcessObject*);
	string astNode(ego::ParseNode p, AstProcessObject*);
	string astNode(BIGINT p, AstProcessObject*);

	string astLexNode(ego::ParseNode *p);
	string astLexNode(ego::ParseNode p);

};


}

#endif /* ASTPHP_HPP_ */
