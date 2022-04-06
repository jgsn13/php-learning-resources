<?php
/*
Sort Functions For Arrays
In this chapter, we will go through the following PHP array sort functions:
- sort() - sort arrays in ascending order
- rsort() - sort arrays in descending order
- asort() - sort associative arrays in ascending order, according to the value
- ksort() - sort associative arrays in ascending order, according to the key
- arsort() - sort associative arrays in descending order, according to the value
- krsort() - sort associative arrays in descending order, according to the key
*/

# Sort Array in Ascending Order - sort()
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

# Sort Array in Descending Order - rsort()
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

# Sort Array (Ascending Order), According to Value - asort()
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
asort($age);

# Sort Array (Ascending Order), According to Key - ksort()
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
ksort($age);

# Sort Array (Descending Order), According to Value - arsort()
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
arsort($age);

# Sort Array (Descending Order), According to Key - krsort()
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
krsort($age);

# See more at https://www.w3schools.com/php/php_ref_array.asp
