<?php 
SESSION_START();
?>
<!doctype html>
 <head>
 <script src="../Scripts/jquery-1.9.1.min.js"></script>
<link href="../Content/bootstrap.css" rel="stylesheet"/>
<script src="../Scripts/bootstrap.min.js"></script>

 </head><form action="editpwd.php" method="post">
 <?php 
	$email=$_SESSION["email"];
	$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
			$res=mysql_query("select * from user_tbl where email_id='$email'");
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	
	{
		$oldpwd=$row['password'];
		$_SESSION["oldpwd"]=$oldpwd;
	}


?>
<body>

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header">
  <h1>Want to change password...?? <br><small></small></h1>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >ShoppingKart</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../signup4.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home </a></li>
        	<?php 
				$con=mysql_connect('localhost','root','');
		 mysql_select_db('shoppingcart',$con);
		$res=mysql_query("select * from user_tbl")
		
			?>
            
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a></span></a>
          <ul class="dropdown-menu">
          
            <li><a href="login1.php">Logout</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="editprofile1.php">Edit profile </a></li>
          </ul>
        </li>
        <a href="../cart1.php"><button type="button" class="btn btn-default btn-lg" style="color:coral">
  <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 
</button></a>
 <a href="../cart.php">
<button type="button" class="btn btn-default btn-lg"style="color:blue">
  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
</button></a>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
</div>
<div class="panel panel-info">
  <div class="panel-heading">Change Password..</div>
  </br>
  <div class="panel-body">
    
  
<div class="col-md-6 col-md-offset-5">
<div class="input-group input-group-md">
 Password: <input type="text" class="form-control"name="txtold" placeholder="Enter Password" aria-describedby="sizing-addon1">
  </div>
  <br>
  <div class="input-group input-group-md">
 NEW Password: <input type="text" class="form-control" name="txtnew"placeholder="Enter New Password" aria-describedby="sizing-addon1">
  </div>
  <br>
  <div class="input-group input-group-md">
 Confirm Password: <input type="text" class="form-control" name="txtcon" placeholder="Confirm Password" aria-describedby="sizing-addon1">
  </div>
  <br>
  <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="btn-group">
  <input type="submit" class="btn btn-info "name="btndone" style="height:50px; width:200px" style="color:black;" value="DONE">
  </div>
  
  </div>
  </div>
</div>
</div>
</div>
</body>
</form>
 </html>