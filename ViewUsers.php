
<?php
$con=mysqli_connect("mysql.eecs.ku.edu","t399f699","eecs448","t399f699");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Users");

echo "<table border='1'>
<tr>
<th>User ID</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['user_id'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
