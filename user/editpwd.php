<?php 
SESSION_START();




	$oldpwd=$_SESSION["oldpwd"];
	$odpwd=$_POST["txtold"];
	if($oldpwd==$odpwd)
	{
		$pwd=$_POST["txtnew"];
		$repwd=$_POST["txtcon"];
		$email=$_SESSION["email"];
		
		if($pwd==$repwd)
		{
			$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
			$res=mysql_query("update user_tbl set password='$pwd' where email_id='$email' ",$con);
			
			
			
			if($res==1)
			{
				
				Header('Location:viewprofile.php');
			}
			else
			{
				echo"something went wrong";
			}
		}
		else{
			echo"wrong password";
		}
	}




?>