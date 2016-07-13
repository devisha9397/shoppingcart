	<!DOCTYPE HTML>
<html>
<head></head>
<body bgcolor="pink">

<?php 
	
		$id=$_REQUEST["id"];
		$con=mysql_connect('localhost','root','');
	mysql_select_db('shoppingcart',$con);
	$res=mysql_query ("select * from pro_tbl where pro_id='$id'",$con);
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
			{
				
				$id=$row["pro_id"];
				$name=$row["pro_name"];
				$price=$row["pro_price"];
				
				$soh=$row["pro_soh"];
				$mfg=$row["pro_mfg"];
				$war=$row["pro_warranty"];
				$clr=$row["pro_color"];
				$catid=$row["fk_cat_id"];
			}

?>
<center>
<form action="pt_update1.php" method="post">
<table border="1">
<tr>
	<td><input type="text" name="txtpname" value="<?php echo $name;?>" readonly /></td>
</tr>
<tr>
	<td><input type="text" name="txtprice" value="<?php echo $price;?>" readonly /></td>
</tr>


<tr>
	<td><input type="text" name="txtpsoh" value="<?php echo $soh;?>" readonly /></td>
</tr>
<tr>
	<td><input type="text" name="txtpmfg"  value="<?php echo $mfg;?>"readonly /></td>
</tr>
<tr>
	<td><input type="text" name="txtpwarranty" value="<?php echo $war;?>" readonly /></td>
</tr>
<tr>
<td><select name="txtpcolor" >
	<option value="black" <?php if($clr=='black') echo "selected"; ?> >Black</option>
	<option value="blue" <?php if($clr=='blue') echo "selected"; ?>>Blue</option>
	<option value="pink" <?php if($clr=='pink') echo "selected"; ?>>Pink</option>
	<option value="red" <?php if($clr=='red') echo "selected"; ?>>Red</option>
	<option value="silver" <?php if($clr=='silver') echo "selected"; ?>>Silver</option>
	<option value="golden" <?php if($clr=='golden') echo "selected"; ?>>Golden</option>
	</select>
</td>
	</tr>
<tr>

<td><select name="txtcatname">
<?php
	
	$con=mysql_connect('localhost','root','');
	mysql_select_db('shoppingcart',$con);
	$res=mysql_query("select * from cat_tbl ");
		while($row=mysql_fetch_assoc($res))
		{
			
		}
?></td>
</tr>

<tr>
		<td><input type="submit" name="btndelete" value="Delete" />
</tr>

</table>
</form>
</center>
</body>

</html>
