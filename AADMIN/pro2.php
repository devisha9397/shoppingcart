<!DOCTTYPE html>
<html>
<head>
<center><a href="procre1.php">create</a></center>
</head>
<body bgcolor="pink">
<center>

<table border="1">
<tr>
	<th>Product_id</th>
	<th>Product_name</th>

	<th>Product_soh</th>
	<th>Product_price</th>
<th>Product_mfg</th>
	
	
	<th>Product_warranty</th>
	<th>Product_color</th>
	<th>Catagory_name</th>
	<th>Action</th>
</tr>
<?php

		
		$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
			$res=mysql_query ("select p.*,c.* from pro_tbl as p,cat_tbl as c where c.cat_id=p.fk_cat_id",$con);
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
		{
			echo '<tr>';
			echo '<td>'.$row["pro_id"].'</td>';
			echo '<td>'.$row['pro_name'].'</td>';
			
			echo '<td>'.$row['soh'].'</td>';
			echo '<td>'.$row['price'].'</td>';
			echo '<td>'.$row['mfg'].'</td>';
			
			echo '<td>'.$row['warranty'].'</td>';
			echo '<td>'.$row['color'].'</td>';
			echo '<td>'.$row['fk_cat_id'].'</td>';
			echo'<td><a href="pt_update.php?id='.$row["pro_id"].'">Update</a>';
			echo'<a href="pro_del.php?id='.$row["pro_id"].'"><input type="button" value="delete"/></a>';
			echo '</td>';
			echo "</tr>";
			}

?>
</table>
</center>
</body>
</html>