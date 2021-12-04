<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	echo "<style>";
	echo "#welcome{text-align: center; font-size: 16pt; font: Times New Roman;}";
	echo "table{padding-top: 30px; margin-left: auto; margin-right: auto; text-align: center; font-size: 16pt;}";
	echo "</style>";
	$username = $_POST["username"];
  $password = $_POST["password"];
  $Forza = $_POST["Forza Horizon 5"];
  $Halo = $_POST["Halo 4"];
 	$Golf = $_POST["Golf with Friends"];
	$shipping = $_POST["shipping"];

	echo "<div id='welcome'>";
		echo "<h2><b>Welcome $username!</b></h2>";
		echo "Your password is: $password";
	echo "</div>";

	echo "<div>";
		echo "<table>";
			echo "<tr>";
				echo "<th></th>";
				echo "<th>Quantity</th>";
				echo "<th>Cost Per Item</th>";
				echo "<th>Sub Total</th>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Forza Horizon 5</th>";
				echo "<td>$Forza Horizon 5</td>";
				echo "<td>$50</td>";
				$value1 = 50*$Forza;
				echo "<td>$$value1</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Halo 4</th>";
				echo "<td>$Halo 4</td>";
				echo "<td>$100</td>";
				$value2 = 100*$Halo;
				echo "<td>$$value2</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Golf with Friends</th>";
				echo "<td>$iq</td>";
				echo "<td>$15</td>";
				$value3 = 15*$Golf;
				echo "<td>$$value3</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Shipping</th>";
				echo "<td colspan='2'>$shipping</td>";
				if ($shipping == "Free 7 Day")
				{
					$value4 = 0;
				}else if ($shipping == "$50 Over Night"){
					$value4 = 50;
				}else if ($shipping == "$5 Three Day"){
					$value4 = 5;
				}
				echo "<td>$$value4</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th colspan='3'>Total Cost</th>";
				$total = $value1 + $value2 + $value3 + $value4;
				echo "<th>$$total</th>";
			echo "</tr>";
		echo "</table>";
	echo "</div>";
?>