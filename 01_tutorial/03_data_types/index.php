<?php
# String (string)
$name = "Joaquim";
var_dump($name);
echo "<br>";

# Integer (int)
$x = 19;
var_dump($x);
echo "<br>";

# Float (float)
$y = 19.2;
var_dump($y);
echo "<br>";

# Boolean (bool)
$some_bool = true;
var_dump($some_bool);
echo "<br>";

# Array (array)
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<br>";

# Object (object)
class Car
{
    public $color;
    public $model;
    public function __construct(string $color, string $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}
$myCar = new Car("black", "Toyota");
var_dump($myCar);
echo "<br>";

# NULL Value (NULL)
// NOTE: If a variable is created without a value, it is automatically assigned
// a value of NULL.
$some_var = null;
var_dump($some_var);

# Resource
/*
The special resource type is not an actual data type. It is the storing of a
reference to functions and resources external to PHP.

A common example of using the resource data type is a database call.
*/
