<?php 

SESSION_START();

?>
<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
</head>
<body bgcolor="sky blue">
<form action="login.php" method="post">
<?php 
if(isset($_POST["btnlogin"]))
		{
		$email=$_POST["txteid"];
		$pwd=$_POST["txtpwd"];
			
$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
		
			
			
			$res=mysql_query("select * from user_tbl where email_id='$email' and password='$pwd'",$con);
			$cnt=mysql_num_rows($res);
			if($cnt==1)
			{
				$_SESSION["email"]=$email;
				Header('Location:user/viewprofile.php');
			}
			else
			{
				echo"wrong";
			}

	}
	
?>


<center>
<table>
<caption><h1><b>LOGIN</b></h1></caption>
<br>
<br>

<tr>
<td>EMAIL &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="email"name="txteid" placeholder="enter ur email id" required/></td>
</tr>
<br>
<br>
<br>
<tr>
<td>PASSWORD <input type="password"name="txtpwd" placeholder="enter password" required/></td>
</tr>
</br>
</br>
</br>

<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><center><input type="submit" name="btnlogin" value="LOGIN"></center></td>
</tr>
</table>
</center>
</form>
</html>