<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
<h1>Strings</h1>
    <?php
        // We can concatenate strings using the dot operator
        $firstName = "John";
        $lastName = "Doe";
        $fullName = $firstName . " " . $lastName;
        echo "<p>Full Name: $fullName</p>";

        // To count the number of characters in a string, we can use the strlen function
        $stringLength = strlen($fullName); 
        echo "Length of the full name is : ". $stringLength;
        echo "<br>";


        // To count number of words in a string, we can use the str_word_count function
        $wordCount = str_word_count($fullName);
        echo "Number of words in the full name is : ". $wordCount;
        echo "<br>";


        // To reverse a string, we can use the strrev function
        $reversedName = strrev($fullName);
        echo "Reversed full name is : ". $reversedName;
        echo "<br>";

        // To get a position of substring in string we can use the strpos function
        $position = strpos($fullName, "Doe");
        echo "Position of 'Doe' in full name is : ". $position;
        echo "<br>";

        // To replace a substring in string we can use the function str_replace
        $newFullName = str_replace("Doe", "Smith", $fullName);
        echo "New full name after replacement is : ". $newFullName;
        echo "<br>";

    ?>


</body>
</html>