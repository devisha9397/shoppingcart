<?php
session_start();

$email=$_SESSION["email"];
$id=$_REQUEST["id"];
require 'database.php';
		$obj=new database();
		addcart1($id);
while ($row=mysql_fetch_assoc($res))
{
	$price=$row["price"];
}
	$amt=1*$price;
	$date=date("d/m/yy");

	$obj=new database();
	addcart2($amt,$date,$id,$email)
	
	if($res==1)
	{
		header('location:signup4.php');
		
	}
	else
	{
		echo"something went wrong";
		
	}
?>