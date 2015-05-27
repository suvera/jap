// A Bison parser, made by GNU Bison 3.0.

// Skeleton implementation for Bison LALR(1) parsers in C++

// Copyright (C) 2002-2013 Free Software Foundation, Inc.

// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.

// As a special exception, you may create a larger work that contains
// part or all of the Bison parser skeleton and distribute that work
// under terms of your choice, so long as that work isn't itself a
// parser generator using the skeleton or a modified version thereof
// as a parser skeleton.  Alternatively, if you modify or redistribute
// the parser skeleton itself, you may (at your option) remove this
// special exception, which will cause the skeleton and the resulting
// Bison output files to be licensed under the GNU General Public
// License without this special exception.

// This special exception was added by the Free Software Foundation in
// version 2.2 of Bison.


// First part of user declarations.
#line 1 "jap.y" // lalr1.cc:398

#include <math.h>
#include <iostream>
#include <string>
using namespace std;
#include "jap.tab.hh"
typedef yy::parser::semantic_type semtcNode;
#include <ego/ParserHelper.hpp>

#line 46 "jap.tab.cc" // lalr1.cc:398

# ifndef YY_NULL
#  if defined __cplusplus && 201103L <= __cplusplus
#   define YY_NULL nullptr
#  else
#   define YY_NULL 0
#  endif
# endif

#include "jap.tab.hh"

// User implementation prologue.

#line 60 "jap.tab.cc" // lalr1.cc:406


#ifndef YY_
# if defined YYENABLE_NLS && YYENABLE_NLS
#  if ENABLE_NLS
#   include <libintl.h> // FIXME: INFRINGES ON USER NAME SPACE.
#   define YY_(msgid) dgettext ("bison-runtime", msgid)
#  endif
# endif
# ifndef YY_
#  define YY_(msgid) msgid
# endif
#endif

#define YYRHSLOC(Rhs, K) ((Rhs)[K].location)
/* YYLLOC_DEFAULT -- Set CURRENT to span from RHS[1] to RHS[N].
   If N is 0, then set CURRENT to the empty location which ends
   the previous symbol: RHS[0] (always defined).  */

# ifndef YYLLOC_DEFAULT
#  define YYLLOC_DEFAULT(Current, Rhs, N)                               \
    do                                                                  \
      if (N)                                                            \
        {                                                               \
          (Current).begin  = YYRHSLOC (Rhs, 1).begin;                   \
          (Current).end    = YYRHSLOC (Rhs, N).end;                     \
        }                                                               \
      else                                                              \
        {                                                               \
          (Current).begin = (Current).end = YYRHSLOC (Rhs, 0).end;      \
        }                                                               \
    while (/*CONSTCOND*/ false)
# endif


// Suppress unused-variable warnings by "using" E.
#define YYUSE(E) ((void) (E))

// Enable debugging if requested.
#if YYDEBUG

// A pseudo ostream that takes yydebug_ into account.
# define YYCDEBUG if (yydebug_) (*yycdebug_)

# define YY_SYMBOL_PRINT(Title, Symbol)         \
  do {                                          \
    if (yydebug_)                               \
    {                                           \
      *yycdebug_ << Title << ' ';               \
      yy_print_ (*yycdebug_, Symbol);           \
      *yycdebug_ << std::endl;                  \
    }                                           \
  } while (false)

# define YY_REDUCE_PRINT(Rule)          \
  do {                                  \
    if (yydebug_)                       \
      yy_reduce_print_ (Rule);          \
  } while (false)

# define YY_STACK_PRINT()               \
  do {                                  \
    if (yydebug_)                       \
      yystack_print_ ();                \
  } while (false)

#else // !YYDEBUG

# define YYCDEBUG if (false) std::cerr
# define YY_SYMBOL_PRINT(Title, Symbol)  YYUSE(Symbol)
# define YY_REDUCE_PRINT(Rule)           static_cast<void>(0)
# define YY_STACK_PRINT()                static_cast<void>(0)

#endif // !YYDEBUG

#define yyerrok         (yyerrstatus_ = 0)
#define yyclearin       (yyempty = true)

#define YYACCEPT        goto yyacceptlab
#define YYABORT         goto yyabortlab
#define YYERROR         goto yyerrorlab
#define YYRECOVERING()  (!!yyerrstatus_)


namespace yy {
#line 146 "jap.tab.cc" // lalr1.cc:473

  /// Build a parser object.
  parser::parser ()
#if YYDEBUG
     :yydebug_ (false),
      yycdebug_ (&std::cerr)
#endif
  {}

  parser::~parser ()
  {}


  /*---------------.
  | Symbol types.  |
  `---------------*/

  inline
  parser::syntax_error::syntax_error (const location_type& l, const std::string& m)
    : std::runtime_error (m)
    , location (l)
  {}

  // basic_symbol.
  template <typename Base>
  inline
  parser::basic_symbol<Base>::basic_symbol ()
    : value ()
  {}

  template <typename Base>
  inline
  parser::basic_symbol<Base>::basic_symbol (const basic_symbol& other)
    : Base (other)
    , value ()
    , location (other.location)
  {
    value = other.value;
  }


  template <typename Base>
  inline
  parser::basic_symbol<Base>::basic_symbol (typename Base::kind_type t, const semantic_type& v, const location_type& l)
    : Base (t)
    , value (v)
    , location (l)
  {}


  /// Constructor for valueless symbols.
  template <typename Base>
  inline
  parser::basic_symbol<Base>::basic_symbol (typename Base::kind_type t, const location_type& l)
    : Base (t)
    , value ()
    , location (l)
  {}

  template <typename Base>
  inline
  parser::basic_symbol<Base>::~basic_symbol ()
  {
  }

  template <typename Base>
  inline
  void
  parser::basic_symbol<Base>::move (basic_symbol& s)
  {
    super_type::move(s);
    value = s.value;
    location = s.location;
  }

  // by_type.
  inline
  parser::by_type::by_type ()
     : type (empty)
  {}

  inline
  parser::by_type::by_type (const by_type& other)
    : type (other.type)
  {}

  inline
  parser::by_type::by_type (token_type t)
    : type (yytranslate_ (t))
  {}

  inline
  void
  parser::by_type::move (by_type& that)
  {
    type = that.type;
    that.type = empty;
  }

  inline
  int
  parser::by_type::type_get () const
  {
    return type;
  }


  // by_state.
  inline
  parser::by_state::by_state ()
    : state (empty)
  {}

  inline
  parser::by_state::by_state (const by_state& other)
    : state (other.state)
  {}

  inline
  void
  parser::by_state::move (by_state& that)
  {
    state = that.state;
    that.state = empty;
  }

  inline
  parser::by_state::by_state (state_type s)
    : state (s)
  {}

  inline
  parser::symbol_number_type
  parser::by_state::type_get () const
  {
    return state == empty ? 0 : yystos_[state];
  }

  inline
  parser::stack_symbol_type::stack_symbol_type ()
  {}


  inline
  parser::stack_symbol_type::stack_symbol_type (state_type s, symbol_type& that)
    : super_type (s, that.location)
  {
    value = that.value;
    // that is emptied.
    that.type = empty;
  }

  inline
  parser::stack_symbol_type&
  parser::stack_symbol_type::operator= (const stack_symbol_type& that)
  {
    state = that.state;
    value = that.value;
    location = that.location;
    return *this;
  }


  template <typename Base>
  inline
  void
  parser::yy_destroy_ (const char* yymsg, basic_symbol<Base>& yysym) const
  {
    if (yymsg)
      YY_SYMBOL_PRINT (yymsg, yysym);

    // User destructor.
    YYUSE (yysym.type_get ());
  }

#if YYDEBUG
  template <typename Base>
  void
  parser::yy_print_ (std::ostream& yyo,
                                     const basic_symbol<Base>& yysym) const
  {
    std::ostream& yyoutput = yyo;
    YYUSE (yyoutput);
    symbol_number_type yytype = yysym.type_get ();
    yyo << (yytype < yyntokens_ ? "token" : "nterm")
        << ' ' << yytname_[yytype] << " ("
        << yysym.location << ": ";
    YYUSE (yytype);
    yyo << ')';
  }
#endif

  inline
  void
  parser::yypush_ (const char* m, state_type s, symbol_type& sym)
  {
    stack_symbol_type t (s, sym);
    yypush_ (m, t);
  }

  inline
  void
  parser::yypush_ (const char* m, stack_symbol_type& s)
  {
    if (m)
      YY_SYMBOL_PRINT (m, s);
    yystack_.push (s);
  }

  inline
  void
  parser::yypop_ (unsigned int n)
  {
    yystack_.pop (n);
  }

#if YYDEBUG
  std::ostream&
  parser::debug_stream () const
  {
    return *yycdebug_;
  }

  void
  parser::set_debug_stream (std::ostream& o)
  {
    yycdebug_ = &o;
  }


  parser::debug_level_type
  parser::debug_level () const
  {
    return yydebug_;
  }

  void
  parser::set_debug_level (debug_level_type l)
  {
    yydebug_ = l;
  }
#endif // YYDEBUG

  inline parser::state_type
  parser::yy_lr_goto_state_ (state_type yystate, int yylhs)
  {
    int yyr = yypgoto_[yylhs - yyntokens_] + yystate;
    if (0 <= yyr && yyr <= yylast_ && yycheck_[yyr] == yystate)
      return yytable_[yyr];
    else
      return yydefgoto_[yylhs - yyntokens_];
  }

  inline bool
  parser::yy_pact_value_is_default_ (int yyvalue)
  {
    return yyvalue == yypact_ninf_;
  }

  inline bool
  parser::yy_table_value_is_error_ (int yyvalue)
  {
    return yyvalue == yytable_ninf_;
  }

  int
  parser::parse ()
  {
    /// Whether yyla contains a lookahead.
    bool yyempty = true;

    // State.
    int yyn;
    int yylen = 0;

    // Error handling.
    int yynerrs_ = 0;
    int yyerrstatus_ = 0;

    /// The lookahead symbol.
    symbol_type yyla;

    /// The locations where the error started and ended.
    stack_symbol_type yyerror_range[3];

    /// $$ and @$.
    stack_symbol_type yylhs;

    /// The return value of parse ().
    int yyresult;

    // FIXME: This shoud be completely indented.  It is not yet to
    // avoid gratuitous conflicts when merging into the master branch.
    try
      {
    YYCDEBUG << "Starting parse" << std::endl;


    /* Initialize the stack.  The initial state will be set in
       yynewstate, since the latter expects the semantical and the
       location values to have been already stored, initialize these
       stacks with a primary value.  */
    yystack_.clear ();
    yypush_ (YY_NULL, 0, yyla);

    // A new symbol was pushed on the stack.
  yynewstate:
    YYCDEBUG << "Entering state " << yystack_[0].state << std::endl;

    // Accept?
    if (yystack_[0].state == yyfinal_)
      goto yyacceptlab;

    goto yybackup;

    // Backup.
  yybackup:

    // Try to take a decision without lookahead.
    yyn = yypact_[yystack_[0].state];
    if (yy_pact_value_is_default_ (yyn))
      goto yydefault;

    // Read a lookahead token.
    if (yyempty)
      {
        YYCDEBUG << "Reading a token: ";
        try
          {
            yyla.type = yytranslate_ (yylex (&yyla.value, &yyla.location));
          }
        catch (const syntax_error& yyexc)
          {
            error (yyexc);
            goto yyerrlab1;
          }
        yyempty = false;
      }
    YY_SYMBOL_PRINT ("Next token is", yyla);

    /* If the proper action on seeing token YYLA.TYPE is to reduce or
       to detect an error, take that action.  */
    yyn += yyla.type_get ();
    if (yyn < 0 || yylast_ < yyn || yycheck_[yyn] != yyla.type_get ())
      goto yydefault;

    // Reduce or error.
    yyn = yytable_[yyn];
    if (yyn <= 0)
      {
        if (yy_table_value_is_error_ (yyn))
          goto yyerrlab;
        yyn = -yyn;
        goto yyreduce;
      }

    // Discard the token being shifted.
    yyempty = true;

    // Count tokens shifted since error; after three, turn off error status.
    if (yyerrstatus_)
      --yyerrstatus_;

    // Shift the lookahead token.
    yypush_ ("Shifting", yyn, yyla);
    goto yynewstate;

  /*-----------------------------------------------------------.
  | yydefault -- do the default action for the current state.  |
  `-----------------------------------------------------------*/
  yydefault:
    yyn = yydefact_[yystack_[0].state];
    if (yyn == 0)
      goto yyerrlab;
    goto yyreduce;

  /*-----------------------------.
  | yyreduce -- Do a reduction.  |
  `-----------------------------*/
  yyreduce:
    yylen = yyr2_[yyn];
    yylhs.state = yy_lr_goto_state_(yystack_[yylen].state, yyr1_[yyn]);
    /* If YYLEN is nonzero, implement the default value of the action:
       '$$ = $1'.  Otherwise, use the top of the stack.

       Otherwise, the following line sets YYLHS.VALUE to garbage.
       This behavior is undocumented and Bison
       users should not rely upon it.  */
    if (yylen)
      yylhs.value = yystack_[yylen - 1].value;
    else
      yylhs.value = yystack_[0].value;

    // Compute the default @$.
    {
      slice<stack_symbol_type, stack_type> slice (yystack_, yylen);
      YYLLOC_DEFAULT (yylhs.location, slice, yylen);
    }

    // Perform the reduction.
    YY_REDUCE_PRINT (yyn);
    try
      {
        switch (yyn)
          {
  case 2:
#line 176 "jap.y" // lalr1.cc:846
    { 
        //std::cout << "parsing rules end\n";
        ego_file_processing_end();
    }
#line 558 "jap.tab.cc" // lalr1.cc:846
    break;

  case 3:
#line 181 "jap.y" // lalr1.cc:846
    { 
        //std::cout << "parsing rules end\n"; 
    }
#line 566 "jap.tab.cc" // lalr1.cc:846
    break;

  case 4:
#line 186 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node(); 
    }
#line 574 "jap.tab.cc" // lalr1.cc:846
    break;

  case 5:
#line 189 "jap.y" // lalr1.cc:846
    {
    
        if (kicker->pkg.compare((yystack_[1].value).sVal) != 0) {
            ego::throwError("Package does not exist in proper named directory, package path and file path should be relatively correct.");
            //kicker->pkg = $2.sVal;
        }
        kicker->parseState->curPkg = (yystack_[1].value).sVal;
        
        //std::cout << "package found: " << $2.sVal << "\n";
    }
#line 589 "jap.tab.cc" // lalr1.cc:846
    break;

  case 6:
#line 201 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
    }
#line 597 "jap.tab.cc" // lalr1.cc:846
    break;

  case 7:
#line 204 "jap.y" // lalr1.cc:846
    {
        (yylhs.value).assign((yystack_[2].value).sVal+(yystack_[1].value).sVal+(yystack_[0].value).sVal);
    }
#line 605 "jap.tab.cc" // lalr1.cc:846
    break;

  case 8:
#line 209 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node(); 
    }
#line 613 "jap.tab.cc" // lalr1.cc:846
    break;

  case 10:
#line 215 "jap.y" // lalr1.cc:846
    { 
        //std::cout << "import found: " << $2.sVal << "\n";; 
    }
#line 621 "jap.tab.cc" // lalr1.cc:846
    break;

  case 11:
#line 220 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
        kicker->importClass((yystack_[0].value).sVal);
    }
#line 630 "jap.tab.cc" // lalr1.cc:846
    break;

