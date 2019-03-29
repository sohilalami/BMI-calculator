<?php
	$gewicht = $_GET["gewicht"];
	$lengte = $_GET["lengte_cm"];
	BMIcalc($gewicht,$lengte);
	function BMIcalc($gewicht,$lengte){
		$lengte = $lengte / 100;//omrekenen cm naar meters
		echo "uw gewicht " . $gewicht . " kg.<br>";
		echo "uw lengte " . $lengte . " m<br>";
		$BMI = $gewicht / ($lengte * $lengte);
		echo "uw BMI is: " . $BMI . "<br>";
		if($BMI > 40){
			echo "stop per direct met aankomen.";
		}
		if ($BMI > 30) {
			echo "u kunt proberen om af te vallen.";
		}
		if ($BMI  < 30) {
			echo "U heeft een gezonde BMI. ";
		}
		if ($BMI < 15) {
			echo "u moet aan komen.";
		}
	}
?>
