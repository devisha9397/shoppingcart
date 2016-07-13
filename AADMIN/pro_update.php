<!DOCTYPE HTML>
<html>
<head></head>
<body bgcolor="pink">

<?php 
	
		$id=$_REQUEST["id"];
		
		$con=mysql_connect('localhost','root','');
	mysql_select_db('shoppingcart',$con);
	$res=mysql_query("select * from pro_tbl where pro_id='$id'");
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
			{
				
				$id=$row["pro_id"];
				$name=$row["pro_name"];
				$price=$row["price"];
				$photo=$row["pro_img"];
			$soh=$row["soh"];
				$mfg=$row["mfg"];
				$war=$row["warranty"];
				$clr=$row["color"];
				$catid=$row["fk_cat_id"];
			}

?>
<center>
<form action="pro_update2.php?photo=<?php echo $photo; ?>" enctype="multipart/form-data" method="post">
<table border="1">
<tr>
	<td><input type="text" name="txtpid" value="<?php echo $id;?>" required /></td>
</tr>

<tr>
	<td><input type="text" name="txtpname" value="<?php echo $name;?>" required /></td>
</tr>
<tr>
	<td><input type="text" name="txtprice" value="<?php echo $price;?>" required /></td>
</tr>


<tr>
	<td><input type="text" name="txtpsoh" value="<?php echo $soh;?>" required /></td>
</tr>
<tr>
	<td><input type="text" name="txtpmfg"  value="<?php echo $mfg;?>" /></td>
</tr>
<tr>
	<td><input type="text" name="txtpwarranty" value="<?php echo $war;?>" /></td>
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
<td><img src="<?php echo $photo; ?>" height=70px width=70px>
<input type="file" name="txtphoto">
</tr>

<td><select name="txtcatname">
<?php
	
			$con=mysql_connect('localhost','root','');
	mysql_select_db('shoppingcart',$con);
	$res=mysql_query("select * from cat_tbl ",$con);
		while($row=mysql_fetch_assoc($res))
		{
			if($catid=$row['cat_id'])
			{
					$selected='selected';
			}
			else
			{
				$selected='';
			}
		
?>
<option <?php echo $selected; ?> value="<?php echo $row['cat_id'] ?>"><?php echo $row["cat_name"] ?></option>
		<?php } ?>
		</select>
		

</td>
</tr>

<tr>
		<td><input type="submit" name="btnupdate" value="Save" />
</tr>

</table>
</form>
</center>
</body>

</html>
