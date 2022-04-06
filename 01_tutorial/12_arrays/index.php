<?php
# An array can store multiple values in one single variable.
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";

/*
In PHP, the array() function is used to create an array.
In PHP, there are three types of arrays:
- Indexed arrays - Arrays with a numeric index
- Associative arrays - Arrays with named keys
- Multidimensional arrays - Arrays containing one or more arrays
*/

# Get The Length of an Array - The count() Function
echo count($cars);
echo "<br><br>";

# Indexed Arrays
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";

# Associative Arrays
/*
Associative arrays are arrays that use named keys that you assign to them.
There are two ways to create an associative array: 
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
or:
    $age['Peter'] = "35";
    $age['Ben'] = "37";
    $age['Joe'] = "43";
*/
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

# Multidimensional Arrays
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}
