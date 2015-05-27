/*
 * ego.h
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */
#include <ctime>
#include <cstdio>
#include <cstdlib>
#include <iostream>
#include <limits.h>
#include <unistd.h>
#include <cstddef> // NULL
#include <iomanip>
#include <cstdlib>
#include <fstream>
#include <string>
#include <vector>
#include <map>
#include <unordered_map>
#include <stdexcept>

// Boost includes
#include <boost/filesystem.hpp>
#include <boost/algorithm/string.hpp>
#include <boost/algorithm/string/split.hpp>
#include <boost/algorithm/string/replace.hpp>

// cereal includes
#include <cereal/types/memory.hpp>
#include <cereal/types/unordered_map.hpp>
#include <cereal/types/map.hpp>
#include <cereal/types/vector.hpp>
#include <cereal/types/string.hpp>
#include <cereal/types/complex.hpp>
// for doing the actual serialization
#include <cereal/archives/binary.hpp>
#include <cereal/archives/json.hpp>
#include <cereal/archives/portable_binary.hpp>
#include <cereal/archives/xml.hpp>

//inih includes
#include <ini.h>
#include <ini.c>
#include <cpp/INIReader.h>
#include <cpp/INIReader.cpp>

using namespace std;

#include <ego/Map.h>

typedef unsigned long BIGINT;

#ifndef EGO_H_
#define EGO_H_

#define AST_ADD 1
#define AST_SUB 2
#define AST_MUL 3
#define AST_DIV 4
#define AST_MOD 5

#define AST_GT 6
#define AST_LT 7

#define AST_AND 8
#define AST_OR 9
#define AST_XOR 10
#define AST_NEGATION 11

#define AST_CONCAT 12

#define AST_AND_AND 13
#define AST_OR_OR 14
#define AST_LT_OR_EQ 16
#define AST_GT_OR_EQ 17
#define AST_EQUAL 18
#define AST_NOT_EQUAL 19
#define AST_IDENTICAL 20
#define AST_NOT_IDENTICAL 21

#define AST_EMPTY_ARGS 30
#define AST_ACTUAL_ARGS 31
#define AST_ACTUAL_ARG 32
#define AST_ACTUAL_ARG_LIST 33

#define AST_ARRAY_MULTI 43
#define AST_ARRAY_INDEX_EXPR 44
#define AST_ARRAY_INDEX_EMPTY 45

#define AST_LOCAL_VARIABLE 46
#define AST_THIS_VARIABLE 47
#define AST_STATIC_VARIABLE 48
#define AST_OBJECT_ATRIBUTE 49
#define AST_METHOD_CALL 50
#define AST_NEW_OBJECT 51
#define AST_ASSIGNMENT 52
#define AST_INCR_DECR 53
#define AST_RIGHT_ASSIGNMENT 54
#define AST_METHOD_NO_BODY 55


#define AST_OBJECT_PROPERTY_ACCESS 60
#define AST_OBJECT_PROPERTY_CHAIN 61
#define AST_STATIC_PROPERTY_CHAIN 62
#define AST_STATIC_METHOD_CALL 63
#define AST_SELF_STATIC_VARIABLE 64
#define AST_STATIC_ARRAY_VARIABLE 65
#define AST_LOCAL_ARRAY_VARIABLE 66

#define AST_SHIFT_LEFT 67
#define AST_SHIFT_RIGHT 68

#define AST_STATEMENTS 100
#define AST_VAR_DEFINE_STMT 101
#define AST_IF_STMT 102
#define AST_WHILE_STMT 103
#define AST_DO_WHILE_STMT 104
#define AST_SWITCH_STMT 105
#define AST_BREAK_STMT 106
#define AST_CONTINUE_STMT 107
#define AST_TRY_CATCH_STMT 108
#define AST_THROW_STMT 109
#define AST_ASSIGNMENT_STMT 110
#define AST_ECHO_STMT 111
#define AST_RETURN_STMT 112
#define AST_EXPR_STMT 113
#define AST_EMPTY_STMT 114
#define AST_MULTI_CASE_STMT 115
#define AST_MULTI_CATCH_STMT 116
#define AST_IF_ELSE_IF_STMT 117
#define AST_IF_ELSE_IF_ELSE_STMT 118
#define AST_ELSE_IF_STMT 119
#define AST_ELSE_STMT 120
#define AST_CASE_STMT 121
#define AST_DEFAULT_STMT 122
#define AST_CASE_STMT_WITH_BODY 123
#define AST_MULTI_CASE_STMT_WITH_BODY 124
#define AST_CATCH_STMT 125
#define AST_FINALLY_STMT 126

