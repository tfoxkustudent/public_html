<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t399f699", "eecs448", "t399f699");

/* check connection */
if ($mysqli == false) {

    echo("Connect failed: \n". $mysqli->connect_error);

}

$existing_user = $mysqli->real_escape_string($_REQUEST['user']);
$content = $mysqli->real_escape_string($_REQUEST['content']);


$sql = "INSERT INTO Posts (author_id, content)
VALUES ('$existing_user','$content')";

if ($mysqli->query($sql) == true) {

      //Check if entry was entered into DB
      echo "New record created successfully";
    } else {
      echo "Error: " . $mysqli . "<br>" . $mysqli->error;
    }



/* close connection */
$mysqli->close();
?>
