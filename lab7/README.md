**PHP Date and Time**

The PHP Date() Function:
The PHP date() function formats a timestamp to a more readable date and time.

1-Get a Date:
The required format parameter of the date() function specifies how to format the date (or time).
d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week
Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.


2-Get a Time:
H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)


3-Get Your Time Zone
If the time you got back from the code is not correct, it's probably because your server is in another country or set up for a different timezone.
So, if you need the time to be correct according to a specific location, you can set the timezone you want to use.


4-Create a Date With mktime():
The PHP mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.


5-Create a Date From a String With strtotime():
The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).



**PHP Regular Expressions**

What is a Regular Expression?
A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.
A regular expression can be a single character, or a more complicated pattern.
Regular expressions can be used to perform all types of text search and text replace operations.

Regular Expression Functions
1-preg_match():
Returns 1 if the pattern was found in the string and 0 if not
The preg_match() function will tell you whether a string contains matches of a pattern.

2-preg_match_all():
Returns the number of times the pattern was found in the string, which may also be 0
The preg_match_all() function will tell you how many matches were found for a pattern in a string.

3-preg_replace():
Returns a new string where matched patterns have been replaced with another string
The preg_replace() function will replace all of the matches of the pattern in a string with another string.



Regular Expression Modifiers:
Modifiers can change how a search is performed.

i : Performs a case-insensitive search.
m : Performs a multiline search (patterns that search for a match at the beginning or end of a string will now match the beginning or end of each line)	.
u : Enables correct matching of UTF-8 encoded patterns.


Regular Expression Patterns:
Brackets are used to find a range of characters:

[abc] : Find one or many of the characters inside the brackets.
[^abc] : Find any character NOT between the brackets.
[a-z] : Find any character alphabetically between two letters.
[A-z] : Find any character alphabetically between a specified upper-case letter and a specified lower-case letter	
[A-Z] : Find any character alphabetically between two upper-case letters.	
[123] : Find one or many of the digits inside the brackets.
[0-5] : Find any digits between the two numbers	.
[0-9] : Find any digits	.


Metacharacters:
Metacharacters are characters with a special meaning:

|	: Find a match for any one of the patterns separated by | as in: cat|dog|fish	
.	: Find any character	
^	: Finds a match as the beginning of a string as in: ^Hello	
$	: Finds a match at the end of the string as in: World$	
\d	: Find any digits	
\D	: Find any non-digits	
\s	: Find any whitespace character	
\S	: Find any non-whitespace character	
\w	: Find any alphabetical letter (a to Z) and digit (0 to 9)	
\W	: Find any non-alphabetical and non-digit character	
\b	: Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b	
\uxxxx	: Find the Unicode character specified by the hexadecimal number xxxx


Quantifiers:
Quantifiers define quantities:

n+	: Matches any string that contains at least one n	
n*	: Matches any string that contains zero or more occurrences of n	
n?	: Matches any string that contains zero or one occurrences of n	
n{3}	: Matches any string that contains a sequence of 3 n's	
n{2, 5}	: Matches any string that contains a sequence of at least 2, but not more that 5 n's	
n{3,}	: Matches any string that contains a sequence of at least 3 n's
