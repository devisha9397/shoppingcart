<!DOCTYPE html>
<html>
<head>
	<link href="../Content/bootstrap.css" rel="stylesheet"/>
	<script src="../Scripts/jquery-1.9.1.min.js"></script>

	<script src="../Scripts/bootstrap.min.js"></script>
</head>
<body>

<a href="cat_create.php">create</a>
<body >
<center>
<caption><h1>CATEGORIES</h1></caption>
</center>
<br>
<br>
<br>
<div class="container">
<div class="row">

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading 	
   <div class="panel-body">
   </div></div>
    </div>
  <table class="table">
    

  </table>  
  	<th>CATEGORIES_ID</th>
	
	<th>CATEGORIES_NAME</th>
 
    
	
 

  <!-- Table -->



  </div>
</div>
</div>
</div>


<?php 
	$con=mysql_connect('localhost','root','');
	mysql_select_db('shoppingcart',$con);
	$res=mysql_query("select * from cat_tbl",$con);
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
		echo"<tr>";
		
		echo"<td>".$row['cat_id']."</td>";
		echo"<td>".$row['cat_name']."</td>";
		
		
		echo"<td>";
		echo '<input type="submit" name="btndel" value="delete">';
					echo'<td><a href="cat_update1.php?id='.$row["cat_id"].'">Update</a>';
		echo"</tr>";
		
	}


?>

</body>
</html>