  case 12:
#line 224 "jap.y" // lalr1.cc:846
    {
        (yylhs.value).assign((yystack_[2].value).sVal+(yystack_[1].value).sVal+(yystack_[0].value).sVal);
        kicker->importPackage((yystack_[2].value).sVal);
    }
#line 639 "jap.tab.cc" // lalr1.cc:846
    break;

  case 16:
#line 235 "jap.y" // lalr1.cc:846
    {
            kicker->parseState->curClass->isAbstract = true;
        }
#line 647 "jap.tab.cc" // lalr1.cc:846
    break;

  case 17:
#line 237 "jap.y" // lalr1.cc:846
    {
        //std::cout << "abstract class found: " << $2.sVal << "\n";
    }
#line 655 "jap.tab.cc" // lalr1.cc:846
    break;

  case 18:
#line 240 "jap.y" // lalr1.cc:846
    {
            kicker->parseState->curClass->isFinal = true;
        }
#line 663 "jap.tab.cc" // lalr1.cc:846
    break;

  case 19:
#line 242 "jap.y" // lalr1.cc:846
    {
        //std::cout << "final class found: " << $2.sVal << "\n";
    }
#line 671 "jap.tab.cc" // lalr1.cc:846
    break;

  case 20:
#line 247 "jap.y" // lalr1.cc:846
    {
		ego::SClass* curCls = new ego::SClass();
		
		curCls->imports = kicker->imports;
		
		curCls->name = (yystack_[0].value).sVal;
        curCls->caseLessName = toLower((yystack_[0].value).sVal);
        curCls->pkg = kicker->parseState->curPkg;
		
		kicker->clsName = (yystack_[0].value).sVal;
        kicker->cls = curCls;
		kicker->parseState->curClass = curCls;

		kicker->cls->classDir = kicker->filePath.parent_path().string();
        
		kicker->classList.push_back(kicker->parseState->curClass);
		ego::ClassLoader::registerClass(kicker->parseState->curClass, true);
		
	}
#line 695 "jap.tab.cc" // lalr1.cc:846
    break;

  case 21:
#line 265 "jap.y" // lalr1.cc:846
    {
        ego::NameWithGenerics nameType (kicker->parseState->curClass->name);
        kicker->parseState->curClass->qualifiedName = nameType;
        
		if ((yystack_[0].value).astType != 0) {
            ego_get_qualified_type<ego::SClass>(&(yystack_[0].value), kicker->parseState->curClass, &kicker->parseState->curClass->qualifiedName);
		}
	}
#line 708 "jap.tab.cc" // lalr1.cc:846
    break;

  case 22:
#line 272 "jap.y" // lalr1.cc:846
    {
        //TODO: Evaluate the Full Class
    }
#line 716 "jap.tab.cc" // lalr1.cc:846
    break;

  case 23:
#line 277 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 724 "jap.tab.cc" // lalr1.cc:846
    break;

  case 24:
#line 280 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 732 "jap.tab.cc" // lalr1.cc:846
    break;

  case 25:
#line 283 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 740 "jap.tab.cc" // lalr1.cc:846
    break;

  case 26:
#line 289 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node(); 
    }
#line 748 "jap.tab.cc" // lalr1.cc:846
    break;

  case 27:
#line 292 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[1].value);
    }
#line 756 "jap.tab.cc" // lalr1.cc:846
    break;

  case 28:
#line 298 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_DATA_TYPE_FORMAL_HINT_LIST;
	}
#line 766 "jap.tab.cc" // lalr1.cc:846
    break;

  case 29:
#line 303 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
		(yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_DATA_TYPE_FORMAL_HINT_LIST;
	}
#line 777 "jap.tab.cc" // lalr1.cc:846
    break;

  case 30:
#line 312 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = (yystack_[0].value);
		(yylhs.value).astType = AST_DATA_TYPE_GENERIC_HINT_NAME;
	}
#line 786 "jap.tab.cc" // lalr1.cc:846
    break;

  case 31:
#line 322 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
    }
#line 794 "jap.tab.cc" // lalr1.cc:846
    break;

  case 32:
#line 325 "jap.y" // lalr1.cc:846
    {
        
		ego::SClass* curCls = kicker->parseState->curClass;
		
		if ((yystack_[1].value).sVal.length() > 0) {
            curCls->hasParent = true;
			
			ego::NameWithGenerics parent ((yystack_[1].value).sVal);
            curCls->parentType = parent;
			
			if ((yystack_[0].value).astType != 0) {
                ego_get_qualified_type<ego::SClass>(&(yystack_[0].value), kicker->parseState->curClass, &curCls->parentType);
			}
			
            //TODO: Evaluate the Parent Class
        }
    }
#line 816 "jap.tab.cc" // lalr1.cc:846
    break;

  case 33:
#line 345 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
    }
#line 824 "jap.tab.cc" // lalr1.cc:846
    break;

  case 34:
#line 348 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
    }
#line 832 "jap.tab.cc" // lalr1.cc:846
    break;

  case 35:
#line 354 "jap.y" // lalr1.cc:846
    {
		ego::NameWithGenerics parent ((yystack_[1].value).sVal);
        // TODO: check interface exist or not
		
		if ((yystack_[0].value).astType != 0) {
            ego_get_qualified_type<ego::SClass>(&(yystack_[0].value), kicker->parseState->curClass, &parent);
		}
		
		kicker->parseState->curClass->implements.push_back(parent);
    }
#line 847 "jap.tab.cc" // lalr1.cc:846
    break;

  case 36:
#line 364 "jap.y" // lalr1.cc:846
    {
		ego::NameWithGenerics parent ((yystack_[1].value).sVal);
		
        // TODO: check interface $3.sVal exist or not
		
		if ((yystack_[0].value).astType != 0) {
            ego_get_qualified_type<ego::SClass>(&(yystack_[0].value), kicker->parseState->curClass, &parent);
		}
		
		kicker->parseState->curClass->implements.push_back(parent);
    }
#line 863 "jap.tab.cc" // lalr1.cc:846
    break;

  case 37:
#line 378 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node(); 
    }
#line 871 "jap.tab.cc" // lalr1.cc:846
    break;

  case 39:
#line 385 "jap.y" // lalr1.cc:846
    {
		//std::cout << "some class property/method found: " << "\n";
		YYSTYPE p;
		p.op1 = ego_add_to_table((yystack_[1].value));
		p.op2 = ego_add_to_table((yystack_[0].value));
		
		kicker->parseState->lastNodeId = ego_add_to_table(p);
	}
#line 884 "jap.tab.cc" // lalr1.cc:846
    break;

  case 41:
#line 396 "jap.y" // lalr1.cc:846
    {
    }
#line 891 "jap.tab.cc" // lalr1.cc:846
    break;

  case 42:
#line 398 "jap.y" // lalr1.cc:846
    {
    }
#line 898 "jap.tab.cc" // lalr1.cc:846
    break;

  case 43:
#line 403 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 906 "jap.tab.cc" // lalr1.cc:846
    break;

  case 44:
#line 406 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 914 "jap.tab.cc" // lalr1.cc:846
    break;

  case 45:
#line 409 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 922 "jap.tab.cc" // lalr1.cc:846
    break;

  case 46:
#line 415 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = ego_empty_node();
	}
#line 930 "jap.tab.cc" // lalr1.cc:846
    break;

  case 47:
#line 418 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 938 "jap.tab.cc" // lalr1.cc:846
    break;

  case 48:
#line 421 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 946 "jap.tab.cc" // lalr1.cc:846
    break;

  case 49:
#line 424 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 954 "jap.tab.cc" // lalr1.cc:846
    break;

  case 50:
#line 427 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 962 "jap.tab.cc" // lalr1.cc:846
    break;

  case 51:
#line 433 "jap.y" // lalr1.cc:846
    {
        //kicker->validator->validate_data_type_name(&$1, false);
        
		YYSTYPE modifier = ego_get_from_table(kicker->parseState->lastNodeId);
        
        // register variable
        ego::ClassVariable* var = ego_register_class_variable(&(yystack_[2].value), &(yystack_[0].value), &modifier);
		
	}
#line 976 "jap.tab.cc" // lalr1.cc:846
    break;

  case 52:
#line 441 "jap.y" // lalr1.cc:846
    {
        if (kicker->parseState->curVar->isConst) {
            if ((yystack_[1].value).sType == token::T_EMPTY) {
                ego::throwError(string("Class Constants must be initialized '" + kicker->parseState->curVar->name + "' with values."));
            }
        }
        
        kicker->parseState->curVar->value = (yystack_[1].value).sVal;
		// Assign Value
		kicker->parseState->curVar->valNode = ego_add_to_table((yystack_[1].value));
		
		//kicker->validator->check_class_variable(kicker->parseState->curVar);
    }
#line 994 "jap.tab.cc" // lalr1.cc:846
    break;

  case 53:
#line 457 "jap.y" // lalr1.cc:846
    {

        //kicker->validator->validate_data_type_name(&$1, true);
        
		YYSTYPE modifier = ego_get_from_table(kicker->parseState->lastNodeId);
        
        // register method
        ego::ClassMethod* method = ego_register_class_method(&(yystack_[1].value), &(yystack_[0].value), &modifier);
		
    }
#line 1009 "jap.tab.cc" // lalr1.cc:846
    break;

  case 54:
#line 466 "jap.y" // lalr1.cc:846
    {
        kicker->parseState->curMethod->body = (yystack_[0].value);
		
		//kicker->validator->check_class_method(kicker->parseState->curMethod);
    }
#line 1019 "jap.tab.cc" // lalr1.cc:846
    break;

  case 55:
#line 474 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).astType = AST_METHOD_NO_BODY;
        
        if (!kicker->parseState->curClass->isInterface && !kicker->parseState->curMethod->isAbstract) {
            ego::throwError(string("Method '" + kicker->parseState->curMethod->name + "' is not declared as 'abstract'"));
        }
    }
#line 1032 "jap.tab.cc" // lalr1.cc:846
    break;

  case 56:
#line 482 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 1040 "jap.tab.cc" // lalr1.cc:846
    break;

  case 57:
#line 487 "jap.y" // lalr1.cc:846
    { 
		(yylhs.value) = (yystack_[0].value); 
	}
#line 1048 "jap.tab.cc" // lalr1.cc:846
    break;

  case 58:
#line 490 "jap.y" // lalr1.cc:846
    { 
		(yylhs.value) = (yystack_[0].value); 
        (yylhs.value).astType = AST_DATA_TYPE_VOID;
	}
#line 1057 "jap.tab.cc" // lalr1.cc:846
    break;

  case 59:
#line 497 "jap.y" // lalr1.cc:846
    { 
		(yylhs.value) = (yystack_[0].value); 
	}
#line 1065 "jap.tab.cc" // lalr1.cc:846
    break;

  case 60:
#line 500 "jap.y" // lalr1.cc:846
    { 
		(yylhs.value) = (yystack_[0].value); 
		(yylhs.value).astType = AST_DATA_TYPE_INT; 
	}
