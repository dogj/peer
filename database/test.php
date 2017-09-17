<?php
include_once 'database_conn.inc.php';


$groupname=$_POST['name'];

$name =$_POST['name'];


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

echo "<form action='question' method='post'>";
echo	"<label><input name='Fruit' type='radio' value='' />bad </label>";
echo	"	<label><input name='Fruit' type='radio' value='' />fine </label>";
echo	"<label><input name='Fruit' type='radio' value='' />good </label>";
echo	"	<label><input name='Fruit' type='radio' value='' />very good </label>";
echo	"</form>";

    array_push($arrM,$row);
  }
//print_r($arrM);
$conn->close();


?>