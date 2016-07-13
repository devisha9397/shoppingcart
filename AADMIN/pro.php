<html>
<head>
</head>
<body bgcolor="cyan">
<center>
<center><a href="procre1.php">create</a></center>
<caption><h1>PRODUCT DETAILS</h1></caption>
<br>
<br>
<br>
<table border="2" cellpadding="10" cellspacing="10">

<tr>
<th>product ID</th>
<th>PRODUCT NAME</th>
<th>SOH</th>
<th>MFG</th>
<th>WARRANTY</th>
<th>COLOR</th>
<th>CATEGORY ID</th>

<th>Action</th>
</tr>

<?php 
	$con=mysql_connect('localhost','root','');
	mysql_select_db('shoppingcart',$con);
	$res=mysql_query("select p.*,c.* from pro_tbl as p,cat_tbl as c where c.cat_id=p.fk_cat_id",$con);
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
		echo"<tr>";
		echo"<td>".$row['pro_id']."</td>";
		echo"<td>".$row['pro_name']."</td>";
		echo"<td>".$row['soh']."</td>";
		echo"<td>".$row['mfg']."</td>";
		echo"<td>".$row['warranty']."</td>";
		echo"<td>".$row['color']."</td>";
		echo"<td>".$row['fk_cat_id']."</td>";
		
		echo'<td><a href="pro_update.php?id='.$row["pro_id"].'"><input type="button" value="update"></a></br>
		<br>
		<a href="pro_del.php?id='.$row["pro_id"].'"><input type="button" value="delete"></a>';
	
		echo"</tr>";
	}
	
		

?>

</table>
</center>
</body>
</html>
	