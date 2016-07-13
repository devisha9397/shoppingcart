<!DOCTYPE HTML>
<html>
<head></head>
<body bgcolor="pink">
<center>
<form action="procre2.php" method="post">

<table border="1">
<tr>
	<td><input type="text" name="txtpname" placeholder="Enter poduct name" required /></td>
</tr>
<tr>
	<td><input type="text" name="txtprice" placeholder="Enter poduct price" required /></td>
</tr>


<tr>
	<td><input type="text" name="txtpsoh" placeholder="Enter soh" required /></td>
</tr>
<tr>
	<td><input type="text" name="txtpmfg" placeholder="Enter mfg"  /></td>
</tr>
<tr>
	<td><input type="text" name="txtpwarranty" placeholder="Enter Warranty"  /></td>
</tr>
<tr>
<td><select name="txtpcolor">
	<option value="black">Black</option>
	<option value="blue">Blue</option>
	<option value="pink">Pink</option>
	<option value="red">Red</option>
	<option value="silver">Silver</option>
	<option value="golden">Golden</option>
	</select>
</td>
	</tr>
<tr>

<td><select name="txtcatname">
<?php
		$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
		$res=mysql_query("select * from cat_tbl",$con);
		while($row=mysql_fetch_assoc($res))
		{
			echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
		}
?></td>
</tr>

<tr>
		<td><input type="submit" name="btninsert" value="Save" />
</tr>

</table>
</form>
</center>
</body>

</html>
