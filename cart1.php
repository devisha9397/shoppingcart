<?php 
session_start();
$email=$_SESSION["email"];
require 'database.php';
$obj=new database();
$res=$obj->getdata ("select * from user_tbl where email_id='$email'");
while($row=mysql_fetch_assoc($res))
{
	
	$name=$row["uname"];
	$mobile_no=$row["mobile_no"];
	$gender=$row["gender"];
	$city=$row["city"];
	
	
}

?>
<!doctype html>
<html>
<head>
<script src="Scripts/jquery-1.9.1.min.js"></script>
<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="row">
<div class="col-md-12">
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
        <li class="active"><a href="signup4.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home </a></li>
        	<?php 
				$con=mysql_connect('localhost','root','');
		 mysql_select_db('shoppingcart',$con);
		$res=mysql_query("select * from user_tbl")
		/*while($row=mysql_fetch_array($res,MYSQL_ASSOC))
		{
		echo '.$row["email_id"].';
		}*/
			?>
            
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
      
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
<?php
$flag='wishlist';
$obj1=new database();
$res1=$obj1->getdata("select o.*,p.* from order_tbl as o,pro_tbl as p where o.fk_pro_id=p.pro_id AND fk_email_id='$email' and o_flag='$flag'");
while($row=mysql_fetch_assoc($res1))
{
echo '<table class="table-responsive">';
echo '<table cellpadding="10" cellspacing="10" class="table table-hover">';
echo '<tr>';
echo '<th>Image</th>';
echo '<th>Order ID</th>';
echo '<th>Order Date</th>';
echo '<th>Quantity</th>';
echo '<th>Price</th>';
echo '</tr>';
echo '</tr>';
echo '<div class="col-sm-6 col-md-4">';
echo '<div class="caption">';
echo '<td><img style"height:30px;width:50px" src="images/'.$row["pro_img"].'"></td>';
echo '<td><h3>'.$row["o_id"].'</h3></td>';
echo '<td><h3>'.$row["o_date"].'</h3></td>';
echo '<td>
<br>
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" style="height:40px;width:50px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    '.$row["o_qty"].'<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
  </ul>
</div></td>';

echo '<td><h3>'.$row["o_amt"].'</h3></td>';
echo '<br>';
echo '
<td><br><a href="cartdelete1.php?id='.$row["o_id"].'"> <span class="glyphicon glyphicon-trash" ></span></a></td>
</div>
</div>
</tr>
</table>
</table>';
}
?>
<div class="col-md-3 col-md-offset-9">
<div class="btn-group">
<a href="checkout.php">
  <input type="submit" class="btn btn-primary " align="right" value="Check Out" style="height:50px;width:255px">
  </a>
  </div>
  </div>
  <br>
  <br>



</div>

</div>
<br>
<br>
</body>
</html>
