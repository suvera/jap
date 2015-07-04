BUILDS=builds
prefix = /usr/local
# The directory to install tar in.
bindir = $(prefix)/bin
CC=g++
BOOST_INC=-lboost_system -lboost_filesystem
CFLAGS= -Wno-write-strings -I. -I./cmdline -std=gnu++11 -g -I./cereal/include

all: jap japp japx

jap: lex.yy.cc
	mkdir -p $(BUILDS)
	$(CC) $(CFLAGS) lex.yy.cc $(BOOST_INC) -o $(BUILDS)/jap

japp: japp.cpp
	mkdir -p $(BUILDS)
	$(CC) $(CFLAGS) japp.cpp $(BOOST_INC) -o $(BUILDS)/japp

japx: japx.cpp
	mkdir -p $(BUILDS)
	$(CC) $(CFLAGS) japx.cpp $(BOOST_INC) -o $(BUILDS)/japx

install: all
	mkdir -p $(prefix)/jap
	cp $(BUILDS)/jap $(bindir)/jap
	cp $(BUILDS)/japp $(bindir)/japp
	cp $(BUILDS)/japx $(bindir)/japx
	cp -rf ./target_lib $(prefix)/jap/target_lib
	cp -rf ./lib $(prefix)/jap/lib
	cp -n ./jap.ini $(prefix)/jap/

japX: jap
	cp $(BUILDS)/jap $(bindir)/jap

jappX: japp
	cp $(BUILDS)/japp $(bindir)/japp

japxX: japx
	cp $(BUILDS)/japx $(bindir)/japx

bison:
	bison jap.y --language=c++ --defines=jap.tab.hh --verbose

flex:
	flex --header-file=lex.yy.hh jap.l

clean:
	rm -f $(BUILDS)/*