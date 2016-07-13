<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Update</title>
</head>
<body bgcolor="pink">
<?php 
				 
		$id=$_REQUEST["id"];
		$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
		 $res=mysql_query("select * from cat_tbl where cat_id='$id'");
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
			{
				
				$id=$row["cat_id"];
				$name=$row["cat_name"];
			}
		
		
?>



	
<center>
<form action="update2.php" method="post">
<table >
<caption><h1> <font color="red">Edit</font></h1> </caption>
<tr>
	<td><input type="text" name="txtcatid"  value="<?php echo $id; ?>" required /></td>
</tr>
<tr>
	<td><input type="text" name="txtcatname" value="<?php echo $name; ?>"  required /></td>
</tr>
<tr>
		<td><input type="submit" name="btninsert" value="Save" />
</tr>
</table>
</form>
</center>
</body>
</html>