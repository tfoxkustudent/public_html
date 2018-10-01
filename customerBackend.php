<?php

$answer1 = $_POST["username"];
$answer2 = $_POST["password"];
$answer3 = $_POST["item1"];
$answer4 = $_POST["item2"];
$answer5 = $_POST["item3"];
$answer6 = $_POST["shipping"];
$total = 0;
$bananasubtotal = 0;
$applesubtotal = 0;
$orangesubtotal = 0;
$shippingsubtotal = 0;

echo "<html>";
echo "<head>";
echo "<link type='text/css' rel='stylesheet' href='style.css'></link>";
echo "</head>";
echo "<body>";

echo "<h1>";
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
echo "</h1>";
echo "<form>";
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
		$bananasubtotal = 3*$answer3;
    echo "<td>$$bananasubtotal.00</td>";
    echo "</tr>";
      echo "<tr>";
      echo "<td>Apples</td>";
      echo "<td>$answer4</td>";
      echo "<td>$2.00</td>";
			$applesubtotal = 2*$answer4;
      echo "<td>$$applesubtotal.00</td>";
      echo "</tr>";
        echo "<tr>";
        echo "<td>Oranges</td>";
        echo "<td>$answer5</td>";
				$orangesubtotal = 1*$answer5;
        echo "<td>$1.00</td>";
        echo "<td>$$orangesubtotal.00</td>";
        echo "</tr>";
          echo "<tr>";
          echo "<td>Shipping</td>";
          echo "<td>$answer6</td>";
          echo "<td></td>";
					$shippingsubtotal = $answer6;
          echo "<td>$$shippingsubtotal.00</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>Total Cost</td>";
          echo "<td></td>";
          echo "<td></td>";
					$total = ($bananasubtotal+$applesubtotal+$orangesubtotal+$shippingsubtotal);
          echo "<td>$$total.00</td>";
          echo "</tr>";




    echo "</table>";
echo "</form>";
echo "</body>";
echo "</html>";


?>
