<!doctype html>

<html>
	<head>
		<title>Variable Scope</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
       <h2>Variable Scope</h2>
        <?php
            $globalVariable = "global variable";
        
            function scopeExample() {
                $localVariable = "local variable";
                echo "<p>This is a $localVariable</p>";
            }
            
            function globalExample() {
                global $globalVariable;
                echo "<p>This is a $globalVariable</p>";
            }
        
            // main program body 
            scopeExample();
            echo "<p>This is a $globalVariable</p>";
            globalExample();
        ?>
	</body>
</html>