<?php

$hum = $_GET['hum'];
$temp = $_GET['temp'];
$telur = $_GET['telur'];

$conn = mysqli_connect("localhost","root","12345678","db_ersa");

$data = mysqli_query($conn,"UPDATE `datasensor` SET `temp` = '$temp',`hum` = '$hum', `telur` = '$telur' WHERE `datasensor`.`id` = 1;");

echo "ss"; 


?>
