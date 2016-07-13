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
			
$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
		
			
			
			$res=mysql_query("select * from user_tbl where email_id='$email' and password='$pwd'",$con);
			$cnt=mysql_num_rows($res);
			if($cnt==1)
			{
				$_SESSION["email"]=$email;
				Header('Location:user/viewprofile.php');
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
 
<a href="abc.php">
 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="input-group">
  <span class="input-group-addon"><input type="text" class="form-control" name="txteid" placeholder="User email ID" aria-describedby="basic-addon1"></span>
</div>
<div class="input-group">
  <span  class="input-group-addon">
  <input type="text" class="form-control"  name="txtuname" placeholder="Username" aria-describedby="basic-addon1"></span>
</div><div class="input-group">
  <span class="input-group-addon">
  <input type="password" class="form-control"  name="txtpass"  placeholder="Password" aria-describedby="basic-addon1"></span>
</div>
<div class="input-group">
  <span class="input-group-addon">
  <input type="password" class="form-control" name="txtconpas" placeholder="Confirm password" aria-describedby="basic-addon1"></span>
</div>

<div class="input-group">
  <span class="input-group-addon">
  <input type="text" class="form-control"  name="txtmob" placeholder="Mobile no" aria-describedby="basic-addon1"></span>
</div>

<label class="btn btn-primary">
    <input type="radio" name="txtgender" id="option2" autocomplete="off"> MALE
  </label>

<label class="btn btn-primary">
    <input type="radio" name="txtgender" id="option2" autocomplete="on" checked> FEMALE
  </label>
  <br><br>
  <select name="city">
<option value="abad">abad</option>
<option checked value="baroda">baroda</option>
<option value="surat">surat</option>
</select>

      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="btnin">Save changes</button>
      </div>
    </div>
  </div>
</div>
  
</button>
 </div>
 </div>

 </div>
<div class="col-md-6"> 
        <div class="container-fluid">
		<div class="navbar-header">
		<div class="row">
		<div class="col-md-1 col-offset-5">
		<br><br><br>
          <img src="LOGO.jpeg" class="img-circle" style="width:400px;height:250px"><br><br>
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
   <span> <h3 class="panel-title  glyphicon glyphicon-flag" style="width:100px"><b>Login</b></h3></span>
  </div>
  <div class="panel-body">
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="text" name="txteid" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
  </div>
  <br>
  <div class="input-group">
  <span class="input-group-addon  glyphicon glyphicon-asterisk" id="basic-addon1"></span>
  <input type="password" name="txtpwd"class="form-control " placeholder="Password" aria-describedby="basic-addon1">
  
</div>
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