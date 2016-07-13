<!DOCTYPE html>
<html>
<head></head>
<body bgcolor="lightsalmon">
<center>
<h1>DISPLAY</h1>
<table border="1" cellspacing="10" cellpadding="5" >
<tr>
<th>email_id</th>
<th>user name</th>
<th>mobile_no</th>
<th>city</th>
<th>gender</th>
<th>TYPE</th>


</tr>
<?php 

	$con=mysql_connect('devisha.db.9462939.hostedresource.com','devisha','Demo8@1212');
	     mysql_select_db('devisha',$con);
	$res=mysql_query("select * from user_tbl",$con);
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
</center>
</body>
</html>