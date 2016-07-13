<?php 

SESSION_START();

?>
<!DOCTYPE html>
<html>
<head>
<script src="Scripts/jquery-1.9.1.min.js"></script>
<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/bootstrap.min.js"></script>
</head>

<?php 
if(isset($_POST["btnlogin"]))
		{
		$email=$_POST["txteid"];
		$pwd=$_POST["txtpwd"];

		 include 'database.php';
	  $obj=new database();
	  $res=$obj->login($email,$pwd);
			$cnt=mysql_num_rows($res);
			if($cnt==1)
			{
				while($row=mysql_fetch_array($res,MYSQL_ASSOC))
				{
					$type=$row["type"];
				}
				if($type=="user" || $type==NULL)
				{
					$_SESSION["email"]=$email;
				
				Header('Location: signup4.php');
				}
				else if($type=="admin")
				{
					Header('Location:pro-display.php');
				}
				else
				{
				echo	"something went wrong";
				}
			}
			else
			{
				echo"wrong";
			}

	}
	
?>


<!--<style>
body{
padding:90px;
}
</style>-->
<body >
<form action="login1.php" method="post">
<div class="row">
<div class="col-md-6">
<div class="container">
<div class="jumbotron">
    
  <h1>Welcome</h1>
  <p>Don't have an ShoppingKart account?</p>
     <p>Sign Up here for free..</p>
 
<a href="signup3.php">
 <input type="button" name="btn sign" class="btn btn-primary btn-lg" data-toggle="modal" value="SignUp" data-target="#myModal"></a>
</div>
</div>
</div>
<div class="col-md-5"> 
        <div class="container-fluid">
		<div class="navbar-header">
		<div class="row">
		<div class="col-md-offset-7">
		<br><br><br>
          <img src="images/Logo3.png" class="img-circle" style="width:290px;height:250px"><br><br>
	     </div>
		 </div>
		 </div>
		 </div>


</div>

<div class="row">
<div class="col-md-6 col-md-offset-3">
<p>If you already have a ShoppingKart account, fill in this form to access it. If you don't have an account yet, you can create one on our sign-up page</p>
  <div class="panel panel-default"> 
  <div class="panel-heading">
   <span> <h3 class="panel-title  glyphicon glyphicon-lock" style="width:100px"><b>Login</b></h3></span>
  </div>
  <div class="panel-body">
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="text" name="txteid" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required / >
  </div>
  <br>
  <div class="input-group">
  <span class="input-group-addon  glyphicon glyphicon-asterisk" id="basic-addon1"></span>
  <input type="password" name="txtpwd"class="form-control " placeholder="Password" aria-describedby="basic-addon1 "required />
  
</div>
<label>
          <input type="checkbox"> Remember me
        </label>
<br>
<div class="col-md-6 col-md-offset-5">
<div class="btn-group" role="group" aria-label="...">
  <input type="submit" name="btnlogin" class="btn btn-info" value="Login">
  </div>
  <div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-danger">Cancel</button>
  </div>
</div>
</div>
<div class="container">
<div class="row">
<center>
<div class="col-md-2 ">

</div>
<div class="col-md-6 ">
</div>
<div class="col-md-4 ">
</div>


</center>
</div>
</div>

</form>
</body>
</html>