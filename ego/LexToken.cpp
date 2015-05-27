/*
 * LexToken.cpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */
#include <iostream>
#include <string>
#include <vector>
#include <map>
#include <unordered_map>
#include <ego/LexToken.hpp>
using namespace std;

namespace ego {

LexToken::LexToken() :
	line(1), pos(1) {
}

LexToken::LexToken(int a) :
	type(a), line(1), pos(1) {
}

LexToken::LexToken(int a, string s) :
	type(a), val(s), line(1), pos(1) {
	this->hasVal = true;
}

LexToken::LexToken(int a, int l) :
	type(a), line(l), pos(1) {
}

LexToken::LexToken(int a, int l, int p) :
	type(a), line(l), pos(p) {
}

LexToken::LexToken(int a, string s, int l, int p) :
	type(a), val(s), line(l), pos(p) {
	this->hasVal = true;
}

int LexToken::getType() {
	return this->type;
}

void LexToken::setType(int t) {
	this->type = t;
}

string LexToken::getVal() {
	return this->val;
}

void LexToken::setVal(string s) {
	this->val = s;
	this->hasVal = true;
}

bool LexToken::hasValue() {
	return this->hasVal;
}

int LexToken::valLength() {
	return this->val.length();
}

void LexToken::setLine(unsigned long int line) {
	this->line = line;
}

void LexToken::setPosition(unsigned long int pos) {
	this->pos = pos;
}

void LexToken::setPosition(unsigned long int line, unsigned long int pos) {
	this->line = line;
	this->pos = pos;
}

unsigned long int LexToken::getLine() {
	return this->line;
}

unsigned long int LexToken::getPos() {
	return this->pos;
}

}