#line 1074 "jap.tab.cc" // lalr1.cc:846
    break;

  case 61:
#line 504 "jap.y" // lalr1.cc:846
    { 
		(yylhs.value) = (yystack_[0].value); 
		(yylhs.value).astType = AST_DATA_TYPE_FLOAT; 
	}
#line 1083 "jap.tab.cc" // lalr1.cc:846
    break;

  case 62:
#line 508 "jap.y" // lalr1.cc:846
    { 
		(yylhs.value) = (yystack_[0].value); 
		(yylhs.value).astType = AST_DATA_TYPE_BOOL; 
	}
#line 1092 "jap.tab.cc" // lalr1.cc:846
    break;

  case 63:
#line 512 "jap.y" // lalr1.cc:846
    { 
		(yylhs.value) = (yystack_[0].value); 
		(yylhs.value).astType = AST_DATA_TYPE_STRING; 
	}
#line 1101 "jap.tab.cc" // lalr1.cc:846
    break;

  case 64:
#line 516 "jap.y" // lalr1.cc:846
    { 
		(yylhs.value) = (yystack_[0].value);
	}
#line 1109 "jap.tab.cc" // lalr1.cc:846
    break;

  case 65:
#line 519 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = (yystack_[3].value);

		(yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
		
		(yylhs.value).astType = AST_DATA_TYPE_ARRAY; 
	}
#line 1121 "jap.tab.cc" // lalr1.cc:846
    break;

  case 66:
#line 526 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = (yystack_[3].value);
		
		(yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
		
		(yylhs.value).astType = AST_DATA_TYPE_SARRAY; 
	}
#line 1133 "jap.tab.cc" // lalr1.cc:846
    break;

  case 67:
#line 536 "jap.y" // lalr1.cc:846
    { 
		(yylhs.value) = (yystack_[0].value); 
		(yylhs.value).astType = AST_DATA_TYPE_OBJECT; 
	}
#line 1142 "jap.tab.cc" // lalr1.cc:846
    break;

  case 68:
#line 540 "jap.y" // lalr1.cc:846
    { 
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
		(yylhs.value).astType = AST_DATA_TYPE_OBJECT_GENERICS; 
	}
#line 1153 "jap.tab.cc" // lalr1.cc:846
    break;

  case 69:
#line 549 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_DATA_TYPE_ACTUAL_HINT_LIST; 
	}
#line 1163 "jap.tab.cc" // lalr1.cc:846
    break;

  case 70:
#line 554 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_DATA_TYPE_ACTUAL_HINT_LIST; 
	}
#line 1174 "jap.tab.cc" // lalr1.cc:846
    break;

  case 71:
#line 564 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node(); 
    }
#line 1182 "jap.tab.cc" // lalr1.cc:846
    break;

  case 72:
#line 567 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value); 
    }
#line 1190 "jap.tab.cc" // lalr1.cc:846
    break;

  case 73:
#line 572 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 1196 "jap.tab.cc" // lalr1.cc:846
    break;

  case 74:
#line 573 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 1202 "jap.tab.cc" // lalr1.cc:846
    break;

  case 75:
#line 577 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value); 
        (yylhs.value).astType = AST_INTEGER; 
    }
#line 1211 "jap.tab.cc" // lalr1.cc:846
    break;

  case 76:
#line 581 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value); 
        (yylhs.value).astType = AST_DOUBLE; 
    }
#line 1220 "jap.tab.cc" // lalr1.cc:846
    break;

  case 77:
#line 585 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value); 
        (yylhs.value).astType = AST_BOOLEAN; 
    }
#line 1229 "jap.tab.cc" // lalr1.cc:846
    break;

  case 78:
#line 589 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value); 
        (yylhs.value).astType = AST_STRING; 
    }
#line 1238 "jap.tab.cc" // lalr1.cc:846
    break;

  case 79:
#line 593 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value); 
        (yylhs.value).astType = AST_NULL; 
    }
#line 1247 "jap.tab.cc" // lalr1.cc:846
    break;

  case 80:
#line 602 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_STATIC_VARIABLE;
    }
#line 1259 "jap.tab.cc" // lalr1.cc:846
    break;

  case 81:
#line 609 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_SELF_STATIC_VARIABLE;
    }
#line 1271 "jap.tab.cc" // lalr1.cc:846
    break;

  case 82:
#line 619 "jap.y" // lalr1.cc:846
    { (yylhs.value) = ego_empty_node(); }
#line 1277 "jap.tab.cc" // lalr1.cc:846
    break;

  case 83:
#line 620 "jap.y" // lalr1.cc:846
    {
        // THIS is not needed
        //$$ = $1; 
    }
#line 1286 "jap.tab.cc" // lalr1.cc:846
    break;

  case 84:
#line 624 "jap.y" // lalr1.cc:846
    { 
        //$$ = $1; 
    }
#line 1294 "jap.tab.cc" // lalr1.cc:846
    break;

  case 85:
#line 630 "jap.y" // lalr1.cc:846
    {
        //kicker->validator->validate_data_type_name(&$1, false);
       
        ego::Variable* var = ego_register_method_variable(&(yystack_[3].value), &(yystack_[1].value), &(yystack_[0].value));
        var->isFormal = true;
        kicker->parseState->curMethod->addArg(var);
        
        (yylhs.value) = (yystack_[1].value);
        
        //kicker->validator->check_local_variable(var, varIsObject(&$1));
    }
#line 1310 "jap.tab.cc" // lalr1.cc:846
    break;

  case 86:
#line 643 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[1].value);
    }
#line 1318 "jap.tab.cc" // lalr1.cc:846
    break;

  case 87:
#line 651 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
    }
#line 1326 "jap.tab.cc" // lalr1.cc:846
    break;

  case 88:
#line 654 "jap.y" // lalr1.cc:846
    {
        // xxxxx_stmt_list
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_STATEMENTS;
        
    }
#line 1339 "jap.tab.cc" // lalr1.cc:846
    break;

  case 89:
#line 664 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_VAR_DEFINE_STMT;
        
    }
#line 1349 "jap.tab.cc" // lalr1.cc:846
    break;

  case 90:
#line 669 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        //$$.astType = AST_IF_STMT;
    }
#line 1358 "jap.tab.cc" // lalr1.cc:846
    break;

  case 91:
#line 673 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_WHILE_STMT;
    }
#line 1367 "jap.tab.cc" // lalr1.cc:846
    break;

  case 92:
#line 677 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_DO_WHILE_STMT;
    }
#line 1376 "jap.tab.cc" // lalr1.cc:846
    break;

  case 93:
#line 681 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_SWITCH_STMT;
    }
#line 1385 "jap.tab.cc" // lalr1.cc:846
    break;

  case 94:
#line 685 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_BREAK_STMT;
    }
#line 1394 "jap.tab.cc" // lalr1.cc:846
    break;

  case 95:
#line 689 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_CONTINUE_STMT;
    }
#line 1403 "jap.tab.cc" // lalr1.cc:846
    break;

  case 96:
#line 693 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_TRY_CATCH_STMT;
    }
#line 1412 "jap.tab.cc" // lalr1.cc:846
    break;

  case 97:
#line 697 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_THROW_STMT;
    }
#line 1421 "jap.tab.cc" // lalr1.cc:846
    break;

  case 98:
#line 701 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_ASSIGNMENT_STMT;
    }
#line 1430 "jap.tab.cc" // lalr1.cc:846
    break;

  case 99:
#line 705 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_ECHO_STMT;
    }
#line 1439 "jap.tab.cc" // lalr1.cc:846
    break;

  case 100:
#line 709 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_RETURN_STMT;
    }
#line 1448 "jap.tab.cc" // lalr1.cc:846
    break;

  case 101:
#line 713 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).astType = AST_EXPR_STMT;
    }
#line 1458 "jap.tab.cc" // lalr1.cc:846
    break;

  case 102:
#line 718 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_EMPTY_STMT;
    }
#line 1467 "jap.tab.cc" // lalr1.cc:846
    break;

  case 103:
#line 724 "jap.y" // lalr1.cc:846
    {
        //std::cout << "Many Local Variables defined: " << $3.sVal << "\n";
		(yylhs.value) = (yystack_[1].value);
		(yylhs.value).astType = AST_VAR_DEFINE_STMT;
    }
#line 1477 "jap.tab.cc" // lalr1.cc:846
    break;

  case 104:
#line 733 "jap.y" // lalr1.cc:846
    {
        //kicker->validator->validate_data_type_name(&$1, false);
		kicker->parseState->lastNodeId = ego_add_to_table((yystack_[0].value));
	}
#line 1486 "jap.tab.cc" // lalr1.cc:846
    break;

  case 105:
#line 736 "jap.y" // lalr1.cc:846
    {
        //std::cout << "Many Local Variables defined: " << $3.sVal << "\n";
		
		(yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_VAR_DEFINE_EXPR;
    }
#line 1499 "jap.tab.cc" // lalr1.cc:846
    break;

  case 106:
#line 748 "jap.y" // lalr1.cc:846
    {
		//std::cout << "Local Variable defined: " << $1.sVal << "\n";
		(yylhs.value) = (yystack_[0].value);
	}
#line 1508 "jap.tab.cc" // lalr1.cc:846
    break;

  case 107:
#line 752 "jap.y" // lalr1.cc:846
    {
		//std::cout << "Local Variable defined: " << $1.sVal << "\n";
		
		(yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_VAR_DEFINE_MULTIPLE;
	}
#line 1521 "jap.tab.cc" // lalr1.cc:846
    break;

  case 108:
#line 764 "jap.y" // lalr1.cc:846
    {
		
		YYSTYPE curVarType = ego_get_from_table(kicker->parseState->lastNodeId);
		//kicker->validator->check_local_variable_type(&curVarType);
		
		ego::Variable* var = ego_register_method_variable(&curVarType, &(yystack_[1].value), &(yystack_[0].value));
		
		YYSTYPE p;
        p.op1 = kicker->parseState->lastNodeId;
        p.op2 = ego_add_to_table((yystack_[1].value));
        p.astType = AST_VAR_DEFINITION;
		
		(yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table(p);
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_VAR_DEFINE;
		
		//kicker->validator->check_local_variable(var, varIsObject(&curVarType));
	}
#line 1545 "jap.tab.cc" // lalr1.cc:846
    break;

  case 109:
#line 786 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node(); 
    }
#line 1553 "jap.tab.cc" // lalr1.cc:846
    break;

  case 110:
#line 789 "jap.y" // lalr1.cc:846
    {
        
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).op = ego_add_to_table((yystack_[1].value));
        (yylhs.value).astType = AST_RIGHT_ASSIGNMENT; 
        
    }
#line 1566 "jap.tab.cc" // lalr1.cc:846
    break;

  case 111:
#line 800 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
    }
#line 1574 "jap.tab.cc" // lalr1.cc:846
    break;

  case 112:
#line 803 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2= ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_IF_ELSE_IF_STMT;
    }
#line 1585 "jap.tab.cc" // lalr1.cc:846
    break;

  case 113:
#line 809 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_IF_ELSE_IF_ELSE_STMT;
    }
#line 1597 "jap.tab.cc" // lalr1.cc:846
    break;

  case 114:
#line 818 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_IF_STMT;
    }
#line 1608 "jap.tab.cc" // lalr1.cc:846
    break;

  case 115:
#line 826 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_ELSE_IF_STMT;
    }
#line 1617 "jap.tab.cc" // lalr1.cc:846
    break;

  case 116:
#line 830 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).sType = (yystack_[0].value).sType;
        (yylhs.value).astType = AST_IF_ELSE_IF_STMT;
    }
#line 1629 "jap.tab.cc" // lalr1.cc:846
    break;

  case 117:
#line 838 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[2].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
    }
#line 1639 "jap.tab.cc" // lalr1.cc:846
    break;

  case 118:
#line 844 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[1].value);
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_ELSE_STMT;
    }
#line 1649 "jap.tab.cc" // lalr1.cc:846
    break;

  case 119:
#line 851 "jap.y" // lalr1.cc:846
    {
        kicker->parseState->loopFound();
    }
#line 1657 "jap.tab.cc" // lalr1.cc:846
    break;

  case 120:
#line 853 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[3].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        
        kicker->parseState->loopClosed();
    }
#line 1669 "jap.tab.cc" // lalr1.cc:846
    break;

  case 121:
#line 862 "jap.y" // lalr1.cc:846
    {
        kicker->parseState->loopFound();
    }
#line 1677 "jap.tab.cc" // lalr1.cc:846
    break;

  case 122:
#line 864 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[5].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        kicker->parseState->loopClosed();
    }
#line 1688 "jap.tab.cc" // lalr1.cc:846
    break;

  case 123:
#line 872 "jap.y" // lalr1.cc:846
    {
        kicker->parseState->switchFound();
    }
#line 1696 "jap.tab.cc" // lalr1.cc:846
    break;

  case 124:
#line 874 "jap.y" // lalr1.cc:846
    {
        kicker->parseState->switchClosed();
        
        (yylhs.value) = (yystack_[3].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_SWITCH_STMT;
    }
#line 1709 "jap.tab.cc" // lalr1.cc:846
    break;

  case 125:
#line 884 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[2].value);
    }
#line 1717 "jap.tab.cc" // lalr1.cc:846
    break;

  case 126:
