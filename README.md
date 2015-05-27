**This still under development**


# JAP - A Programming Language


> JAP is a Object Oriented programming language designed for fun, it's syntax is mix of JAVA + PHP


All JAP programs will be translated to PHP/Hack/Java ( Hack/Java under development) when you compile it.


# Examples

Test.jap
```java
class Test {

    public static void main(array<string> $agrv, int $argc) {
    
        print "Hello, World!\n";
    }
}
```

** How to run it **
```bash
# Compile to PHP source
jap Test.jap

# Execute
japp Test
Hello, World!
```


**Rule-1: File name and Class name must be same**


tests/Fibonacci.jsp
```java
package tests;

class Fibonacci {

    public int $a;
    
    public static string $name = "Fibonacci series Generator";

    public static void main(array<string> $argv, int $argc) {
        if ($argc < 2) {
            echo "Please enter number\n";
            return;
        }
        
        Fibonacci $f = new Fibonacci();
        $f->generate($argv[1]);
        
        print "\n";
    }
    
    public void generate(int $n) {
        int $a = 0;
        int $b = 1;
        
        int $m = 0;
        int $t;
        while ($m < $n) {
            if ($m == 0) {
                print $a;
                print " ";
                $m++;
                continue;
            }
            
            if ($m == 1) {
                print $b;
                print " ";
                $m++;
                continue;
            }
            
            $t = $b;
            $b += $a;
            $a = $t;
            
            print $b;
            print " ";
            
            $m++;
        }
    }
}
```

**Rule-2: Directory name and package name must be same.**

