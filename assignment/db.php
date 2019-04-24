<?php
//$msg = (isset($_GET['msg'])&&$_GET['msg']== 1?'1':'0');
$hostname = "localhost";
$username = "root";
$password = "";
$database = "assign1";
$con = mysqli_connect("$hostname","$username","$password","$database") or die(mysqli_error());
?>
