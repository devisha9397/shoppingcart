<?php

		
		$pro_name=$_POST["txtpname"];
		$price=$_POST["txtprice"];
		$soh=$_POST["txtpsoh"];
		$mfg=$_POST["txtpmfg"];
		$warranty=$_POST["txtpwarranty"];
		$str="../images/".$_FILES["txtphoto"]["name"];
		
	$color=$_POST["txtpcolor"];
		$cat_id=$_POST["txtcatname"];
		move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$str);
		$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
			$res=mysql_query("insert into pro_tbl values('NULL','$pro_name','$price','$soh','$mfg','$warranty','$color','$cat_id','$str')",$con);
		
	
	if($res==1)
	{
		Header("Location:pro1.php");	
	}
	else
	{
	echo "Something Went Wrong";
	}




?>
