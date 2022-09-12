<?php
$server="localhost";
$username="root";
$password="";
$database="manav";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    echo "database Not found";
}
?>