#line 889 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 1725 "jap.tab.cc" // lalr1.cc:846
    break;

  case 127:
#line 892 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_MULTI_CASE_STMT_WITH_BODY;
    }
#line 1736 "jap.tab.cc" // lalr1.cc:846
    break;

  case 128:
#line 900 "jap.y" // lalr1.cc:846
    {
        kicker->parseState->caseFound();
    }
#line 1744 "jap.tab.cc" // lalr1.cc:846
    break;

  case 129:
#line 902 "jap.y" // lalr1.cc:846
    {
        // stmt_list includes break statement as well
        kicker->parseState->caseClosed();
        
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op = ego_add_to_table((yystack_[1].value));
        (yylhs.value).astType = AST_CASE_STMT_WITH_BODY;
        
    }
#line 1760 "jap.tab.cc" // lalr1.cc:846
    break;

  case 130:
#line 915 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 1768 "jap.tab.cc" // lalr1.cc:846
    break;

  case 131:
#line 918 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_MULTI_CASE_STMT;
    }
#line 1779 "jap.tab.cc" // lalr1.cc:846
    break;

  case 132:
#line 926 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[2].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_CASE_STMT;
    }
#line 1789 "jap.tab.cc" // lalr1.cc:846
    break;

  case 133:
#line 931 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[1].value);
        (yylhs.value).astType = AST_DEFAULT_STMT;
    }
#line 1798 "jap.tab.cc" // lalr1.cc:846
    break;

  case 134:
#line 937 "jap.y" // lalr1.cc:846
    {
    if (!kicker->parseState->inCaseOrLoop()) {
        ego::throwError("Wrong placement of BREAK statement");
    }
    
    (yylhs.value) = (yystack_[1].value);
}
#line 1810 "jap.tab.cc" // lalr1.cc:846
    break;

  case 135:
#line 946 "jap.y" // lalr1.cc:846
    {
        if (!kicker->parseState->inLoop()) {
            ego::throwError("Wrong placement of CONTINUE statement");
        }
        
        (yylhs.value) = (yystack_[1].value);
    }
#line 1822 "jap.tab.cc" // lalr1.cc:846
    break;

  case 136:
#line 956 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[3].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[0].value));
    }
#line 1833 "jap.tab.cc" // lalr1.cc:846
    break;

  case 137:
#line 964 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 1841 "jap.tab.cc" // lalr1.cc:846
    break;

  case 138:
#line 967 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_MULTI_CATCH_STMT;
    }
#line 1852 "jap.tab.cc" // lalr1.cc:846
    break;

  case 139:
#line 974 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[6].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[4].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_CATCH_STMT;
    }
#line 1864 "jap.tab.cc" // lalr1.cc:846
    break;

  case 140:
#line 982 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[1].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_FINALLY_STMT;
    }
#line 1874 "jap.tab.cc" // lalr1.cc:846
    break;

  case 141:
#line 989 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[2].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
    }
#line 1883 "jap.tab.cc" // lalr1.cc:846
    break;

  case 142:
#line 996 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1897 "jap.tab.cc" // lalr1.cc:846
    break;

  case 143:
#line 1005 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1911 "jap.tab.cc" // lalr1.cc:846
    break;

  case 144:
#line 1014 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1925 "jap.tab.cc" // lalr1.cc:846
    break;

  case 145:
#line 1023 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1939 "jap.tab.cc" // lalr1.cc:846
    break;

  case 146:
#line 1032 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1953 "jap.tab.cc" // lalr1.cc:846
    break;

  case 147:
#line 1041 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1967 "jap.tab.cc" // lalr1.cc:846
    break;

  case 148:
#line 1050 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1981 "jap.tab.cc" // lalr1.cc:846
    break;

  case 149:
#line 1059 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1995 "jap.tab.cc" // lalr1.cc:846
    break;

  case 150:
#line 1068 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 2009 "jap.tab.cc" // lalr1.cc:846
    break;

  case 151:
#line 1077 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 2023 "jap.tab.cc" // lalr1.cc:846
    break;

  case 152:
#line 1086 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 2037 "jap.tab.cc" // lalr1.cc:846
    break;

  case 153:
#line 1095 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 2051 "jap.tab.cc" // lalr1.cc:846
    break;

  case 154:
#line 1106 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[2].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
    }
#line 2060 "jap.tab.cc" // lalr1.cc:846
    break;

  case 155:
#line 1113 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[1].value);

        //kicker->validator->check_return_statement(NULL, kicker->parseState->curMethod);
    }
#line 2070 "jap.tab.cc" // lalr1.cc:846
    break;

  case 156:
#line 1118 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[2].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));

        //kicker->validator->check_return_statement(&$2, kicker->parseState->curMethod);
    }
#line 2081 "jap.tab.cc" // lalr1.cc:846
    break;

  case 157:
#line 1131 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2087 "jap.tab.cc" // lalr1.cc:846
    break;

  case 158:
#line 1132 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2093 "jap.tab.cc" // lalr1.cc:846
    break;

  case 159:
#line 1133 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2099 "jap.tab.cc" // lalr1.cc:846
    break;

  case 160:
#line 1134 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2105 "jap.tab.cc" // lalr1.cc:846
    break;

  case 161:
#line 1135 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2111 "jap.tab.cc" // lalr1.cc:846
    break;

  case 162:
#line 1136 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2117 "jap.tab.cc" // lalr1.cc:846
    break;

  case 163:
#line 1137 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2123 "jap.tab.cc" // lalr1.cc:846
    break;

  case 164:
#line 1138 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2129 "jap.tab.cc" // lalr1.cc:846
    break;

  case 165:
#line 1139 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2135 "jap.tab.cc" // lalr1.cc:846
    break;

  case 166:
#line 1142 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[1].value); }
#line 2141 "jap.tab.cc" // lalr1.cc:846
    break;

  case 167:
#line 1146 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2147 "jap.tab.cc" // lalr1.cc:846
    break;

  case 168:
#line 1147 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2153 "jap.tab.cc" // lalr1.cc:846
    break;

  case 169:
#line 1148 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2159 "jap.tab.cc" // lalr1.cc:846
    break;

  case 170:
#line 1149 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2165 "jap.tab.cc" // lalr1.cc:846
    break;

  case 171:
#line 1152 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_ADD; 
    }
#line 2177 "jap.tab.cc" // lalr1.cc:846
    break;

  case 172:
#line 1159 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_SUB; 
    }
#line 2189 "jap.tab.cc" // lalr1.cc:846
    break;

  case 173:
#line 1166 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_MUL; 
    }
#line 2201 "jap.tab.cc" // lalr1.cc:846
    break;

  case 174:
#line 1173 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
         (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
         (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
         (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
         (yylhs.value).astType = AST_DIV; 
    }
#line 2213 "jap.tab.cc" // lalr1.cc:846
    break;

  case 175:
#line 1180 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_MOD; 
    }
#line 2225 "jap.tab.cc" // lalr1.cc:846
    break;

  case 176:
#line 1187 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_CONCAT; 
    }
#line 2237 "jap.tab.cc" // lalr1.cc:846
    break;

  case 177:
#line 1194 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_INCR_DECR; 
    }
#line 2248 "jap.tab.cc" // lalr1.cc:846
    break;

  case 178:
#line 1203 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_LT; 
    }
#line 2260 "jap.tab.cc" // lalr1.cc:846
    break;

  case 179:
#line 1210 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_GT; 
    }
#line 2272 "jap.tab.cc" // lalr1.cc:846
    break;

  case 180:
#line 1217 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_LT_OR_EQ; 
    }
#line 2284 "jap.tab.cc" // lalr1.cc:846
    break;

  case 181:
#line 1224 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_GT_OR_EQ; 
    }
#line 2296 "jap.tab.cc" // lalr1.cc:846
    break;

  case 182:
#line 1231 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_EQUAL; 
    }
#line 2308 "jap.tab.cc" // lalr1.cc:846
    break;

  case 183:
#line 1238 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_NOT_EQUAL; 
    }
#line 2320 "jap.tab.cc" // lalr1.cc:846
    break;

  case 184:
#line 1245 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_IDENTICAL; 
    }
#line 2332 "jap.tab.cc" // lalr1.cc:846
    break;

  case 185:
#line 1252 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_NOT_IDENTICAL; 
    }
#line 2344 "jap.tab.cc" // lalr1.cc:846
    break;

  case 186:
#line 1261 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
		(yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
		(yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
		(yylhs.value).astType = AST_AND_AND; 
	}
#line 2356 "jap.tab.cc" // lalr1.cc:846
    break;

  case 187:
#line 1268 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
		(yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
		(yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
		(yylhs.value).astType = AST_OR_OR; 
	}
#line 2368 "jap.tab.cc" // lalr1.cc:846
    break;

  case 188:
#line 1277 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_AND; 
    }
#line 2380 "jap.tab.cc" // lalr1.cc:846
    break;

  case 189:
#line 1284 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_OR; 
    }
#line 2392 "jap.tab.cc" // lalr1.cc:846
    break;

  case 190:
#line 1291 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_XOR; 
    }
#line 2404 "jap.tab.cc" // lalr1.cc:846
    break;

  case 191:
#line 1298 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_SHIFT_LEFT; 
    }
#line 2416 "jap.tab.cc" // lalr1.cc:846
    break;

  case 192:
#line 1305 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_SHIFT_RIGHT; 
    }
#line 2428 "jap.tab.cc" // lalr1.cc:846
    break;

  case 193:
#line 1312 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).astType = AST_NEGATION; 
    }
#line 2439 "jap.tab.cc" // lalr1.cc:846
    break;

  case 194:
#line 1322 "jap.y" // lalr1.cc:846
    {
        //Do not check Class exists or not here
		
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_NEW_OBJECT;
    }
#line 2453 "jap.tab.cc" // lalr1.cc:846
    break;

  case 195:
#line 1335 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
		(yylhs.value).astType = AST_ARRAY_OF_DATA_WRAPPER;
	}
#line 2463 "jap.tab.cc" // lalr1.cc:846
    break;

  case 196:
#line 1343 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_ARRAY_OF_DATA;
	}
#line 2473 "jap.tab.cc" // lalr1.cc:846
    break;

  case 197:
#line 1348 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
		(yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_ARRAY_OF_DATA;
	}
#line 2484 "jap.tab.cc" // lalr1.cc:846
    break;

  case 198:
#line 1358 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
		(yylhs.value).astType = AST_SARRAY_OF_DATA_WRAPPER;
	}
#line 2494 "jap.tab.cc" // lalr1.cc:846
    break;

  case 199:
#line 1366 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_SARRAY_OF_DATA;
	}
#line 2504 "jap.tab.cc" // lalr1.cc:846
    break;

  case 200:
#line 1371 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
		(yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_SARRAY_OF_DATA;
	}
#line 2515 "jap.tab.cc" // lalr1.cc:846
    break;

  case 201:
#line 1380 "jap.y" // lalr1.cc:846
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
		(yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_SARRAY_MAP;
	}
#line 2526 "jap.tab.cc" // lalr1.cc:846
    break;

  case 202:
#line 1394 "jap.y" // lalr1.cc:846
    {
        (yylhs.value).astType = AST_EMPTY_ARGS;
    }
#line 2534 "jap.tab.cc" // lalr1.cc:846
    break;

  case 203:
#line 1397 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).astType = AST_ACTUAL_ARGS;
    }
#line 2544 "jap.tab.cc" // lalr1.cc:846
    break;

  case 204:
#line 1404 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_ACTUAL_ARG;
    }
#line 2554 "jap.tab.cc" // lalr1.cc:846
    break;

  case 205:
#line 1409 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_ACTUAL_ARG_LIST;
    }
#line 2566 "jap.tab.cc" // lalr1.cc:846
    break;

  case 206:
#line 1417 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2572 "jap.tab.cc" // lalr1.cc:846
    break;

  case 207:
#line 1419 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2578 "jap.tab.cc" // lalr1.cc:846
    break;

  case 208:
#line 1420 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2584 "jap.tab.cc" // lalr1.cc:846
    break;

  case 209:
#line 1425 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_OBJECT_PROPERTY_ACCESS;
    }
#line 2595 "jap.tab.cc" // lalr1.cc:846
    break;

  case 210:
#line 1433 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 2603 "jap.tab.cc" // lalr1.cc:846
    break;

  case 211:
#line 1436 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_OBJECT_PROPERTY_CHAIN;
    }
#line 2614 "jap.tab.cc" // lalr1.cc:846
    break;

  case 212:
#line 1444 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_OBJECT_ATRIBUTE;
    }
#line 2623 "jap.tab.cc" // lalr1.cc:846
    break;

  case 213:
#line 1448 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();

        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value)); // function name
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_METHOD_CALL;
    }
#line 2635 "jap.tab.cc" // lalr1.cc:846
    break;

  case 214:
#line 1457 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 2643 "jap.tab.cc" // lalr1.cc:846
    break;

  case 215:
#line 1462 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value); 
    }
#line 2651 "jap.tab.cc" // lalr1.cc:846
    break;

  case 216:
#line 1465 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_STATIC_PROPERTY_CHAIN;
    }
#line 2662 "jap.tab.cc" // lalr1.cc:846
    break;

  case 217:
#line 1473 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_STATIC_METHOD_CALL;
    }
