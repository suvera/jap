/*
 * Variable.hpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */

#ifndef VARIABLE_HPP_
#define VARIABLE_HPP_

namespace ego {


/* NameWithGenerics */
class NameWithGenerics {
private:
	friend class cereal::access;
    template<class Archive>
    void serialize(Archive & ar)
    {
        ar(
        	CEREAL_NVP(name)
			, CEREAL_NVP(genericTypes)
			, CEREAL_NVP(caseLessName)
			, CEREAL_NVP(isGeneric)
			, CEREAL_NVP(isKnown)
        );
    }
public:
	string name;
	vector<BIGINT> genericTypes;
	string caseLessName;
	bool isGeneric = false;
	bool isKnown = false;
	bool isVoid = false;

	NameWithGenerics() {
		this->isGeneric = false;
		this->isKnown = false;
		this->isVoid = false;
	}

	NameWithGenerics(string n) {
		this->name = n;
		this->caseLessName = n;
		this->isGeneric = false;
		this->isKnown = false;
		this->isVoid = false;
	}

	template<class VARTABLE> string getQualified(VARTABLE* table);
};

/* TypeGenericGroup */
class TypeGenericGroup {
private:
	friend class cereal::access;
    template<class Archive>
    void serialize(Archive & ar)
    {
        ar(
        	CEREAL_NVP(items)
        );
    }
public:
	vector<NameWithGenerics> items;

	TypeGenericGroup() {
		NameWithGenerics a;
		this->items.push_back(a);
	}

	NameWithGenerics getItem(BIGINT a) {
		return this->items[a];
	}

	BIGINT addItem(NameWithGenerics a) {
		BIGINT i = this->items.size();
		this->items.push_back(a);

		return i;
	}
};

// implement getQualified here
template<class VARTABLE> string NameWithGenerics::getQualified(VARTABLE* table) {
	string s;

	if (this->isGeneric) {
		s.append("?");
	}

	s.append(this->name);

	BIGINT size = this->genericTypes.size();
	if (size > 0) {
		s.append("<");

		for (BIGINT i=0; i < size; i++) {
			NameWithGenerics item = table->getItem(i);

			s.append(item.getQualified<VARTABLE>(table));

			if (i < size-1) {
				s.append(",");
			}
		}

		s.append(">");
	}

	return s;
};

/**
 * For Local Variables
 */
class Variable {
private:
	friend class cereal::access;
    template<class Archive>
    void serialize(Archive & ar)
    {
    	ar(CEREAL_NVP(name)
			, CEREAL_NVP(type)
			, CEREAL_NVP(qualifiedType)
			, CEREAL_NVP(typeTable)
			, CEREAL_NVP(value)
			, CEREAL_NVP(isFormal)
			, CEREAL_NVP(caseLessName)
			, CEREAL_NVP(clsName)
			, CEREAL_NVP(methodName)
    	);
    }
public:
	string name;
	string caseLessName;

	// primary type
	string type;
	
	NameWithGenerics qualifiedType;
	
	TypeGenericGroup typeTable;

    // *Note: This will not contain the value in parsing phase
	string value;
    BIGINT valNode;

	bool isFormal;

    string clsName;

    string methodName;

	//NameWithGenerics qualifiedTypeRight;
	//TypeGenericGroup typeTableRight;


	/* methods */
    bool getIsFormal() const;
    void setIsFormal(bool isFormal);

	Variable();

    string getName() const;

    string getType() const;

    string getValue() const;

    void setName(string name);

    void setType(string type);

    void setValue(string value);

    Variable(string v, string t);
    
    void initAll();

    string getQualifiedType();

};

//CEREAL_REGISTER_TYPE(ego::Variable);

}

#endif /* VARIABLE_HPP_ */
