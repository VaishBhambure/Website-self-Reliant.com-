<?php
$servername="localhost";
$username="root";
$password="";
$dbname="databaseform";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
echo("Connection failed:" .$conn->connect_error);
}
$Name=$_REQUEST['name'];
$Lname=$_REQUEST['lname'];
$DOB=$_REQUEST['dob'];
$Stream=$_REQUEST['str'];
$Gender=$_REQUEST['rd1'];
$Mobno=$_REQUEST['mobno'];
$Email=$_REQUEST['email'];
$Username=$_REQUEST['id'];
$Password=$_REQUEST['p1'];
$Confirm_password=$_REQUEST['p2'];

$sql="insert into regs (name,lname,DOB,Stream,gender,Mobile_no,Email,username,password,confirm_password) values('$Name','$Lname','$DOB','$Stream','$Gender','$Mobno','$Email','$Username','$Password','$Confirm_password')";
if($conn->query($sql)==TRUE){
echo "insertion  successfully";
}
else
{
echo"Error detected:" .$conn->error;
}

$conn->close();
?>