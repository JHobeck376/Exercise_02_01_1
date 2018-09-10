<!doctype html>
<html>
    <head>
        <!--       
            Exercise 02_01_1
            
            Author: Jacob Hobeck
            Date:   9.10.18
            
            PhpCodeBlocks.php
        -->
        <title>PHP Code Blocks</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
        <p>
           <h3>This is HTML</h3>
            <?php 
                echo "This text is displayed using stnadard PHP script delimeters<br>";
                print "Second string";
                print ("<br>Third String");
                echo "<h1>This is a" , " multiple argument string</h1>";
                echo ("<h1>This is a" . " multiple argument string</h1>");
                print("<h2>this is some math: " . (2 + 3) . "</h2>");
            ?>
        </p>
    </body>
</html>