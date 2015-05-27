/*
 * japp.cpp
 *
 *  Created on: Feb 18, 2015
 *      Author: rnarmala
 */
#include <ego/ego.h>
//#include <stdio.h>
#include <ego/Variable.cpp>
#include <ego/ClassVariable.cpp>
#include <ego/ClassMethod.cpp>
#include <ego/SClass.cpp>
#include <ego/Register.cpp>
#include <ego/ClassLoader.cpp>
#include <cmdline.h>

using namespace std;

int exec(const char* cmd) {
    FILE* pipe = popen(cmd, "r");

    if (!pipe) {
    	return 0;
    }

    char buffer[128];

    while (!feof(pipe)) {
    	if (fgets(buffer, 128, pipe) != NULL) {
    		cout << buffer;
    	}
    }

    pclose(pipe);

    return 1;
}



void ego::throwError(string err) {
    cerr << "Error: " << err;

    logger.error(err);

	exit(EXIT_FAILURE);
}




int main(const int argc, char* argv[]) {
    // create a parser
    cmdline::parser cmdLine;
    cmdLine.set_program_name("jap");

    cmdLine.footer("file");
    cmdLine.add<string>("config", 'c', "ini file path", false, "");
    cmdLine.add("help", 'h', "Display Help");
    cmdLine.add("verbose", 'v', "Be verbose");

    cmdLine.parse_check(argc, argv);

    if (cmdLine.exist("help")) {
        std::cerr << cmdLine.usage();
        exit(EXIT_SUCCESS);
    }

    string config = cmdLine.get<string>("config");
    if (config.size() > 0 ) {
        JC.setIniFile(config);
    }

    vector<string> files;
    for (int i = 0; i < cmdLine.rest().size(); i++) {
        files.push_back(string(cmdLine.rest()[i]));
    }

    if (files.size() == 0) {
        cerr << "No input file specified.\n";
        return(EXIT_FAILURE);
    }

	string TARGET_EXEC = JC.Get("target_exec");

	string className = files[0];
	string classFile;

	if (className.size() > strlen(JAP_FILE_EXT) && className.substr(className.size() - strlen(JAP_FILE_EXT)) == JAP_FILE_EXT) {
        classFile = className;
        className = className.substr(0, className.size() - strlen(JAP_FILE_EXT));
	} else {
	    classFile = string(className + JAP_FILE_EXT);
	}

	fileIO::path filePath = fileIO::path(classFile);

	if (!fileIO::exists(filePath)) {
		ego::throwError(string("Could not find input file\n" ));
	}

	string astBase = string(JG.PROJECT_BASE + DIR_DIVIDER + "ast");
	string targetBase = string(JG.PROJECT_BASE + DIR_DIVIDER + "target");

	ego::Register *r = new ego::Register();

	ego::ClassLoader::addClassPath(astBase);
	ego::ClassLoader::registerClass(className);
	ego::ClassLoader::loadClass(className);

	string cmd;

	cmd.append(TARGET_EXEC);
	cmd.append(" \"" + JG.JAP_HOME
			+ DIR_DIVIDER + "target_lib"
			+ DIR_DIVIDER + "php" + DIR_DIVIDER + "run.php\"");
	cmd.append(" \"" + add_slashes(JG.JAP_HOME) + "\"");
	cmd.append(" \"" + add_slashes(JG.PROJECT_BASE) + "\"");
	cmd.append(" \"" + add_slashes(targetBase) + DIR_DIVIDER + className + ".php\"");
	cmd.append(" \"" + files[0] + "\"");

	for (int i = 1; i < files.size(); i++) {
		cmd.append(" \"" + add_slashes(files[i]) + "\"");
	}

	if (cmdLine.exist("verbose")) {
	    cout << "Command: " << cmd << "\n\n";
	}

    exec(cmd.c_str());
	//system(cmd.c_str());
}
