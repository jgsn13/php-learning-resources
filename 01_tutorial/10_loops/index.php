<?php
# While
$x = 1;

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

# Do while (executes once before check the condition)
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

# For
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

# Foreach (loops through a block of code for each element in an array)
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach ($age as $x => $val) {
    echo "$x = $val<br>";
}

# Break (breaks the loop)
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
}

# Continue (breaks one iteration)
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
}
