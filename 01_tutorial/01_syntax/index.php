<!DOCTYPE html>
<html>

<body>

    <h1>My first PHP page</h1>

    <?php
    echo 'Hello World!<br>';
    echo "Hello World!<br>";
    echo "Hello World!<br>";

    # Variable names are case-sensitive
    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";

    // This is a single-line comment

    # This is also a single-line comment

    /*
    This is a multiple-lines comment block
    that spans over multiple
    lines
    */

    // You can also use comments to leave out parts of a code line
    $x = 5 /* + 15 */ + 5;
    echo $x;
    ?>

</body>

</html>
