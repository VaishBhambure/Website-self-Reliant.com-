<?php
$servername="localhost";
$username="root";
$password="";
$dbname="databaseform";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
echo("Connection failed:" .$conn->connect_error);
}
$sql="Create table regs(name varchar(20) not null,lname varchar(20) not null,DOB date not null,Stream varchar(10) not null,gender varchar(35) not null,mobile_no varchar(20) not null,email varchar(20) not null,username varchar(30) not null,password varchar(30) not null,confirm_password varchar(30) not null)";
if($conn->query($sql)==TRUE){
echo "table created  successfully";
}
else
{
echo"Error detected:" .$conn->error;
}

$conn->close();
?>