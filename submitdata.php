<?php
$name=$_POST['name'];
$db="my_testdb";
$host="localhost";
$user="root";
$pass="";
$conn=new mysqli($host, $user, $pass, $db); 
$name=$_POST['name'];
$sql= "insert into user(name) values('$name')";
if($conn->query($sql)===TRUE)
{
	echo 'success';
}
else
{
	echo "Error". $sql. "<br>" .$conn->error; 
	
}
?>