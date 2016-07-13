
<?php
session_start();

$email=$_SESSION["email"];
$id=$_REQUEST["id"];
require 'database.php';
		$obj=new database();
		$res=$obj->getdata ("select * from pro_tbl where pro_id='$id'");
while ($row=mysql_fetch_assoc($res))
{
	$price=$row["price"];
}
	$amt=1*$price;
	$flag='wishlist';
	$date=date("d/m/yy");
	
$con=mysql_connect('localhost','root','');
	mysql_select_db('shoppingcart',$con);
	$res=mysql_query("insert into order_tbl values(NULL,'$amt','$date','$id','$email','1','$flag')",$con);
	
	if($res==1)
	{
		header('location:signup4.php');
		
	}
	else
	{
		echo"something went wrong";
		
	}
?>