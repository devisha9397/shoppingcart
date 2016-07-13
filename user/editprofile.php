<?php
SESSION_START();

?>

<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
$email=$_SESSION["email"];
$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
			$res=mysql_query("select * from user_tbl where email_id='$email'");
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
		$name=$row["uname"];
		$mobile_no=$row["mobile_no"];
		
		$city=$row["city"];
}

 ?>
<form action="edit.php" method="post">
<input type="text" name="txtname" value="<?php echo $name;?>"/><br>
<input type="text" name="txtmobile" value="<?php echo $mobile_no; ?>"  /><br>
<select name="txtcity">
<option value="abad"<?php if($city=="abad") echo "selected";?> >abad</option>
<option value="surat"<?php if($city=="surat")echo "selected"; ?> >surat</option>
</select>

<br>
<input type="submit" name="btnupdate" value="edit"/>
</form>
</body>
</html>