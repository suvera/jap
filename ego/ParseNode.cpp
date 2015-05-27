/*
 * ParseNode.cpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */
#include <iostream>
#include <string>
#include <vector>
#include <map>
#include <unordered_map>
using namespace std;

namespace ego {

typedef struct _SmartNode {
	int astType;

	int sType;

	string sVal;

	BIGINT op1;

	BIGINT op2;

	BIGINT op;

	_SmartNode() {
		this->astType = 0;
		this->op1 = 0;
		this->op2 = 0;
		this->op = 0;
		this->sType = 0;
		this->sVal = "";
	}

	_SmartNode(int a) {
		this->astType = a;
		this->op1 = 0;
		this->op2 = 0;
		this->op = 0;
		this->sType = 0;
		this->sVal = "";
	}

	_SmartNode(int a, BIGINT b) {
		this->astType = a;
		this->op1 = b;
		this->op2 = 0;
		this->op = 0;
		this->sType = 0;
		this->sVal = "";
	}

	_SmartNode(int a, BIGINT b, BIGINT c) {
		this->astType = a;
		this->op1 = b;
		this->op2 = c;
		this->op = 0;
		this->sType = 0;
		this->sVal = "";
	}

	_SmartNode(int a, BIGINT b, BIGINT c, BIGINT d) {
		this->astType = a;
		this->op1 = b;
		this->op2 = c;
		this->op = d;
		this->sType = 0;
		this->sVal = "";
	}
	string assign(string v) {
		this->sVal.assign(v);
		return this->sVal;
	}

	string assign(char *v) {
		this->sVal.assign(v);
		return this->sVal;
	}

	string assign(const char *v) {
		this->sVal.assign(v);
		return this->sVal;
	}

	string append(string v) {
		this->sVal.append(v);
		return this->sVal;
	}

	string append(char *v) {
		this->sVal.append(v);
		return this->sVal;
	}

	string append(const char *v) {
		this->sVal.append(v);
		return this->sVal;
	}

	int parseInt() {
		return std::stoi(this->sVal, 0, 10);
	}

	double parseFloat() {
		return std::stod(this->sVal);
	}

	bool parseBool() {
		return ((this->sVal == "true") ? true : false);
	}

} SmartNode;

typedef _SmartNode ParseNode;

class SmartNodeGroup {
public:
	vector<SmartNode> items;

	SmartNodeGroup() {
		SmartNode a (0);
		this->items.push_back(a);
	}

	SmartNode getItem(BIGINT a) {
		return this->items[a];
	}

	BIGINT addItem(SmartNode a) {
		BIGINT i = this->items.size();
		this->items.push_back(a);

		return i;
	}

	BIGINT addItem(int a) {
		SmartNode x (a);

		return this->addItem(x);
	}

	BIGINT addItem(int a, BIGINT b) {
		SmartNode x (a, b);

		return this->addItem(x);
	}

	BIGINT addItem(int a, BIGINT b, BIGINT c) {
		SmartNode x (a, b, c);

		return this->addItem(x);
	}

	BIGINT addItem(int a, BIGINT b, BIGINT c, BIGINT d) {
		SmartNode x (a, b, c, d);

		return this->addItem(x);
	}

	BIGINT addItem(int a, string val) {
		SmartNode x;

		x.sVal = val;
		x.sType = a;

		return this->addItem(x);
	}

	BIGINT addItem(int a, int b, string val) {
		SmartNode x (a);

		x.sVal = val;
		x.sType = b;

		return this->addItem(x);
	}
};

}
