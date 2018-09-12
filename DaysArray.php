<!doctype html>

<html>
	<head>
        <!--	    
            Project 02_01_1
            Author: Jacob Hobeck
            Date: 9.12.18
            
            DaysArray.php
        -->
		<title>Days Array</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Days Array</h2>
        <?php
            $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
            echo "The days of the week in English are: ", $days[0], ", ", $days[1], ", ", $days[2], ", ", $days[3], ", ", $days[4], ", ", $days[5], ", and ", $days[6], ".<br>";
            $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
            echo "The days of the week in French are: ", $days[0], ", ", $days[1], ", ", $days[2], ", ", $days[3], ", ", $days[4], ", ", $days[5], ", and ", $days[6], ".";
        ?>
	</body>
</html>