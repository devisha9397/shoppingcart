<!DOCTYPE HTML>
<html>
<head></head>
<body bgcolor="pink">
<center>
<?php

		if(isset($_POST["btninsert"]))
{
	$name=$_POST["txtcatname"];
	
	$email=$_SESSION["email"];
		$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
		 $res=mysql_query("insert into cat_tbl values('NULL','$name')");
		
	
	if($res==1)
	{
		Header("Location:cat.php");
	}
	else
	{
	echo "Something Went Wrong";
	}
}


?>
<form action="cat_create.php" method="post">
<table border="1">
<tr>
	<td><input type="text" name="txtcatname" placeholder="Enter category name" required /></td>
</tr>
<tr>
		<td><input type="submit" name="btninsert" value="Save" />
</tr>

</table>
</form>
</center>
</body>

</html>
