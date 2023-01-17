<?php
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password);
if($conn->connect_error){
echo("Connection failed:" .$conn->connect_error);
}
$sql="Create database databaseform";
if($conn->query($sql)==TRUE){
echo "db created  successfully";
}
else
{
echo"Error detected:" .$conn->error;
}

$conn->close();
?>