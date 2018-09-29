<?php

$answer1 = $_POST["username"];
$answer2 = $_POST["password"];
$answer3 = $_POST["item1"];
$answer4 = $_POST["item2"];
$answer5 = $_POST["item3"];
$answer6 = $_POST["shipping"];
$total = 0;
$subtotoal = 0;


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
    echo "<tr>";
    echo "<td>Bananas</td>";
    echo "<td>$answer3</td>";
    echo "<td>$3.00</td>";
    echo "<td>$subtotal</td>";
    echo "</tr>";
      echo "<tr>";
      echo "<td>Apples</td>";
      echo "<td>$answer4</td>";
      echo "<td>$2.00</td>";
      echo "<td>$subtotal</td>";
      echo "</tr>";
        echo "<tr>";
        echo "<td>Oranges</td>";
        echo "<td>$answer5</td>";
        echo "<td>$1.00</td>";
        echo "<td>$subtotal</td>";
        echo "</tr>";
          echo "<tr>";
          echo "<td>Shipping</td>";
          echo "<td>$answer6</td>";
          echo "<td></td>";
          echo "<td>$subtotal</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>Total Cost</td>";
          echo "<td></td>";
          echo "<td></td>";
          echo "<td>$total</td>";
          echo "</tr>";




    echo "</table>";



?>
