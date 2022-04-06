<?php
/*
Here are some rules for integers:
- An integer must have at least one digit
- An integer must NOT have a decimal point
- An integer can be either positive or negative
- Integers can be specified in three formats: decimal (10-based), hexadecimal
  (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
- PHP has the following predefined constants for integers:
  + PHP_INT_MAX - The largest integer supported
  + PHP_INT_MIN - The smallest integer supported
  + PHP_INT_SIZE -  The size of an integer in bytes
  + PHP has the following functions to check if the type of a variable is integer:
    - is_int()
    - is_integer() - alias of is_int()
    - is_long() - alias of is_int()
*/
echo PHP_INT_MAX . "<br>";
echo PHP_INT_MIN . "<br>";
echo PHP_INT_SIZE . "<br>";
$x = 5985;
var_dump(is_int($x));
echo "<br>";
$x = 59.85;
var_dump(is_int($x));
echo "<br>";
echo "<br>";
/*
PHP has the following predefined constants for floats (from PHP 7.2):
- PHP_FLOAT_MAX - The largest representable floating point number
- PHP_FLOAT_MIN - The smallest representable positive floating point number
- PHP_FLOAT_MAX - The smallest representable negative floating point number
- PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
- PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
- PHP has the following functions to check if the type of a variable is float:
  - is_float()
  - is_double() - alias of is_float()
*/
$x = 10.365;
var_dump(is_float($x));
echo "<br>";
echo "<br>";

/*
PHP has the following functions to check if a numeric value is finite or infinite:
- is_finite()
- is_infinite()
*/
$x = 1.9e411;
var_dump($x);
echo "<br>";
echo "<br>";

/*
NaN is used for impossible mathematical operations.
PHP has the following functions to check if a value is not a number:
- is_nan()
*/
$x = acos(8);
var_dump($x);
echo "<br>";
echo "<br>";

/*
The PHP is_numeric() function can be used to find whether a variable is
numeric. The function returns true if the variable is a number or a numeric
string, false otherwise.
*/
$x = 5985;
var_dump(is_numeric($x));
echo "<br>";
$x = "5985";
var_dump(is_numeric($x));
echo "<br>";
$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";
$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";
echo "<br>";

# PHP Casting Strings and Floats to Integers
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
