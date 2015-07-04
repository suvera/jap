/*
 * JapGlobal.cpp
 *
 *  Created on: Mar 1, 2015
 *      Author: rnarmala
 */
// JAP Globals
struct JapGlobal {
	const std::string VERSION = "1.0.0";

	// JAP exec base dir
	std::string JAP_BASE;
	std::string JAP_BASE_AST;
	std::string JAP_BASE_TARGET;

	// Project Base dir
	std::string PROJECT_BASE;
	std::string PROJECT_BASE_AST;
	std::string PROJECT_BASE_TARGET;

	std::string JAP_HOME;
    std::string JAP_INI;

	JapGlobal() {
	    char* japHome;
        
        japHome = getenv("JAP_HOME");
        if (japHome == NULL || strlen(japHome) == 0) {
            //cerr << "JAP_HOME does not exist.\n";
            //exit(EXIT_FAILURE);
            JAP_HOME = string("/usr/local/jap");
        } else {
            JAP_HOME = string(japHome);
        }

        this->JAP_INI = string(JAP_HOME + "/jap.ini");
        
		fileIO::path japDir = fileIO::path(getexepath());
		this->JAP_BASE = japDir.parent_path().string();
		this->JAP_BASE_AST = std::string(this->JAP_BASE + DIR_DIVIDER + "ast");
		this->JAP_BASE_TARGET = std::string(this->JAP_BASE + DIR_DIVIDER + "target");

		fileIO::path projectDir = fileIO::path(fileIO::current_path());
		this->PROJECT_BASE = projectDir.string();
		this->PROJECT_BASE_AST = std::string(this->PROJECT_BASE + DIR_DIVIDER + "ast");
		this->PROJECT_BASE_TARGET = std::string(this->PROJECT_BASE + DIR_DIVIDER + "target");
    }
};
