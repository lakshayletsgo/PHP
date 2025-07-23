<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
    <h1>Condititonal Statements</h1>

    <?php
    // If Else Statement
    $age = 20; 
    if($age > 18) {
        echo "<p>You are an adult.</p>";
    }else if($age==18){
        echo "<p>You just turned an adult.</p>";
    }else{
        echo "<p>You are a minor.</p>";
    }

    // This is Arrays
    $names = array("Lakshay", "Nikhil", "Rahul");
    echo $names[1];
    echo "<br>";
    echo count($names);


    // Loops in PHP
    
    // While Loop
    echo "<h2>While Loop Example</h2>";
    $a = 15;
    while ($a <= 20) {
        echo "<p>Value of a is: $a</p>";
        $a++;
    }
    // For iterations on arrays we can use this syntax in while loop
    $i = 0;
    while ($i < count($names)) {
        echo "<p>Name at index $i is: " . $names[$i] . "</p>";
        $i++;
    }

    // Do While Loop
    echo "<h2>Do While Loop Example</h2>";
    $b = 15;
    do{
        echo "<p>Value of b is: $b</p>";
        $b++;
    }while($b <= 20);


    // For Loop
    echo "<h2>For Loop Example</h2>";
    for ($c = 15; $c <= 20; $c++) {
        echo "<p>Value of c is: $c</p>";
    }

    // For Each Loop
    echo "<h2>For Each Loop Example</h2>";
    foreach ($names as $name) {
        echo "<p>Name: $name</p>";
    }

    ?>
</body>
</html>