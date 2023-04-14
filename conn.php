<?php

$dbServerName = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'mydbs';
$conn=mysqli_connect($dbServerName,$dbUser,$dbPass,$dbName);

if(@$conn){
}else{
    die('not connectedd');
}
?>