/*
 * transpiler.php.cpp
 *
 *  Created on: Jan 26, 2015
 *      Author: rnarmala
 */
#include <iostream>
#include <string>
#include <fstream>
#include <vector>
#include <map>
#include <unordered_map>
using namespace std;
#include <ego/transpiler/base.hpp>

namespace ego {

namespace transpiler {

template <class TPARSER>
class PHP: public Transpiler {
public:
	PHP(int a) {
		//cout << "PHP constrcutor\n";
		this->extension = "php";
	}

	void translate(TPARSER *kicker) {

		typedef yy::parser::token tkType;

		bool outFileRequested = false;

		std::ofstream realOutFile;

		//ofstream out;

		if (outFileRequested) {
			realOutFile.open("foo.txt", std::ios::out);
		}

		std::ostream & out = (outFileRequested ? realOutFile : std::cout);

		for (auto t = kicker->xState->rawTokens.begin(); t
				!= kicker->xState->rawTokens.end(); ++t) {

			auto saveT = t;
			ego::LexToken* token = *t;

			switch (token->getType()) {

			case tkType::T_PACKAGE: {
				out << "namespace";
				do {
					++t;
					token = *t;
					if (token->getVal() == ".") {
						out << "\\";
					} else {
						out << token->getVal();
					}
				} while (token->getVal() != ";");
			}
				break;

			case tkType::T_IMPORT: {
				out << "use";
				do {
					++t;
					token = *t;
					if (token->getVal() == ".") {
						out << "\\";
					} else {
						out << token->getVal();
					}
				} while (token->getVal() != ";");
			}
				break;

			case tkType::T_PUBLIC:
			case tkType::T_PROTECTED:
			case tkType::T_PRIVATE: {
				out << token->getVal();
				/*
				bool isMethod = false;

				do {
					++t;
					token = *t;
					if (token->getType() == tkType::T_FUNCTION) {
						isMethod = true;
						break;
					}
				} while (token->getVal() != ";" && token->getType()
						!= tkType::T_FUNCTION);

				t = saveT;

				if (!isMethod) {
					do {
						++t;
						token = *t;
						if (token->getType() == tkType::T_ID) {
							out << "$" << token->getVal();
							break;
						} else {
							out << token->getVal();
						}
					} while (token->getVal() != ";");
				}
				*/

			}
				break;

			case tkType::T_LNUMBER_NAME:
			case tkType::T_DNUMBER_NAME:
			case tkType::T_BOOLEAN_NAME:
			case tkType::T_STRING_NAME:
			case tkType::T_ARRAY_NAME:
			{
				// remove variable type names
			}
				break;

			case tkType::T_THIS:
			{
				out << "$" << token->getVal();
			}
				break;

			case tkType::T_STRING:
			{
				out << "\"" << token->getVal() << "\"";
			}
				break;

			case tkType::T_VOID:
				// nothing to do
				break;

			default:
				out << token->getVal();
				break;
			}
		}
	}
};

} //namespace ends
}  //namespace ends

// find end

