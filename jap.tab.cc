// A Bison parser, made by GNU Bison 3.0.2.

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
#line 1 "jap.y" // lalr1.cc:399

#include <math.h>
#include <iostream>
#include <string>
using namespace std;
#include "jap.tab.hh"
typedef yy::parser::semantic_type semtcNode;
#include <ego/ParserHelper.hpp>

#line 46 "jap.tab.cc" // lalr1.cc:399

# ifndef YY_NULLPTR
#  if defined __cplusplus && 201103L <= __cplusplus
#   define YY_NULLPTR nullptr
#  else
#   define YY_NULLPTR 0
#  endif
# endif

#include "jap.tab.hh"

// User implementation prologue.

#line 60 "jap.tab.cc" // lalr1.cc:407


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
#line 146 "jap.tab.cc" // lalr1.cc:474

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
  parser::yy_lr_goto_state_ (state_type yystate, int yysym)
  {
    int yyr = yypgoto_[yysym - yyntokens_] + yystate;
    if (0 <= yyr && yyr <= yylast_ && yycheck_[yyr] == yystate)
      return yytable_[yyr];
    else
      return yydefgoto_[yysym - yyntokens_];
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
    /// Length of the RHS of the rule being reduced.
    int yylen = 0;

    // Error handling.
    int yynerrs_ = 0;
    int yyerrstatus_ = 0;

    /// The lookahead symbol.
    symbol_type yyla;

    /// The locations where the error started and ended.
    stack_symbol_type yyerror_range[3];

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
    yypush_ (YY_NULLPTR, 0, yyla);

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
    {
      stack_symbol_type yylhs;
      yylhs.state = yy_lr_goto_state_(yystack_[yylen].state, yyr1_[yyn]);
      /* If YYLEN is nonzero, implement the default value of the
         action: '$$ = $1'.  Otherwise, use the top of the stack.

         Otherwise, the following line sets YYLHS.VALUE to garbage.
         This behavior is undocumented and Bison users should not rely
         upon it.  */
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
#line 176 "jap.y" // lalr1.cc:847
    { 
        //std::cout << "parsing rules end\n";
        ego_file_processing_end();
    }
#line 558 "jap.tab.cc" // lalr1.cc:847
    break;

  case 3:
#line 181 "jap.y" // lalr1.cc:847
    { 
        //std::cout << "parsing rules end\n"; 
    }
#line 566 "jap.tab.cc" // lalr1.cc:847
    break;

  case 4:
#line 186 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node(); 
    }
#line 574 "jap.tab.cc" // lalr1.cc:847
    break;

  case 5:
#line 189 "jap.y" // lalr1.cc:847
    {
    
        if (kicker->pkg.compare((yystack_[1].value).sVal) != 0) {
            ego::throwError("Package does not exist in proper named directory, package path and file path should be relatively correct.");
            //kicker->pkg = $2.sVal;
        }
        kicker->parseState->curPkg = (yystack_[1].value).sVal;
        
        //std::cout << "package found: " << $2.sVal << "\n";
    }
#line 589 "jap.tab.cc" // lalr1.cc:847
    break;

  case 6:
#line 201 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
    }
#line 597 "jap.tab.cc" // lalr1.cc:847
    break;

  case 7:
#line 204 "jap.y" // lalr1.cc:847
    {
        (yylhs.value).assign((yystack_[2].value).sVal+(yystack_[1].value).sVal+(yystack_[0].value).sVal);
    }
#line 605 "jap.tab.cc" // lalr1.cc:847
    break;

  case 8:
#line 209 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node(); 
    }
#line 613 "jap.tab.cc" // lalr1.cc:847
    break;

  case 10:
#line 215 "jap.y" // lalr1.cc:847
    { 
        //std::cout << "import found: " << $2.sVal << "\n";; 
    }
#line 621 "jap.tab.cc" // lalr1.cc:847
    break;

  case 11:
#line 220 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
        kicker->importClass((yystack_[0].value).sVal);
    }
#line 630 "jap.tab.cc" // lalr1.cc:847
    break;

  case 12:
#line 224 "jap.y" // lalr1.cc:847
    {
        (yylhs.value).assign((yystack_[2].value).sVal+(yystack_[1].value).sVal+(yystack_[0].value).sVal);
        kicker->importPackage((yystack_[2].value).sVal);
    }
#line 639 "jap.tab.cc" // lalr1.cc:847
    break;

  case 16:
#line 235 "jap.y" // lalr1.cc:847
    {
            kicker->parseState->curClass->isAbstract = true;
        }
#line 647 "jap.tab.cc" // lalr1.cc:847
    break;

  case 17:
#line 237 "jap.y" // lalr1.cc:847
    {
        //std::cout << "abstract class found: " << $2.sVal << "\n";
    }
#line 655 "jap.tab.cc" // lalr1.cc:847
    break;

  case 18:
#line 240 "jap.y" // lalr1.cc:847
    {
            kicker->parseState->curClass->isFinal = true;
        }
#line 663 "jap.tab.cc" // lalr1.cc:847
    break;

  case 19:
#line 242 "jap.y" // lalr1.cc:847
    {
        //std::cout << "final class found: " << $2.sVal << "\n";
    }
#line 671 "jap.tab.cc" // lalr1.cc:847
    break;

  case 20:
#line 247 "jap.y" // lalr1.cc:847
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
#line 695 "jap.tab.cc" // lalr1.cc:847
    break;

  case 21:
#line 265 "jap.y" // lalr1.cc:847
    {
        ego::NameWithGenerics nameType (kicker->parseState->curClass->name);
        kicker->parseState->curClass->qualifiedName = nameType;
        
		if ((yystack_[0].value).astType != 0) {
            ego_get_qualified_type<ego::SClass>(&(yystack_[0].value), kicker->parseState->curClass, &kicker->parseState->curClass->qualifiedName);
		}
	}
#line 708 "jap.tab.cc" // lalr1.cc:847
    break;

  case 22:
#line 272 "jap.y" // lalr1.cc:847
    {
        //TODO: Evaluate the Full Class
    }
#line 716 "jap.tab.cc" // lalr1.cc:847
    break;

  case 23:
#line 277 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 724 "jap.tab.cc" // lalr1.cc:847
    break;

  case 24:
#line 280 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 732 "jap.tab.cc" // lalr1.cc:847
    break;

  case 25:
#line 283 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 740 "jap.tab.cc" // lalr1.cc:847
    break;

  case 26:
#line 289 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node(); 
    }
#line 748 "jap.tab.cc" // lalr1.cc:847
    break;

  case 27:
#line 292 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[1].value);
    }
#line 756 "jap.tab.cc" // lalr1.cc:847
    break;

  case 28:
#line 298 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_DATA_TYPE_FORMAL_HINT_LIST;
	}
#line 766 "jap.tab.cc" // lalr1.cc:847
    break;

  case 29:
#line 303 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
		(yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_DATA_TYPE_FORMAL_HINT_LIST;
	}
#line 777 "jap.tab.cc" // lalr1.cc:847
    break;

  case 30:
#line 312 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = (yystack_[0].value);
		(yylhs.value).astType = AST_DATA_TYPE_GENERIC_HINT_NAME;
	}
#line 786 "jap.tab.cc" // lalr1.cc:847
    break;

  case 31:
#line 322 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
    }
#line 794 "jap.tab.cc" // lalr1.cc:847
    break;

  case 32:
#line 325 "jap.y" // lalr1.cc:847
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
#line 816 "jap.tab.cc" // lalr1.cc:847
    break;

  case 33:
#line 345 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
    }
#line 824 "jap.tab.cc" // lalr1.cc:847
    break;

  case 34:
#line 348 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
    }
#line 832 "jap.tab.cc" // lalr1.cc:847
    break;

  case 35:
#line 354 "jap.y" // lalr1.cc:847
    {
		ego::NameWithGenerics parent ((yystack_[1].value).sVal);
        // TODO: check interface exist or not
		
		if ((yystack_[0].value).astType != 0) {
            ego_get_qualified_type<ego::SClass>(&(yystack_[0].value), kicker->parseState->curClass, &parent);
		}
		
		kicker->parseState->curClass->implements.push_back(parent);
    }
#line 847 "jap.tab.cc" // lalr1.cc:847
    break;

  case 36:
#line 364 "jap.y" // lalr1.cc:847
    {
		ego::NameWithGenerics parent ((yystack_[1].value).sVal);
		
        // TODO: check interface $3.sVal exist or not
		
		if ((yystack_[0].value).astType != 0) {
            ego_get_qualified_type<ego::SClass>(&(yystack_[0].value), kicker->parseState->curClass, &parent);
		}
		
		kicker->parseState->curClass->implements.push_back(parent);
    }
#line 863 "jap.tab.cc" // lalr1.cc:847
    break;

  case 37:
#line 378 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node(); 
    }
#line 871 "jap.tab.cc" // lalr1.cc:847
    break;

  case 39:
#line 385 "jap.y" // lalr1.cc:847
    {
		//std::cout << "some class property/method found: " << "\n";
		YYSTYPE p;
		p.op1 = ego_add_to_table((yystack_[1].value));
		p.op2 = ego_add_to_table((yystack_[0].value));
		
		kicker->parseState->lastNodeId = ego_add_to_table(p);
	}
