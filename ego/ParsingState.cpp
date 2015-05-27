/*
 * ParsingState.cpp
 *
 *  Created on: Jan 30, 2015
 *      Author: rnarmala
 */
#include <iostream>
#include <string>
#include <vector>
#include <map>
#include <unordered_map>
#include <ego/ParsingState.hpp>
using namespace std;

namespace ego {

ParsingState::ParsingState() {
	this->initAll();
}

void ParsingState::initAll() {
	this->loopCount = 0;
	this->switchCount = 0;
	this->caseCount = 0;
	this->ifCount = 0;
}

bool ParsingState::inLoop() {
	return (this->loopCount > 0);
}
bool ParsingState::inSwitch() {
	return (this->switchCount > 0);
}
bool ParsingState::inCaseOrLoop() {
	return this->inLoop() && this->inCase();
}

void ParsingState::loopFound() {
	this->loopCount++;
}
void ParsingState::ifFound() {
	this->ifCount++;
}
void ParsingState::switchFound() {
	this->switchCount++;
}

void ParsingState::loopClosed() {
	this->loopCount--;
}
void ParsingState::ifClosed() {
	this->ifCount--;
}
void ParsingState::switchClosed() {
	this->switchCount--;
}

void ParsingState::caseFound() {
	this->caseCount++;
}
void ParsingState::caseClosed() {
	this->caseCount--;
}
bool ParsingState::inCase() {
	return (this->caseCount > 0);
}



}
