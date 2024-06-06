<?php
include('connect.php');

$id=$_GET['deleteId'];


$sql="DELETE FROM seriescurd WHERE id=$id";
$result=mysqli_query($conn,$sql);

if ($result){
    header('location:read.php');
}
else{
   die("could not delete data".mysqli_error($conn)); 
}

?>