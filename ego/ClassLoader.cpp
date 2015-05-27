/*
 * ClassLoader.cpp
 *
 *  Created on: Feb 9, 2015
 *      Author: rnarmala
 */

#include <ego/ClassLoader.hpp>

namespace fileIO = boost::filesystem;

namespace ego {

// known types
classesByPkg ClassLoader::knownTypes = {
		{DATA_TYPE_INT, DATA_TYPE_INT},
		{DATA_TYPE_FLOAT, DATA_TYPE_FLOAT},
		{DATA_TYPE_BOOL, DATA_TYPE_BOOL},
		{DATA_TYPE_STRING, DATA_TYPE_STRING},
		{DATA_TYPE_ARRAY, DATA_TYPE_ARRAY},
		{DATA_TYPE_SARRAY, DATA_TYPE_SARRAY},
		{DATA_TYPE_VOID, DATA_TYPE_VOID}
};

// Path directories to find the classes/packages
vector<string> ClassLoader::classPaths;

// Full name to Path map
unordered_map<string, string> ClassLoader::toBeLoaded;

// Full name to Class object
unordered_map<string, SClass*> ClassLoader::loaded;

// Loaded package list
unordered_map<string, int> ClassLoader::loadedPkgs;



/* Method implementations */

bool ClassLoader::hasType(string typeName) {
	try {
		ClassLoader::knownTypes.at(typeName);
		return true;
	} catch (const std::out_of_range& oor) {
	}

	try {
		ClassLoader::toBeLoaded.at(typeName);
		return true;
	} catch (const std::out_of_range& oor) {
	}

	return false;
}

/**
 * is known type ?
 */
bool ClassLoader::isKnownType(string typeName) {
    typeName = toLower(typeName);
    try {
        ClassLoader::knownTypes.at(typeName);
        return true;
    } catch (const std::out_of_range& oor) {
    }

    return false;
}

/**
 * Register a class with it's fullName
 */
void ClassLoader::registerClass(string fullName, bool force=false) {
    if (ClassLoader::classPaths.size() == 0) {
        ego::die(string("ClassPath is empty"));
    }

    if (!force && ClassLoader::toBeLoaded.find(fullName) != ClassLoader::toBeLoaded.end() ) {
        // already loaded
        return;
    }

    string s = fullName;

    std::replace(s.begin(), s.end(), '.', DIR_DIVIDER);

    ClassLoader::toBeLoaded[fullName] = s;
}

/**
 * Register a class with it's fullName
 */
void ClassLoader::registerClass(SClass* cls, bool force=false) {
	try {

	    if (force) {
            throw std::out_of_range("force update");
	    }

		ClassLoader::loaded.at(cls->getFullName());
	} catch (const std::out_of_range& oor) {
        ClassLoader::registerClass(cls->getFullName());
        ClassLoader::loaded[cls->getFullName()] = cls;
	}
}

/**
 * Get class object by full name
 */
SClass* ClassLoader::getClass(string fullName) {
	try {
		return ClassLoader::loaded.at(fullName);
	} catch (const std::out_of_range& oor) {
        ClassLoader::loadClass(fullName);

        return ClassLoader::loaded.at(fullName);
	}
}

/**
 * Load class object
 */
void ClassLoader::loadClass(string fullName) {

    if (ClassLoader::classPaths.size() == 0) {
        ego::die(string("ClassPath is empty"));
    }

    string s;

	try {
		s = ClassLoader::toBeLoaded.at(fullName);
	} catch (const std::out_of_range& oor) {
		ego::die(string("No Class found " + fullName));
	}


	try {
		ClassLoader::loaded.at(fullName);

		// already loaded
		return;
	} catch (const std::out_of_range& oor) {
		// load now
	}

	int resolved = 0;

	for (auto path = ClassLoader::classPaths.begin(); path != ClassLoader::classPaths.end(); path++ ) {
		string classPath = string(*path + DIR_DIVIDER + s + OBJ_FILE_EXT);

		if (fileIO::exists(classPath)) {
			SClass *cls = ego::restore_class(classPath);

            ClassLoader::loaded[cls->getFullName()] = cls;
			resolved = 1;
			break;
		}
	}

	if (!resolved) {
		ego::die(string("ClassLoader: Could not load class '" + fullName + "', Class does not exist."));
	}
}


/**
 * register whole package
 */
void ClassLoader::registerPackage(string pkg, unordered_map<string, int> excludes = unordered_map<string, int>()) {
	if (pkg.length() <= 0) {
		return;
	}

	if (ClassLoader::classPaths.size() == 0) {
		ego::die(string("ClassPath is empty"));
	}

	string s = pkg;

	std::replace(s.begin(), s.end(), '.', DIR_DIVIDER);

	for (auto path = ClassLoader::classPaths.begin(); path != ClassLoader::classPaths.end(); path++ ) {

		unordered_map<string, string> list = scan_dir_files(string(*path + DIR_DIVIDER + s));

		for ( auto it = list.begin(); it != list.end(); ++it ) {
			fileIO::path classPath (it->second);

			if (classPath.has_extension() && classPath.extension().compare(OBJ_FILE_EXT) == 0
					&& excludes.count(classPath.stem().string()) == 0 ) {

                ClassLoader::registerClass(string(pkg + "." + str_replace_last(it->first, OBJ_FILE_EXT, string(""))));
			}
		}
	}
}

/**
 * Load whole package
 */
void ClassLoader::loadPackage(string pkg, bool throwError = true, unordered_map<string, int> excludes = unordered_map<string, int>()) {
	if (pkg.length() <= 0) {
		return;
	}

	if (ClassLoader::classPaths.size() == 0) {
		ego::die(string("ClassPath is empty"));
	}

	if (ClassLoader::loadedPkgs.find(pkg) != ClassLoader::loadedPkgs.end()) {
		return;
	}

	string s = pkg;
	int resolved = 0;

	std::replace(s.begin(), s.end(), '.', DIR_DIVIDER);

	for (auto path = ClassLoader::classPaths.begin(); path != ClassLoader::classPaths.end(); path++ ) {

		unordered_map<string, string> list = scan_dir_files(string(*path + DIR_DIVIDER + s));

		for ( auto it = list.begin(); it != list.end(); ++it ) {
			fileIO::path classPath (it->second);

			if (classPath.has_extension() && classPath.extension().compare(OBJ_FILE_EXT) == 0
					&& excludes.count(classPath.stem().string()) == 0 ) {

				SClass *cls = ego::restore_class(classPath.string());

				ClassLoader::loaded[cls->getFullName()] = cls;
			}

			resolved = 1;
		}
	}

	if (throwError && !resolved) {
		ego::die(string("ClassLoader: Could not resolve package '" + pkg + "' or Package does not exist."));
	}

	ClassLoader::loadedPkgs[pkg] = 1;
}

/**
 * Add Class/Package search folder
 */
void ClassLoader::addClassPath(string path) {
	ClassLoader::classPaths.push_back(path);
}


template<class SCLS> SCLS* GetClass(string fullName) {
	return ClassLoader::getClass(fullName);
}


/**
 * Find classes in a package
 */
vector<std::string> findClassesPkg(std::string pkg) {
	string pkgDir;
	vector<std::string> a;

	string pkgPath = pkg;
	std::replace(pkgPath.begin(), pkgPath.end(), '.', DIR_DIVIDER);

	for (int i=0; i < ClassLoader::classPaths.size(); i++) {
		pkgDir = string(ClassLoader::classPaths[i] + DIR_DIVIDER + pkgPath);

		if (fileIO::exists(pkgDir)) {
			if (pkgDir.length() > 0) {
				vector<std::string> b = findClasses(pkgDir);

				if (b.size() > 0) {
					a.reserve(a.size() + b.size());
					a.insert(a.end(), b.begin(), b.end());
				}
			}
		}
	}

	return a;
}



}
