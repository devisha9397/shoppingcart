<?php

SESSION_START();
?>

<?php 
if(isset($_POST["btnupdate"]))
{
		$uname=$_POST["txtname"];
		$mobile=$_POST["txtmobile"];
		$city=$_POST["txtcity"];
		$email=$_SESSION["email"];
			$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
			$res=mysql_query("update user_tbl set uname='$uname',mobile_no='$mobile',city='$city' where email_id='$email'",$con);

if($res==1)
			{
				
				Header('Location:../viewprofile.php');
			}
			else
			{
				echo"something went wrong";
			}
}
?>