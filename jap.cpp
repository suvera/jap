#include <iostream>
#include <string>
#include <cmdline.h>
using namespace std;

#ifndef EXIT_FAILURE
#define EXIT_FAILURE 255
#define EXIT_SUCCESS 0
#endif

int main(const int argc, char *argv[])
{
    // create a parser
    cmdline::parser cmdLine;
    cmdLine.set_program_name("jap");

    cmdLine.footer("file1 [file2] [file3] ...");
    cmdLine.add<string>("config", 'c', "ini file path", false, "");
    cmdLine.add("help", 'h', "Display Help");
    cmdLine.add("verbose", 'v', "Be verbose");

    cmdLine.parse_check(argc, argv);

    if (cmdLine.exist("help")) {
        std::cerr << cmdLine.usage();
        exit(EXIT_SUCCESS);
    }
    
    if (cmdLine.exist("verbose")) {
        cout << "Debug: On\n";
        _DEBUG = 1;
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


    vector<ego::FileParser*> fileParsers;

    // 1. Syntax Analysis
    for (int n = 0; n < files.size(); n++) {
        fileParsers.push_back(new ego::FileParser());

        kicker = fileParsers[n];

        int success = kicker->parseFile(files[n]);
    }


    // 2. Semantic Analysis
    for (int n = 0; n < files.size(); n++) {
        kicker = fileParsers[n];
        int success = kicker->semanticAnalyze();
    }

    // 3. Type Checking
    for (int n = 0; n < files.size(); n++) {
        kicker = fileParsers[n];
        int success = kicker->checkTypes();
    }


    // 4. Now Compile to target language
    for (int n = 0; n < files.size(); n++) {
        kicker = fileParsers[n];
        int success = kicker->compile();
    }

    // Done

    cout << "\nSuccess. Compiled!\n";
    
    return(EXIT_SUCCESS);
}
