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
    define("WORLD_INFO", 92897000);
    define("SUN_INFO", 720000000);
    define("MOON_INFO", 3456);
    
    //experiment with double quoted strings to see what their output behavior is
    // calling in constant variables
    echo "<p>Hello $worldVar!<br>";
    echo "The $worldVar is ", number_format(WORLD_INFO, 0), " miles from the $sunVar.<br>";
    echo "Hello ", $sunVar, "!<br>";
    echo "The $sunVar's core temperature is approximately ", number_format(SUN_INFO, 2), " degrees Fahrenheit.<br>";
    echo "Hello ", $moonVar, "!<br>";
    echo "The $moonVar is ", number_format(MOON_INFO, 0), " miles in diameter.</p>";
    ?>
    
</body>

</html>
