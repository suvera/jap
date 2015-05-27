/*
 * FileParser.cpp
 *
 *  Created on: Feb 8, 2015
 *      Author: rnarmala
 */

#include <ego/ParsingState.hpp>
#include <ego/LexState.hpp>
#include <ego/SClass.hpp>
#include <ego/Register.hpp>
#include <ego/SemanticValidator.hpp>
#include <ego/FileParser.hpp>
#include <ego/transpiler/AstPHP.hpp>

using namespace std;
namespace fileIO = boost::filesystem;

namespace ego {

FileParser::FileParser() {
	this->rootDir = JG.PROJECT_BASE;

	this->pkgAstBase = this->astBase = JG.PROJECT_BASE_AST;
	this->pkgTargetBase = this->targetBase = JG.PROJECT_BASE_TARGET;

	make_dir(this->astBase);
	make_dir(this->targetBase);
}

FileParser::~FileParser() {
	// TODO Auto-generated destructor stub
}

/**
 * Parse File
 *
 */
int FileParser::parseFile(string filePath) {
	//cout << "parseFile started\n";

	this->classList.clear();

	ifstream yyin;
	ostream *yyout = 0;

	this->filePath = fileIO::path(filePath);

	string parentRelPath = this->filePath.parent_path().string();
	if (parentRelPath.length() > 0) {
		this->pkgAstBase = string(this->astBase + DIR_DIVIDER + parentRelPath);
		this->pkgTargetBase = string(this->targetBase + DIR_DIVIDER + parentRelPath);
		make_dir(this->pkgAstBase);
		make_dir(this->pkgTargetBase);
	}

	ClassLoader::addClassPath(this->astBase);

	std::replace(parentRelPath.begin(), parentRelPath.end(), DIR_DIVIDER, '.');
	this->pkg = parentRelPath;

	//cout << "Directory Package: " << this->pkg << "\n";


	//cout << "file object declared\n";

	yyin.open(filePath, ios::in);

	//cout << "file object created\n";

	if (!yyin.good()) {
		cerr << "Could not open input file '" << filePath << "'." << endl;
		exit(EXIT_FAILURE);
	}

	this->table = new SmartNodeGroup();

	string className = this->filePath.stem().string();
	unordered_map<string, int> pkgLoadExcludes;
	pkgLoadExcludes[className] = 1;

	ClassLoader::registerPackage(this->pkg, pkgLoadExcludes);

	this->xState = new LexState();

	this->parseState = new ParsingState();

	this->validator = new SemanticValidator(this->parseState, this->table);

	//cout << "creating lexer object\n";
	this->lexer = new yyFlexLexer(&yyin, yyout);
	//cout << "lexer object created\n";

	this->parser = new yy::parser();
	//cout << "parser object created\n";
	int success = this->parser->parse();
	//cout << "file parsed\n";

	return (EXIT_SUCCESS);
}

/**
 * Check semantics
 *
 */
int FileParser::semanticAnalyze() {
	for (int i = 0; i < this->classList.size(); i++) {
		SClass* cls = this->classList[i];
		this->validator->checkSemantics(cls);
	}

    return (EXIT_SUCCESS);
}

/**
 * Check types
 *
 */
int FileParser::checkTypes() {
	for (int i = 0; i < this->classList.size(); i++) {
		SClass* cls = this->classList[i];
		this->validator->checkTypes(cls);
	}

    return (EXIT_SUCCESS);
}

/**
 * Compile now
 *
 */
int FileParser::compile() {

	for (int i = 0; i < this->classList.size(); i++) {
		SClass* cls = this->classList[i];
		//try {
			save_class(cls, string(this->pkgAstBase + DIR_DIVIDER + cls->name + OBJ_FILE_EXT));
		//} catch(std::exception &err) {
			//std::cerr << "\nError: " << err.code << " - " << err.what() << "\n";
			//exit(EXIT_FAILURE);
		//}
	}

    AstPHP *aphp = new AstPHP(this);
    aphp->translate();

    return (EXIT_SUCCESS);
}

/**
 * Import a package
 *
 */
void FileParser::importPackage(string s) {
	this->imports.add(s, 1);
	ClassLoader::registerPackage(s);
}


/**
 * Import Class
 *
 */
void FileParser::importClass(string s) {
	this->imports.add(s, 0);
	ClassLoader::registerClass(s);
}



}
