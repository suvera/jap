/*
 * LexToken.hpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */

#ifndef LEXTOKEN_HPP_
#define LEXTOKEN_HPP_

namespace ego {
/**
 * Token class
 */
class LexToken {
protected:
	// Token Type
	int type;

	// Token Value
	string val;

	// does token has value set, because string may return empty
	bool hasVal;

	// Line number and character position
	unsigned long int line, pos;

public:
	LexToken();

	LexToken(int a);

	LexToken(int a, string s);

	LexToken(int a, int l);

	LexToken(int a, int l, int p);

	LexToken(int a, string s, int l, int p);

	int getType();

	void setType(int t);

	string getVal();

	void setVal(string s);

	bool hasValue();

	int valLength();

	void setLine(unsigned long int line);

	void setPosition(unsigned long int pos);

	void setPosition(unsigned long int line, unsigned long int pos);

	unsigned long int getLine();

	unsigned long int getPos();
};

}

#endif /* LEXTOKEN_HPP_ */
