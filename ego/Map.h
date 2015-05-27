/*
 * Map
 *
 *  Created on: Mar 14, 2015
 *      Author: rnarmala
 */

#ifndef MAP_
#define MAP_

namespace ego {

/**
 * String Map
 */
class SMap {
private:
	friend class cereal::access;

    template<class Archive>
    void serialize(Archive & ar)
    {
        ar(
            CEREAL_NVP(iMap)
            , CEREAL_NVP(iList)
        );
    }
public:

	std::unordered_map<string, string> iMap;
	std::vector<string> iList;

    /**
     * add key => value pair
     */
    bool add(string key, string val) {
    	try {
    		iMap.at(key);
    		return false;
    	} catch (const std::out_of_range& oor) {
    		iMap[key] = val;
    		iList.push_back(key);
    		return true;
    	}
    }

    /**
     * replace key and value
     */
    bool replace(string key, string val) {
    	iMap[key] = val;
		iList.push_back(key);
		return true;
    }

    /**
     * return map size
     */
    unsigned size() {
    	return iList.size();
    }

    /**
     * return element at the position
     */
    string at(unsigned i) {
    	return iMap.at(iList[i]);
    }

    /**
	 * return value by key
	 */
	string at(string key) {
		return iMap.at(key);
	}

    /**
	 * return key at the position
	 */
	string key(unsigned i) {
		return iList[i];
	}

	/**
	 * does key exist
	 */
	bool hasKey(string key) {
		try {
			iMap.at(key);
			return true;
		} catch (const std::out_of_range& oor) {
		}

		return false;
	}

	/**
	 * does key exist
	 */
	bool hasKey(int i) {
		try {
			iList.at(i);
			return true;
		} catch (const std::out_of_range& oor) {
		}

		return false;
	}

	/**
	 * clear the internal lists/maps
	 */
	void clear() {
		iList.clear();
		iMap.clear();
	}
};


/**
 * Integer Map
 */
class IMap {
private:
	friend class cereal::access;

    template<class Archive>
    void serialize(Archive & ar)
    {
        ar(
            CEREAL_NVP(iMap)
            , CEREAL_NVP(iList)
        );
    }

public:
    std::unordered_map<string, int> iMap;
    std::vector<string> iList;

    /**
     * add key => value pair
     */
    bool add(string key, int val) {
    	try {
    		iMap.at(key);
    		return false;
    	} catch (const std::out_of_range& oor) {
    		iMap[key] = val;
    		iList.push_back(key);
    		return true;
    	}
    }

    /**
     * replace key and value
     */
    bool replace(string key, int val) {
    	iMap[key] = val;
		iList.push_back(key);
		return true;
    }


    /**
     * return map size
     */
    unsigned size() {
    	return iList.size();
    }

    /**
     * return element at the position
     */
    int at(unsigned i) {
    	return iMap.at(iList[i]);
    }

    /**
	 * return value by key
	 */
	int at(string key) {
		return iMap.at(key);
	}

    /**
	 * return key at the position
	 */
	string key(unsigned i) {
		return iList[i];
	}

	/**
	 * does key exist
	 */
	bool hasKey(string key) {
		try {
			iMap.at(key);
			return true;
		} catch (const std::out_of_range& oor) {
		}

		return false;
	}

	/**
	 * does key exist
	 */
	bool hasKey(int i) {
		try {
			iList.at(i);
			return true;
		} catch (const std::out_of_range& oor) {
		}

		return false;
	}

	/**
	 * clear the internal lists/maps
	 */
	void clear() {
		iList.clear();
		iMap.clear();
	}
};




/**
 * Pointer Map
 */
template <class MAPTYPE>
class PtrMap {
public:
    std::unordered_map<string, MAPTYPE*> iMap;
    std::vector<string> iList;

    /**
     * add key => value pair
     */
    bool add(string key, MAPTYPE* val) {
    	try {
    		iMap.at(key);
    		return false;
    	} catch (const std::out_of_range& oor) {
    		iMap[key] = val;
    		iList.push_back(key);
    		return true;
    	}
    }

    /**
     * replace key and value
     */
    bool replace(string key, MAPTYPE* val) {
    	iMap[key] = val;
		iList.push_back(key);
		return true;
    }


    /**
     * return map size
     */
    unsigned size() {
    	return iList.size();
    }

    /**
     * return element at the position
     */
    MAPTYPE* at(unsigned i) {
    	return iMap.at(iList[i]);
    }

    /**
	 * return value by key
	 */
    MAPTYPE* at(string key) {
		return iMap.at(key);
	}

    /**
	 * return key at the position
	 */
	string key(unsigned i) {
		return iList[i];
	}

	/**
	 * does key exist
	 */
	bool hasKey(string key) {
		try {
			iMap.at(key);
			return true;
		} catch (const std::out_of_range& oor) {
		}

		return false;
	}

	/**
	 * does key exist
	 */
	bool hasKey(int i) {
		try {
			iList.at(i);
			return true;
		} catch (const std::out_of_range& oor) {
		}

		return false;
	}

	/**
	 * clear the internal lists/maps
	 */
	void clear() {
		iList.clear();
		iMap.clear();
	}
};

/**
 * Object Map
 */
template <class MAPTYPE>
class ObjectMap {
public:
    std::unordered_map<string, MAPTYPE> iMap;
    std::vector<string> iList;

    /**
     * add key => value pair
     */
    bool add(string key, MAPTYPE val) {
    	try {
    		iMap.at(key);
    		return false;
    	} catch (const std::out_of_range& oor) {
    		iMap[key] = val;
    		iList.push_back(key);
    		return true;
    	}
    }

    /**
     * replace key and value
     */
    bool replace(string key, MAPTYPE val) {
    	iMap[key] = val;
		iList.push_back(key);
		return true;
    }


    /**
     * return map size
     */
    unsigned size() {
    	return iList.size();
    }

    /**
     * return element at the position
     */
    MAPTYPE at(unsigned i) {
    	return iMap.at(iList[i]);
    }

    /**
	 * return value by key
	 */
    MAPTYPE at(string key) {
		return iMap.at(key);
	}

    /**
	 * return key at the position
	 */
	string key(unsigned i) {
		return iList[i];
	}

	/**
	 * does key exist
	 */
	bool hasKey(string key) {
		try {
			iMap.at(key);
			return true;
		} catch (const std::out_of_range& oor) {
		}

		return false;
	}

	/**
	 * does key exist
	 */
	bool hasKey(int i) {
		try {
			iList.at(i);
			return true;
		} catch (const std::out_of_range& oor) {
		}

		return false;
	}

	/**
	 * clear the internal lists/maps
	 */
	void clear() {
		iList.clear();
		iMap.clear();
	}
};



}

#endif /* MAP_ */