#line 2673 "jap.tab.cc" // lalr1.cc:846
    break;

  case 218:
#line 1482 "jap.y" // lalr1.cc:846
    {
        // Local variable can be used as left assignment
        // But not this
        if ((yystack_[0].value).sType == yy::parser::token::T_THIS) {
            ego::throwError("'this' must not be used in left side of assignment");
        }
        (yylhs.value) = (yystack_[0].value);
    }
#line 2686 "jap.tab.cc" // lalr1.cc:846
    break;

  case 219:
#line 1490 "jap.y" // lalr1.cc:846
    {
        if ((yystack_[0].value).astType == AST_METHOD_CALL) {
            ego::throwError("Method call must not be used on Left side assignment");
        }
        
        (yylhs.value) = (yystack_[0].value);
    }
#line 2698 "jap.tab.cc" // lalr1.cc:846
    break;

  case 220:
#line 1500 "jap.y" // lalr1.cc:846
    {
        //std::cout << "Local Variable found\n";
        (yylhs.value) = (yystack_[0].value);
    }
#line 2707 "jap.tab.cc" // lalr1.cc:846
    break;

  case 221:
#line 1504 "jap.y" // lalr1.cc:846
    {
		if (kicker->parseState->curMethod->isStatic) {
            ego::throwError("'this' must not be used in the static method.");
        }
        //std::cout << "this->object Variable found\n";
        (yylhs.value) = (yystack_[0].value);
    }
#line 2719 "jap.tab.cc" // lalr1.cc:846
    break;

  case 222:
#line 1511 "jap.y" // lalr1.cc:846
    {
        //std::cout << "static Variable found\n";
        (yylhs.value) = (yystack_[0].value);
    }
#line 2728 "jap.tab.cc" // lalr1.cc:846
    break;

  case 223:
#line 1518 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_LOCAL_VARIABLE; 
    }
#line 2738 "jap.tab.cc" // lalr1.cc:846
    break;

  case 224:
#line 1523 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_LOCAL_ARRAY_VARIABLE; 
    }
#line 2749 "jap.tab.cc" // lalr1.cc:846
    break;

  case 225:
#line 1531 "jap.y" // lalr1.cc:846
    { (yylhs.value) = (yystack_[0].value); }
#line 2755 "jap.tab.cc" // lalr1.cc:846
    break;

  case 226:
#line 1534 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_THIS_VARIABLE;
    }
#line 2765 "jap.tab.cc" // lalr1.cc:846
    break;

  case 227:
#line 1542 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_STATIC_VARIABLE;
    }
#line 2774 "jap.tab.cc" // lalr1.cc:846
    break;

  case 228:
#line 1546 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_STATIC_ARRAY_VARIABLE;
    }
#line 2785 "jap.tab.cc" // lalr1.cc:846
    break;

  case 229:
#line 1560 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 2793 "jap.tab.cc" // lalr1.cc:846
    break;

  case 230:
#line 1566 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 2801 "jap.tab.cc" // lalr1.cc:846
    break;

  case 231:
#line 1569 "jap.y" // lalr1.cc:846
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_ARRAY_MULTI;
    }
#line 2812 "jap.tab.cc" // lalr1.cc:846
    break;

  case 232:
#line 1578 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).astType = AST_ARRAY_INDEX_EXPR;
    }
#line 2822 "jap.tab.cc" // lalr1.cc:846
    break;

  case 233:
#line 1583 "jap.y" // lalr1.cc:846
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).astType = AST_ARRAY_INDEX_EXPR;
    }
#line 2832 "jap.tab.cc" // lalr1.cc:846
    break;


