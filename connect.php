<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="curdseries";

$conn=mysqli_connect($serverName,$userName,$password,$dbName);

if(!$conn){

    echo "connection Failed".mysqli_connect_error();
}
?>