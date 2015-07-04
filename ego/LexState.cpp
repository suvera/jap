#include <iostream>
#include <string>
#include <vector>
#include <map>
#include <unordered_map>
#include <ego/LexState.hpp>
using namespace std;

namespace ego {

	bool LexState::getEofReached() const {
		return this->eofReached;
	}

	string LexState::getLastString() const {
		return this->lastString;
	}

	unsigned long int LexState::getNumChars() const {
		return this->numChars;
	}

	unsigned long int LexState::getNumLines() const {
		return this->numLines;
	}

	void LexState::setEofReached(bool eofReached) {
		this->eofReached = eofReached;
	}

	void LexState::setLastString(string lastString) {
		this->lastString = lastString;
	}

	void LexState::setLastString(char* str) {
		this->lastString = string(str);
	}

	void LexState::setLastString(const char* str) {
		this->lastString = string(str);
	}

	void LexState::incrLines() {
		this->numLines++;
		this->columnPos = 1;
	}

	void LexState::incrChars() {
		this->numChars++;
		this->columnPos++;
	}

	void LexState::incrLines(int a) {
		this->numLines += a;
		this->columnPos = 1;
	}

	void LexState::incrChars(int a) {
		this->numChars += a;
		this->columnPos += a;
	}

	LexState::LexState() {
		this->numLines = 1;
		this->numChars = 1;
		this->columnPos = 1;
		this->eofReached = false;
	}

	LexToken *LexState::registerRawToken(int type) {
		LexToken *t = new LexToken(type);

		this->rawTokens.push_back(t);

		return t;
	}

	LexToken *LexState::registerRawToken(int type, string s) {
		LexToken *t = new LexToken(type, s);

		this->rawTokens.push_back(t);

		return t;
	}

	LexToken *LexState::registerRawToken(int type, unsigned long int line, unsigned long int pos) {
		LexToken *t = new LexToken(type, line, pos);

		this->rawTokens.push_back(t);

		return t;
	}

	LexToken *LexState::registerRawToken(int type, string s, unsigned long int line, unsigned long int pos) {
		LexToken *t = new LexToken(type, s, line, pos);

		this->rawTokens.push_back(t);

		return t;
	}

	string LexState::getLastTokens(unsigned int a) {
		string str;
		unsigned int size = this->rawTokens.size();
		unsigned int n = 0, l = 0;

		size--;

		while (l < a) {
			size--;

			if (size <= 0) {
				break;
			}

			//std::cout << "Vector read at " << size << "\n";
			LexToken *t = this->rawTokens.at(size);

			if (t->getType() != yy::parser::token::T_WHITESPACE) {
				l++;
			}

			str.insert(0, t->getVal());
			n++;
		}

		return str;
	}

}
