<!DOCTYPE html>
<html>
<head>
<script src="Scripts/jquery-1.9.1.min.js"></script>
<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/bootstrap.min.js"></script>
</head>
<style>
body {
    background-image: url("images/back2.jpg");
    background-repeat: no-repeat;
	background-size: 200% auto;
}
</style>
<body>
<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ShoppingKart</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="AADMIN/cat.php">Category<span class="sr-only">(current)</span></a></li>
        <li><a href="display.php">User Details</a></li>
        <li><a href="AADMIN/pro1.php">Product</a></li>
      </ul>
            <ul class="nav navbar-nav navbar-right">
        <li><a href="signup4.php">View Main Page</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="user/changepassword.php">Change Password</a></li>
            <li><a href="editprofile1.php">Edit Profile</a></li>
            <li><a href="login1.php">Logout</a></li>
            </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</nav>
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">

  <!-- Single button -->
<center>
<div class="btn-group">
  <a href="signup4.php"><input type="submit" value="User View "class="btn btn-danger "></a>
    
</div>
</center>
  </div>
  </div>
  <div class="col-md-3">
</div>
  </div>
</body>
</html>