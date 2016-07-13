

<!DOCTYPE HTML>
<html>
<head>
<script src="../Scripts/jquery-1.9.1.min.js"></script>
<link href="../Content/bootstrap.css" rel="stylesheet"/>
<script src="../Scripts/bootstrap.min.js"></script>
</head>
<body bgcolor="pink">

<center>
<div class="container">

<div class="page-header">

<div class="col-md-1">
 <img src="../Logo3.png" class="img-rounded" style="height:100px;width:130px"> 

</div>
<br>
  <h1>Add <small>New product.....</small></h1>
  <br>
  <br>
  <br>

<table>
<form action="procre2.php"  enctype="multipart/form-data" method="post">
<div class="row">
<div class="col-md-4 col-md-offset-4">

  <div class="form-group">
  <div class="col-md-1">
    <label>Name</label>
    </div>
	<input type="text" name="txtpname" placeholder="Enter product name" class="form-control" required />
  </div>
  <div class="form-group">
 <div class="col-md-1">
  <label >Price</label>
    </div>
	<input type="text" name="txtprice" placeholder="Enter Price" class="form-control" required />
  </div>

  <div class="form-group">
    <div class="col-md-1">
	<label >SOH</label>
    </div>
	<input type="text" name="txtpsoh" placeholder="Enter stock on hand" class="form-control" required />
  </div>
  <div class="form-group">
  <div class="col-md-1">
    <label for="exampleInputEmail1">MFG</label>
    </div>
	<input type="text" name="txtpmfg" placeholder="Enter Mfg" class="form-control" required />
  </div>
  <div class="form-group">
  <div class="col-md-1">
    <label for="exampleInputEmail1">Warranty</label>
    </div>
	<input type="text" name="txtpwarranty" placeholder="Enter Warranty time" class="form-control" required />
  </div>
  
<br>

<div class="form-group">
  
	<input type="file" name="txtphoto" />
  </div>
  
  <!-- Single button -->
<div class="btn-group">
  <button type="button"name="txtpcolor" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    color<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Black</a></li>
    <li><a href="#">Blue</a></li>
    <li><a href="#">Red</a></li>
  
    <li><a href="#">Green</a></li>
  </ul>
</div>
<br>

<br>
 

  


<tr>
<td><select name="txtcatname">
<?php
		$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
		$res=mysql_query("select * from cat_tbl",$con);
		while($row=mysql_fetch_assoc($res))
		{
			echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
		}
?>
</td>
</tr>

</table>
<br>

<br>

 
<button type="submit"  name="btninsert" class="btn btn-info">ADD</button>
 </div>


 </div>
 </div>
 </div>
</form>
</center>
</body>

</html>