#line 2836 "jap.tab.cc" // lalr1.cc:846
          default:
            break;
          }
      }
    catch (const syntax_error& yyexc)
      {
        error (yyexc);
        YYERROR;
      }
    YY_SYMBOL_PRINT ("-> $$ =", yylhs);
    yypop_ (yylen);
    yylen = 0;
    YY_STACK_PRINT ();

    // Shift the result of the reduction.
    yypush_ (YY_NULL, yylhs);
    goto yynewstate;

  /*--------------------------------------.
  | yyerrlab -- here on detecting error.  |
  `--------------------------------------*/
  yyerrlab:
    // If not already recovering from an error, report this error.
    if (!yyerrstatus_)
      {
        ++yynerrs_;
        error (yyla.location, yysyntax_error_ (yystack_[0].state,
                                           yyempty ? yyempty_ : yyla.type_get ()));
      }


    yyerror_range[1].location = yyla.location;
    if (yyerrstatus_ == 3)
      {
        /* If just tried and failed to reuse lookahead token after an
           error, discard it.  */

        // Return failure if at end of input.
        if (yyla.type_get () == yyeof_)
          YYABORT;
        else if (!yyempty)
          {
            yy_destroy_ ("Error: discarding", yyla);
            yyempty = true;
          }
      }

    // Else will try to reuse lookahead token after shifting the error token.
    goto yyerrlab1;


  /*---------------------------------------------------.
  | yyerrorlab -- error raised explicitly by YYERROR.  |
  `---------------------------------------------------*/
  yyerrorlab:

    /* Pacify compilers like GCC when the user code never invokes
       YYERROR and the label yyerrorlab therefore never appears in user
       code.  */
    if (false)
      goto yyerrorlab;
    yyerror_range[1].location = yystack_[yylen - 1].location;
    /* Do not reclaim the symbols of the rule whose action triggered
       this YYERROR.  */
    yypop_ (yylen);
    yylen = 0;
    goto yyerrlab1;

  /*-------------------------------------------------------------.
  | yyerrlab1 -- common code for both syntax error and YYERROR.  |
  `-------------------------------------------------------------*/
  yyerrlab1:
    yyerrstatus_ = 3;   // Each real token shifted decrements this.
    {
      stack_symbol_type error_token;
      for (;;)
        {
          yyn = yypact_[yystack_[0].state];
          if (!yy_pact_value_is_default_ (yyn))
            {
              yyn += yyterror_;
              if (0 <= yyn && yyn <= yylast_ && yycheck_[yyn] == yyterror_)
                {
                  yyn = yytable_[yyn];
                  if (0 < yyn)
                    break;
                }
            }

          // Pop the current state because it cannot handle the error token.
          if (yystack_.size () == 1)
            YYABORT;

          yyerror_range[1].location = yystack_[0].location;
          yy_destroy_ ("Error: popping", yystack_[0]);
          yypop_ ();
          YY_STACK_PRINT ();
        }

      yyerror_range[2].location = yyla.location;
      YYLLOC_DEFAULT (error_token.location, yyerror_range, 2);

      // Shift the error token.
      error_token.state = yyn;
      yypush_ ("Shifting", error_token);
    }
    goto yynewstate;

    // Accept.
  yyacceptlab:
    yyresult = 0;
    goto yyreturn;

    // Abort.
  yyabortlab:
    yyresult = 1;
    goto yyreturn;

  yyreturn:
    if (!yyempty)
      yy_destroy_ ("Cleanup: discarding lookahead", yyla);

    /* Do not reclaim the symbols of the rule whose action triggered
       this YYABORT or YYACCEPT.  */
    yypop_ (yylen);
    while (1 < yystack_.size ())
      {
        yy_destroy_ ("Cleanup: popping", yystack_[0]);
        yypop_ ();
      }

    return yyresult;
  }
    catch (...)
      {
        YYCDEBUG << "Exception caught: cleaning lookahead and stack"
                 << std::endl;
        // Do not try to display the values of the reclaimed symbols,
        // as their printer might throw an exception.
        if (!yyempty)
          yy_destroy_ (YY_NULL, yyla);

        while (1 < yystack_.size ())
          {
            yy_destroy_ (YY_NULL, yystack_[0]);
            yypop_ ();
          }
        throw;
      }
  }

  void
  parser::error (const syntax_error& yyexc)
  {
    error (yyexc.location, yyexc.what());
  }

  // Generate an error message.
  std::string
  parser::yysyntax_error_ (state_type, symbol_number_type) const
  {
    return YY_("syntax error");
  }


  const short int parser::yypact_ninf_ = -192;

  const short int parser::yytable_ninf_ = -220;

  const short int
  parser::yypact_[] =
  {
      24,   -48,    31,  -192,  -192,  -192,   -27,  -192,    12,    -8,
    -192,   -48,    -7,    -7,    51,  -192,   -35,  -192,   -13,  -192,
      57,   -59,  -192,  -192,  -192,  -192,  -192,  -192,  -192,  -192,
     -11,  -192,    11,    54,    81,    42,  -192,  -192,  -192,    71,
    -192,  -192,  -192,  -192,  -192,  -192,    68,    52,    75,    73,
    -192,  -192,  -192,  -192,    85,   134,    94,    21,  -192,  -192,
    -192,    98,  -192,  -192,  -192,  -192,  -192,  -192,  -192,  -192,
      71,    71,    71,    71,  -192,   -48,   112,    47,   198,   200,
    -192,    48,  -192,   136,   -48,  -192,  -192,  -192,  -192,  -192,
     188,   128,  -192,  -192,    71,  -192,  -192,   136,   250,  -192,
     192,  -192,  -192,   -48,   131,  -192,   136,    71,   251,  -192,
     138,     3,  -192,   161,   137,   201,    71,   -87,  -192,  -192,
    -192,  -192,  -192,   145,   -26,  -192,  -192,  -192,  -192,   251,
    -192,  -192,  -192,  -192,  -192,   202,   206,  -192,   210,  -192,
    -192,  1048,  1048,  1048,   -48,   146,  -192,  -192,  -192,   151,
     157,  1001,   165,  1048,  -192,  -192,  1048,  -192,   216,  1048,
     -17,  -192,  -192,   -40,  -192,  -192,   169,  -192,   231,  -192,
    -192,  -192,  -192,  -192,  -192,  -192,  -192,  -192,  -192,   421,
    -192,  -192,  -192,  -192,  -192,  -192,  -192,  -192,  -192,   229,
    -192,   191,   522,    32,  -192,   237,  -192,  -192,   442,  -192,
     -19,  -192,  1153,     1,   172,   165,   165,   146,   146,  -192,
    -192,  -192,   463,   211,   484,  1107,     2,  -192,  -192,   400,
     184,    93,   974,  -192,  -192,   237,  -192,  -192,   146,    14,
    -192,  1048,  1048,  1048,  1048,  1048,  1048,  1048,  1048,  1048,
    1048,  1048,  1048,  1048,  1048,  1048,  1048,  1048,  1048,  1048,
    1048,  1048,  -192,   246,   191,  -192,   172,  1048,  1048,  1048,
    1048,  1048,  1048,  1048,  1048,  1048,  1048,  1048,  1048,  -192,
    -192,  -192,   191,  -192,  -192,  1048,  -192,  -192,  -192,   232,
     165,   190,  -192,   193,    61,  -192,  -192,  1048,  1048,  -192,
    -192,   252,   310,  -192,   189,   237,   199,  -192,  1153,     4,
    -192,  -192,   165,   165,  -192,  -192,   521,   541,   561,   682,
     664,   702,   702,   702,   702,   719,   719,   719,   719,   284,
     284,   208,   208,   208,  -192,  -192,  -192,  -192,  -192,  -192,
     585,   606,   627,   648,   749,   770,   791,   812,   913,   934,
     955,   976,  1153,   146,  -192,    87,  -192,   -48,   165,  -192,
    -192,  1153,  -192,   321,   184,  -192,  -192,  1048,  -192,  -192,
    -192,  -192,  -192,  -192,  -192,  -192,  -192,  -192,  -192,  -192,
    -192,  -192,  -192,   215,   240,   309,   -65,  -192,    87,  -192,
     -28,  -192,  1048,  -192,  -192,  -192,  -192,   317,  -192,  -192,
    -192,  -192,  -192,   267,  1153,  -192,   295,   212,   -60,   165,
    -192
  };

  const unsigned char
  parser::yydefact_[] =
  {
       4,     0,     0,     2,     8,     6,     0,     1,     0,     0,
       5,     0,     0,     0,     0,     9,     3,    13,     0,     7,
      11,     0,    16,    18,    23,    24,    25,    20,    14,    37,
       0,    10,     0,     0,    26,     0,    12,    37,    37,     0,
      21,    44,    45,    43,    15,    38,    46,     0,     0,     0,
      60,    61,    62,    63,     0,     0,    67,     0,    59,    28,
      64,    31,    50,    48,    49,    47,    39,    17,    19,    30,
       0,     0,     0,     0,    27,     0,    33,     0,     0,     0,
      69,     0,    29,    26,     0,    22,    58,    40,    41,    42,
       0,    57,    65,    66,     0,    68,    32,    26,    34,    53,
       0,    70,    35,     0,     0,    51,    26,    82,    71,    36,
       0,     0,    83,     0,     0,     0,     0,     0,    75,    76,
      77,    78,    79,     0,     0,    72,    73,    74,    52,    71,
      84,    55,    87,    54,    56,     0,     0,    85,     0,    81,
      80,     0,     0,     0,     0,     0,   121,   119,   123,     0,
       0,     0,     0,     0,   226,   102,     0,    86,     0,     0,
      67,   104,   157,   227,    88,    89,     0,    90,   111,    91,
      92,    93,    94,    95,    96,    97,    98,    99,   100,     0,
     159,   158,   167,   168,   169,   170,   160,   164,   165,   162,
     163,   215,     0,   161,   220,   223,   221,   222,     0,   162,
     161,   193,   196,     0,     0,     0,     0,     0,     0,   134,
     135,   155,     0,     0,     0,     0,     0,   199,   225,     0,
       0,     0,     0,   217,   228,   229,   230,   103,     0,   112,
     115,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,   101,     0,   216,   210,   212,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,   208,
     207,   177,   209,   224,   154,     0,   195,   194,   114,     0,
       0,     0,   156,     0,     0,   137,   141,     0,     0,   198,
     166,     0,   105,   106,     0,   227,     0,   202,   206,     0,
     204,   231,     0,     0,   116,   113,   187,   186,   189,   190,
     188,   182,   183,   184,   185,   178,   180,   179,   181,   191,
     192,   171,   172,   176,   173,   174,   175,   214,   211,   213,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,   197,     0,   120,     0,   124,     0,     0,   138,
     136,   201,   200,   109,     0,   232,   233,     0,   203,   117,
     118,   142,   143,   144,   145,   146,   147,   148,   149,   150,
     151,   152,   153,     0,     0,     0,     0,   126,   128,   130,
       0,   140,     0,   108,   107,   205,   122,     0,   133,   125,
     127,    87,   131,     0,   110,   132,     0,     0,    94,     0,
     139
  };

  const short int
  parser::yypgoto_[] =
  {
    -192,  -192,  -192,  -192,    -1,  -192,  -192,  -192,  -192,   326,
    -192,  -192,   209,  -192,  -192,  -192,   -31,  -192,  -192,  -192,
    -192,  -192,   187,  -192,  -192,  -192,  -192,  -192,  -192,  -192,
    -192,  -192,  -192,  -192,   -38,   203,  -192,   214,  -192,  -111,
    -102,  -192,   228,  -147,   -46,  -192,  -192,  -192,  -192,  -192,
      -6,  -192,  -192,  -192,  -192,   120,  -192,  -192,  -192,  -192,
    -192,  -192,  -192,  -192,  -192,   -25,  -192,  -192,   -23,   -44,
    -192,  -192,  -192,    66,  -192,  -192,  -192,  -192,  -192,   -52,
    -123,  -192,  -192,  -192,  -192,  -192,  -192,  -192,  -192,  -192,
    -192,    77,  -183,  -192,     9,  -192,  -134,   168,  -191,  -192,
    -192,  -192,  -192,  -135,  -192,  -192,  -192,  -192,   179,  -192,
     152
  };

  const short int
  parser::yydefgoto_[] =
  {
      -1,     2,     3,     4,   124,     8,    15,    21,    16,    17,
      32,    33,    18,    34,    61,    27,    40,    57,    58,    76,
      85,    98,    35,    45,    77,    87,    46,    66,    88,   108,
      89,   104,   133,    90,   110,    60,    81,   114,   125,   162,
     163,   111,   112,   134,   138,   164,   165,   166,   220,   292,
     293,   383,   167,   168,   229,   230,   305,   169,   207,   170,
     206,   171,   208,   346,   376,   377,   391,   378,   379,   172,
     173,   174,   284,   285,   350,   175,   176,   177,   178,   179,
     180,   181,   182,   183,   184,   185,   186,   187,   203,   188,
     216,   217,   223,   299,   300,   271,   199,   272,   255,   256,
     190,   191,   192,   200,   194,   195,   196,   197,   224,   225,
     226
  };

  const short int
  parser::yytable_[] =
  {
       6,    59,   126,   193,   189,   213,   275,   288,   116,   357,
      20,   127,     9,     9,     9,    72,    11,     5,   221,   374,
     375,   277,   205,     9,  -129,  -129,    73,     1,   269,   270,
      36,     7,    78,    79,    80,    82,   131,   132,    56,    91,
    -218,  -218,  -218,  -218,  -218,  -218,  -218,  -218,  -218,  -218,
    -218,  -218,    96,    94,    19,    74,   101,    19,   278,   279,
     389,    12,    13,   328,    31,  -129,   102,    14,    49,    56,
      56,    56,    56,   329,    83,   109,    56,   228,   303,   269,
     270,   328,    95,    97,   280,   281,   296,   222,   253,   198,
     201,   202,    49,    56,   136,    14,    10,    30,   393,   212,
     161,   214,   106,   136,   215,   302,    56,   219,    12,    13,
     294,    29,     5,    39,    14,    56,    24,    70,    86,   295,
      50,    51,    52,    53,    54,    55,    72,   289,    25,    26,
     276,   117,   358,   344,     9,    37,     5,   160,    69,   253,
      41,    42,    43,    56,    50,    51,    52,    53,    54,    55,
      41,    42,    43,   283,   348,   359,   360,    62,     5,   118,
     119,   120,   121,    63,    64,   122,    71,    44,    39,    65,
     298,   374,   375,    41,    42,    43,     9,    67,    38,   306,
     307,   308,   309,   310,   311,   312,   313,   314,   315,   316,
     317,   318,   319,   320,   321,   322,   323,   324,   325,   326,
      68,   381,   123,    75,   154,   330,   331,   332,   333,   334,
     335,   336,   337,   338,   339,   340,   341,   141,    84,   158,
     373,    22,    23,   342,    47,    48,     5,   118,   119,   120,
     121,    49,    92,   122,    93,   351,   215,  -219,  -219,  -219,
    -219,  -219,  -219,  -219,  -219,  -219,  -219,  -219,  -219,   249,
     250,   251,   400,    99,   100,   103,   142,   105,   107,   113,
     128,   193,   189,   387,   115,   135,   129,   139,   143,   144,
     123,   140,   145,   159,   209,     5,   118,   119,   120,   121,
     210,   218,   122,    50,    51,    52,    53,    54,    55,   132,
     146,   147,   227,   148,   228,   221,   149,   150,   253,   222,
     151,   152,   141,   283,   153,   298,   118,   119,   120,   121,
     291,   327,   122,   343,   345,   354,    49,   353,   355,   123,
     347,   154,   246,   247,   248,   249,   250,   251,   356,   382,
     394,   388,   397,   155,   156,   157,   158,   159,   386,   395,
     399,   142,    28,   137,   130,   396,   380,   204,   384,   304,
     349,   390,   398,   143,   144,   392,     0,   145,   161,   254,
       5,   118,   119,   120,   121,   352,   385,   122,    50,    51,
      52,    53,    54,    55,   273,   146,   147,   301,   148,     0,
       0,   149,   150,     0,     0,   151,   152,     0,     0,   153,
       0,     0,     0,     0,     0,   160,     0,     0,     0,     0,
       0,     0,     0,     0,   123,     0,   154,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,   155,   156,
       0,   158,   159,   231,   232,   233,   234,   235,   236,   237,
     238,   239,   240,   241,   242,   243,   244,   245,   246,   247,
     248,   249,   250,   251,   231,   232,   233,   234,   235,   236,
     237,   238,   239,   240,   241,   242,   243,   244,   245,   246,
     247,   248,   249,   250,   251,   231,   232,   233,   234,   235,
     236,   237,   238,   239,   240,   241,   242,   243,   244,   245,
     246,   247,   248,   249,   250,   251,   231,   232,   233,   234,
     235,   236,   237,   238,   239,   240,   241,   242,   243,   244,
     245,   246,   247,   248,   249,   250,   251,   231,   232,   233,
     234,   235,   236,   237,   238,   239,   240,   241,   242,   243,
     244,   245,   246,   247,   248,   249,   250,   251,   290,     0,
     257,   258,   259,   260,   261,   262,   263,   264,   265,   266,
     267,   268,     0,     0,   252,   232,   233,   234,   235,   236,
     237,   238,   239,   240,   241,   242,   243,   244,   245,   246,
     247,   248,   249,   250,   251,   274,   233,   234,   235,   236,
     237,   238,   239,   240,   241,   242,   243,   244,   245,   246,
     247,   248,   249,   250,   251,     0,   282,   234,   235,   236,
     237,   238,   239,   240,   241,   242,   243,   244,   245,   246,
     247,   248,   249,   250,   251,     0,     0,   286,   231,   232,
     233,   234,   235,   236,   237,   238,   239,   240,   241,   242,
     243,   244,   245,   246,   247,   248,   249,   250,   251,   231,
     232,   233,   234,   235,   236,   237,   238,   239,   240,   241,
     242,   243,   244,   245,   246,   247,   248,   249,   250,   251,
     231,   232,   233,   234,   235,   236,   237,   238,   239,   240,
     241,   242,   243,   244,   245,   246,   247,   248,   249,   250,
     251,   231,   232,   233,   234,   235,   236,   237,   238,   239,
     240,   241,   242,   243,   244,   245,   246,   247,   248,   249,
     250,   251,   236,   237,   238,   239,   240,   241,   242,   243,
     244,   245,   246,   247,   248,   249,   250,   251,   361,   235,
     236,   237,   238,   239,   240,   241,   242,   243,   244,   245,
     246,   247,   248,   249,   250,   251,     0,     0,     0,   362,
    -220,  -220,  -220,  -220,   240,   241,   242,   243,   244,   245,
     246,   247,   248,   249,   250,   251,     0,     0,     0,     0,
     363,  -220,  -220,  -220,  -220,   244,   245,   246,   247,   248,
     249,   250,   251,     0,     0,     0,     0,     0,     0,     0,
       0,   364,   231,   232,   233,   234,   235,   236,   237,   238,
     239,   240,   241,   242,   243,   244,   245,   246,   247,   248,
     249,   250,   251,   231,   232,   233,   234,   235,   236,   237,
     238,   239,   240,   241,   242,   243,   244,   245,   246,   247,
     248,   249,   250,   251,   231,   232,   233,   234,   235,   236,
     237,   238,   239,   240,   241,   242,   243,   244,   245,   246,
     247,   248,   249,   250,   251,   231,   232,   233,   234,   235,
     236,   237,   238,   239,   240,   241,   242,   243,   244,   245,
     246,   247,   248,   249,   250,   251,     0,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,   365,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,   366,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,   367,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     0,   368,   231,   232,   233,   234,
     235,   236,   237,   238,   239,   240,   241,   242,   243,   244,
     245,   246,   247,   248,   249,   250,   251,   231,   232,   233,
     234,   235,   236,   237,   238,   239,   240,   241,   242,   243,
     244,   245,   246,   247,   248,   249,   250,   251,   231,   232,
     233,   234,   235,   236,   237,   238,   239,   240,   241,   242,
     243,   244,   245,   246,   247,   248,   249,   250,   251,   231,
     232,   233,   234,   235,   236,   237,   238,   239,   240,   241,
     242,   243,   244,   245,   246,   247,   248,   249,   250,   251,
     142,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,   143,   144,     0,     0,   369,     0,     0,     5,
     118,   119,   120,   121,     0,     0,   122,   142,     0,     0,
       0,     0,     0,     0,     0,     0,     0,   370,     0,   143,
     144,     0,     0,     0,     0,     0,     5,   118,   119,   120,
     121,     0,     0,   122,     0,     0,     0,     0,   371,     0,
       0,     0,     0,   123,     0,   154,     0,     0,     0,     0,
       0,     0,     0,     0,   142,     0,     0,     0,   156,   372,
     158,   159,   297,     0,     0,     0,   143,   144,     0,     0,
     123,     0,   154,     5,   118,   119,   120,   121,     0,     0,
     122,     0,     0,     0,   211,   156,     0,   158,   159,   287,
     231,   232,   233,   234,   235,   236,   237,   238,   239,   240,
     241,   242,   243,   244,   245,   246,   247,   248,   249,   250,
     251,     0,     0,     0,     0,     0,     0,   123,     0,   154,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,   156,     0,   158,   159,   231,   232,   233,   234,
     235,   236,   237,   238,   239,   240,   241,   242,   243,   244,
     245,   246,   247,   248,   249,   250,   251
  };

  const short int
  parser::yycheck_[] =
  {
       1,    39,   113,   138,   138,   152,     5,     5,     5,     5,
      11,   113,    40,    40,    40,    32,     4,    65,    58,    84,
      85,   204,   145,    40,    84,    85,     5,     3,    47,    48,
      41,     0,    70,    71,    72,    73,   123,   124,    39,    77,
       8,     9,    10,    11,    12,    13,    14,    15,    16,    17,
      18,    19,    83,     5,    65,    34,    94,    65,   205,   206,
     125,    96,    97,   254,   123,   125,    97,   102,    21,    70,
      71,    72,    73,   256,    75,   106,    77,    63,    64,    47,
      48,   272,    34,    84,   207,   208,   221,   127,   107,   141,
     142,   143,    21,    94,   120,   102,   123,    40,   126,   151,
     138,   153,   103,   120,   156,   228,   107,   159,    96,    97,
     221,   124,    65,    32,   102,   116,    65,    32,    71,   221,
      73,    74,    75,    76,    77,    78,    32,   125,    77,    78,
     129,   128,   128,   280,    40,   124,    65,   138,    65,   107,
      98,    99,   100,   144,    73,    74,    75,    76,    77,    78,
      98,    99,   100,    92,    93,   302,   303,    89,    65,    66,
      67,    68,    69,    95,    96,    72,    32,   125,    32,   101,
     222,    84,    85,    98,    99,   100,    40,   125,   124,   231,
     232,   233,   234,   235,   236,   237,   238,   239,   240,   241,
     242,   243,   244,   245,   246,   247,   248,   249,   250,   251,
     125,   348,   109,   105,   111,   257,   258,   259,   260,   261,
     262,   263,   264,   265,   266,   267,   268,     7,   106,   126,
     343,    12,    13,   275,    37,    38,    65,    66,    67,    68,
      69,    21,    34,    72,    34,   287,   288,     8,     9,    10,
      11,    12,    13,    14,    15,    16,    17,    18,    19,    41,
      42,    43,   399,    65,   126,     5,    46,    65,   127,     8,
     123,   396,   396,   374,   126,   120,    65,    65,    58,    59,
     109,    65,    62,   127,   123,    65,    66,    67,    68,    69,
     123,    65,    72,    73,    74,    75,    76,    77,    78,   124,
      80,    81,   123,    83,    63,    58,    86,    87,   107,   127,
      90,    91,     7,    92,    94,   357,    66,    67,    68,    69,
     126,    65,    72,    81,   124,     5,    21,    65,   129,   109,
     127,   111,    38,    39,    40,    41,    42,    43,   129,     8,
     382,    22,    65,   123,   124,   125,   126,   127,   123,    22,
     128,    46,    16,   129,   116,   391,   347,   144,   354,   229,
     284,   376,   396,    58,    59,   378,    -1,    62,   396,   191,
      65,    66,    67,    68,    69,   288,   357,    72,    73,    74,
      75,    76,    77,    78,   195,    80,    81,   225,    83,    -1,
      -1,    86,    87,    -1,    -1,    90,    91,    -1,    -1,    94,
      -1,    -1,    -1,    -1,    -1,   396,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,   109,    -1,   111,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,   123,   124,
      -1,   126,   127,    23,    24,    25,    26,    27,    28,    29,
      30,    31,    32,    33,    34,    35,    36,    37,    38,    39,
      40,    41,    42,    43,    23,    24,    25,    26,    27,    28,
      29,    30,    31,    32,    33,    34,    35,    36,    37,    38,
      39,    40,    41,    42,    43,    23,    24,    25,    26,    27,
      28,    29,    30,    31,    32,    33,    34,    35,    36,    37,
      38,    39,    40,    41,    42,    43,    23,    24,    25,    26,
      27,    28,    29,    30,    31,    32,    33,    34,    35,    36,
      37,    38,    39,    40,    41,    42,    43,    23,    24,    25,
      26,    27,    28,    29,    30,    31,    32,    33,    34,    35,
      36,    37,    38,    39,    40,    41,    42,    43,   128,    -1,
       8,     9,    10,    11,    12,    13,    14,    15,    16,    17,
      18,    19,    -1,    -1,   123,    24,    25,    26,    27,    28,
      29,    30,    31,    32,    33,    34,    35,    36,    37,    38,
      39,    40,    41,    42,    43,   123,    25,    26,    27,    28,
      29,    30,    31,    32,    33,    34,    35,    36,    37,    38,
      39,    40,    41,    42,    43,    -1,   123,    26,    27,    28,
      29,    30,    31,    32,    33,    34,    35,    36,    37,    38,
      39,    40,    41,    42,    43,    -1,    -1,   123,    23,    24,
      25,    26,    27,    28,    29,    30,    31,    32,    33,    34,
      35,    36,    37,    38,    39,    40,    41,    42,    43,    23,
      24,    25,    26,    27,    28,    29,    30,    31,    32,    33,
      34,    35,    36,    37,    38,    39,    40,    41,    42,    43,
      23,    24,    25,    26,    27,    28,    29,    30,    31,    32,
      33,    34,    35,    36,    37,    38,    39,    40,    41,    42,
      43,    23,    24,    25,    26,    27,    28,    29,    30,    31,
      32,    33,    34,    35,    36,    37,    38,    39,    40,    41,
      42,    43,    28,    29,    30,    31,    32,    33,    34,    35,
      36,    37,    38,    39,    40,    41,    42,    43,   123,    27,
      28,    29,    30,    31,    32,    33,    34,    35,    36,    37,
      38,    39,    40,    41,    42,    43,    -1,    -1,    -1,   123,
      28,    29,    30,    31,    32,    33,    34,    35,    36,    37,
      38,    39,    40,    41,    42,    43,    -1,    -1,    -1,    -1,
     123,    32,    33,    34,    35,    36,    37,    38,    39,    40,
      41,    42,    43,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,   123,    23,    24,    25,    26,    27,    28,    29,    30,
      31,    32,    33,    34,    35,    36,    37,    38,    39,    40,
      41,    42,    43,    23,    24,    25,    26,    27,    28,    29,
      30,    31,    32,    33,    34,    35,    36,    37,    38,    39,
      40,    41,    42,    43,    23,    24,    25,    26,    27,    28,
      29,    30,    31,    32,    33,    34,    35,    36,    37,    38,
      39,    40,    41,    42,    43,    23,    24,    25,    26,    27,
      28,    29,    30,    31,    32,    33,    34,    35,    36,    37,
      38,    39,    40,    41,    42,    43,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,   123,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,   123,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,   123,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,   123,    23,    24,    25,    26,
      27,    28,    29,    30,    31,    32,    33,    34,    35,    36,
      37,    38,    39,    40,    41,    42,    43,    23,    24,    25,
      26,    27,    28,    29,    30,    31,    32,    33,    34,    35,
      36,    37,    38,    39,    40,    41,    42,    43,    23,    24,
      25,    26,    27,    28,    29,    30,    31,    32,    33,    34,
      35,    36,    37,    38,    39,    40,    41,    42,    43,    23,
      24,    25,    26,    27,    28,    29,    30,    31,    32,    33,
      34,    35,    36,    37,    38,    39,    40,    41,    42,    43,
      46,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,    58,    59,    -1,    -1,   123,    -1,    -1,    65,
      66,    67,    68,    69,    -1,    -1,    72,    46,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,   123,    -1,    58,
      59,    -1,    -1,    -1,    -1,    -1,    65,    66,    67,    68,
      69,    -1,    -1,    72,    -1,    -1,    -1,    -1,   123,    -1,
      -1,    -1,    -1,   109,    -1,   111,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    46,    -1,    -1,    -1,   124,   123,
     126,   127,   128,    -1,    -1,    -1,    58,    59,    -1,    -1,
     109,    -1,   111,    65,    66,    67,    68,    69,    -1,    -1,
      72,    -1,    -1,    -1,   123,   124,    -1,   126,   127,    22,
      23,    24,    25,    26,    27,    28,    29,    30,    31,    32,
      33,    34,    35,    36,    37,    38,    39,    40,    41,    42,
      43,    -1,    -1,    -1,    -1,    -1,    -1,   109,    -1,   111,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,   124,    -1,   126,   127,    23,    24,    25,    26,
      27,    28,    29,    30,    31,    32,    33,    34,    35,    36,
      37,    38,    39,    40,    41,    42,    43
  };

  const unsigned char
  parser::yystos_[] =
  {
       0,     3,   131,   132,   133,    65,   134,     0,   135,    40,
     123,     4,    96,    97,   102,   136,   138,   139,   142,    65,
     134,   137,   142,   142,    65,    77,    78,   145,   139,   124,
      40,   123,   140,   141,   143,   152,    41,   124,   124,    32,
     146,    98,    99,   100,   125,   153,   156,   152,   152,    21,
      73,    74,    75,    76,    77,    78,   134,   147,   148,   164,
     165,   144,    89,    95,    96,   101,   157,   125,   125,    65,
      32,    32,    32,     5,    34,   105,   149,   154,   164,   164,
     164,   166,   164,   134,   106,   150,    71,   155,   158,   160,
     163,   164,    34,    34,     5,    34,   146,   134,   151,    65,
     126,   164,   146,     5,   161,    65,   134,   127,   159,   146,
     164,   171,   172,     8,   167,   126,     5,   128,    66,    67,
      68,    69,    72,   109,   134,   168,   169,   170,   123,    65,
     172,   123,   124,   162,   173,   120,   120,   167,   174,    65,
      65,     7,    46,    58,    59,    62,    80,    81,    83,    86,
      87,    90,    91,    94,   111,   123,   124,   125,   126,   127,
     134,   164,   169,   170,   175,   176,   177,   182,   183,   187,
     189,   191,   199,   200,   201,   205,   206,   207,   208,   209,
     210,   211,   212,   213,   214,   215,   216,   217,   219,   226,
     230,   231,   232,   233,   234,   235,   236,   237,   209,   226,
     233,   209,   209,   218,   165,   210,   190,   188,   192,   123,
     123,   123,   209,   173,   209,   209,   220,   221,    65,   209,
     178,    58,   127,   222,   238,   239,   240,   123,    63,   184,
     185,    23,    24,    25,    26,    27,    28,    29,    30,    31,
      32,    33,    34,    35,    36,    37,    38,    39,    40,    41,
      42,    43,   123,   107,   227,   228,   229,     8,     9,    10,
      11,    12,    13,    14,    15,    16,    17,    18,    19,    47,
      48,   225,   227,   238,   123,     5,   129,   222,   173,   173,
     210,   210,   123,    92,   202,   203,   123,    22,     5,   125,
     128,   126,   179,   180,   169,   170,   233,   128,   209,   223,
     224,   240,   210,    64,   185,   186,   209,   209,   209,   209,
     209,   209,   209,   209,   209,   209,   209,   209,   209,   209,
     209,   209,   209,   209,   209,   209,   209,    65,   228,   222,
     209,   209,   209,   209,   209,   209,   209,   209,   209,   209,
     209,   209,   209,    81,   173,   124,   193,   127,    93,   203,
     204,   209,   221,    65,     5,   129,   129,     5,   128,   173,
     173,   123,   123,   123,   123,   123,   123,   123,   123,   123,
     123,   123,   123,   210,    84,    85,   194,   195,   197,   198,
     134,   173,     8,   181,   180,   224,   123,   169,    22,   125,
     195,   196,   198,   126,   209,    22,   174,    65,   199,   128,
     173
  };

  const unsigned char
  parser::yyr1_[] =
  {
       0,   130,   131,   132,   133,   133,   134,   134,   135,   135,
     136,   137,   137,   138,   138,   139,   140,   139,   141,   139,
     143,   144,   142,   145,   145,   145,   146,   146,   147,   147,
     148,   149,   149,   150,   150,   151,   151,   152,   152,   154,
     153,   155,   155,   156,   156,   156,   157,   157,   157,   157,
     157,   159,   158,   161,   160,   162,   162,   163,   163,   164,
     164,   164,   164,   164,   164,   164,   164,   165,   165,   166,
     166,   167,   167,   168,   168,   169,   169,   169,   169,   169,
     170,   170,   171,   171,   171,   172,   173,   174,   174,   175,
     175,   175,   175,   175,   175,   175,   175,   175,   175,   175,
     175,   175,   175,   176,   178,   177,   179,   179,   180,   181,
     181,   182,   182,   182,   183,   184,   184,   185,   186,   188,
     187,   190,   189,   192,   191,   193,   194,   194,   196,   195,
     197,   197,   198,   198,   199,   200,   201,   202,   202,   203,
     204,   205,   206,   206,   206,   206,   206,   206,   206,   206,
     206,   206,   206,   206,   207,   208,   208,   209,   209,   209,
     209,   209,   209,   209,   209,   209,   210,   211,   211,   211,
     211,   212,   212,   212,   212,   212,   212,   212,   213,   213,
     213,   213,   213,   213,   213,   213,   214,   214,   215,   215,
     215,   215,   215,   215,   216,   217,   218,   218,   219,   220,
     220,   221,   222,   222,   223,   223,   224,   225,   225,   226,
     227,   227,   228,   228,   229,   230,   230,   231,   232,   232,
     233,   233,   233,   234,   234,   235,   236,   237,   237,   238,
     239,   239,   240,   240
  };

  const unsigned char
  parser::yyr2_[] =
  {
       0,     2,     1,     3,     0,     3,     1,     3,     0,     2,
       3,     1,     3,     1,     2,     4,     0,     6,     0,     6,
       0,     0,     7,     1,     1,     1,     0,     3,     1,     3,
       2,     0,     3,     0,     2,     2,     4,     0,     2,     0,
       4,     1,     1,     1,     1,     1,     0,     1,     1,     1,
       1,     0,     6,     0,     7,     1,     1,     1,     1,     1,
       1,     1,     1,     1,     1,     4,     4,     1,     4,     1,
       3,     0,     2,     1,     1,     1,     1,     1,     1,     1,
       3,     3,     0,     1,     3,     4,     3,     0,     2,     1,
       1,     1,     1,     1,     1,     1,     1,     1,     1,     1,
       1,     2,     1,     2,     0,     3,     1,     3,     3,     0,
       2,     1,     2,     3,     3,     1,     2,     3,     2,     0,
       4,     0,     6,     0,     4,     3,     1,     2,     0,     4,
       1,     2,     3,     2,     2,     2,     4,     1,     2,     7,
       2,     3,     4,     4,     4,     4,     4,     4,     4,     4,
       4,     4,     4,     4,     3,     2,     3,     1,     1,     1,
       1,     1,     1,     1,     1,     1,     3,     1,     1,     1,
       1,     3,     3,     3,     3,     3,     3,     2,     3,     3,
       3,     3,     3,     3,     3,     3,     3,     3,     3,     3,
       3,     3,     3,     2,     3,     3,     1,     3,     3,     1,
       3,     3,     2,     3,     1,     3,     1,     1,     1,     2,
       1,     2,     1,     2,     2,     1,     2,     2,     1,     1,
       1,     1,     1,     1,     2,     2,     1,     1,     2,     1,
       1,     2,     3,     3
  };


