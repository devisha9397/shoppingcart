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
<body>

<?php 


	

	if(isset($_POST["btnin"]))
	{
		
		$pwd=$_POST["txtpass"];
		$conf=$_POST["txtconpas"];
		$eid=$_POST["txteid"];
		$uname=$_POST["txtuname"];
		
		$mobile=$_POST["txtmob"];
		$city=$_POST["city"];
		$gender=$_POST["txtgender"];
		if($_POST["captcha_code"]==$_SESSION["captcha_code"])
{
		if($pwd==$conf)
		{
				include 'database.php';
		$obj=new database();
		$res=$obj->signup($email,$name,$pwd,$mobile,$city,$gender,$type);
			echo $res;
			if($res==1)
			{
				Header('Location:display.php');
			}

		
			else
			{
				echo"SOMETHING WENT WRONG";
			}
		}
	
		else
		{
			echo"your password does'nt match confirm password";
		}
}
		else{
			echo"code doesn't match";
		}
	
		
		
		
}




?>

<form action="Signup3.php" method="post">
<!-- Button trigger modal -->
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" name="btn sign" data-target="#myModal">
 CLICK HERE FOR SIGN-UP
</button>
</center>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign in</h4>
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
    <input type="radio" name="txtgender" value="male"> MALE
  </label>

<label class="btn btn-primary">
    <input type="radio" name="txtgender" value="female"  checked> FEMALE
  </label>
<div class="input-group">
  <span class="input-group-addon">
  <input type="text" class="form-control"  name="captcha_code" placeholder="Captcha code" aria-describedby="basic-addon1"></span>
</div>
<img src="captcha.php">


   
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
        <input type="submit" class="btn btn-primary" name="btnin" value="Save changes"></button>
      </div>
    </div>
  </div>
</div>
</body>
</html>