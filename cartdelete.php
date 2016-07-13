<?php
session_start();
$email=$_SESSION["email"];
$id=$_REQUEST["id"];
require 'database.php';
$obj=new database();
		$res=$obj->getdata ("delete from order_tbl where o_id='$id' AND fk_email_id='$email'");
	if($res==1)
	{
		header('location:cart.php');
	}		
	else
	{
		echo"Something went wrong";
		
	}
?>