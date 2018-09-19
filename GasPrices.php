<!doctype html>

<html>
	<head>
		<title>Gas Prices</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Gas Prices</h2>
        <?php
            $gasPrice = 2.57;
            // conditional statement to test if the gas price is between 2 and 3 dollars
                echo "Gas prices are ", ($gasPrice <= 3) ? "between 2 and 3 dollars" : "not between 2 and 3 dollars";
        ?>
	</body>
</html>