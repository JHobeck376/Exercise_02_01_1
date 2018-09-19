<!doctype html>

<html>
	<head>
		<title>While Logic</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>While Logic</h2>
        <?php
            $counter = 1;
            // counts through the first 100 numbers
            while ($counter <= 100) {
                $numbers[] = $counter;
                ++$counter;
            }
            // displays the numbers
            foreach ($numbers as &$currentNumber) {
                echo "$currentNumber<br>";
            }
        ?>
	</body>
</html>