#line 884 "jap.tab.cc" // lalr1.cc:847
    break;

  case 41:
#line 396 "jap.y" // lalr1.cc:847
    {
    }
#line 891 "jap.tab.cc" // lalr1.cc:847
    break;

  case 42:
#line 398 "jap.y" // lalr1.cc:847
    {
    }
#line 898 "jap.tab.cc" // lalr1.cc:847
    break;

  case 43:
#line 403 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 906 "jap.tab.cc" // lalr1.cc:847
    break;

  case 44:
#line 406 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 914 "jap.tab.cc" // lalr1.cc:847
    break;

  case 45:
#line 409 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 922 "jap.tab.cc" // lalr1.cc:847
    break;

  case 46:
#line 415 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = ego_empty_node();
	}
#line 930 "jap.tab.cc" // lalr1.cc:847
    break;

  case 47:
#line 418 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 938 "jap.tab.cc" // lalr1.cc:847
    break;

  case 48:
#line 421 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 946 "jap.tab.cc" // lalr1.cc:847
    break;

  case 49:
#line 424 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 954 "jap.tab.cc" // lalr1.cc:847
    break;

  case 50:
#line 427 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = (yystack_[0].value);
	}
#line 962 "jap.tab.cc" // lalr1.cc:847
    break;

  case 51:
#line 433 "jap.y" // lalr1.cc:847
    {
        //kicker->validator->validate_data_type_name(&$1, false);
        
		YYSTYPE modifier = ego_get_from_table(kicker->parseState->lastNodeId);
        
        // register variable
        ego::ClassVariable* var = ego_register_class_variable(&(yystack_[2].value), &(yystack_[0].value), &modifier);
		
	}
#line 976 "jap.tab.cc" // lalr1.cc:847
    break;

  case 52:
#line 441 "jap.y" // lalr1.cc:847
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
#line 994 "jap.tab.cc" // lalr1.cc:847
    break;

  case 53:
#line 457 "jap.y" // lalr1.cc:847
    {

        //kicker->validator->validate_data_type_name(&$1, true);
        
		YYSTYPE modifier = ego_get_from_table(kicker->parseState->lastNodeId);
        
        // register method
        ego::ClassMethod* method = ego_register_class_method(&(yystack_[1].value), &(yystack_[0].value), &modifier);
		
    }
#line 1009 "jap.tab.cc" // lalr1.cc:847
    break;

  case 54:
#line 466 "jap.y" // lalr1.cc:847
    {
        kicker->parseState->curMethod->body = (yystack_[0].value);
		
		//kicker->validator->check_class_method(kicker->parseState->curMethod);
    }
#line 1019 "jap.tab.cc" // lalr1.cc:847
    break;

  case 55:
#line 474 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).astType = AST_METHOD_NO_BODY;
        
        if (!kicker->parseState->curClass->isInterface && !kicker->parseState->curMethod->isAbstract) {
            ego::throwError(string("Method '" + kicker->parseState->curMethod->name + "' is not declared as 'abstract'"));
        }
    }
#line 1032 "jap.tab.cc" // lalr1.cc:847
    break;

  case 56:
#line 482 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 1040 "jap.tab.cc" // lalr1.cc:847
    break;

  case 57:
#line 487 "jap.y" // lalr1.cc:847
    { 
		(yylhs.value) = (yystack_[0].value); 
	}
#line 1048 "jap.tab.cc" // lalr1.cc:847
    break;

  case 58:
#line 490 "jap.y" // lalr1.cc:847
    { 
		(yylhs.value) = (yystack_[0].value); 
        (yylhs.value).astType = AST_DATA_TYPE_VOID;
	}
#line 1057 "jap.tab.cc" // lalr1.cc:847
    break;

  case 59:
#line 497 "jap.y" // lalr1.cc:847
    { 
		(yylhs.value) = (yystack_[0].value); 
	}
#line 1065 "jap.tab.cc" // lalr1.cc:847
    break;

  case 60:
#line 500 "jap.y" // lalr1.cc:847
    { 
		(yylhs.value) = (yystack_[0].value); 
		(yylhs.value).astType = AST_DATA_TYPE_INT; 
	}
#line 1074 "jap.tab.cc" // lalr1.cc:847
    break;

  case 61:
#line 504 "jap.y" // lalr1.cc:847
    { 
		(yylhs.value) = (yystack_[0].value); 
		(yylhs.value).astType = AST_DATA_TYPE_FLOAT; 
	}
#line 1083 "jap.tab.cc" // lalr1.cc:847
    break;

  case 62:
#line 508 "jap.y" // lalr1.cc:847
    { 
		(yylhs.value) = (yystack_[0].value); 
		(yylhs.value).astType = AST_DATA_TYPE_BOOL; 
	}
#line 1092 "jap.tab.cc" // lalr1.cc:847
    break;

  case 63:
#line 512 "jap.y" // lalr1.cc:847
    { 
		(yylhs.value) = (yystack_[0].value); 
		(yylhs.value).astType = AST_DATA_TYPE_STRING; 
	}
#line 1101 "jap.tab.cc" // lalr1.cc:847
    break;

  case 64:
#line 516 "jap.y" // lalr1.cc:847
    { 
		(yylhs.value) = (yystack_[0].value);
	}
#line 1109 "jap.tab.cc" // lalr1.cc:847
    break;

  case 65:
#line 519 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = (yystack_[3].value);

		(yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
		
		(yylhs.value).astType = AST_DATA_TYPE_ARRAY; 
	}
#line 1121 "jap.tab.cc" // lalr1.cc:847
    break;

  case 66:
#line 526 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = (yystack_[3].value);
		
		(yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
		
		(yylhs.value).astType = AST_DATA_TYPE_SARRAY; 
	}
#line 1133 "jap.tab.cc" // lalr1.cc:847
    break;

  case 67:
#line 536 "jap.y" // lalr1.cc:847
    { 
		(yylhs.value) = (yystack_[0].value); 
		(yylhs.value).astType = AST_DATA_TYPE_OBJECT; 
	}
#line 1142 "jap.tab.cc" // lalr1.cc:847
    break;

  case 68:
#line 540 "jap.y" // lalr1.cc:847
    { 
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
		(yylhs.value).astType = AST_DATA_TYPE_OBJECT_GENERICS; 
	}
#line 1153 "jap.tab.cc" // lalr1.cc:847
    break;

  case 69:
#line 549 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_DATA_TYPE_ACTUAL_HINT_LIST; 
	}
#line 1163 "jap.tab.cc" // lalr1.cc:847
    break;

  case 70:
#line 554 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_DATA_TYPE_ACTUAL_HINT_LIST; 
	}
#line 1174 "jap.tab.cc" // lalr1.cc:847
    break;

  case 71:
#line 564 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node(); 
    }
#line 1182 "jap.tab.cc" // lalr1.cc:847
    break;

  case 72:
#line 567 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value); 
    }
#line 1190 "jap.tab.cc" // lalr1.cc:847
    break;

  case 73:
#line 572 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 1196 "jap.tab.cc" // lalr1.cc:847
    break;

  case 74:
#line 573 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 1202 "jap.tab.cc" // lalr1.cc:847
    break;

  case 75:
#line 577 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value); 
        (yylhs.value).astType = AST_INTEGER; 
    }
#line 1211 "jap.tab.cc" // lalr1.cc:847
    break;

  case 76:
#line 581 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value); 
        (yylhs.value).astType = AST_DOUBLE; 
    }
#line 1220 "jap.tab.cc" // lalr1.cc:847
    break;

  case 77:
#line 585 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value); 
        (yylhs.value).astType = AST_BOOLEAN; 
    }
#line 1229 "jap.tab.cc" // lalr1.cc:847
    break;

  case 78:
#line 589 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value); 
        (yylhs.value).astType = AST_STRING; 
    }
#line 1238 "jap.tab.cc" // lalr1.cc:847
    break;

  case 79:
#line 593 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value); 
        (yylhs.value).astType = AST_NULL; 
    }
#line 1247 "jap.tab.cc" // lalr1.cc:847
    break;

  case 80:
#line 602 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_STATIC_VARIABLE;
    }
#line 1259 "jap.tab.cc" // lalr1.cc:847
    break;

  case 81:
#line 609 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_SELF_STATIC_VARIABLE;
    }
#line 1271 "jap.tab.cc" // lalr1.cc:847
    break;

  case 82:
#line 619 "jap.y" // lalr1.cc:847
    { (yylhs.value) = ego_empty_node(); }
#line 1277 "jap.tab.cc" // lalr1.cc:847
    break;

  case 83:
#line 620 "jap.y" // lalr1.cc:847
    {
        // THIS is not needed
        //$$ = $1; 
    }
#line 1286 "jap.tab.cc" // lalr1.cc:847
    break;

  case 84:
#line 624 "jap.y" // lalr1.cc:847
    { 
        //$$ = $1; 
    }
#line 1294 "jap.tab.cc" // lalr1.cc:847
    break;

  case 85:
#line 630 "jap.y" // lalr1.cc:847
    {
        //kicker->validator->validate_data_type_name(&$1, false);
       
        ego::Variable* var = ego_register_method_variable(&(yystack_[3].value), &(yystack_[1].value), &(yystack_[0].value));
        var->isFormal = true;
        kicker->parseState->curMethod->addArg(var);
        
        (yylhs.value) = (yystack_[1].value);
        
        //kicker->validator->check_local_variable(var, varIsObject(&$1));
    }
