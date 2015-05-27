/*
 * ParserHelper.hpp
 *
 *  Created on: Mar 6, 2015
 *      Author: rnarmala
 */

#ifndef PARSERHELPER_HPP_
#define PARSERHELPER_HPP_

int yylex(yy::parser::semantic_type *, const yy::parser::location_type*);

ego::ClassVariable* ego_register_class_variable(semtcNode* type, semtcNode* name, semtcNode* modifier);

ego::ClassMethod* ego_register_class_method(semtcNode* type, semtcNode* name, semtcNode* modifier);

ego::Variable* ego_register_method_variable(semtcNode* type, semtcNode* name, semtcNode* assgnmt);

ego::ParseNode ego_empty_node();

BIGINT ego_add_to_table(ego::ParseNode);

ego::ParseNode ego_get_from_table(BIGINT);

template<class VARTABLE> ego::NameWithGenerics ego_get_qualified_type(semtcNode*, VARTABLE*, ego::NameWithGenerics*);

bool varIsObject(semtcNode*);

void ego_check_local_variable(ego::Variable*);

void ego_check_class_variable(ego::ClassVariable*);

void ego_check_class_method(ego::ClassMethod *);

void ego_file_processing_end();


#endif /* PARSERHELPER_HPP_ */
