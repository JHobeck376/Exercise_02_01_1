<!doctype html>

<html>

<head>
    <!--   
        Exercise 02_01_1
        Author: Jacob Hobeck
        Date: 11 Sept 2018
        
        HelloWorld.php       
    -->
    <title>Hello World</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php 
        echo "<h1>Arithmetic Operators</h1>";
        // addition
        $x = 100;
        $y = 200;
        $returnValue = $x + $y;
        echo "<h2>Addition</h2>";
        echo '<p>$returnValue after addition expression: ', $returnValue, "</p>";
        // subtraction
        $x = 10;
        $y = 7;
        $returnValue = $x - $y;
        echo "<h2>Subtraction</h2>";
        echo '<p>$returnValue after subtraction expression: ', $returnValue, "</p>";
        // division
        $x = 24;
        $y = 3;
        $returnValue = $x / $y;
        echo "<h2>Division</h2>";
        echo '<p>$returnValue after division expression: ', $returnValue, "</p>";
        // modulus
        $x = 10;
        $y = 7;
        $returnValue = $x % $y;
        echo "<h2>Modulus</h2>";
        echo '<p>$returnValue after modulus expression: ', $returnValue, "</p>";
        // multiplication
        $x = 100;
        $y = 200;
        $returnValue = $x * $y;
        echo "<h2>Multiplication</h2>";
        echo '<p>$returnValue after multiplication expression: ', $returnValue, "</p>";
    
        //unary
        echo "<h2>Unary increment: Prefix Notation</h2>";
        $studentID = 100;
        $curStudentID = ++$studentID;
        echo "The first student ID is: ", $curStudentID, "<br>";
        $curStudentID = ++$studentID;
        echo "The second student ID is: ", $curStudentID, "<br>";
        $curStudentID = ++$studentID;
        echo "The third student ID is: ", $curStudentID, "<br>";
        echo "<h2>Unary increment: Postfix Notation</h2>";
        $studentID = 100;
        $curStudentID = $studentID++;
        echo "The first student ID is: ", $curStudentID, "<br>";
        $curStudentID = $studentID++;
        echo "The second student ID is: ", $curStudentID, "<br>";
        $curStudentID = $studentID++;
        echo "The third student ID is: ", $curStudentID, "<br>";
        
        echo "<h1>Assignment Operators</h1>";
        $number = 100;
        $number += 50;
        echo '$number: ', $number;
    
        echo "<h1>Conditional Operators</h1>";
        $value1 = "First Text String";
        $value2 = "Second Text String";
        $returnValue = ($value1 == $value2) ? "true" : "false";
        echo '$returnValue : ', $returnValue;
    ?>
</body>

</html>
