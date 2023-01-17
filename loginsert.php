<?php
$servername="localhost";
$username="root";
$password="";
$dbname="databaseform";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
echo("Connection failed:" .$conn->connect_error);
}

$Username=$_REQUEST['id'];
$Password=$_REQUEST['p1'];


$sql="insert into regs (,username,password) values('$Username','$Password')";
if($conn->query($sql)==TRUE){
echo "insertion  successfully";
}
else
{
echo"Error detected:" .$conn->error;
}

$conn->close();
?>