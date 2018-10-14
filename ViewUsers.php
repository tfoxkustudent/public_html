
<html>
<body>


<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t399f699", "eecs448", "t399f699");

/* check connection */
if ($mysqli->connect_error) {

    echo("Connect failed: \n". $mysqli->connect_error);

}

echo "checking if you are there";
$sql = "SELECT user_id FROM Users";
$result = $mysqli->query($sql);


if ($result->num_rows > 0) {

  while($row = $result->fetch_array()) {
    echo "User: " . $row[user_id]. "<br>";
  }
  else {
    echo "0 results;";
  }
}






/* close connection */
$mysqli->close();
?>

</body>
</html>
