/*
 * FileParser.hpp
 *
 *  Created on: Feb 8, 2015
 *      Author: rnarmala
 */

#ifndef FILEPARSER_HPP_
#define FILEPARSER_HPP_

namespace ego {

class FileParser {
public:
	// File package name
	string pkg;

	string astBase;

	string targetBase;

	string pkgAstBase;
	string pkgTargetBase;

	// current parsing class in this file
	SClass *cls;
	string clsName;
	vector<SClass*> classList;

	IMap imports;

	yyFlexLexer *lexer;

	LexState *xState;

	yy::parser *parser;

	ParsingState *parseState;

	SmartNodeGroup* table;

	SemanticValidator* validator;

	boost::filesystem::path rootDir;
	boost::filesystem::path filePath;


	FileParser();

	virtual ~FileParser();

	int parseFile(string filePath);

	int semanticAnalyze();

	int checkTypes();

	int compile();

	void importPackage(string s);

	void importClass(string s);

};

}

#endif /* FILEPARSER_HPP_ */
