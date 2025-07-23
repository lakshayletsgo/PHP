<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>
<body>

<!-- It is always a good practice to initialise constants in the begining of PHP script -->
    <h1>Data Types in PHP</h1>



    <?php
    define('Owner', 'Lakshay Goel');
    

    // Data Types in PHP
    // 1. String
    $string = "Hello, World!";
    echo "String: $string\n";
    echo "<br>";

    // 2. Integer
    $integer = 42;
    echo "Integer: $integer\n";
    echo "<br>";

    // 3. Float
    $float = 3.14;
    echo "Float: $float\n";
    echo "<br>";
    
    // 4. Boolean
    $boolean = true;
    echo "Boolean: " . ($boolean ? 'true' : 'false') . "\n";
    echo "<br>";
    

    // Constant in PHP is a value that cannot be changed during the execution of the script.
    // It is defined using the define() function or the const keyword.
    // 5. Constant
    define("PI", 3.14159);
    echo "Constant PI: " . PI ;
    echo "<br>";


    // We don't need to use the $ sign for constants
    // Constants are case-sensitive by default, but you can make them case-insensitive by passing true as the third argument to define()
    echo Owner
    ?>
</body>
</html>