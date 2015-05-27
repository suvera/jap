/*
 * JapLogger.cpp
 *
 *  Created on: Mar 1, 2015
 *      Author: rnarmala
 */
#define LOG_TRACE 0
#define LOG_DEBUG 1
#define LOG_INFO 2
#define LOG_WARNING 3
#define LOG_ERROR 4
#define LOG_FATAL 5

class JapLogger {
private:
    int level;
    string logFile;
    bool failed;
public:
	JapLogger() {
	    level = 2;
	    failed = false;
    }

    ~JapLogger() {
    }

    void setLogFile(const string& file) {
        logFile = file;
    }

    void setLevel(int lev) {
        level = lev;
    }

    void setLevel(string lev) {
        lev = toLower(lev);

        if (lev == "trace") {
            level = LOG_TRACE;
        } else if (lev == "debug") {
            level = LOG_DEBUG;
        } else if (lev == "info") {
            level = LOG_INFO;
        } else if (lev == "warning") {
            level = LOG_WARNING;
        } else if (lev == "error") {
            level = LOG_ERROR;
        } else if (lev == "fatal") {
            level = LOG_FATAL;
        }
    }

    char* getLevelText() const {
        switch (level) {
            case LOG_TRACE:
                return "trace";
                break;
            case LOG_DEBUG:
                return "debug";
                break;
            case LOG_INFO:
                return "info";
                break;
            case LOG_WARNING:
                return "warning";
                break;
            case LOG_ERROR:
                return "error";
                break;
            case LOG_FATAL:
                return "fatal";
                break;
        }

        return "";
    }

    void setFailed(bool flag) {
        failed = flag;
    }

    int log(const string& msg, const int& lev) {
        if (failed || lev < level || logFile.size() == 0) {
            return 0;
        }

        FILE * pFile;
        pFile = fopen(logFile.c_str(), "ab");
        if (pFile == NULL) {
            failed = true;
            return 0;
        }

        fputs(currentDateTime().c_str(), pFile);
        fputc(' ', pFile);
        fputs(getLevelText(), pFile);
        fputc(' ', pFile);
        fputs(msg.c_str(), pFile);
        fputc('\n', pFile);
        fclose (pFile);

        return 1;
    }

    int trace(const string& msg) {
        return this->log(msg, LOG_TRACE);
    }

    int debug(const string& msg) {
        return this->log(msg, LOG_DEBUG);
    }

    int info(const string& msg) {
        return this->log(msg, LOG_INFO);
    }

    int warn(const string& msg) {
        return this->log(msg, LOG_WARNING);
    }

    int error(const string& msg) {
        return this->log(msg, LOG_ERROR);
    }

    int fatal(const string& msg) {
        return this->log(msg, LOG_FATAL);
    }
};