#line 1310 "jap.tab.cc" // lalr1.cc:847
    break;

  case 86:
#line 643 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[1].value);
    }
#line 1318 "jap.tab.cc" // lalr1.cc:847
    break;

  case 87:
#line 651 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
    }
#line 1326 "jap.tab.cc" // lalr1.cc:847
    break;

  case 88:
#line 654 "jap.y" // lalr1.cc:847
    {
        // xxxxx_stmt_list
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_STATEMENTS;
        
    }
#line 1339 "jap.tab.cc" // lalr1.cc:847
    break;

  case 89:
#line 664 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_VAR_DEFINE_STMT;
        
    }
#line 1349 "jap.tab.cc" // lalr1.cc:847
    break;

  case 90:
#line 669 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        //$$.astType = AST_IF_STMT;
    }
#line 1358 "jap.tab.cc" // lalr1.cc:847
    break;

  case 91:
#line 673 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_WHILE_STMT;
    }
#line 1367 "jap.tab.cc" // lalr1.cc:847
    break;

  case 92:
#line 677 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_DO_WHILE_STMT;
    }
#line 1376 "jap.tab.cc" // lalr1.cc:847
    break;

  case 93:
#line 681 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_SWITCH_STMT;
    }
#line 1385 "jap.tab.cc" // lalr1.cc:847
    break;

  case 94:
#line 685 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_BREAK_STMT;
    }
#line 1394 "jap.tab.cc" // lalr1.cc:847
    break;

  case 95:
#line 689 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_CONTINUE_STMT;
    }
#line 1403 "jap.tab.cc" // lalr1.cc:847
    break;

  case 96:
#line 693 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_TRY_CATCH_STMT;
    }
#line 1412 "jap.tab.cc" // lalr1.cc:847
    break;

  case 97:
#line 697 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_THROW_STMT;
    }
#line 1421 "jap.tab.cc" // lalr1.cc:847
    break;

  case 98:
#line 701 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_ASSIGNMENT_STMT;
    }
#line 1430 "jap.tab.cc" // lalr1.cc:847
    break;

  case 99:
#line 705 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_ECHO_STMT;
    }
#line 1439 "jap.tab.cc" // lalr1.cc:847
    break;

  case 100:
#line 709 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_RETURN_STMT;
    }
#line 1448 "jap.tab.cc" // lalr1.cc:847
    break;

  case 101:
#line 713 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).astType = AST_EXPR_STMT;
    }
#line 1458 "jap.tab.cc" // lalr1.cc:847
    break;

  case 102:
#line 718 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_EMPTY_STMT;
    }
#line 1467 "jap.tab.cc" // lalr1.cc:847
    break;

  case 103:
#line 724 "jap.y" // lalr1.cc:847
    {
        //std::cout << "Many Local Variables defined: " << $3.sVal << "\n";
		(yylhs.value) = (yystack_[1].value);
		(yylhs.value).astType = AST_VAR_DEFINE_STMT;
    }
#line 1477 "jap.tab.cc" // lalr1.cc:847
    break;

  case 104:
#line 733 "jap.y" // lalr1.cc:847
    {
        //kicker->validator->validate_data_type_name(&$1, false);
		kicker->parseState->lastNodeId = ego_add_to_table((yystack_[0].value));
	}
#line 1486 "jap.tab.cc" // lalr1.cc:847
    break;

  case 105:
#line 736 "jap.y" // lalr1.cc:847
    {
        //std::cout << "Many Local Variables defined: " << $3.sVal << "\n";
		
		(yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_VAR_DEFINE_EXPR;
    }
#line 1499 "jap.tab.cc" // lalr1.cc:847
    break;

  case 106:
#line 748 "jap.y" // lalr1.cc:847
    {
		//std::cout << "Local Variable defined: " << $1.sVal << "\n";
		(yylhs.value) = (yystack_[0].value);
	}
#line 1508 "jap.tab.cc" // lalr1.cc:847
    break;

  case 107:
#line 752 "jap.y" // lalr1.cc:847
    {
		//std::cout << "Local Variable defined: " << $1.sVal << "\n";
		
		(yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_VAR_DEFINE_MULTIPLE;
	}
#line 1521 "jap.tab.cc" // lalr1.cc:847
    break;

  case 108:
#line 764 "jap.y" // lalr1.cc:847
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
#line 1545 "jap.tab.cc" // lalr1.cc:847
    break;

  case 109:
#line 786 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node(); 
    }
#line 1553 "jap.tab.cc" // lalr1.cc:847
    break;

  case 110:
#line 789 "jap.y" // lalr1.cc:847
    {
        
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).op = ego_add_to_table((yystack_[1].value));
        (yylhs.value).astType = AST_RIGHT_ASSIGNMENT; 
        
    }
#line 1566 "jap.tab.cc" // lalr1.cc:847
    break;

  case 111:
#line 800 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
    }
#line 1574 "jap.tab.cc" // lalr1.cc:847
    break;

  case 112:
#line 803 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2= ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_IF_ELSE_IF_STMT;
    }
#line 1585 "jap.tab.cc" // lalr1.cc:847
    break;

  case 113:
#line 809 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2= ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_IF_ELSE_IF_STMT;
    }
#line 1596 "jap.tab.cc" // lalr1.cc:847
    break;

  case 114:
#line 815 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_IF_ELSE_IF_ELSE_STMT;
    }
#line 1608 "jap.tab.cc" // lalr1.cc:847
    break;

  case 115:
#line 824 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_IF_STMT;
    }
#line 1619 "jap.tab.cc" // lalr1.cc:847
    break;

  case 116:
#line 832 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_ELSE_IF_STMT;
    }
#line 1628 "jap.tab.cc" // lalr1.cc:847
    break;

  case 117:
#line 836 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).sType = (yystack_[0].value).sType;
        (yylhs.value).astType = AST_IF_ELSE_IF_STMT;
    }
#line 1640 "jap.tab.cc" // lalr1.cc:847
    break;

  case 118:
#line 844 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[2].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
    }
#line 1650 "jap.tab.cc" // lalr1.cc:847
    break;

  case 119:
#line 850 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[1].value);
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_ELSE_STMT;
    }
#line 1660 "jap.tab.cc" // lalr1.cc:847
    break;

  case 120:
#line 857 "jap.y" // lalr1.cc:847
    {
        kicker->parseState->loopFound();
    }
#line 1668 "jap.tab.cc" // lalr1.cc:847
    break;

  case 121:
#line 859 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[3].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        
        kicker->parseState->loopClosed();
    }
#line 1680 "jap.tab.cc" // lalr1.cc:847
    break;

  case 122:
#line 868 "jap.y" // lalr1.cc:847
    {
        kicker->parseState->loopFound();
    }
#line 1688 "jap.tab.cc" // lalr1.cc:847
    break;

  case 123:
#line 870 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[5].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        kicker->parseState->loopClosed();
    }
#line 1699 "jap.tab.cc" // lalr1.cc:847
    break;

  case 124:
#line 878 "jap.y" // lalr1.cc:847
    {
        kicker->parseState->switchFound();
    }
#line 1707 "jap.tab.cc" // lalr1.cc:847
    break;

  case 125:
#line 880 "jap.y" // lalr1.cc:847
    {
        kicker->parseState->switchClosed();
        
        (yylhs.value) = (yystack_[3].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_SWITCH_STMT;
    }
#line 1720 "jap.tab.cc" // lalr1.cc:847
    break;

  case 126:
#line 890 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[2].value);
    }
#line 1728 "jap.tab.cc" // lalr1.cc:847
    break;

  case 127:
#line 895 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 1736 "jap.tab.cc" // lalr1.cc:847
    break;

  case 128:
#line 898 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_MULTI_CASE_STMT_WITH_BODY;
    }
#line 1747 "jap.tab.cc" // lalr1.cc:847
    break;

  case 129:
#line 906 "jap.y" // lalr1.cc:847
    {
        kicker->parseState->caseFound();
    }
#line 1755 "jap.tab.cc" // lalr1.cc:847
    break;

  case 130:
#line 908 "jap.y" // lalr1.cc:847
    {
        // stmt_list includes break statement as well
        kicker->parseState->caseClosed();
        
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op = ego_add_to_table((yystack_[1].value));
        (yylhs.value).astType = AST_CASE_STMT_WITH_BODY;
        
    }
#line 1771 "jap.tab.cc" // lalr1.cc:847
    break;

  case 131:
#line 921 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 1779 "jap.tab.cc" // lalr1.cc:847
    break;

  case 132:
#line 924 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_MULTI_CASE_STMT;
    }
#line 1790 "jap.tab.cc" // lalr1.cc:847
    break;

  case 133:
#line 932 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[2].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_CASE_STMT;
    }
#line 1800 "jap.tab.cc" // lalr1.cc:847
    break;

  case 134:
#line 937 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[1].value);
        (yylhs.value).astType = AST_DEFAULT_STMT;
    }
#line 1809 "jap.tab.cc" // lalr1.cc:847
    break;

  case 135:
