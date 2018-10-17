<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t399f699", "eecs448", "t399f699");

/* check connection */
if ($mysqli == false) {

    echo("Connect failed: \n". $mysqli->connect_error);

}

$existing_user = $mysqli->real_escape_string($_REQUEST['user']);
$content = $mysqli->real_escape_string($_REQUEST['content']);
$query = "SELECT * FROM `Users` WHERE `user_id`=`$existing_user` ";
    $result = mysql_query($query);

if (!mysql_num_rows($result)){
    $sql = "INSERT INTO Posts (author_id, content)
    VALUES ('$existing_user','$content')";

    if ($mysqli->query($sql) == true) {

            //Check if entry was entered into DB
            echo "New record created successfully";
          } else {
            echo "Error: " . $mysqli . "<br>" . $mysqli->error;
          }
        }
        else {
          echo "ID doesn't exist... go to create user page";
        }



/* close connection */
$mysqli->close();
?>
