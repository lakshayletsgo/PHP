
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <!-- If we want to insert html inside php we can just use the echo command and inside it we can write the HTML code -->
     <!-- We can also have multiple PHP scripts in a single HTML page -->
    <h2>Operators in PHP</h2>
    <?php

    $var1 = 10;
    $var2 = 20;

    // First there are four types of operators in PHP:
    // 1. Arithmetic Operators  
    echo "This is the addition Operator: ";
    echo $var1 + $var2 ;
    echo "<br>";

    echo "This is the subtraction Operator: ";
    echo $var2 - $var1 ;
    echo "<br>";

    echo "This is the multiplication Operator: ";
    echo $var1 * $var2 ;
    echo "<br>";

    echo "This is the division Operator: ";
    echo $var2 / $var1 ;
    echo "<br>";



    // 2. Assignment Operators
    $var3 = 30;
    echo "This is the assignment Operator: ";
    echo $var3;
    echo "<br>";
    
    $var4 = $var3;
    $var4 +=4;
    echo "This is the assignment Operator with addition: ";
    echo $var4;
    echo "<br>";
    // Similarly, we can use -=, *=, /= for subtraction, multiplication, and division respectively.



    // 3. Comparison Operators
    echo "This is the comparison Operator, 1==4 :  ";
    // To get a type of a variable we can use the var_dump function
    echo var_dump(1 == 4);

    // Similarly we have the operators !=, >, <, >=, <= for not equal, greater than, less than, greater than or equal to, and less than or equal to respectively.
    echo "<br>";
    


    // 4. Increment/Decrement Operators
    $var5 = 10;
    echo "This is the increment Operator before: ";
    echo $var5++;
    echo "<br>";
    echo "This is the increment Operator after: ";   
    echo $var5;
    echo "<br>";

    echo "This is the decrement Operator before : ";   
    echo $var5--;
    echo "<br>";
    echo "This is the value after decrement: ";   
    echo $var5;
    echo "<br>";

    // Similarly, we can use the pre-increment operator ++$var5 and the pre-decrement
    // operator --$var5 to increment or decrement the variable before using it in an expression.
    echo "This is the pre-increment Operator: ";
    echo ++$var5;
    echo "<br>";

    echo "This is the pre-decrement Operator: ";
    echo --$var5;
    echo "<br>";



    // 5. Logical Operators
    $var6 = true;
    $var7 = false;
    echo "This is the logical AND Operator: ";
    // echo var_dump($var6 && $var7);
    echo var_dump($var6 and $var7);
    echo "<br>";

    echo "This is the logical OR Operator: ";
    // echo var_dump($var6 || $var7);
    echo var_dump($var6 or $var7);
    echo "<br>";

    echo "This is the logical NOT Operator: ";
    echo var_dump(!$var6);
    echo "<br>";

    echo "This is the logical XOR Operator: ";
    echo var_dump($var6 xor $var7);
    // echo var_dump($var6 ^ $var7);   1
    echo "<br>";

    ?>

    <?php
        echo "<br>";
        echo "This is second PHP script in the same HTML page.";
        echo "<br>";
    ?>
</body>
</html>