#if YYDEBUG
  // YYTNAME[SYMBOL-NUM] -- String name of the symbol SYMBOL-NUM.
  // First, the terminals, then, starting at \a yyntokens_, nonterminals.
  const char*
  const parser::yytname_[] =
  {
  "\"end of file\"", "error", "$undefined", "\"package (T_PACKAGE)\"",
  "\"import (T_IMPORT)\"", "','", "\"print (T_PRINT)\"",
  "\"echo (T_ECHO)\"", "'='", "\"+= (T_PLUS_EQUAL)\"",
  "\"-= (T_MINUS_EQUAL)\"", "\"*= (T_MUL_EQUAL)\"", "\"/= (T_DIV_EQUAL)\"",
  "\".= (T_CONCAT_EQUAL)\"", "\"%= (T_MOD_EQUAL)\"",
  "\"&= (T_AND_EQUAL)\"", "\"|= (T_OR_EQUAL)\"", "\"^= (T_XOR_EQUAL)\"",
  "\"<<= (T_SL_EQUAL)\"", "\">>= (T_SR_EQUAL)\"", "\"**= (T_POW_EQUAL)\"",
  "'?'", "':'", "\"|| (T_BOOLEAN_OR)\"", "\"&& (T_BOOLEAN_AND)\"", "'|'",
  "'^'", "'&'", "\"== (T_IS_EQUAL)\"", "\"!= (T_IS_NOT_EQUAL)\"",
  "\"=== (T_IS_IDENTICAL)\"", "\"!== (T_IS_NOT_IDENTICAL)\"", "'<'",
  "\"<= (T_IS_SMALLER_OR_EQUAL)\"", "'>'",
  "\">= (T_IS_GREATER_OR_EQUAL)\"", "\"<< (T_SL)\"", "\">> (T_SR)\"",
  "'+'", "'-'", "'.'", "'*'", "'/'", "'%'", "'!'",
  "\"instanceof (T_INSTANCEOF)\"", "'~'", "\"++ (T_INC)\"",
  "\"-- (T_DEC)\"", "\"(int) (T_INT_CAST)\"",
  "\"(double) (T_DOUBLE_CAST)\"", "\"(string) (T_STRING_CAST)\"",
  "\"(array) (T_ARRAY_CAST)\"", "\"(object) (T_OBJECT_CAST)\"",
  "\"(bool) (T_BOOL_CAST)\"", "T_UNSET_CAST", "'@'", "\"** (T_POW)\"",
  "'['", "\"new (T_NEW)\"", "\"clone (T_CLONE)\"", "\"exit (T_EXIT)\"",
  "\"if (T_IF)\"", "\"elseif (T_ELSEIF)\"", "\"else (T_ELSE)\"",
  "\"identifier (T_ID)\"", "\"integer number (T_LNUMBER)\"",
  "\"floating-point number (T_DNUMBER)\"", "\"bool (T_BOOLEAN)\"",
  "\"string (T_STRING)\"", "\"array (T_ARRAY)\"", "\"void (T_VOID)\"",
  "\"null (T_NULL)\"", "\"integer keyword (T_LNUMBER_NAME)\"",
  "\"float keyword (T_DNUMBER_NAME)\"",
  "\"bool keyword (T_BOOLEAN_NAME)\"",
  "\"string keyword (T_STRING_NAME)\"", "\"array keyword (T_ARRAY_NAME)\"",
  "\"array with string as key (T_SARRAY_NAME)\"", "T_BAD_CHARACTER",
  "\"do (T_DO)\"", "\"while (T_WHILE)\"", "\"for (T_FOR)\"",
  "\"switch (T_SWITCH)\"", "\"case (T_CASE)\"", "\"default (T_DEFAULT)\"",
  "\"break (T_BREAK)\"", "\"continue (T_CONTINUE)\"",
  "\"function (T_FUNCTION)\"", "\"const (T_CONST)\"",
  "\"return (T_RETURN)\"", "\"try (T_TRY)\"", "\"catch (T_CATCH)\"",
  "\"finally (T_FINALLY)\"", "\"throw (T_THROW)\"",
  "\"static (T_STATIC)\"", "\"abstract (T_ABSTRACT)\"",
  "\"final (T_FINAL)\"", "\"private (T_PRIVATE)\"",
  "\"protected (T_PROTECTED)\"", "\"public (T_PUBLIC)\"",
  "\"future (T_FUTURE)\"", "\"class (T_CLASS)\"", "\"trait (T_TRAIT)\"",
  "\"interface (T_INTERFACE)\"", "\"extends (T_EXTENDS)\"",
  "\"implements (T_IMPLEMENTS)\"", "\"-> (T_OBJECT_OPERATOR)\"",
  "\"=> (T_DOUBLE_ARROW)\"", "\"self (T_SELF)\"", "\"parent (T_PARENT)\"",
  "\"this (T_THIS)\"", "\"__CLASS__ (T_CLASS_C)\"",
  "\"__TRAIT__ (T_TRAIT_C)\"", "\"__METHOD__ (T_METHOD_C)\"",
  "\"__LINE__ (T_LINE)\"", "\"__FILE__ (T_FILE)\"",
  "\"__NAMESPACE__ (T_NS_C)\"", "\"__DIR__ (T_DIR)\"",
  "\"whitespace (T_WHITESPACE)\"", "\":: (T_PAAMAYIM_NEKUDOTAYIM)\"",
  "\"non-alpha character (T_TOKEN)\"", "T_EMPTY", "';'", "'{'", "'}'",
  "'$'", "'('", "')'", "']'", "$accept", "start", "file_structure",
  "package_decl", "full_package_name", "imports_decl", "import_decl",
  "import_name_decl", "classes_decl", "class_decl", "$@1", "$@2",
  "simple_class_decl", "$@3", "$@4", "def_class_name",
  "optional_class_generics", "class_generic_hints", "generic_hint",
  "optional_extends", "optional_implements", "class_implements_list",
  "class_props_decl", "class_property_decl", "$@5",
  "class_method_or_variable", "access_modifier", "scope_modifier",
  "class_attribute_decl_part", "$@6", "class_method_decl_part", "$@7",
  "method_body", "return_data_type", "data_type_hint", "class_type",
  "data_type_hints", "scalar_const_assignment", "scalar_const_to_assign",
  "scalar_const", "class_constant", "formal_param_list",
  "formal_parameter", "closed_stmt_list", "stmt_list", "stmt",
  "variable_definition_stmt", "variable_definitions_expr", "$@8",
  "variable_definitions", "variable_definition_part",
  "optional_assignment_expr", "if_stmt", "if_stmt_only",
  "multiple_else_if_stmt", "else_if_stmt", "else_stmt", "while_stmt",
  "$@9", "do_while_stmt", "$@10", "switch_stmt", "$@11",
  "switch_closed_stmt_list", "switch_stmt_list", "switch_stmt_case", "@12",
  "multi_switch_case_word", "switch_case_word", "break_stmt",
  "continue_stmt", "try_catch_stmt", "catch_multiple", "catch_one",
  "optional_finally", "throw_stmt", "variable_assignment_stmt",
  "echo_stmt", "return_stmt", "expr", "parenthesis_expr",
  "arithmetic_expr", "simple_arithmetic_expr", "comparison_expr",
  "logical_expr", "bitwise_expr", "new_object_create_expr",
  "array_of_expr", "array_of_data", "sarray_of_expr", "sarray_of_data",
  "sarray_map", "function_call_notation", "actual_param_list",
  "actual_parameter", "variable_unary_op", "object_property_access",
  "object_property_chain", "object_method_or_attribute",
  "simple_object_property", "static_method_access", "static_method_call",
  "l_variable", "variable", "local_variable", "variable_id",
  "this_variable", "static_variable", "array_expression",
  "array_expression_chain", "array_expression_index", YY_NULL
  };


  const unsigned short int
  parser::yyrline_[] =
  {
       0,   176,   176,   181,   186,   189,   201,   204,   209,   212,
     215,   220,   224,   230,   231,   234,   235,   235,   240,   240,
     247,   265,   247,   277,   280,   283,   289,   292,   298,   303,
     312,   322,   325,   345,   348,   354,   364,   378,   381,   385,
     385,   396,   398,   403,   406,   409,   415,   418,   421,   424,
     427,   433,   433,   457,   457,   474,   482,   487,   490,   497,
     500,   504,   508,   512,   516,   519,   526,   536,   540,   549,
     554,   564,   567,   572,   573,   577,   581,   585,   589,   593,
     602,   609,   619,   620,   624,   630,   643,   651,   654,   664,
     669,   673,   677,   681,   685,   689,   693,   697,   701,   705,
     709,   713,   718,   724,   733,   733,   748,   752,   764,   786,
     789,   800,   803,   809,   818,   826,   830,   838,   844,   851,
     851,   862,   862,   872,   872,   884,   889,   892,   900,   900,
     915,   918,   926,   931,   937,   946,   956,   964,   967,   974,
     982,   989,   996,  1005,  1014,  1023,  1032,  1041,  1050,  1059,
    1068,  1077,  1086,  1095,  1106,  1113,  1118,  1131,  1132,  1133,
    1134,  1135,  1136,  1137,  1138,  1139,  1142,  1146,  1147,  1148,
    1149,  1152,  1159,  1166,  1173,  1180,  1187,  1194,  1203,  1210,
    1217,  1224,  1231,  1238,  1245,  1252,  1261,  1268,  1277,  1284,
    1291,  1298,  1305,  1312,  1322,  1335,  1343,  1348,  1358,  1366,
    1371,  1380,  1394,  1397,  1404,  1409,  1417,  1419,  1420,  1425,
    1433,  1436,  1444,  1448,  1457,  1462,  1465,  1473,  1482,  1490,
    1500,  1504,  1511,  1518,  1523,  1531,  1534,  1542,  1546,  1560,
    1566,  1569,  1578,  1583
  };

  // Print the state stack on the debug stream.
  void
  parser::yystack_print_ ()
  {
    *yycdebug_ << "Stack now";
    for (stack_type::const_iterator
           i = yystack_.begin (),
           i_end = yystack_.end ();
         i != i_end; ++i)
      *yycdebug_ << ' ' << i->state;
    *yycdebug_ << std::endl;
  }

  // Report on the debug stream that the rule \a yyrule is going to be reduced.
  void
  parser::yy_reduce_print_ (int yyrule)
  {
    unsigned int yylno = yyrline_[yyrule];
    int yynrhs = yyr2_[yyrule];
    // Print the symbols being reduced, and their result.
    *yycdebug_ << "Reducing stack by rule " << yyrule - 1
               << " (line " << yylno << "):" << std::endl;
    // The symbols being reduced.
    for (int yyi = 0; yyi < yynrhs; yyi++)
      YY_SYMBOL_PRINT ("   $" << yyi + 1 << " =",
                       yystack_[(yynrhs) - (yyi + 1)]);
  }
