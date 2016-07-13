<?php 
SESSION_START();
?>

<!DOCTYPE html>
<html>
<head>
<title>Sign_up</title>
</head>
<body bgcolor="aqua">
<center>
<?php 
	if(isset($_POST["btnin"]))
	{
		$_SESSION["email"]=$_POST["txteid"];
		$pwd=$_POST["txtpass"];
		$conf=$_POST["txtconpas"];
		$eid=$_POST["txteid"];
		$uname=$_POST["txtuname"];
		
		$mobile=$_POST["txtmob"];
		$city=$_POST["city"];
		$gender=$_POST["txtgender"];
		if($pwd==$conf)
		{
			$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
			$res=mysql_query("insert into user_tbl values('$eid','$uname','$pwd','$mobile','$city','$gender')",$con);
		
			if($res==1)
			{
				Header('Location:display.php');
			}
			else
			{
				echo"something went wrong:";
			}
		}
		else
		{
			echo"your password does'nt match confirm password";
		}
		
		
	}

?>
<form action="signup.php" method="post">

<caption><h1><font color=" blue"><u>Sign up</u></font></h1></caption>
<br><hr>
<br>
<table cellpadding="2" cellspacing="4">
<tr>
<td>EMAIL_ID</td>
<td> <input type="email" name="txteid" placeholder="plz enter ur email_id" required />
</tr>
<tr>
<td>USER NAME:
<td><input type="text" name="txtuname" placeholder="Enter user name" required />
</tr>
<tr>
<td>PASSWORD
<td><input type="password" name="txtpass" placeholder="enter password" required />
</tr>
<tr>
<td>CON-PASSWORD
<td><input type="password" name="txtconpas" placeholder="conform ur password" required />
</tr>
<tr>
<td>MOBILE
<td><input type="text" name="txtmob" placeholder="enter mobile" required />
</tr>
<tr>
<td>GENDER
<td><input type="radio"  value="male"name="txtgender" >Male
<input type="radio"  value="female"name="txtgender" >Female
</tr>
<tr>
<td>CITY
<td><select name="city">
<option value="abad">abad</option>
<option checked value="baroda">baroda</option>
<option value="surat">surat</option>
</select>
</tr>
</center>
</table>
<br><br>
<center><input type="submit" name="btnin" value="save" style="font-size:20px;width:10%"></center>

</html>