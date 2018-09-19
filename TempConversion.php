<!doctype html>

<html>
	<head>
		<title>Temperature Conversion</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Temperature Conversion</h2>
        <?php
            $fahrenheit = array();
            // for loop to number 0 - 100 for temp conversions
            for ($i = 0; $i < 101; $i++) {
                $fahrenheit[$i] = $i;
                $celsius = ($fahrenheit[$i] - 32) * (5/9);
                echo "$fahrenheit[$i] degrees Fahrenheit is ", number_format($celsius, 3), " degrees Celsius.<br>";
            }
        ?>
	</body>
</html>