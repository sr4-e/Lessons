<?php

//preg_match()
//returns 1 , case-insensitive
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str) . "<br>";

//Using preg_match_all()
//returns 3 , case-insensitive ,checks every single "ain"
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str) . "<br>";

//Using preg_replace()
//case-insensitive , replace Student with Eng
$str = "Student Samr!";
$pattern = "/student/i";
echo preg_replace($pattern, "Eng", $str);


/////////////////////////////////////////////////////////////////////////////

//Regular Expression Modifiers

//Modifier i (Case-Insensitive Search)
$pattern = "/hello/i";
$text = "Hello, world! HELLO again.";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]). "<br>"; // Output: Array ( [0] => Hello [1] => HELLO )
 
//Modifier m (Multiline Search)
$pattern = "/^test/m";
$text = "test line one\nnot this line\ntest line two";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]). "<br>"; // Output: Array ( [0] => test [1] => test )

//Modifier u (UTF-8 Matching)
$pattern = "/\w+/u";
$text = "Café Münsterländer schön";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]). "<br>"; // Output: Array ( [0] => Café [1] => Münsterländer [2] => schön )


/////////////////////////////////////////////////////////////////////////////

//Regular Expression Patterns:

// [abc]  Find one or many of the characters inside the brackets
$pattern = "/[abc]/";
$text = "abcde ABC 123";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => a [1] => b [2] => c )

// [^abc]  Find any character NOT between the brackets
$pattern = "/[^abc]/";
$text = "abcde ABC 123";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => d [1] => e [2] =>   [3] => A [4] => B [5] => C [6] =>   [7] => 1 [8] => 2 [9] => 3 )

// [a-z]  Find any character alphabetically between two lowercase letters
$pattern = "/[a-z]/";
$text = "abcde ABC 123";
preg_match_all($pattern, $text, $matches);
print_r($matches[0])  . "<br>"; // Output: Array ( [0] => a [1] => b [2] => c [3] => d [4] => e )

// [A-z]  Find any character alphabetically between specified upper and lowercase letters
$pattern = "/[A-z]/";
$text = "abcde ABC 123";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => A [6] => B [7] => C )

// [A-Z]  Find any character alphabetically between two uppercase letters
$pattern = "/[A-Z]/";
$text = "abcde ABC 123";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => A [1] => B [2] => C )

// [123]  Find one or many of the digits inside the brackets
$pattern = "/[123]/";
$text = "abcde ABC 12345";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>";// Output: Array ( [0] => 1 [1] => 2 [2] => 3 )

// [0-5]  Find any digits between the two numbers
$pattern = "/[0-5]/";
$text = "abcde ABC 12345 67890";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

// [0-9]  Find any digits
$pattern = "/[0-9]/";
$text = "abcde ABC 12345 67890";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 0 )


/////////////////////////////////////////////////////////////////////////////

//Metacharacters:

// | - Match any one of the patterns separated by |
$pattern = "/cat|dog|fish/";
$text = "I have a cat, a dog, and a fish.";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>";// Output: Array ( [0] => cat [1] => dog [2] => fish )

// . - Find any character
$pattern = "/c.t/";
$text = "cat, cot, cut";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => cat [1] => cot [2] => cut )

// ^ - Match at the beginning of a string
$pattern = "/^Hello/";
$text = "Hello World!";
preg_match($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Hello

// $ - Match at the end of a string
$pattern = "/World!$/";
$text = "Hello World!";
preg_match($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: World!

// \d - Find any digit
$pattern = "/\d/";
$text = "I have 2 cats and 3 dogs.";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => 2 [1] => 3 )

// \D - Find any non-digit
$pattern = "/\D/";
$text = "I have 2 cats and 3 dogs.";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: All non-digit characters

// \s - Find any whitespace character
$pattern = "/\s/";
$text = "Hello World!";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => " " )

// \S - Find any non-whitespace character
$pattern = "/\S/";
$text = "Hello World!";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array of non-whitespace characters

// \w - Find any alphabetical letter or digit
$pattern = "/\w/";
$text = "Hello World 123!";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array of letters and digits

// \W - Find any non-alphabetical and non-digit character
$pattern = "/\W/";
$text = "Hello World 123!";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array of non-alphabetical and non-digit characters

// \b - Match at the beginning or end of a word
$pattern = "/\bcat\b/";
$text = "I have a cat and a caterpillar.";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => cat )

// \uxxxx - Find a Unicode character specified by a hexadecimal number
$pattern = "/\u00C9/u"; // É (Unicode for Latin Capital E with Acute)
$text = "Café";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => É )


/////////////////////////////////////////////////////////////////////////////

//Quantifiers:
// n+ - Matches any string that contains at least one n
$pattern = "/n+/";
$text = "nn nnnn n";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => nn [1] => nnnn [2] => n )

// n* - Matches any string that contains zero or more occurrences of n
$pattern = "/an*/";
$text = "a an ann a";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>"; // Output: Array ( [0] => a [1] => an [2] => ann [3] => a )

// n? - Matches any string that contains zero or one occurrences of n
$pattern = "/an?/";
$text = "a an ann a";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>";  // Output: Array ( [0] => a [1] => an [2] => an [3] => a )

// n{3} - Matches any string that contains a sequence of exactly 3 n's
$pattern = "/n{3}/";
$text = "nn nnn nnnnn";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>";  // Output: Array ( [0] => nnn [1] => nnn )

// n{2,5} - Matches any string that contains a sequence of at least 2 but not more than 5 n's
$pattern = "/n{2,5}/";
$text = "nn nnn nnnnn nnnnnnn";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>";  // Output: Array ( [0] => nn [1] => nnn [2] => nnnnn )

// n{3,} - Matches any string that contains a sequence of at least 3 n's
$pattern = "/n{3,}/";
$text = "nn nnn nnnnn nnnnnnn";
preg_match_all($pattern, $text, $matches);
print_r($matches[0]) . "<br>";  // Output: Array ( [0] => nnn [1] => nnnnn [2] => nnnnnnn )


?>