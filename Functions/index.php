<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>Functions in PHP</h1>

    <?php
        // Functions in PHP

        // Function to greet a user
        function greet() {
            echo "Hello from Lakshay";
        }   
        // After defining the function, we can call it
        // greet();


        // Function with parameters
        function greetUser($name) {
            echo "Hello, ";
            echo $name; 
        }
        greetUser("Lakshay");
        echo "<br>";


        // Functions with return values
        function getGreeting($name) {
            return "Hello, " . $name;
        }
        $greeting = getGreeting("Lakshay");
        echo $greeting;

        // Function to add two numbers
        function add($a, $b) {
            return $a + $b;
        }
    ?>
</body>
</html>