#line 943 "jap.y" // lalr1.cc:847
    {
    if (!kicker->parseState->inCaseOrLoop()) {
        ego::throwError("Wrong placement of BREAK statement");
    }
    
    (yylhs.value) = (yystack_[1].value);
}
#line 1821 "jap.tab.cc" // lalr1.cc:847
    break;

  case 136:
#line 952 "jap.y" // lalr1.cc:847
    {
        if (!kicker->parseState->inLoop()) {
            ego::throwError("Wrong placement of CONTINUE statement");
        }
        
        (yylhs.value) = (yystack_[1].value);
    }
#line 1833 "jap.tab.cc" // lalr1.cc:847
    break;

  case 137:
#line 962 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[3].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[0].value));
    }
#line 1844 "jap.tab.cc" // lalr1.cc:847
    break;

  case 138:
#line 970 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 1852 "jap.tab.cc" // lalr1.cc:847
    break;

  case 139:
#line 973 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_MULTI_CATCH_STMT;
    }
#line 1863 "jap.tab.cc" // lalr1.cc:847
    break;

  case 140:
#line 980 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[6].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[4].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_CATCH_STMT;
    }
#line 1875 "jap.tab.cc" // lalr1.cc:847
    break;

  case 141:
#line 988 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[1].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_FINALLY_STMT;
    }
#line 1885 "jap.tab.cc" // lalr1.cc:847
    break;

  case 142:
#line 995 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[2].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
    }
#line 1894 "jap.tab.cc" // lalr1.cc:847
    break;

  case 143:
#line 1002 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1908 "jap.tab.cc" // lalr1.cc:847
    break;

  case 144:
#line 1011 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1922 "jap.tab.cc" // lalr1.cc:847
    break;

  case 145:
#line 1020 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1936 "jap.tab.cc" // lalr1.cc:847
    break;

  case 146:
#line 1029 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1950 "jap.tab.cc" // lalr1.cc:847
    break;

  case 147:
#line 1038 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1964 "jap.tab.cc" // lalr1.cc:847
    break;

  case 148:
#line 1047 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1978 "jap.tab.cc" // lalr1.cc:847
    break;

  case 149:
#line 1056 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 1992 "jap.tab.cc" // lalr1.cc:847
    break;

  case 150:
#line 1065 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 2006 "jap.tab.cc" // lalr1.cc:847
    break;

  case 151:
#line 1074 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 2020 "jap.tab.cc" // lalr1.cc:847
    break;

  case 152:
#line 1083 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 2034 "jap.tab.cc" // lalr1.cc:847
    break;

  case 153:
#line 1092 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 2048 "jap.tab.cc" // lalr1.cc:847
    break;

  case 154:
#line 1101 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[3].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op = ego_add_to_table((yystack_[2].value));
        (yylhs.value).astType = AST_ASSIGNMENT;
        
        //kicker->validator->check_assignment(&$$);
    }
#line 2062 "jap.tab.cc" // lalr1.cc:847
    break;

  case 155:
#line 1112 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[2].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
    }
#line 2071 "jap.tab.cc" // lalr1.cc:847
    break;

  case 156:
#line 1119 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[1].value);

        //kicker->validator->check_return_statement(NULL, kicker->parseState->curMethod);
    }
#line 2081 "jap.tab.cc" // lalr1.cc:847
    break;

  case 157:
#line 1124 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[2].value);
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));

        //kicker->validator->check_return_statement(&$2, kicker->parseState->curMethod);
    }
#line 2092 "jap.tab.cc" // lalr1.cc:847
    break;

  case 158:
#line 1137 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2098 "jap.tab.cc" // lalr1.cc:847
    break;

  case 159:
#line 1138 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2104 "jap.tab.cc" // lalr1.cc:847
    break;

  case 160:
#line 1139 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2110 "jap.tab.cc" // lalr1.cc:847
    break;

  case 161:
#line 1140 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2116 "jap.tab.cc" // lalr1.cc:847
    break;

  case 162:
#line 1141 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2122 "jap.tab.cc" // lalr1.cc:847
    break;

  case 163:
#line 1142 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2128 "jap.tab.cc" // lalr1.cc:847
    break;

  case 164:
#line 1143 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2134 "jap.tab.cc" // lalr1.cc:847
    break;

  case 165:
#line 1144 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2140 "jap.tab.cc" // lalr1.cc:847
    break;

  case 166:
#line 1145 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2146 "jap.tab.cc" // lalr1.cc:847
    break;

  case 167:
#line 1148 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[1].value); }
#line 2152 "jap.tab.cc" // lalr1.cc:847
    break;

  case 168:
#line 1152 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2158 "jap.tab.cc" // lalr1.cc:847
    break;

  case 169:
#line 1153 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2164 "jap.tab.cc" // lalr1.cc:847
    break;

  case 170:
#line 1154 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2170 "jap.tab.cc" // lalr1.cc:847
    break;

  case 171:
#line 1155 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2176 "jap.tab.cc" // lalr1.cc:847
    break;

  case 172:
#line 1158 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_ADD; 
    }
#line 2188 "jap.tab.cc" // lalr1.cc:847
    break;

  case 173:
#line 1165 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_SUB; 
    }
#line 2200 "jap.tab.cc" // lalr1.cc:847
    break;

  case 174:
#line 1172 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_MUL; 
    }
#line 2212 "jap.tab.cc" // lalr1.cc:847
    break;

  case 175:
#line 1179 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
         (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
         (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
         (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
         (yylhs.value).astType = AST_DIV; 
    }
#line 2224 "jap.tab.cc" // lalr1.cc:847
    break;

  case 176:
#line 1186 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_MOD; 
    }
#line 2236 "jap.tab.cc" // lalr1.cc:847
    break;

  case 177:
#line 1193 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_CONCAT; 
    }
#line 2248 "jap.tab.cc" // lalr1.cc:847
    break;

  case 178:
#line 1200 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_INCR_DECR; 
    }
#line 2259 "jap.tab.cc" // lalr1.cc:847
    break;

  case 179:
#line 1209 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_LT; 
    }
#line 2271 "jap.tab.cc" // lalr1.cc:847
    break;

  case 180:
#line 1216 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_GT; 
    }
#line 2283 "jap.tab.cc" // lalr1.cc:847
    break;

  case 181:
#line 1223 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_LT_OR_EQ; 
    }
#line 2295 "jap.tab.cc" // lalr1.cc:847
    break;

  case 182:
#line 1230 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_GT_OR_EQ; 
    }
#line 2307 "jap.tab.cc" // lalr1.cc:847
    break;

  case 183:
#line 1237 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_EQUAL; 
    }
#line 2319 "jap.tab.cc" // lalr1.cc:847
    break;

  case 184:
#line 1244 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_NOT_EQUAL; 
    }
#line 2331 "jap.tab.cc" // lalr1.cc:847
    break;

  case 185:
#line 1251 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_IDENTICAL; 
    }
#line 2343 "jap.tab.cc" // lalr1.cc:847
    break;

  case 186:
#line 1258 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_NOT_IDENTICAL; 
    }
#line 2355 "jap.tab.cc" // lalr1.cc:847
    break;

  case 187:
#line 1267 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
		(yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
		(yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
		(yylhs.value).astType = AST_AND_AND; 
	}
#line 2367 "jap.tab.cc" // lalr1.cc:847
    break;

  case 188:
#line 1274 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
		(yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
		(yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
		(yylhs.value).astType = AST_OR_OR; 
	}
#line 2379 "jap.tab.cc" // lalr1.cc:847
    break;

  case 189:
#line 1283 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_AND; 
    }
#line 2391 "jap.tab.cc" // lalr1.cc:847
    break;

  case 190:
#line 1290 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_OR; 
    }
#line 2403 "jap.tab.cc" // lalr1.cc:847
    break;

  case 191:
#line 1297 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_XOR; 
    }
#line 2415 "jap.tab.cc" // lalr1.cc:847
    break;

  case 192:
#line 1304 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_SHIFT_LEFT; 
    }
#line 2427 "jap.tab.cc" // lalr1.cc:847
    break;

  case 193:
#line 1311 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_SHIFT_RIGHT; 
    }
#line 2439 "jap.tab.cc" // lalr1.cc:847
    break;

  case 194:
#line 1318 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).astType = AST_NEGATION; 
    }
#line 2450 "jap.tab.cc" // lalr1.cc:847
    break;

  case 195:
#line 1328 "jap.y" // lalr1.cc:847
    {
        //Do not check Class exists or not here
		
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_NEW_OBJECT;
    }
#line 2464 "jap.tab.cc" // lalr1.cc:847
    break;

  case 196:
#line 1341 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
		(yylhs.value).astType = AST_ARRAY_OF_DATA_WRAPPER;
	}
#line 2474 "jap.tab.cc" // lalr1.cc:847
    break;

  case 197:
#line 1349 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_ARRAY_OF_DATA;
	}
#line 2484 "jap.tab.cc" // lalr1.cc:847
    break;

  case 198:
#line 1354 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
		(yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_ARRAY_OF_DATA;
	}
#line 2495 "jap.tab.cc" // lalr1.cc:847
    break;

  case 199:
#line 1364 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
		(yylhs.value).astType = AST_SARRAY_OF_DATA_WRAPPER;
	}
#line 2505 "jap.tab.cc" // lalr1.cc:847
    break;

  case 200:
#line 1372 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_SARRAY_OF_DATA;
	}
