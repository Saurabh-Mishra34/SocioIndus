<?php

$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];
require "welc.php";

$q="insert into prologin(username,password) values('$uname','$pass')";
$x=mysqli_query($c,$q);
sleep(3);
header("Location: Home.html");
?>
