<?php
$name = "Joaquim Gregorio da Silva Neto";

# strlen() - Return the Length of a String
echo strlen($name);
echo "<br>";

# str_word_count() - Count Words in a String
echo str_word_count($name);
echo "<br>";

# strrev() - Reverse a String
echo strrev($name);
echo "<br>";

# strpos() - Find the position of the first occurrence of a substring in a string 
echo strpos($name, "da");
echo "<br>";

# str_replace() - Replace Text Within a String
echo str_replace("Joaquim", "Joaquim2", $name);
echo "<br>";

# Find more at https://www.w3schools.com/php/php_ref_string.asp