#line 2515 "jap.tab.cc" // lalr1.cc:847
    break;

  case 201:
#line 1377 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
		(yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_SARRAY_OF_DATA;
	}
#line 2526 "jap.tab.cc" // lalr1.cc:847
    break;

  case 202:
#line 1386 "jap.y" // lalr1.cc:847
    {
		(yylhs.value) = ego_empty_node();
		(yylhs.value).op1 = ego_add_to_table((yystack_[2].value));
		(yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
		(yylhs.value).astType = AST_SARRAY_MAP;
	}
#line 2537 "jap.tab.cc" // lalr1.cc:847
    break;

  case 203:
#line 1400 "jap.y" // lalr1.cc:847
    {
        (yylhs.value).astType = AST_EMPTY_ARGS;
    }
#line 2545 "jap.tab.cc" // lalr1.cc:847
    break;

  case 204:
#line 1403 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).astType = AST_ACTUAL_ARGS;
    }
#line 2555 "jap.tab.cc" // lalr1.cc:847
    break;

  case 205:
#line 1410 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_ACTUAL_ARG;
    }
#line 2565 "jap.tab.cc" // lalr1.cc:847
    break;

  case 206:
#line 1415 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[2].value)); 
        (yylhs.value).op = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_ACTUAL_ARG_LIST;
    }
#line 2577 "jap.tab.cc" // lalr1.cc:847
    break;

  case 207:
#line 1423 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2583 "jap.tab.cc" // lalr1.cc:847
    break;

  case 208:
#line 1425 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2589 "jap.tab.cc" // lalr1.cc:847
    break;

  case 209:
#line 1426 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2595 "jap.tab.cc" // lalr1.cc:847
    break;

  case 210:
#line 1431 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_OBJECT_PROPERTY_ACCESS;
    }
#line 2606 "jap.tab.cc" // lalr1.cc:847
    break;

  case 211:
#line 1439 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 2614 "jap.tab.cc" // lalr1.cc:847
    break;

  case 212:
#line 1442 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_OBJECT_PROPERTY_CHAIN;
    }
#line 2625 "jap.tab.cc" // lalr1.cc:847
    break;

  case 213:
#line 1450 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_OBJECT_ATRIBUTE;
    }
#line 2634 "jap.tab.cc" // lalr1.cc:847
    break;

  case 214:
#line 1454 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();

        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value)); // function name
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_METHOD_CALL;
    }
#line 2646 "jap.tab.cc" // lalr1.cc:847
    break;

  case 215:
#line 1463 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 2654 "jap.tab.cc" // lalr1.cc:847
    break;

  case 216:
#line 1468 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value); 
    }
#line 2662 "jap.tab.cc" // lalr1.cc:847
    break;

  case 217:
#line 1471 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_STATIC_PROPERTY_CHAIN;
    }
#line 2673 "jap.tab.cc" // lalr1.cc:847
    break;

  case 218:
#line 1479 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value)); 
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_STATIC_METHOD_CALL;
    }
#line 2684 "jap.tab.cc" // lalr1.cc:847
    break;

  case 219:
#line 1488 "jap.y" // lalr1.cc:847
    {
        // Local variable can be used as left assignment
        // But not this
        if ((yystack_[0].value).sType == yy::parser::token::T_THIS) {
            ego::throwError("'this' must not be used in left side of assignment");
        }
        (yylhs.value) = (yystack_[0].value);
    }
#line 2697 "jap.tab.cc" // lalr1.cc:847
    break;

  case 220:
#line 1496 "jap.y" // lalr1.cc:847
    {
        if ((yystack_[0].value).astType == AST_METHOD_CALL) {
            ego::throwError("Method call must not be used on Left side assignment");
        }
        
        (yylhs.value) = (yystack_[0].value);
    }
#line 2709 "jap.tab.cc" // lalr1.cc:847
    break;

  case 221:
#line 1506 "jap.y" // lalr1.cc:847
    {
        //std::cout << "Local Variable found\n";
        (yylhs.value) = (yystack_[0].value);
    }
#line 2718 "jap.tab.cc" // lalr1.cc:847
    break;

  case 222:
#line 1510 "jap.y" // lalr1.cc:847
    {
		if (kicker->parseState->curMethod->isStatic) {
            ego::throwError("'this' must not be used in the static method.");
        }
        //std::cout << "this->object Variable found\n";
        (yylhs.value) = (yystack_[0].value);
    }
#line 2730 "jap.tab.cc" // lalr1.cc:847
    break;

  case 223:
#line 1517 "jap.y" // lalr1.cc:847
    {
        //std::cout << "static Variable found\n";
        (yylhs.value) = (yystack_[0].value);
    }
#line 2739 "jap.tab.cc" // lalr1.cc:847
    break;

  case 224:
#line 1524 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_LOCAL_VARIABLE; 
    }
#line 2749 "jap.tab.cc" // lalr1.cc:847
    break;

  case 225:
#line 1529 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_LOCAL_ARRAY_VARIABLE; 
    }
#line 2760 "jap.tab.cc" // lalr1.cc:847
    break;

  case 226:
#line 1537 "jap.y" // lalr1.cc:847
    { (yylhs.value) = (yystack_[0].value); }
#line 2766 "jap.tab.cc" // lalr1.cc:847
    break;

  case 227:
#line 1540 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[0].value)); 
        (yylhs.value).astType = AST_THIS_VARIABLE;
    }
#line 2776 "jap.tab.cc" // lalr1.cc:847
    break;

  case 228:
#line 1548 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = (yystack_[0].value);
        (yylhs.value).astType = AST_STATIC_VARIABLE;
    }
#line 2785 "jap.tab.cc" // lalr1.cc:847
    break;

  case 229:
#line 1552 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_STATIC_ARRAY_VARIABLE;
    }
#line 2796 "jap.tab.cc" // lalr1.cc:847
    break;

  case 230:
#line 1566 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 2804 "jap.tab.cc" // lalr1.cc:847
    break;

  case 231:
#line 1572 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = (yystack_[0].value);
    }
#line 2812 "jap.tab.cc" // lalr1.cc:847
    break;

  case 232:
#line 1575 "jap.y" // lalr1.cc:847
    {
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).op2 = ego_add_to_table((yystack_[0].value));
        (yylhs.value).astType = AST_ARRAY_MULTI;
    }
#line 2823 "jap.tab.cc" // lalr1.cc:847
    break;

  case 233:
#line 1584 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).astType = AST_ARRAY_INDEX_EXPR;
    }
#line 2833 "jap.tab.cc" // lalr1.cc:847
    break;

  case 234:
#line 1589 "jap.y" // lalr1.cc:847
    { 
        (yylhs.value) = ego_empty_node();
        (yylhs.value).op1 = ego_add_to_table((yystack_[1].value));
        (yylhs.value).astType = AST_ARRAY_INDEX_EXPR;
    }
#line 2843 "jap.tab.cc" // lalr1.cc:847
    break;


