<?php

if(!isset($_GET['gewicht']) || !isset($_GET['lengte_cm'])) {
	echo '<p style="color: red">U bent verplicht alle velden in te voeren</p>';
	return;
}
if(empty($_GET['lengte_cm']) || empty($_GET['gewicht'])) {
	echo '<p style="color: red">U bent verplicht alle velden in te voeren</p>';
	return;
}
$gewicht = $_GET ["gewicht"];
$lengte =  $_GET ["lengte_cm"];
BMIcalc($gewicht,$lengte);



function BMIcalc ($gewicht,$lengte) {
    echo "uw gewicht " . $gewicht . " kg.<br>";
    echo "uw lengte " . $lengte . " m<br>";
    $BMI = round($gewicht / ($lengte / 100 * $lengte / 100), 1);
    echo "uw BMI is: " . $BMI . "<br>";
    switch (true) {
  		case ($BMI < 18.5):
  			echo '<p style="color: #6aa2fc">U heeft ondergewicht</p>';
  			break;
  		case ($BMI < 24.9):
  			echo '<p style="color: #049910">U heeft een normaal gewicht</p>';
  			break;
  		case ($BMI < 29.9):
  			echo '<p style="color: #d60000">U heeft over gewicht</p>';
  			break;
  		case ($BMI < 40):
  			echo '<p style="color: #a50303">U heeft obesitas</p>';
  			break;
  		case ($BMI > 40):
  			echo '<p style="color: #a50303;">U heeft obesitas</p>';
  			break;
  	}

}
  ?>
