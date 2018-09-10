<!doctype html>
<html>
    <head>
        <!--       
            Exercise 02_01_1
            
            Author: Jacob Hobeck
            Date:   9.10.18
            
            PHPTest.php
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
                echo "The following is a PHP API function call.";
                phpinfo();
            ?>
        </p>
    </body>
</html>