<?php
include_once 'database_conn.inc.php';


$groupname=2;

$name ="xin";


$sql = "SELECT * FROM grouptest WHERE groupname ='$groupname'";

$result = $conn->query($sql) or die (mysqli_connect_error());  

echo"<table>";
echo"<tr><th>name</th><th>group</th></tr>";
$arrM = array();
while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><td>";
	echo "how do you think about ";
	echo $row['name'];
	echo "</tr><td>";



    array_push($arrM,$row);
  }
//print_r($arrM);
$conn->close();


?>