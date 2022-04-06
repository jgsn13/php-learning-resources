<?php
/*
Create a PHP Constant
To create a constant, use the define() function.
Syntax
- define(name, value, case-insensitive)
  Parameters:
  - name: Specifies the name of the constant
  - value: Specifies the value of the constant
  - case-insensitive: Specifies whether the constant name should be
    case-insensitive. Default is false
*/
define("NAME", "Joaquim Gregorio da Silva Neto", case_insensitive: false);
echo NAME;
echo "<br><br>";

# Constant arrays (php > 7)
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota",
]);
echo cars[0];
echo "<br><br>";

# Constants are global
function myTest()
{
    echo NAME;
}
myTest();
echo "<br><br>";

