<!doctype html>

<html>
	<head>
		<title>Odd Numbers</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Odd Numbers</h2>
        <?php
            $number = 1;
            echo "The odd numbers from 1 to 100 are ";
            while ($number <= 100) {
                if (is_float($number / 2) === true) {
                    echo $number, " ";
                }
                $number++;
            }
//            for ($i = 0; $i < 101; $i++) {
//                $currentNumber = $i + 1;
//                if (is_float($currentNumber / 2) === false) {
//                    echo $i, " ";
//                }
//            }
        ?>
	</body>
</html>