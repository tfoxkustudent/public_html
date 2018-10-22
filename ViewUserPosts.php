<?php
$con=mysqli_connect("mysql.eecs.ku.edu","t399f699","eecs448","t399f699");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$userid = $con->real_escape_string($_REQUEST['userid']);
$query = "SELECT `content` FROM `Posts` WHERE `author_id`=`$userid` ";
    $result = mysql_query($query);





echo "<table border='1'>
<tr>
<th>User ID</th>
<th>Post</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['author_id'] . "</td>";
echo "<td>" . $row['content'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);

 ?>
