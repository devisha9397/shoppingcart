<?php 
	
		$id=$_REQUEST["id"];
		$con=mysql_connect('localhost','root','');
	mysql_select_db('shoppingcart',$con);
	$res=mysql_query("delete from pro_tbl where pro_id='$id'");
		if($res==1)
		{
			header('Location:pro.php');
		}
		else
			echo 'error';

?>