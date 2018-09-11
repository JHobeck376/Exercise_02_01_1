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
                  // establishes which php version is running
                  echo phpversion();
               ?>
        </p>
        <p>The PHP code was rendered with Zend Engine version
            <?php
            // establishes which zend version is running
            echo zend_version();
        ?>
        </p>
        <p>PHP's default MIME type is
            <?php
            // this uses the ini_get prebuilt function to grab what MIME the page is using
            echo ini_get("default_mimetype");
        ?>
        </p>
        <p>The maximum allowable execution time of a PHP script is
            <?php
            // passes the execution time
            echo ini_get("max_execution_time");
        ?>
        </p>
    </p>


</body>

</html>
