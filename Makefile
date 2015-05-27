BUILDS=builds
prefix = /usr/local
# The directory to install tar in.
bindir = $(prefix)/bin
CC=g++
CFLAGS= -Wno-write-strings -I. -I./inih -I./cmdline -std=gnu++11 -lboost_system -lboost_filesystem -I./cereal/include

all: jap japp japx

jap: lex.yy.cc
	mkdir -p $(BUILDS)
	$(CC) $(CFLAGS) lex.yy.cc -o $(BUILDS)/jap

japp: japp.cpp
	mkdir -p $(BUILDS)
	$(CC) $(CFLAGS) japp.cpp -o $(BUILDS)/japp

japx: japx.cpp
	mkdir -p $(BUILDS)
	$(CC) $(CFLAGS) japx.cpp -o $(BUILDS)/japx

install: all
	cp $(BUILDS)/jap $(bindir)/jap
	cp $(BUILDS)/japp $(bindir)/japp
	cp $(BUILDS)/japx $(bindir)/japx

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