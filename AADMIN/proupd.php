<!DOCTYPE HTML>
<html>
<head>
<script src="../Scripts/jquery-1.9.1.min.js"></script>
<link href="../Content/bootstrap.css" rel="stylesheet"/>
<script src="../Scripts/bootstrap.min.js"></script>
</head>
<body bgcolor="pink">

<?php 
	
		$id=$_REQUEST["id"];
		$con=mysql_connect('localhost','root','');
	mysql_select_db('shoppingcart',$con);
	$res=mysql_query("select * from pro_tbl where pro_id='$id'");
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
			{
				
				$id=$row["pro_id"];
				$name=$row["pro_name"];
				$price=$row["price"];
				$photo=$row["pro_img"];
			$soh=$row["soh"];
				$mfg=$row["mfg"];
				$war=$row["warranty"];
				$clr=$row["color"];
				$catid=$row["fk_cat_id"];
			}

?>
<center>
<div class="container">
<div class="row">
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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br>
<br>
<br>
<form action="pro_update2.php?photo=<?php echo $photo; ?>" enctype="multipart/form-data" method="post">
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>

  <!-- Table -->
  <table class="table">
   
  </table>
</div>

  <br>
  <br>
  <br>

  <div class="input-group input-group-lg">
  <span class="input-group-addon" style="margin-left:5px">@</span>
  <input type="text" class="form-control" style="margin-left:5px" placeholder="Username" aria-describedby="sizing-addon1">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
</div>
<tr>
<td><select name="txtpcolor" >
	<option value="black" <?php if($clr=='black') echo "selected"; ?> >Black</option>
	<option value="blue" <?php if($clr=='blue') echo "selected"; ?>>Blue</option>
	<option value="pink" <?php if($clr=='pink') echo "selected"; ?>>Pink</option>
	<option value="red" <?php if($clr=='red') echo "selected"; ?>>Red</option>
	<option value="silver" <?php if($clr=='silver') echo "selected"; ?>>Silver</option>
	<option value="golden" <?php if($clr=='golden') echo "selected"; ?>>Golden</option>
	</select>
</td>
	</tr>
<tr>
<td><img src="<?php echo $photo; ?>" height=70px width=70px>
<input type="file" name="txtphoto">
</tr>

<td><select name="txtcatname">
<?php
	
			$con=mysql_connect('localhost','root','');
	mysql_select_db('shoppingcart',$con);
	$res=mysql_query("select * from cat_tbl ",$con);
		while($row=mysql_fetch_assoc($res))
		{
			if($catid=$row['cat_id'])
			{
					$selected='selected';
			}
			else
			{
				$selected='';
			}
		
?>
<option <?php echo $selected; ?> value="<?php echo $row['cat_id'] ?>"><?php echo $row["cat_name"] ?></option>
		<?php } ?>
		</select>
		

</td>

</tr>

<tr>
		<td><input type="submit" name="btnupdate" value="Save" />
</tr>
   </table>
</div>



</div>
</div>
</form>
</center>
</body>

</html>
