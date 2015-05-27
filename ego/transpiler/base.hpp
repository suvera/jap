/*
 * transpiler.base.hpp
 *
 *  Created on: Jan 26, 2015
 *      Author: rnarmala
 */

#ifndef TRANSPILER_BASE_HPP_
#define TRANSPILER_BASE_HPP_

namespace ego {

namespace transpiler {

/**
 * Class Transpiler
 */
class Transpiler {
public:

	string extension;

	string targetPath;

	Transpiler() {
		//cout << "Transpiler constrcutor\n";
	}

	void translate() {
	}

	string getExtension() const {
		return this->extension;
	}

	string getTargetPath() const {
		return this->targetPath;
	}

	void setExtension(string extension) {
		this->extension = extension;
	}

	void setTargetPath(string targetPath) {
		this->targetPath = targetPath;
	}

};

} //namespace ends

} // namespace ends here

#endif /* TRANSPILER_BASE_HPP_ */
