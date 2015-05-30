#ifndef SEMANTICVALIDATOR_HPP_
#define SEMANTICVALIDATOR_HPP_

namespace ego {

bool is_scalar_type(string s) {
	if (s == DATA_TYPE_INT || s == DATA_TYPE_STRING || s == DATA_TYPE_FLOAT || s == DATA_TYPE_BOOL) {
		return true;
	}

	return false;
}

bool is_number_type(string s) {
	if (s == DATA_TYPE_INT || s == DATA_TYPE_FLOAT || s == DATA_VALUE_NULL) {
		return true;
	}

	return false;
}

bool is_float_type(string s) {
	if ( s == DATA_TYPE_FLOAT || s == DATA_VALUE_NULL) {
		return true;
	}

	return false;
}

bool is_int_type(string s) {
	if ( s == DATA_TYPE_INT || s == DATA_VALUE_NULL) {
		return true;
	}

	return false;
}

bool is_string_type(string s) {
	if ( s == DATA_TYPE_STRING || s == DATA_VALUE_NULL) {
		return true;
	}

	return false;
}

bool type_matched(string src, string dest) {
	if ( src == dest || src == DATA_VALUE_NULL || dest == DATA_VALUE_NULL) {
		return true;
	}

	return false;
}


class ParentTypeNode {
public:
	string type;
	BIGINT nodeId;
	ego::ParseNode* node;

	ParentTypeNode() {
		this->type = "";
		this->nodeId = 0;
		this->node = NULL;
	}
};

class SemanticValidator {
protected:
    // get actual argument types by argument list NODE
    void _getActualArgTypes(ego::ParseNode*, vector<string>&);
    
public:
	ParsingState* xState;
	SmartNodeGroup* table;

	SClass *cls;
	ClassMethod *method;

	SemanticValidator();

	SemanticValidator(ParsingState*, SmartNodeGroup*);

	string find_return_type(ego::ParseNode*, ParentTypeNode*);

	string find_return_type(BIGINT, ParentTypeNode*);

	void check_method_main(ClassMethod*);

	void check_return_statement(ParseNode*, ClassMethod*);

	void check_local_variable(Variable*, bool);

	void check_assignment(ego::ParseNode*);

	string getErrorDetail();
	
	void check_local_variable_type(ego::ParseNode*);

	void check_local_variable_type_no_generics(ego::ParseNode*);

	void check_local_variable_type_exists(ego::ParseNode*);

	void validate_data_type_name(ego::ParseNode*, bool);

	void checkSemantics(SClass*);

	void checkClassVariables();

	void checkClassVariable(ClassVariable*);

	void checkClassMethods();

	void checkClassMethod(ClassMethod*);

	void checkClassMethodBody(ClassMethod*);

	void checkLocalVariables(ClassMethod*);

	void checkLocalVariable(ClassMethod*, ego::Variable*);

	void checkTypes(SClass*);

	void processNode(ego::ParseNode*, ClassMethod*);

	void checkClass();

	void checkInterface();
    
    // get actual argument types by argument list NODE
    vector<string> getActualArgTypes(ego::ParseNode*);
    
    // check if two types are compatible?
    bool isTypeCompatibe(string, string);

	// class end
};

// namespace end
}

#endif /* SEMANTICVALIDATOR_HPP_ */
