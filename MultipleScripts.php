<!doctype html>
<html>
    <head>
        <!--       
            Exercise 02_01_1
            
            Author: Jacob Hobeck
            Date:   9.10.18
            
            MultipleScripts.php
        -->
        <title>PHP Environment Info</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    <body>
        <p>
           <h1>PHP Environment Info</h1>
           <p>
               The PHP code was rendered with PHP version
               <?php
                  echo phpversion();
               ?>
               </p>
               <p>The PHP code was rendered with Zend Engine version</p>
               <?php
                 echo zend_version();
                ?>
                </p>
                <p>PHP's default MIME type is
               <?php
                 echo ini_get("default_mimetype");
                ?>
                </p>
                <p>The maximum allowable execution time of a PHP script is
               <?php
                 echo ini_get("max_execution_time");
                ?>
                </p>
           
        
    </body>
</html>