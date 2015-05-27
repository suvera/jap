/*
 * japx.cpp
 *
 *  Created on: Mar 1, 2015
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

using namespace std;

void ego::throwError(string err) {
    cerr << "Error: " << err;

	exit(EXIT_FAILURE);
}

int main(const int argc, const char* argv[]) {

	if (argc < 2) {
		ego::throwError(string("Could not open input file\n" ));
	}
	string className = argv[1];
	string classFile = string(className + OBJ_FILE_EXT);

	fileIO::path japDir = fileIO::path(getexepath());
	string baseDir = japDir.parent_path().string();
	cout << "exe base: " << baseDir << "\n";

	string filename = string(baseDir + "/ast/" + classFile);

	if (!fileIO::exists(filename)) {
		ego::throwError(string("Could not find input file. " + filename + "\n"));
	}

	cout << "obj filename: " << filename << "\n";

    std::ifstream ifs(filename);
    ego::SClass *s = new ego::SClass();

    if (ifs.good() && ifs.is_open()) {
    	cereal::BinaryInputArchive ar(ifs);
		// restore the SClass from the archive
    	ar(*s);
    }

    cout << "class name: " << s->name << "\n";

	filename = string(baseDir + "/ast/" + className + ".xml");
	cout << "xml filename: " << filename << "\n";

	std::ofstream os(filename);
	if (os.good()) {
		cereal::XMLOutputArchive ar(os);
		ar( *s );
	}
}
