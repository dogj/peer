<?php

$test = array(1,2,3);




?>





<!DOCTYPE html>

<form action = "database/test.php" method="post">
<p>Input 1:<input type ="text" name="name"></p>
<input type="submit" >
</form>



<html>
<head>
<script src = "js/script.js"></script>
</head>

<body>
<button onclick = "reveal()"> 
</button>
<table>
<tr><th>name</th><th>group</th></tr>

<form action="" method="get">
do you like<br /><br />
<label><input name="Fruit" type="radio" value="" />apple </label>
<label><input name="Fruit" type="radio" value="" />peace </label>

</form>
</table>
<?php
include_once 'database_conn.inc.php';
?>

<p id = "hiddenMessage" style="display:none">missing</p>
</body>


</html>