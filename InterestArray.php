<!doctype html>

<html>
	<head>
        <!--	   
            Project 02_01_1
            Author: Jacob Hobeck
            Date:   9.12.18
            
            InterestArray.php
          -->
		<title>Interest Array</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Interest Array</h2>
        <?php
            $interestRate1 = 0.0725;
            $interestRate2 = 0.0750;
            $interestRate3 = 0.0775;
            $interestRate4 = 0.0800;
            $interestRate5 = 0.0825;
            $interestRate6 = 0.0850;
            $interestRate7 = 0.0875;
            $ratesArray = array($interestRate1, $interestRate2, $interestRate3, $interestRate4, $interestRate5, $interestRate6, $interestRate7);
            echo "<pre>";
            echo number_format($ratesArray[0], 4), "<br>";
            echo number_format($ratesArray[1], 4), "<br>";
            echo number_format($ratesArray[2], 4), "<br>";
            echo number_format($ratesArray[3], 4), "<br>";
            echo number_format($ratesArray[4], 4), "<br>";
            echo number_format($ratesArray[5], 4), "<br>";
            echo number_format($ratesArray[6], 4), "<br>";
            echo "</pre>";
        ?>
	</body>
</html>