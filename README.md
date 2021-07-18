**This still under development**


# JAP - A Programming Language


> JAP is a Object Oriented programming language designed for fun, it's syntax is mix of JAVA + PHP



# Examples

Test.jap
```php
class Test {

    public static void main(array<string> $agrv, int $argc) {
    
        print "Hello, World!\n";
    }
}
```

### How to run it
```bash
# Compile
jap Test.jap

# Execute
japp Test
Hello, World!
```


**Naming Standard: File name and Class name must be same**


tests/Fibonacci.jap
```php
package tests;

class Fibonacci {

    public static void main(array<string> $argv, int $argc) {
        Fibonacci $f = new Fibonacci();
        
        $f->generate(9);
        
        print "\n";
    }
    
    public void generate(int $n) {
        int $a = 0, $b = 1, $m = 0, $t;
        
        while ($m < $n) {
            if ($m <= 1) {
            
                print $m . " ";
                
            } else {
            
                $t = $b;
                $b += $a;
                $a = $t;
                
                print $b . " ";
            }
            
            $m++;
        }
    }
}
```

### How to run it
```bash
# Compile
jap tests/Fibonacci.jap

# Execute
japp tests/Fibonacci.jap
0 1 1 2 3 5 8 13 21 
```

**Rule-2: Directory name and package name must be same.**

### Demo Page

http://139.162.2.250:8000/~rama/jap/
