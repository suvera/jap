/*
 * LexState.hpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */

#ifndef LEXSTATE_HPP_
#define LEXSTATE_HPP_

#include <vector>
#include <ego/LexToken.hpp>

namespace ego {

class LexState {
public:
	vector<LexToken *> rawTokens;

	unsigned long int numLines;

	unsigned long int columnPos;

	unsigned long int numChars;

	bool eofReached;

	string lastString;

    bool getEofReached() const;

    string getLastString() const;

    unsigned long int getNumChars() const;

    unsigned long int getNumLines() const;

    void setEofReached(bool eofReached);

    void setLastString(string lastString);

    void setLastString(char* str);

    void setLastString(const char* str);

    void incrLines();

    void incrChars();

    void incrLines(int a);

	void incrChars(int a);

    LexState();

    LexToken* registerRawToken(int type);

    LexToken* registerRawToken(int type, string s);

    LexToken* registerRawToken(int type, unsigned long int line, unsigned long int pos);

    LexToken* registerRawToken(int type, string s, unsigned long int line, unsigned long int pos);

    string getLastTokens(unsigned int a);

};

}

#endif /* LEXSTATE_HPP_ */
