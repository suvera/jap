/*
 * ClassLoader.hpp
 *
 *  Created on: Feb 9, 2015
 *      Author: rnarmala
 */

#ifndef CLASSLOADER_HPP_
#define CLASSLOADER_HPP_

namespace ego {

class ClassLoader {
public:

    // known types
    static classesByPkg knownTypes;

    // Path directories to find the classes/packages
	static vector<string> classPaths;

    // Full name to Path map
    static unordered_map<string, string> toBeLoaded;

    // Full name to Class object
	static unordered_map<string, SClass*> loaded;

	// Full Package name list
	static unordered_map<string, int> loadedPkgs;


    /* Methods */
    static void registerClass(string fullName, bool);

    static void registerClass(SClass*, bool);

	static void loadClass(string fullName);

	static SClass* getClass(string fullName);

    static void registerPackage(string pkg, unordered_map<string, int> excludes);

	static void loadPackage(string pkg, bool throwError, unordered_map<string, int> excludes);

    static bool hasType(string);

    static bool isKnownType(string);

	static void addClassPath(string path);
};

}

#endif /* CLASSLOADER_HPP_ */
