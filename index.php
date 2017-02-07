<!DOCTYPE html>
<html>
<head>

	<?php



	$y = 4;
	$q = 7;
	function myTest() {
		static $x = 0;
		echo $x;
		$x++;
	}


	define("GRETTING", "welcome rrr!");
	function myTest1() {
		echo GRETTING;
	}


	$datum_today = date("Y-m/d");

	$color;


	$date = $_GET['date']; 

	if($date < 20170301) {
		$color = "blue";
	}
	elseif($date < 20170601) {
		$color = "green";
	}
	elseif($date < 20170901) {
		$color = "orange";
	}
	elseif($date < 20171201) {
		$color = "grey";
	}
	else{
		$color = "pink";
	}

	?>

	<style>
		body {
			background-color: <?php echo $color; ?>
		}

	</style>
	<title></title>
</head>
<body>
	Hej   <?php


	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo $datum_today;
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo $date;

	
	?>
</body>
</html>