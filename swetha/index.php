<?php
$servername="localhost";
$username="root";
$password="";
$dbname="swetha";
$conn=new mysqli($servername,$username,$dbname);
if ($conn->connect_error){
    die(''.$con->connect_error);
}
?>