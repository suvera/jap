/*
 * JapConfig.cpp
 *
 *  Created on: Mar 1, 2015
 *      Author: rnarmala
 */
using namespace std;

struct JapConfig {

	unordered_map<string, unordered_map<string, string>> _default;

	StringMap external;

	// constructor
	JapConfig() {
		this->_init();
		this->setLogging();
	}

	~JapConfig() {
    }

	// constructor
	JapConfig(string iniFile) {
		this->_init();

		this->setIniFile(iniFile);
	}

	// ini file
	void setIniFile(string iniFile) {
		if (parseIniFile(iniFile.c_str(), external) < 0) {
			throw std::invalid_argument("Can't load ini file '" + iniFile + "'\n");
		}

		this->setLogging();
	}

	void setLogging() {
	    logger.setLogFile(this->Get("error_log"));
	    logger.setLevel(this->Get("error_level"));
	}

	// initialize default configuration values
	void _init() {
		this->_default["jap"] = {
			  { "target_lang", "php"}
			, { "target_exec", "/usr/bin/php"}
			, { "ignore_namespaces", "true"}
			, { "error_log", "/tmp/jap.log"}
			, { "error_level", "info"}
		};

		this->_default["jap"]["include_packages"] = string(
				JG.JAP_BASE_AST
				+ DIR_DIVIDER
				+ this->_default["jap"]["target_lang"]
		);
	}

	// get default value
	string _getDefault(string cat, string name) {
		try {
		    unordered_map<string, string> catList = this->_default.at(cat);
		    return catList.at(name);
		} catch (const std::out_of_range& oor) {
			logger.warn(string("Invalid ini option " + cat + "." + name));
		}

		return string("");
	}

	// get value
    string Get(const char* name) {
        return this->Get(string(name));
    }

	// get value
	string Get(string name) {
        if (external.count(name) > 0) {
            return external.at(name);
        } else {
            logger.warn(string("Invalid ini option " + name));
			return string("");
        }
	}

	long GetInteger(const char* name) {
	    return GetInteger(string(name));
	}

	// get integer
	long GetInteger(string name) {
		string valstr = this->Get(name);
		const char* value = valstr.c_str();
		char* end;

		// This parses "1234" (decimal) and also "0x4D2" (hex)
		long n = strtol(value, &end, 0);
		return n;
	}

	long GetFloat(const char* name) {
	    return GetFloat(string(name));
	}

	// get double
	double GetFloat(string name) {
		string valstr = this->Get(name);
		const char* value = valstr.c_str();
		char* end;

		double n = strtod(value, &end);
		return n;
	}

	long GetBool(const char* name) {
	    return GetBool(string(name));
	}

	// get boolean
	bool GetBool(string name) {
		string valstr = this->Get(name);

		// Convert to lower case to make string comparisons case-insensitive
		std::transform(valstr.begin(), valstr.end(), valstr.begin(), ::tolower);

		if (valstr == "true" || valstr == "yes" || valstr == "on" || valstr == "1") {
			return true;
		} else if (valstr == "false" || valstr == "no" || valstr == "off" || valstr == "0") {
			return false;
		} else {
			return false;
		}
	}
};
