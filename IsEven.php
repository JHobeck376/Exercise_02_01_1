<!doctype html>

<html>
	<head>
	    <!--	    
            Project 02_01_1
            Author: Jacob Hobeck
            Date: 9.12.18
            
            IsEven.php
        -->
		<title>Is Event</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Is Even</h2>
        <?php
            $numbersArray = array(rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand());
            echo "$numbersArray[0] ", (is_float($numbersArray[0] / 2)) ? "is an odd number." : "is an even number.", "<br>";
            echo "$numbersArray[1] ", (is_float($numbersArray[1] / 2)) ? "is an odd number." : "is an even number.", "<br>";
            echo "$numbersArray[2] ", (is_float($numbersArray[2] / 2)) ? "is an odd number." : "is an even number.", "<br>";
            echo "$numbersArray[3] ", (is_float($numbersArray[3] / 2)) ? "is an odd number." : "is an even number.", "<br>";
            echo "$numbersArray[4] ", (is_float($numbersArray[4] / 2)) ? "is an odd number." : "is an even number.", "<br>";
            echo "$numbersArray[5] ", (is_float($numbersArray[5] / 2)) ? "is an odd number." : "is an even number.", "<br>";
            echo "$numbersArray[6] ", (is_float($numbersArray[6] / 2)) ? "is an odd number." : "is an even number.", "<br>";
            echo "$numbersArray[7] ", (is_float($numbersArray[7] / 2)) ? "is an odd number." : "is an even number.", "<br>";
            echo "$numbersArray[8] ", (is_float($numbersArray[8] / 2)) ? "is an odd number." : "is an even number.", "<br>";
            echo "$numbersArray[9] ", (is_float($numbersArray[9] / 2)) ? "is an odd number." : "is an even number.", "<br>";
        ?>
	</body>
</html>