#define AST_ARRAY_OF_DATA 127
#define AST_SARRAY_OF_DATA 128
#define AST_SARRAY_MAP 129
#define AST_ARRAY_OF_DATA_WRAPPER 130
#define AST_SARRAY_OF_DATA_WRAPPER 131


#define AST_INTEGER 150
#define AST_DOUBLE 151
#define AST_BOOLEAN 152
#define AST_STRING 153
#define AST_NULL 154
#define AST_QUALYFIED_NAME 155
#define AST_VAR_DEFINITION 156
#define AST_VAR_DEFINE 157
#define AST_VAR_DEFINE_MULTIPLE 158
#define AST_VAR_DEFINE_EXPR 159


#define AST_DATA_TYPE_INT 200
#define AST_DATA_TYPE_FLOAT 201
#define AST_DATA_TYPE_BOOL 202
#define AST_DATA_TYPE_STRING 203
#define AST_DATA_TYPE_OBJECT 204
#define AST_DATA_TYPE_ARRAY 205
#define AST_DATA_TYPE_SARRAY 206
#define AST_DATA_TYPE_ACTUAL_HINT_LIST 207
#define AST_DATA_TYPE_OBJECT_GENERICS 208
#define AST_DATA_TYPE_GENERIC_HINT_NAME 209
#define AST_DATA_TYPE_FORMAL_HINT_LIST 210
#define AST_DATA_TYPE_VOID 211


#define OBJ_FILE_EXT ".obj"
#define OBJ_FILE_EXT_NO_DOT "obj"
#define JAP_FILE_EXT ".jap"
#define JAP_FILE_EXT_NO_DOT "jap"
#define DIR_DIVIDER '/'

#define DATA_TYPE_INT "int"
#define DATA_TYPE_FLOAT "float"
#define DATA_TYPE_BOOL "bool"
#define DATA_TYPE_STRING "string"
#define DATA_TYPE_ARRAY "array"
#define DATA_TYPE_SARRAY "sarray"
#define DATA_TYPE_VOID "void"

#define DATA_VALUE_NULL "null"

#define CLASS_CONSTRUCTOR "__construct"

#ifndef EXIT_FAILURE
#define EXIT_FAILURE 255
#define EXIT_SUCCESS 0
#endif


/**
* Common functions
*/
const std::string currentDateTime() {
    time_t     now = time(0);
    struct tm  tstruct;
    char       buf[80];
    tstruct = *localtime(&now);
    strftime(buf, sizeof(buf), "%Y-%m-%d %X", &tstruct);

    return buf;
}

std::string toLower(std::string s) {
    std::transform(s.begin(), s.end(), s.begin(), ::tolower);
    return s;
}

std::string toUpper(std::string s) {
    std::transform(s.begin(), s.end(), s.begin(), ::toupper);
    return s;
}

std::vector<string> explode(string src, string chars) {
	std::vector<std::string> strs;

	boost::split(strs, src, boost::algorithm::is_any_of(chars));

	return strs;
}


std::string str_replace(string search, string replace, string subject) {
	boost::replace_all(subject, search, replace);

	return subject;
}

std::string str_replace_last(string search, string replace, string subject) {
	boost::replace_last(subject, search, replace);

	return subject;
}

std::string str_replace_first(string search, string replace, string subject) {
	boost::replace_last(subject, search, replace);

	return subject;
}

