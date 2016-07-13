<?php
 SESSION_START();

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

<center>
<h1>PROFILE</h1>
<table border="1">
<tr>
<th>email_id</th>
<th>user name</th>
<th>mobile_no</th>
<th>city</th>
<th>gender</th>
</tr>
<?php 
	$email=$_SESSION["email"];
	$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
			$res=mysql_query("select * from user_tbl where email_id='$email' ",$con);
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
			echo "<tr>";
			echo "<td>".$row["email_id"]."</td>";
			echo "<td>".$row["uname"]."</td>";
			echo "<td>".$row["mobile_no"]."</td>";
			echo "<td>".$row["city"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			
			echo "<td>";
			
			echo"</tr>";
	}
	
?>


</table>
<form action="editprofile.php" method="post">
<table>
<tr>
	<td><input type="submit" name="btnedit" value="edit">
</tr>

</table>
</center>
<a href="pass1.php">change password</a>
</body>
</html>