#endif // YYDEBUG

  // Symbol number corresponding to token number t.
  inline
  parser::token_number_type
  parser::yytranslate_ (int t)
  {
    static
    const token_number_type
    translate_table[] =
    {
     0,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,    44,     2,     2,   126,    43,    27,     2,
     127,   128,    41,    38,     5,    39,    40,    42,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,    22,   123,
      32,     8,    34,    21,    56,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,    58,     2,   129,    26,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,   124,    25,   125,    46,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     1,     2,     3,     4,
       6,     7,     9,    10,    11,    12,    13,    14,    15,    16,
      17,    18,    19,    20,    23,    24,    28,    29,    30,    31,
      33,    35,    36,    37,    45,    47,    48,    49,    50,    51,
      52,    53,    54,    55,    57,    59,    60,    61,    62,    63,
      64,    65,    66,    67,    68,    69,    70,    71,    72,    73,
      74,    75,    76,    77,    78,    79,    80,    81,    82,    83,
      84,    85,    86,    87,    88,    89,    90,    91,    92,    93,
      94,    95,    96,    97,    98,    99,   100,   101,   102,   103,
     104,   105,   106,   107,   108,   109,   110,   111,   112,   113,
     114,   115,   116,   117,   118,   119,   120,   121,   122
    };
    const unsigned int user_token_number_max_ = 358;
    const token_number_type undef_token_ = 2;

    if (static_cast<int>(t) <= yyeof_)
      return yyeof_;
    else if (static_cast<unsigned int> (t) <= user_token_number_max_)
      return translate_table[t];
    else
      return undef_token_;
  }


} // yy
#line 3693 "jap.tab.cc" // lalr1.cc:1156
#line 1599 "jap.y" // lalr1.cc:1157




/**
* **********************************************************************
* Methods
* **********************************************************************
*/
#include <ego/ParserHelper.cpp>

/* Custom Code */
