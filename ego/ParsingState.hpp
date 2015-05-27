/*
 * ParsingState.hpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */

#ifndef PARSINGSTATE_HPP_
#define PARSINGSTATE_HPP_

#include <ego/SClass.hpp>
#include <ego/ClassMethod.hpp>
#include <ego/ClassVariable.hpp>

namespace ego {
class ParsingState {
public:
	// Current package name
	string curPkg;

	// current Class
	SClass* curClass = NULL;

	// current method
	ClassMethod* curMethod = NULL;

	// current instance variable
	ClassVariable* curVar = NULL;
	
	BIGINT lastNodeId;

	int loopCount;

	int switchCount;
	int caseCount;

	int ifCount;

	ParsingState();

	void initAll();

	bool inLoop();
	bool inSwitch();
	bool inCaseOrLoop();

	void loopFound();
	void ifFound();
	void switchFound();

	void loopClosed();
	void ifClosed();
	void switchClosed();

	void caseFound();
	void caseClosed();
	bool inCase();

};

}

#endif /* PARSINGSTATE_HPP_ */