std::string add_slashes(string subject) {
    std::string ret;
    unsigned long len = subject.size();
    ret.reserve(len);

    for (unsigned long i = 0; i < len; i++) {
        if (subject[i] == '"' || subject[i] == '\\') {
            ret += '\\';
        }
        ret += subject[i];
    }

	return ret;
}


namespace fileIO = boost::filesystem;

/// get this exe path

std::string getexepath() {
	char result[ PATH_MAX ];
	ssize_t count = readlink( "/proc/self/exe", result, PATH_MAX );
	return std::string( result, (count > 0) ? count : 0 );
}

#include <ego/JapGlobal.cpp>

// really global variable
#include <ego/JapLogger.cpp>
extern JapLogger logger;
JapLogger logger;
extern JapGlobal JG;
JapGlobal JG;
#include <ego/JapConfig.cpp>
extern JapConfig JC;
JapConfig JC;
#include <ego/ParseNode.cpp>


/**
 * Header for ego namespace
 *
 */
namespace ego {

	// Class Short Name => PkgName
	typedef std::unordered_map<std::string, std::string> classesByPkg;

	namespace transpiler {

	}

	void throwError(std::string err);

	void die(std::string err) {
		std::cerr << err << std::endl;
		exit(EXIT_FAILURE);
	}

	template<class SCLS> SCLS* GetClass(std::string);

	/**
	 * Find Class name from Package name
	 */
	std::string findClassName(std::string pkgName) {
		unsigned found = pkgName.find_last_of(".");

		if (found != std::string::npos) {
			return pkgName.substr(found+1);
		}

		return pkgName;
	}

	/**
	 * Find Package name from Full Class name
	 */
	std::string findPkgName(std::string clsName) {
		unsigned found = clsName.find_last_of(".");

		if (found != std::string::npos) {
			return clsName.substr(0, found);
		}

		return std::string("");
	}

	int make_dir(std::string s) {

		if (s.length() && !fileIO::exists(s)) {
			try {
				fileIO::create_directory(s);
				//std::cout << "Directory Created: " << s << std::endl;
			} catch(fileIO::filesystem_error &e) {
				die(std::string("Unable to create directory: " + s + ", " + string(e.what())));
			}
		}

		return 1;
	}

	std::unordered_map<std::string, std::string> scan_dir_files(std::string s) {
		//std::cout << "in scan_dir_files\n";
		std::unordered_map<std::string, std::string> list;

		if (fileIO::exists(s)) {

			//std::cout << "dir exists : " << s << std::endl;

			fileIO::directory_iterator it{s};
			fileIO::directory_iterator end_itr;

			//std::cout << "directory_iterator created " << std::endl;
			while (it != end_itr) {

				//std::cout << "file/dir found: " << it->path().filename().string() << std::endl;
				if (fileIO::is_regular_file(it->status())) {
					//std::cout << "it is regular file: " << it->path().filename().string() << std::endl;
					std::string name = it->path().filename().string();
					//std::cout << "placing file in to unordered list " << name << std::endl;
					list[name] = it->path().string();
					//std::cout << "placed file in to unordered list " << it->path().string() << std::endl;
				}

				++it;
			}
		}

		return list;
	}

	/**
	 * Find classes in a folder
	 */
	std::vector<std::string> findClasses(std::string dir) {
		std::vector<std::string> list;

		if (fileIO::exists(dir)) {

			fileIO::directory_iterator it{dir};
			fileIO::directory_iterator end_itr;

			while (it != end_itr) {

				if (fileIO::is_regular_file(it->status())
					&& it->path().has_extension()
					&& it->path().extension().compare(OBJ_FILE_EXT) == 0) {

					list.push_back(it->path().stem().string());
				}

				++it;
			}
		}

		return list;
	}

	/**
	 * find classes by package
	 */
	std::vector<std::string> findClassesPkg(std::string);

	/**
	 * get class name from full package name
	 */
	std::string classNameByPkg(std::string fullName) {
		unsigned pos = fullName.find_last_of('.');
		if (pos == std::string::npos) {
			return fullName;
		}

		return fullName.substr(pos+1);
	}

}

#endif /* EGO_H_ */
