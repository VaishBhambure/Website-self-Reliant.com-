<?php
$servername="localhost";
$username="root";
$password="";
$dbname="databaseform";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
echo("Connection failed:" .$conn->connect_error);
}
$sql="Create table log(name varchar(20) not null, password varchar(30))";
if($conn->query($sql)==TRUE){
echo "table created  successfully";
}
else
{
echo"Error detected:" .$conn->error;
}

$conn->close();
?>