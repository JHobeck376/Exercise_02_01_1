<!doctype html>

<html>
	<head>
		<title>Functions</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
       <h2>Passing Parameters</h2>
        <?php
            // increments the argument by 1 using a copy
            function incrementByValue($countByValue) {
                ++$countByValue;
                echo "<p>incrementByValue() value is $countByValue</p>";
            }
            
            // increments the argument by 1 using the actual value
            function incrementByReference(&$countByReference) {
                ++$countByReference;
                echo "<p>incrementByReference() value is $countByReference</p>";
            }
        
            // main program
        $count = 1;
        echo "<p>Main program starting value is $count.</p>";
        incrementByValue($count);
        echo "<p>Main program after incrementByValue is $count.</p>";
        
        $count = 1;
        echo "<p>Main program starting value is $count.</p>";
        incrementByReference($count);
        echo "<p>Main program after incrementByReference() is $count.</p>";
        ?>
        <h2>Default arguments</h2>
        <?php
            function paint($room="office", $color="red") {
                return "<p>The color of the {$room} is {$color}</p>";
            }
        
//            echo paint("blue");
            echo paint();
            echo paint("bedroom", "purple");
            echo paint("bedroom", null);
            echo paint("bedroom");
            echo paint("blue");
        ?>
	</body>
</html>