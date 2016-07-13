<!DOCTYPE html>
<html>
<head>
<script src="../Scripts/jquery-1.9.1.min.js"></script>
<link href="../Content/bootstrap.css" rel="stylesheet"/>
<script src="../Scripts/bootstrap.min.js"></script>
</head>
<style>
 devi{
    font-family: "Lucida Handwriting";
    font-size: 20px;
    line-height: 20px;
    color:Coral ; 

 
    }
	body { background: lightcyan !important;
font-family: "Lucida Handwriting";
    font-size: 20px;
    line-height: 20px;
color:navy;	}
	
	
	
	</style>
	
<body bgcolor="cyan">
<center>

<div class="container">
<!-- Single button -->

<div class="row">

  <div class="col-md-1">
 <img src="../Logo3.png" class="img-rounded" style="height:150px;width:150px"> 

</div>
</div>
<br>
<nav class="navbar navbar-inverse">
  <div class="containers">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> 	ShoppingKart</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

</ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" name="btnsubmit">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="user/changepassword.php">Want to change password???</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
           <?php
			
		   ?>
            <li><a href="login1.php">Logout</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="editprofile1.php">Edit profile </a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br>
<br>
<div class="col-md-3 col-md-offset-10">
<div class="btn-group">
  <a href="me.php"><input type="submit" value="Create"class="btn btn-warning" ></a>
  </div>
  </div>
  </div>
  
<div class="container">
<div class="table-responsive">
<table border="2" cellpadding="10" cellspacing="10"class="table table-hover">

<tr>
<th>product ID</th>
<th>PRODUCT NAME</th>
<th>image</th>
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
		echo'<td> <img style="height:150px; width:100px;" src="'.$row["pro_img"].'"></td>';
		echo"<td>".$row['soh']."</td>";
		echo"<td>".$row['mfg']."</td>";
		echo"<td>".$row['warranty']."</td>";
		echo"<td>".$row['color']."</td>";
		echo"<td>".$row['fk_cat_id']."</td>";
		
		echo'<td><a href="pro_update.php?id='.$row["pro_id"].'"><input class="btn btn-info" type="submit" value="UPDATE"></a></br>
		<br>
		<a href="pro_del.php?id='.$row["pro_id"].'"><input class="btn btn-danger" type="submit" value="DELETE"></a>';
	
		echo"</tr>";
	}
	
		

?>
</div>
</div>
</div>
</div>
</table>
</center>
</body>
</html>
	</html>