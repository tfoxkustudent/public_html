<?php

$answer1 = $_POST["username"];
$answer2 = $_POST["password"];
$answer3 = $_POST["item1"];
$answer4 = $_POST["item2"];
$answer5 = $_POST["item3"];
$answer5 = $_POST["shipping"];
$total = 0;


echo "<strong>";
echo "Welcome Back ";
echo $answer1;
echo "</strong>";
echo "<br>";
echo "Your password is: ";
echo $answer2;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<table border =\"1\" style='border-collapse: collapse'>";
echo "<tr>";
echo "<td>receipt</td>";
echo "</tr>";
	echo "<tr>";
  echo "<td></td>";
  echo "<td>Quantity</td>";
  echo "<td>Cost Per Item</td>";
  echo "<td>Subtotal</td>";
  echo "</tr>";
		echo "</table>";



?>
