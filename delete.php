<?php
include 'db.php';

$id=$_GET['deleteid'];

$sql="DELETE FROM `student` WHERE `id`= '$id' ";
$res=mysqli_query($conn,$sql);

if($res){
    header("location:view.php");
}

?>