<?php
function writeMsg()
{
    echo "Hello world!";
}
writeMsg(); // call the function

# Function arguments
function familyName($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983"); # Function arguments

# PHP is a Loosely Typed Language
function addNumbers(int $a, int $b)
{
    return $a + $b;
}
echo addNumbers(5, "5");
// since strict is NOT enabled "5" is changed to int(5), and it will return 10
?>

<?php

declare(strict_types=1); // strict requirement
function addNum(int $a, int $b)
{
    return $a + $b;
}
echo addNum(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown


# Default Argument Value (optional argument)
function setHeight(int $minheight = 50)
{
    echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);


# Returning values
function sum(int $x, int $y)
{
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);


# Return Type Declaration
function add(float $a, float $b): int
{
    return (int)($a + $b);
}
echo add(1.2, 5.2);


# Passing Arguments by Reference (&)
function add_five(int &$value)
{
    $value += 5;
}
$num = 2;
add_five($num);
echo $num;
?>
