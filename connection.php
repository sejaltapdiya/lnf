<?php
$severname="localhost";
$username="root";
$password="";
$dbname="lnf";

$conn=mysqli_connect($severname,$username,$password,$dbname);
if(!$conn)
{
    die("Failed to connect".mysqli_connect_error());
}



?>