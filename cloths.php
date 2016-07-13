<?php 

SESSION_START();


?>
<?php
/*if(isset($_POST["btnsv"]))
{
	$rno=$_POST["txtno"];
	$name=$_POST["txtname"];
	$city=$_POST["ct"];
	$mobile_no=$_POST["txtmo"];
	$gender=$_POST["txt"];
	$con=mysql_connect('localhost','root','');
	mysql_select_db('demo1',$con);
	$res=mysql_query(" select * from user_tbl where rno='$rno'",$con);
		
}		
*/
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
	background-size: 200% auto;
}
</style>
<body>
<form action="cloths.php" method="post">
<div class="container">
<div class="row">
<div class="col-md-12"><div class="row">
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
      <a class="navbar-brand" href="LOGO.jpeg">ShoppingKart</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="signup4.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home </a></li>
        	<?php 
				include 'database.php';

                $obj=new database();
                $res=$obj->cloview();
		/*while($row=mysql_fetch_array($res,MYSQL_ASSOC))
		{
		echo '.$row["email_id"].';
		}*/
			?>
            
      </ul>
      
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

</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="list-group">

  <a href="#" class="list-group-item active">
    Categories
  </a>
  <?php 


                $obj=new database();
                $res=$obj->view2();
				
  
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{	
		echo '<a href="cloths.php?id='.$row["cat_id"].'" class="list-group-item">'.$row["cat_name"].'<span class="badge">'.$row["cnt"].'</span></a>';
	
		}
	?>
  
</div>
</div>
<br>
<div class="col-md-9">
<div class="row">

  <div class="panel panel-default">
  <div class="panel-body">
   

  <?php
  $id=$_REQUEST["id"];
		
		$obj=new database();
		$res=$obj->pro_view($id);
		
 /*$id=$_REQUEST["id"];
  $con=mysql_connect('localhost','root','');
	mysql_select_db('shoppingcart',$con);
	$res=mysql_query("select * from pro_tbl where fk_cat_id='$id'",$con);*/
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
 echo'<div class="col-sm-6 col-md-4">';		
    echo '<div class="thumbnail">';
      echo '<div class="caption">';
	  echo '<img src="images/'.$row["pro_img"].'" style="height:300px;" class="img-responsive" class="img-thumbnail" >';
	  echo '<h3>'.$row["pro_name"].'</h3>';
	  echo '<p> Rs '.$row["price"].'</p>';
      echo '  <p><a href="#" class="btn btn-info" role="button">Buy</a> <a href="addcart1.php?id='.$row["pro_id"].'" class="btn btn-default" role="button">Add to cart</a>&nbsp;&nbsp;<a href="wishlist.php?id='.$row["pro_id"].'"button type="button" class="btn btn-default" aria-label="Left Align" style="color: red;">
  <span class="glyphicon glyphicon-heart" ></span></a>
</button></p>';
    
	  echo'</div>
    </div>
  </div>';
	}
?>
  </div>
</div>
</div>
</div>
</form>
</body>
</html>