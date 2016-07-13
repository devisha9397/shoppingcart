<?php 

SESSION_START();
$email=$_SESSION["email"];
/*if($_SESSION["email"]==NULL)
{
		header('location:login1.php');
}
else
{*/


?>
	 <?php 

  
 include 'database.php';

                $obj=new database();
                $res=$obj->view($email);
                
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
		$name=$row["uname"];
		echo $name;
		$uid=$row["email"];
		}
 
  
  ?>
<?php
if(isset($_POST["btnsv"]))
{
	
	$rno=$_POST["txtno"];
	$name=$_POST["txtname"];
	$city=$_POST["ct"];
	$mobile_no=$_POST["txtmo"];
	$gender=$_POST["txt"];
	$obj=new database();
            $res=$obj->view1($rno);


		
}		

?>
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
	background-size: 250% auto;	
}
</style>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="row">
<div class="page-header" style="color:greenyellow">
<div class="col-md-1">
<img src="images/Logo3.png"style="border-image-outset: inherit;height:125px;width:125px">
</div>
<br>
<center>
  <h1>......Shopper's Point...... <br><small style="color:greenyellow">we understand ur needs
  </small></h1>
  </center>
</div>
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
      <a class="navbar-brand" href="#"> ShoppingKart</a>
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
        <li><a href="user/pass1.php">Want to change password???</a></li>
		 <!-- Single button -->
		 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
           <?php
			
		   ?>
            <li><a href="login1.php">Logout</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="editprofile1.php">Edit profile </a></li>
          </ul>
		 <li></li>
		 <a href="cart1.php"><button type="button" class="btn btn-default btn-lg" style="color:coral">
  <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 
</button></a>
 <a href="cart.php">
<button type="button" class="btn btn-default btn-lg"style="color:blue">
  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
</button></a>

        
      </ul>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="list-group">

  <a href="#" class="list-group-item active">
    Categories
  
  <?php 

$obj=new database();
            $res=$obj->view2('select count(p.pro_id)"cnt",c.cat_id,c.cat_name,p.fk_cat_id from cat_tbl as c,pro_tbl as p where c.cat_id=p.fk_cat_id group by(c.cat_name)',$con);
				
	
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{	
		echo '<a href="cloths.php?id='.$row["cat_id"].'" class="list-group-item">'.$row["cat_name"].'<span class="badge">'.$row["cnt"].'</span></a>';
	
		}
	?>

  
  </a>
  
 
  
  <br>
  <br>
  <br>
</div>	
<div class="btn-group">
  <input type="submit" class="btn btn-danger " value="Contact Us" style="height:50px;width:255px">
  </div>
  <br>
  <br>
  <br>
  <div class="btn-group">
  <input type="submit" class="btn btn-danger " value="About Us" style="height:50px;width:255px">
  </div>

  
  
</div>
<br>
<div class="col-md-9">


<marquee scrollamount="15" behavior="alternate">
		<img src="images/discount.jpg" style="width:650px; height:300px;" >
			<img src="images/ethnic-wear.jpg" style="width:650px; height:300px;" >
    
      <img src="images/discount4.jpg" style="width:650px; height:300px;" >
      <img src="images/1466147460431.jpg" style="width:650px; height:300px;" >
    
</marquee>
<br><br><br>

     <div class="row">
  <div class="col-sm-6 col-md-4">
  
    <div class="thumbnail">
     <div class="caption">
	<img src="images/bedsheet.png" style="height:250px;" class="img-responsive" class="img-thumbnail" >
	<h3>Bedsheet</h3>
	<p> Rs 500 </p>
    <p><a href="#" class="btn btn-info" role="button">Buy</a> <a href="addcart1.php?id='.$row["pro_id"].'" class="btn btn-default" role="button">Add to cart</a>&nbsp;&nbsp;<a href="wishlist.php"><button type="button" class="btn btn-default" aria-label="Left Align" style="color: red;"></a>
  <span class="glyphicon glyphicon-heart" ></span>
</button></p>
    
	</div>
    
   </div>   



    </div>
	<div class="col-sm-6 col-md-4">
  
 <div class="thumbnail">
   <div class="caption">
	<img src="images/wedges.jpg" style="height:250px;" class="img-responsive" class="img-thumbnail" >
	<h3>Wedges</h3>
	<p> Rs 700</p>
    <p><a href="#" class="btn btn-info" role="button">Buy</a> <a href="addcart1.php?id='.$row["pro_id"].'" class="btn btn-default" role="button">Add to cart</a>&nbsp;&nbsp;<button type="button" class="btn btn-default" aria-label="Left Align" style="color: red;">
  <span class="glyphicon glyphicon-heart" ></span>
</button></p>
    
	</div>
    
   </div>   
     
   </div>   
   
	
	<div class="col-sm-6 col-md-4">
   <div class="thumbnail">
    <div class="caption">
	<img src="images/mobile.png" style="height:250px;" class="img-responsive" class="img-thumbnail" >
	<h3>LUMIA 540</h3>
	<p> Rs 9000 </p>
    <p><a href="#" class="btn btn-info" role="button">Buy</a> <a href="addcart1.php?id='.$row["pro_id"].'" class="btn btn-default" role="button">Add to cart</a>&nbsp;&nbsp;<button type="button" class="btn btn-default" aria-label="Left Align" style="color: red;">
  <span class="glyphicon glyphicon-heart" ></span>
</button></p>
    
	</div>
    
   </div>   
    </div>
</div>
<div class="row">
<div class="col-md-4 col-sm-6">
<div class="thumbnail">
     <div class="caption">
	<img src="images/denimsss.jpg" style="height:250px;" class="img-responsive" class="img-thumbnail" >
	<h3>Denims</h3>
	<p> Rs 1000 </p>
    <p><a href="#" class="btn btn-info" role="button">Buy</a> <a href="addcart1.php?id='.$row["pro_id"].'" class="btn btn-default" role="button">Add to cart</a>&nbsp;&nbsp;<button type="button" class="btn btn-default" aria-label="Left Align" style="color: red;">
  <span class="glyphicon glyphicon-heart" ></span>
</button></p>
    
	</div>
    
   </div>   
 </div>
	<div class="col-sm-6 col-md-4">
  
 <div class="thumbnail">
   <div class="caption">
	<img src="images/neck.jpg" style="height:250px;" class="img-responsive" class="img-thumbnail" >
	<h3>Sanitary</h3>
	<p> Rs 300</p>
    <p><a href="#" class="btn btn-info" role="button">Buy</a> <a href="addcart1.php?id='.$row["pro_id"].'" class="btn btn-default" role="button">Add to cart</a>&nbsp;&nbsp;<button type="button" class="btn btn-default" aria-label="Left Align" style="color: red;">
  <span class="glyphicon glyphicon-heart" ></span>
</button></p>
    
	</div>
    
   </div>   
     
   </div>   
   
	
	<div class="col-sm-6 col-md-4">
   <div class="thumbnail">
    <div class="caption">
	<img src="images/pasta.jpg" style="height:250px;" class="img-responsive" class="img-thumbnail" >
	<h3>LUMIA 540</h3>
	<p> Rs 9000 </p>
    <p><a href="#" class="btn btn-info" role="button">Buy</a> <a href="addcart1.php?id='.$row["pro_id"].'" class="btn btn-default" role="button">Add to cart</a>&nbsp;&nbsp;<button type="button" class="btn btn-default" aria-label="Left Align" style="color: red;">
  <span class="glyphicon glyphicon-heart" ></span>
</button></p>
    
	</div>
    
   </div>

</div>

</div>
</body>
</html>
