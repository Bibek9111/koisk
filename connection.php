<?php
$dbhost='localhost';
$dbuser= "root";
$dbpassword= "";
$dbname="info";


$conn =new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

if (!$conn){

	die("Error in connection".mysql_error());
}
?>
