<!doctype html>
<?php 
function build_calendar($month,$year,$datearray)
{
	$daysofweek=array('S','M','T','W','T','F','S');
	$firstdayofmonth=mktime(0,0,0,$month,1,$year);
	$numberdays=date('t',$firstdayofmonth);
	$datecomponents=getdate($firstdayofmonth);
	$monthname=$datecomponents['month'];
	$dayofweek=$datecomponents['wday'];
	$calendar="<table class='calendar'>";
	$calendar.="<caption>$monthname $year</caption>";
	$calendar.="<tr>";
	foreach($daysofweek as $day){
		$calendar.="<th class='header'>$day</th>";
	}
	$currentday=1;
	$calendar.="</tr><tr>";
	if ($dayofweek>0){
		$calendar.="<td colspan='$dayofweek'>&nbsp;</td>";
	}
	$month=str_pad($month,2,"0",STR_PAD_LEFT);
	while($currentday<=$numberdays){
		if ($dayofweek==7){
			$dayofweek=0;
			$calendar.="</tr><tr>";
		}
		$currentdayrel=str_pad($currentday,2,"0",STR_PAD_LEFT);
		$date="$year-$month-$currentdayrel";
		$calendar.="<td class='day' rel='$date'>$currentday</td>";
		$currentday++;
		$dayofweek++;
	}
	if($dayofweek!=7){
		$remainingdays=7-$dayofweek;
		$calendar.="<td colspan='$remainingdays'>&nbsp;</td>";
	}
	$calendar.="</tr>";
	$calendar.="</table>";
	return $calendar;
}
?>
<head>
<script src="Scripts/jquery-1.9.1.min.js"></script>
<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header">
  <h1>Payment Options... <br><small>Select a payment method</small></h1>
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
<br>
<br>

<div class="col-md-7 col-md-offset-3">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" style="color:red" aria-controls="collapseOne">
          Credit Card
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="paymentHeader">
		Pay using Credit Card.
		<ul >
		 <img src="images/master.png" style="height=50px,width=20px;">
		 
		 <div class="col-md-6 col-md-offset-1">
  <br>
  <br><BR><BR>
	<select>
   <option> VISA  Credit Card</option>
   
   <option>Mastercard</option>
   <option>American Express</option>
   <option>Diners club card</option>
   </select> 	

</div>
	
		</ul>
		<div class="input-group input-group-md">
  <input type="text" class="form-control" placeholder="Card Number" aria-describedby="sizing-addon1">
  </div>
  <br>
  <div class="input-group input-group-md">
  <input type="text" class="form-control" placeholder="MM/YY" aria-describedby="sizing-addon1">
   <?php echo build_calendar(6,2016,NULL);?>
  
</div>
<center>
<div class="btn-group">
  <input type="submit" class="btn btn-warning " style="height:50px; width:200px" value="Save and Pay">
  </div>
  </center>
		</div>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button"style="color:red" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Cash on Dilevery
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <input type="text" class="form-control"  name="captcha_code" placeholder="Captcha code" aria-describedby="basic-addon1"></span>
<br><br>
<br>
<img src="captcha.php">
<br>
<center>
<div class="btn-group">
  <input type="submit" class="btn btn-warning " style="height:50px; width:200px" value="Confirm Order">
  </div></center>
</div>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" style="color:red" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Net Banking
        </a>
		
      </h4>
    </div>
	
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
	  popular banks.........
	  <br>
	  <br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> <img src="images/axis-bank.jpg" style="height:70px; width:150px">
</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <img src="images/hdfc.jpg" style="height:70px; width:150px">
</label>
<br>
<br>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> <img src="images/punjab.jpg" style="height:70px; width:150px">
</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <img src="images/boi.jpg" style="height:70px; width:150px">
</label>
<br>
<br>
<br>
<center>
<div class="btn-group">
  <input type="submit" class="btn btn-warning " style="height:50px; width:200px" value="Confirm Order"
  </div></center>
  </div>
    </div>
	
  </div>
</div>
</div>

</div>
</body>
</html>