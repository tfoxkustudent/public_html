<?php
#error_reporting(E_ALL);
#ini_set("display_errors", 1);
$con=mysqli_connect("mysql.eecs.ku.edu","t399f699","eecs448","t399f699");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$post_delete = $con->real_escape_string($_REQUEST['postid']);




$query = "DELETE FROM Posts WHERE post_id= '{$post_delete}'";
$result = mysql_query($query);

if ($con->query($query) == true) {

      //Check if entry was entered into DB
      echo "post deleted successfully";
    } else {
      echo "Error: " . $con . "<br>" . $con->error;
    }

mysqli_close($con);

 ?>
