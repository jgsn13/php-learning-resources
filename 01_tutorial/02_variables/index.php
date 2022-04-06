<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
echo $x;

/*
Rules for PHP variables:
- A variable starts with the $ sign, followed by the name of the variable
- A variable name must start with a letter or the underscore character
- A variable name cannot start with a number
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variable names are case-sensitive ($age and $AGE are two different variable
*/

/*
PHP has three different variable scopes:

local
global
static
*/
$x = 5; // global scope

function myTest()
{
    global $x; // now we have access to the global variable
    $x = $GLOBALS['x']; // we can also access a global variable by this way

    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

/*
Normally, when a function is completed/executed, all of its variables are
deleted. However, sometimes we want a local variable NOT to be deleted. We need
it for a further job.

To do this, use the static keyword when you first declare the variable:
*/
function myTest1()
{
    static $x = 0;
    echo $x . "<br>";
    $x++;
}

myTest1();
myTest1();
myTest1();

### PHP echo and print Statements ###
/*
echo and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return
value of 1 so it can be used in expressions. echo can take multiple parameters
(although such usage is rare) while print can take one argument. echo is
marginally faster than print.
*/

print "Something";
