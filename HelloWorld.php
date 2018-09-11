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
    // declaring global variables
    $worldVar="world";
    $sunVar = "Sun";
    $moonVar = "Moon";
    $worldInfo = 92897000;
    $sunInfo = 720000000;
    $moonInfo = 3456;
    
    //experiment with double quoted strings to see what their output behavior is
    echo "<p>Hello $worldVar!<br>";
    echo "The $worldVar is $worldInfo miles from the $sunVar.<br>";
    echo "Hello ", $sunVar, "!<br>";
    echo "The $sunVar's core temperature is approximately $sunInfo degrees Fahrenheit.<br>";
    echo "Hello ", $moonVar, "!<br>";
    echo "The $moonVar is $moonInfo miles in diameter.</p>";
    
    //experiment with curly braces
    echo "this is a {$moonVar}embedded in double quotes.";
    echo "This is a $moonVarembedded in double quotes.";
    ?>
    
</body>

</html>
