<?php
# Syntax
# In PHP, regular expressions are strings composed of delimiters, a pattern and
# optional modifiers.
$exp = "/pattern/i";
# The delimiter can be any character that is not a letter, number, backslash or
# space. The most common delimiter is the forward slash (/), but when your
# pattern contains forward slashes it is convenient to choose other delimiters
# such as # or ~.

# Regular Expression Functions
# preg_match()
# - Returns 1 if the pattern was found in the string and 0 if not
# preg_match_all()
# - Returns the number of times the pattern was found in the string, which may also be 0
# preg_replace()
# - Returns a new string where matched patterns have been replaced with another string

# Using preg_match()
# The preg_match() function will tell you whether a string contains matches of a pattern.
$str = "Some string with some pattern";
$pattern = "/pattern/i";
echo preg_match($pattern, $str); // Outputs 1
echo "<br><br>";


# Using preg_match_all()
# The preg_match_all() function will tell you how many matches were found for a pattern in a string.
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4
echo "<br><br>";


# Using preg_replace()
# The preg_replace() function will replace all of the matches of the pattern in a string with another string.
$str = "Visit Free Software Foundation!";
$pattern = "/software/i";
echo preg_replace($pattern, "Linux", $str); // Outputs "Visit Linux Foundation!"
echo "<br><br>";


# Regular Expression Modifiers
# Modifiers can change how a search is performed.
# 
# - i	Performs a case-insensitive search
# - m	Performs a multiline search (patterns that search for the beginning or
#       end of a string will match the beginning or end of each line)
# - u	Enables correct matching of UTF-8 encoded patterns


# Regular Expression Patterns
# Brackets are used to find a range of characters:
# 
# - [abc]	Find one character from the options between the brackets
# - [^abc]	Find any character NOT between the brackets
# - [0-9]	Find one character from the range 0 to 9


# Metacharacters
# Metacharacters are characters with a special meaning:
# 
# - |	Find a match for any one of the patterns separated by | as in: cat|dog|fish
# - .	Find just one instance of any character
# - ^	Finds a match as the beginning of a string as in: ^Hello
# - $	Finds a match at the end of the string as in: World$
# - \d	Find a digit
# - \s	Find a whitespace character
# - \b	Find a match at the beginning of a word like this: \bWORD, or at the
#       end of a word like this: WORD\b
# - \uxxxx	Find the Unicode character specified by the hexadecimal number xxxx


# Quantifiers
# Quantifiers define quantities:
# 
# - n+	Matches any string that contains at least one n
# - n*	Matches any string that contains zero or more occurrences of n
# - n?	Matches any string that contains zero or one occurrences of n
# - n{x}	Matches any string that contains a sequence of X n's
# - n{x,y}	Matches any string that contains a sequence of X to Y n's
# - n{x,}	Matches any string that contains a sequence of at least X n's


# NOTE: If your expression needs to search for one of the special characters
# you can use a backslash ( \ ) to escape them. For example, to search for one
# or more question marks you can use the following expression: $pattern = '/\?+/';


# Grouping
# You can use parentheses ( ) to apply quantifiers to entire patterns. They
# also can be used to select parts of the pattern to be used as a match.
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1


# Find more at https://www.w3schools.com/php/php_ref_regex.asp