#line 2847 "jap.tab.cc" // lalr1.cc:847
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
      yypush_ (YY_NULLPTR, yylhs);
    }
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
          yy_destroy_ (YY_NULLPTR, yyla);

        while (1 < yystack_.size ())
          {
            yy_destroy_ (YY_NULLPTR, yystack_[0]);
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


  const short int parser::yypact_ninf_ = -194;

  const short int parser::yytable_ninf_ = -221;

  const short int
  parser::yypact_[] =
  {
      24,   -48,    53,  -194,  -194,  -194,   -27,  -194,    12,    -8,
    -194,   -48,   -35,   -35,    51,  -194,   146,  -194,   -62,  -194,
      57,   -59,  -194,  -194,  -194,  -194,  -194,  -194,  -194,  -194,
     -11,  -194,   -29,   -13,    81,    52,  -194,  -194,  -194,    71,
    -194,  -194,  -194,  -194,  -194,  -194,    70,    55,   141,    73,
    -194,  -194,  -194,  -194,    85,   108,    94,    21,  -194,  -194,
    -194,    37,  -194,  -194,  -194,  -194,  -194,  -194,  -194,  -194,
      71,    71,    71,    71,  -194,   -48,    50,    47,   124,   142,
    -194,    26,  -194,   101,   -48,  -194,  -194,  -194,  -194,  -194,
     114,    79,  -194,  -194,    71,  -194,  -194,   101,   197,  -194,
     155,  -194,  -194,   -48,   107,  -194,   101,    71,   228,  -194,
     121,     3,  -194,   163,   126,   187,    71,   -87,  -194,  -194,
    -194,  -194,  -194,   134,   -26,  -194,  -194,  -194,  -194,   228,
    -194,  -194,  -194,  -194,  -194,   190,   191,  -194,   212,  -194,
    -194,  1051,  1051,  1051,   -48,   130,  -194,  -194,  -194,   136,
     137,  1004,   143,  1051,  -194,  -194,  1051,  -194,   196,  1051,
     -17,  -194,  -194,   -40,  -194,  -194,   145,  -194,    14,  -194,
    -194,  -194,  -194,  -194,  -194,  -194,  -194,  -194,  -194,   424,
    -194,  -194,  -194,  -194,  -194,  -194,  -194,  -194,  -194,   525,
    -194,   158,   746,    32,  -194,   211,  -194,  -194,   445,  -194,
     -19,  -194,  1156,     1,   148,   143,   143,   130,   130,  -194,
    -194,  -194,   466,   181,   487,  1110,     2,  -194,  -194,   403,
     150,    95,   977,  -194,  -194,   211,  -194,  -194,   130,   143,
      14,  -194,  -194,  1051,  1051,  1051,  1051,  1051,  1051,  1051,
    1051,  1051,  1051,  1051,  1051,  1051,  1051,  1051,  1051,  1051,
    1051,  1051,  1051,  1051,  -194,   217,   158,  -194,   148,  1051,
    1051,  1051,  1051,  1051,  1051,  1051,  1051,  1051,  1051,  1051,
    1051,  -194,  -194,  -194,   158,  -194,  -194,  1051,  -194,  -194,
    -194,   202,   143,   167,  -194,   169,    76,  -194,  -194,  1051,
    1051,  -194,  -194,   229,   292,  -194,   171,   211,   172,  -194,
    1156,     4,  -194,  -194,   143,  -194,  -194,  -194,   524,   544,
     564,   685,   667,   705,   705,   705,   705,   827,   827,   827,
     827,   270,   270,   203,   203,   203,  -194,  -194,  -194,  -194,
    -194,  -194,   588,   609,   630,   651,   752,   773,   794,   815,
     916,   937,   958,   979,  1156,   130,  -194,   139,  -194,   -48,
     143,  -194,  -194,  1156,  -194,   296,   150,  -194,  -194,  1051,
    -194,  -194,  -194,  -194,  -194,  -194,  -194,  -194,  -194,  -194,
    -194,  -194,  -194,  -194,   192,   106,   294,   -64,  -194,   139,
    -194,   -28,  -194,  1051,  -194,  -194,  -194,  -194,   295,  -194,
    -194,  -194,  -194,  -194,   249,  1156,  -194,   298,   194,   -60,
     143,  -194
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
      80,     0,     0,     0,     0,     0,   122,   120,   124,     0,
       0,     0,     0,     0,   227,   102,     0,    86,     0,     0,
      67,   104,   158,   228,    88,    89,     0,    90,   111,    91,
      92,    93,    94,    95,    96,    97,    98,    99,   100,     0,
     160,   159,   168,   169,   170,   171,   161,   165,   166,   163,
     164,   216,     0,   162,   221,   224,   222,   223,     0,   163,
     162,   194,   197,     0,     0,     0,     0,     0,     0,   135,
     136,   156,     0,     0,     0,     0,     0,   200,   226,     0,
       0,     0,     0,   218,   229,   230,   231,   103,     0,     0,
     113,   116,   112,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,   101,     0,   217,   211,   213,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,   209,   208,   178,   210,   225,   155,     0,   196,   195,
     115,     0,     0,     0,   157,     0,     0,   138,   142,     0,
       0,   199,   167,     0,   105,   106,     0,   228,     0,   203,
     207,     0,   205,   232,     0,   119,   117,   114,   188,   187,
     190,   191,   189,   183,   184,   185,   186,   179,   181,   180,
     182,   192,   193,   172,   173,   177,   174,   175,   176,   215,
     212,   214,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,   198,     0,   121,     0,   125,     0,
       0,   139,   137,   202,   201,   109,     0,   233,   234,     0,
     204,   118,   143,   144,   145,   146,   147,   148,   149,   150,
     151,   152,   153,   154,     0,     0,     0,     0,   127,   129,
     131,     0,   141,     0,   108,   107,   206,   123,     0,   134,
     126,   128,    87,   132,     0,   110,   133,     0,     0,    94,
       0,   140
  };

  const short int
  parser::yypgoto_[] =
  {
    -194,  -194,  -194,  -194,    -1,  -194,  -194,  -194,  -194,   302,
    -194,  -194,   214,  -194,  -194,  -194,   -31,  -194,  -194,  -194,
    -194,  -194,   213,  -194,  -194,  -194,  -194,  -194,  -194,  -194,
    -194,  -194,  -194,  -194,   -38,   176,  -194,   195,  -194,  -111,
    -102,  -194,   209,  -147,   -66,  -194,  -194,  -194,  -194,  -194,
     -24,  -194,  -194,  -194,  -194,    97,    98,  -194,  -194,  -194,
    -194,  -194,  -194,  -194,  -194,   -47,  -194,  -194,   -50,   -63,
    -194,  -194,  -194,    54,  -194,  -194,  -194,  -194,  -194,   -52,
    -123,  -194,  -194,  -194,  -194,  -194,  -194,  -194,  -194,  -194,
    -194,    43,  -185,  -194,   -18,  -194,  -134,   151,  -193,  -194,
    -194,  -194,  -194,  -135,  -194,  -194,  -194,  -194,   152,  -194,
     118
  };

  const short int
  parser::yydefgoto_[] =
  {
      -1,     2,     3,     4,   124,     8,    15,    21,    16,    17,
      32,    33,    18,    34,    61,    27,    40,    57,    58,    76,
      85,    98,    35,    45,    77,    87,    46,    66,    88,   108,
      89,   104,   133,    90,   110,    60,    81,   114,   125,   162,
     163,   111,   112,   134,   138,   164,   165,   166,   220,   294,
     295,   384,   167,   168,   230,   231,   232,   169,   207,   170,
     206,   171,   208,   348,   377,   378,   392,   379,   380,   172,
     173,   174,   286,   287,   352,   175,   176,   177,   178,   179,
     180,   181,   182,   183,   184,   185,   186,   187,   203,   188,
     216,   217,   223,   301,   302,   273,   199,   274,   257,   258,
     190,   191,   192,   200,   194,   195,   196,   197,   224,   225,
     226
  };

  const short int
  parser::yytable_[] =
  {
       6,    59,   126,   193,   189,   213,   277,   290,   116,   359,
      20,   127,     9,     9,     9,    72,    11,     5,   221,   279,
     375,   376,   205,     9,  -130,  -130,    73,     1,   271,   272,
      36,    94,    78,    79,    80,    82,   131,   132,    56,    91,
    -219,  -219,  -219,  -219,  -219,  -219,  -219,  -219,  -219,  -219,
    -219,  -219,    96,     7,    19,    74,   101,    19,   280,   281,
      95,   390,    29,   330,    31,  -130,   102,    14,    49,    56,
      56,    56,    56,   331,    83,   109,    56,   228,   229,   271,
     272,   330,   305,    97,   282,   283,   298,   222,   255,   198,
     201,   202,    49,    56,   136,    37,    10,    30,   394,   212,
     161,   214,   106,   136,   215,   304,    56,   219,    12,    13,
     296,    38,     5,    39,    14,    56,    24,    70,    86,   297,
      50,    51,    52,    53,    54,    55,    72,   291,    25,    26,
     278,   117,   360,    39,     9,   346,     5,   160,    69,   255,
      71,     9,    75,    56,    50,    51,    52,    53,    54,    55,
      41,    42,    43,    41,    42,    43,    84,   361,    92,    62,
       5,   118,   119,   120,   121,    63,    64,   122,   285,   350,
     300,    65,   118,   119,   120,   121,    93,    44,   122,    99,
      67,   308,   309,   310,   311,   312,   313,   314,   315,   316,
     317,   318,   319,   320,   321,   322,   323,   324,   325,   326,
     327,   328,   103,   382,   123,   100,   154,   332,   333,   334,
     335,   336,   337,   338,   339,   340,   341,   342,   343,   141,
     105,   158,   374,   375,   376,   344,    22,    23,     5,   118,
     119,   120,   121,    49,   107,   122,   113,   353,   215,    41,
      42,    43,    12,    13,   251,   252,   253,   115,    14,   128,
      47,    48,   129,   401,   135,   139,   140,   159,   142,   209,
     210,   218,   193,   189,   388,   255,    68,   132,   227,   221,
     143,   144,   123,   285,   145,   222,   293,     5,   118,   119,
     120,   121,   329,   345,   122,    50,    51,    52,    53,    54,
      55,   347,   146,   147,   355,   148,   349,   356,   149,   150,
     357,   358,   151,   152,   383,   141,   153,   300,   248,   249,
     250,   251,   252,   253,   398,   387,   389,   396,    28,    49,
     204,   123,   400,   154,   137,   130,   397,   306,   307,   393,
     391,   395,   385,   354,   399,   155,   156,   157,   158,   159,
     351,   386,   256,   303,   142,     0,     0,   275,   381,     0,
       0,     0,     0,     0,     0,     0,   143,   144,     0,   161,
     145,     0,     0,     5,   118,   119,   120,   121,     0,     0,
     122,    50,    51,    52,    53,    54,    55,     0,   146,   147,
       0,   148,     0,     0,   149,   150,     0,     0,   151,   152,
       0,     0,   153,     0,     0,     0,   160,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,   123,     0,   154,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,   155,   156,     0,   158,   159,   233,   234,   235,   236,
     237,   238,   239,   240,   241,   242,   243,   244,   245,   246,
     247,   248,   249,   250,   251,   252,   253,   233,   234,   235,
     236,   237,   238,   239,   240,   241,   242,   243,   244,   245,
     246,   247,   248,   249,   250,   251,   252,   253,   233,   234,
     235,   236,   237,   238,   239,   240,   241,   242,   243,   244,
     245,   246,   247,   248,   249,   250,   251,   252,   253,   233,
     234,   235,   236,   237,   238,   239,   240,   241,   242,   243,
     244,   245,   246,   247,   248,   249,   250,   251,   252,   253,
     233,   234,   235,   236,   237,   238,   239,   240,   241,   242,
     243,   244,   245,   246,   247,   248,   249,   250,   251,   252,
     253,   292,     0,  -220,  -220,  -220,  -220,  -220,  -220,  -220,
    -220,  -220,  -220,  -220,  -220,     0,     0,   254,   234,   235,
     236,   237,   238,   239,   240,   241,   242,   243,   244,   245,
     246,   247,   248,   249,   250,   251,   252,   253,   276,   235,
     236,   237,   238,   239,   240,   241,   242,   243,   244,   245,
     246,   247,   248,   249,   250,   251,   252,   253,     0,   284,
     236,   237,   238,   239,   240,   241,   242,   243,   244,   245,
     246,   247,   248,   249,   250,   251,   252,   253,     0,     0,
     288,   233,   234,   235,   236,   237,   238,   239,   240,   241,
     242,   243,   244,   245,   246,   247,   248,   249,   250,   251,
     252,   253,   233,   234,   235,   236,   237,   238,   239,   240,
     241,   242,   243,   244,   245,   246,   247,   248,   249,   250,
     251,   252,   253,   233,   234,   235,   236,   237,   238,   239,
     240,   241,   242,   243,   244,   245,   246,   247,   248,   249,
     250,   251,   252,   253,   233,   234,   235,   236,   237,   238,
     239,   240,   241,   242,   243,   244,   245,   246,   247,   248,
     249,   250,   251,   252,   253,   238,   239,   240,   241,   242,
     243,   244,   245,   246,   247,   248,   249,   250,   251,   252,
     253,   362,   237,   238,   239,   240,   241,   242,   243,   244,
     245,   246,   247,   248,   249,   250,   251,   252,   253,     0,
       0,     0,   363,  -221,  -221,  -221,  -221,   242,   243,   244,
     245,   246,   247,   248,   249,   250,   251,   252,   253,     0,
       0,     0,     0,   364,   259,   260,   261,   262,   263,   264,
     265,   266,   267,   268,   269,   270,     0,     0,     0,     0,
       0,     0,     0,     0,   365,   233,   234,   235,   236,   237,
     238,   239,   240,   241,   242,   243,   244,   245,   246,   247,
     248,   249,   250,   251,   252,   253,   233,   234,   235,   236,
     237,   238,   239,   240,   241,   242,   243,   244,   245,   246,
     247,   248,   249,   250,   251,   252,   253,   233,   234,   235,
     236,   237,   238,   239,   240,   241,   242,   243,   244,   245,
     246,   247,   248,   249,   250,   251,   252,   253,   233,   234,
     235,   236,   237,   238,   239,   240,   241,   242,   243,   244,
     245,   246,   247,   248,   249,   250,   251,   252,   253,  -221,
    -221,  -221,  -221,   246,   247,   248,   249,   250,   251,   252,
     253,     0,     0,     0,     0,   366,     0,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     0,     0,   367,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,   368,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,   369,   233,
     234,   235,   236,   237,   238,   239,   240,   241,   242,   243,
     244,   245,   246,   247,   248,   249,   250,   251,   252,   253,
     233,   234,   235,   236,   237,   238,   239,   240,   241,   242,
     243,   244,   245,   246,   247,   248,   249,   250,   251,   252,
     253,   233,   234,   235,   236,   237,   238,   239,   240,   241,
     242,   243,   244,   245,   246,   247,   248,   249,   250,   251,
     252,   253,   233,   234,   235,   236,   237,   238,   239,   240,
     241,   242,   243,   244,   245,   246,   247,   248,   249,   250,
     251,   252,   253,   142,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     0,   143,   144,     0,     0,   370,
       0,     0,     5,   118,   119,   120,   121,     0,     0,   122,
     142,     0,     0,     0,     0,     0,     0,     0,     0,     0,
     371,     0,   143,   144,     0,     0,     0,     0,     0,     5,
     118,   119,   120,   121,     0,     0,   122,     0,     0,     0,
       0,   372,     0,     0,     0,     0,   123,     0,   154,     0,
       0,     0,     0,     0,     0,     0,     0,   142,     0,     0,
       0,   156,   373,   158,   159,   299,     0,     0,     0,   143,
     144,     0,     0,   123,     0,   154,     5,   118,   119,   120,
     121,     0,     0,   122,     0,     0,     0,   211,   156,     0,
     158,   159,   289,   233,   234,   235,   236,   237,   238,   239,
     240,   241,   242,   243,   244,   245,   246,   247,   248,   249,
     250,   251,   252,   253,     0,     0,     0,     0,     0,     0,
     123,     0,   154,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     0,   156,     0,   158,   159,   233,
     234,   235,   236,   237,   238,   239,   240,   241,   242,   243,
     244,   245,   246,   247,   248,   249,   250,   251,   252,   253
  };

  const short int
  parser::yycheck_[] =
  {
       1,    39,   113,   138,   138,   152,     5,     5,     5,     5,
      11,   113,    40,    40,    40,    32,     4,    65,    58,   204,
      84,    85,   145,    40,    84,    85,     5,     3,    47,    48,
      41,     5,    70,    71,    72,    73,   123,   124,    39,    77,
       8,     9,    10,    11,    12,    13,    14,    15,    16,    17,
      18,    19,    83,     0,    65,    34,    94,    65,   205,   206,
      34,   125,   124,   256,   123,   125,    97,   102,    21,    70,
      71,    72,    73,   258,    75,   106,    77,    63,    64,    47,
      48,   274,   229,    84,   207,   208,   221,   127,   107,   141,
     142,   143,    21,    94,   120,   124,   123,    40,   126,   151,
     138,   153,   103,   120,   156,   228,   107,   159,    96,    97,
     221,   124,    65,    32,   102,   116,    65,    32,    71,   221,
      73,    74,    75,    76,    77,    78,    32,   125,    77,    78,
     129,   128,   128,    32,    40,   282,    65,   138,    65,   107,
      32,    40,   105,   144,    73,    74,    75,    76,    77,    78,
      98,    99,   100,    98,    99,   100,   106,   304,    34,    89,
      65,    66,    67,    68,    69,    95,    96,    72,    92,    93,
     222,   101,    66,    67,    68,    69,    34,   125,    72,    65,
     125,   233,   234,   235,   236,   237,   238,   239,   240,   241,
     242,   243,   244,   245,   246,   247,   248,   249,   250,   251,
     252,   253,     5,   350,   109,   126,   111,   259,   260,   261,
     262,   263,   264,   265,   266,   267,   268,   269,   270,     7,
      65,   126,   345,    84,    85,   277,    12,    13,    65,    66,
      67,    68,    69,    21,   127,    72,     8,   289,   290,    98,
      99,   100,    96,    97,    41,    42,    43,   126,   102,   123,
      37,    38,    65,   400,   120,    65,    65,   127,    46,   123,
     123,    65,   397,   397,   375,   107,   125,   124,   123,    58,
      58,    59,   109,    92,    62,   127,   126,    65,    66,    67,
      68,    69,    65,    81,    72,    73,    74,    75,    76,    77,
      78,   124,    80,    81,    65,    83,   127,     5,    86,    87,
     129,   129,    90,    91,     8,     7,    94,   359,    38,    39,
      40,    41,    42,    43,    65,   123,    22,    22,    16,    21,
     144,   109,   128,   111,   129,   116,   392,   230,   230,   379,
     377,   383,   356,   290,   397,   123,   124,   125,   126,   127,
     286,   359,   191,   225,    46,    -1,    -1,   195,   349,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    58,    59,    -1,   397,
      62,    -1,    -1,    65,    66,    67,    68,    69,    -1,    -1,
      72,    73,    74,    75,    76,    77,    78,    -1,    80,    81,
      -1,    83,    -1,    -1,    86,    87,    -1,    -1,    90,    91,
      -1,    -1,    94,    -1,    -1,    -1,   397,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,   109,    -1,   111,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,   123,   124,    -1,   126,   127,    23,    24,    25,    26,
      27,    28,    29,    30,    31,    32,    33,    34,    35,    36,
      37,    38,    39,    40,    41,    42,    43,    23,    24,    25,
      26,    27,    28,    29,    30,    31,    32,    33,    34,    35,
      36,    37,    38,    39,    40,    41,    42,    43,    23,    24,
      25,    26,    27,    28,    29,    30,    31,    32,    33,    34,
      35,    36,    37,    38,    39,    40,    41,    42,    43,    23,
      24,    25,    26,    27,    28,    29,    30,    31,    32,    33,
      34,    35,    36,    37,    38,    39,    40,    41,    42,    43,
      23,    24,    25,    26,    27,    28,    29,    30,    31,    32,
      33,    34,    35,    36,    37,    38,    39,    40,    41,    42,
      43,   128,    -1,     8,     9,    10,    11,    12,    13,    14,
      15,    16,    17,    18,    19,    -1,    -1,   123,    24,    25,
      26,    27,    28,    29,    30,    31,    32,    33,    34,    35,
      36,    37,    38,    39,    40,    41,    42,    43,   123,    25,
      26,    27,    28,    29,    30,    31,    32,    33,    34,    35,
      36,    37,    38,    39,    40,    41,    42,    43,    -1,   123,
      26,    27,    28,    29,    30,    31,    32,    33,    34,    35,
      36,    37,    38,    39,    40,    41,    42,    43,    -1,    -1,
     123,    23,    24,    25,    26,    27,    28,    29,    30,    31,
      32,    33,    34,    35,    36,    37,    38,    39,    40,    41,
      42,    43,    23,    24,    25,    26,    27,    28,    29,    30,
      31,    32,    33,    34,    35,    36,    37,    38,    39,    40,
      41,    42,    43,    23,    24,    25,    26,    27,    28,    29,
      30,    31,    32,    33,    34,    35,    36,    37,    38,    39,
      40,    41,    42,    43,    23,    24,    25,    26,    27,    28,
      29,    30,    31,    32,    33,    34,    35,    36,    37,    38,
      39,    40,    41,    42,    43,    28,    29,    30,    31,    32,
      33,    34,    35,    36,    37,    38,    39,    40,    41,    42,
      43,   123,    27,    28,    29,    30,    31,    32,    33,    34,
      35,    36,    37,    38,    39,    40,    41,    42,    43,    -1,
      -1,    -1,   123,    28,    29,    30,    31,    32,    33,    34,
      35,    36,    37,    38,    39,    40,    41,    42,    43,    -1,
      -1,    -1,    -1,   123,     8,     9,    10,    11,    12,    13,
      14,    15,    16,    17,    18,    19,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,   123,    23,    24,    25,    26,    27,
      28,    29,    30,    31,    32,    33,    34,    35,    36,    37,
      38,    39,    40,    41,    42,    43,    23,    24,    25,    26,
      27,    28,    29,    30,    31,    32,    33,    34,    35,    36,
      37,    38,    39,    40,    41,    42,    43,    23,    24,    25,
      26,    27,    28,    29,    30,    31,    32,    33,    34,    35,
      36,    37,    38,    39,    40,    41,    42,    43,    23,    24,
      25,    26,    27,    28,    29,    30,    31,    32,    33,    34,
      35,    36,    37,    38,    39,    40,    41,    42,    43,    32,
      33,    34,    35,    36,    37,    38,    39,    40,    41,    42,
      43,    -1,    -1,    -1,    -1,   123,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,   123,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,   123,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,   123,    23,
      24,    25,    26,    27,    28,    29,    30,    31,    32,    33,
      34,    35,    36,    37,    38,    39,    40,    41,    42,    43,
      23,    24,    25,    26,    27,    28,    29,    30,    31,    32,
      33,    34,    35,    36,    37,    38,    39,    40,    41,    42,
      43,    23,    24,    25,    26,    27,    28,    29,    30,    31,
      32,    33,    34,    35,    36,    37,    38,    39,    40,    41,
      42,    43,    23,    24,    25,    26,    27,    28,    29,    30,
      31,    32,    33,    34,    35,    36,    37,    38,    39,    40,
      41,    42,    43,    46,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,    58,    59,    -1,    -1,   123,
      -1,    -1,    65,    66,    67,    68,    69,    -1,    -1,    72,
      46,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
     123,    -1,    58,    59,    -1,    -1,    -1,    -1,    -1,    65,
      66,    67,    68,    69,    -1,    -1,    72,    -1,    -1,    -1,
      -1,   123,    -1,    -1,    -1,    -1,   109,    -1,   111,    -1,
      -1,    -1,    -1,    -1,    -1,    -1,    -1,    46,    -1,    -1,
      -1,   124,   123,   126,   127,   128,    -1,    -1,    -1,    58,
      59,    -1,    -1,   109,    -1,   111,    65,    66,    67,    68,
      69,    -1,    -1,    72,    -1,    -1,    -1,   123,   124,    -1,
     126,   127,    22,    23,    24,    25,    26,    27,    28,    29,
      30,    31,    32,    33,    34,    35,    36,    37,    38,    39,
      40,    41,    42,    43,    -1,    -1,    -1,    -1,    -1,    -1,
     109,    -1,   111,    -1,    -1,    -1,    -1,    -1,    -1,    -1,
      -1,    -1,    -1,    -1,    -1,   124,    -1,   126,   127,    23,
      24,    25,    26,    27,    28,    29,    30,    31,    32,    33,
      34,    35,    36,    37,    38,    39,    40,    41,    42,    43
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
     178,    58,   127,   222,   238,   239,   240,   123,    63,    64,
     184,   185,   186,    23,    24,    25,    26,    27,    28,    29,
      30,    31,    32,    33,    34,    35,    36,    37,    38,    39,
      40,    41,    42,    43,   123,   107,   227,   228,   229,     8,
       9,    10,    11,    12,    13,    14,    15,    16,    17,    18,
      19,    47,    48,   225,   227,   238,   123,     5,   129,   222,
     173,   173,   210,   210,   123,    92,   202,   203,   123,    22,
       5,   125,   128,   126,   179,   180,   169,   170,   233,   128,
     209,   223,   224,   240,   210,   173,   185,   186,   209,   209,
     209,   209,   209,   209,   209,   209,   209,   209,   209,   209,
     209,   209,   209,   209,   209,   209,   209,   209,   209,    65,
     228,   222,   209,   209,   209,   209,   209,   209,   209,   209,
     209,   209,   209,   209,   209,    81,   173,   124,   193,   127,
      93,   203,   204,   209,   221,    65,     5,   129,   129,     5,
     128,   173,   123,   123,   123,   123,   123,   123,   123,   123,
     123,   123,   123,   123,   210,    84,    85,   194,   195,   197,
     198,   134,   173,     8,   181,   180,   224,   123,   169,    22,
     125,   195,   196,   198,   126,   209,    22,   174,    65,   199,
     128,   173
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
     181,   182,   182,   182,   182,   183,   184,   184,   185,   186,
     188,   187,   190,   189,   192,   191,   193,   194,   194,   196,
     195,   197,   197,   198,   198,   199,   200,   201,   202,   202,
     203,   204,   205,   206,   206,   206,   206,   206,   206,   206,
     206,   206,   206,   206,   206,   207,   208,   208,   209,   209,
     209,   209,   209,   209,   209,   209,   209,   210,   211,   211,
     211,   211,   212,   212,   212,   212,   212,   212,   212,   213,
     213,   213,   213,   213,   213,   213,   213,   214,   214,   215,
     215,   215,   215,   215,   215,   216,   217,   218,   218,   219,
     220,   220,   221,   222,   222,   223,   223,   224,   225,   225,
     226,   227,   227,   228,   228,   229,   230,   230,   231,   232,
     232,   233,   233,   233,   234,   234,   235,   236,   237,   237,
     238,   239,   239,   240,   240
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
       2,     1,     2,     2,     3,     3,     1,     2,     3,     2,
       0,     4,     0,     6,     0,     4,     3,     1,     2,     0,
       4,     1,     2,     3,     2,     2,     2,     4,     1,     2,
       7,     2,     3,     4,     4,     4,     4,     4,     4,     4,
       4,     4,     4,     4,     4,     3,     2,     3,     1,     1,
       1,     1,     1,     1,     1,     1,     1,     3,     1,     1,
       1,     1,     3,     3,     3,     3,     3,     3,     2,     3,
       3,     3,     3,     3,     3,     3,     3,     3,     3,     3,
       3,     3,     3,     3,     2,     3,     3,     1,     3,     3,
       1,     3,     3,     2,     3,     1,     3,     1,     1,     1,
       2,     1,     2,     1,     2,     2,     1,     2,     2,     1,
       1,     1,     1,     1,     1,     2,     2,     1,     1,     2,
       1,     1,     2,     3,     3
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
  "array_expression_chain", "array_expression_index", YY_NULLPTR
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
     789,   800,   803,   809,   815,   824,   832,   836,   844,   850,
     857,   857,   868,   868,   878,   878,   890,   895,   898,   906,
     906,   921,   924,   932,   937,   943,   952,   962,   970,   973,
     980,   988,   995,  1002,  1011,  1020,  1029,  1038,  1047,  1056,
    1065,  1074,  1083,  1092,  1101,  1112,  1119,  1124,  1137,  1138,
    1139,  1140,  1141,  1142,  1143,  1144,  1145,  1148,  1152,  1153,
    1154,  1155,  1158,  1165,  1172,  1179,  1186,  1193,  1200,  1209,
    1216,  1223,  1230,  1237,  1244,  1251,  1258,  1267,  1274,  1283,
    1290,  1297,  1304,  1311,  1318,  1328,  1341,  1349,  1354,  1364,
    1372,  1377,  1386,  1400,  1403,  1410,  1415,  1423,  1425,  1426,
    1431,  1439,  1442,  1450,  1454,  1463,  1468,  1471,  1479,  1488,
    1496,  1506,  1510,  1517,  1524,  1529,  1537,  1540,  1548,  1552,
    1566,  1572,  1575,  1584,  1589
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
#line 3705 "jap.tab.cc" // lalr1.cc:1155
#line 1605 "jap.y" // lalr1.cc:1156




/**
* **********************************************************************
* Methods
* **********************************************************************
*/
#include <ego/ParserHelper.cpp>

/* Custom Code */
