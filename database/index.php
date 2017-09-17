<?php

$test = array(1,2,3);




?>





<!DOCTYPE html>

<html>
<head>
<script src = "js/script.js"></script>
</head>

<body>
<button onclick = "reveal()"> 
<?php
$test = array("eric","xin","michael");

foreach ($test as $key => $value) {  
    echo "how do you think about " .$value . "<br>";  
}  

echo"<table>";
echo"<tr><th>name</th><th>group</th></tr>";

print_r($arrM);
?>

</button>
<p id = "hiddenMessage" style="display:none">missing</p>
</body>


</html>