<?php
	$photo=$_REQUEST["photo"];
		$id=$_POST["txtpid"];
		$name=$_POST["txtpname"];
		$price=$_POST["txtprice"];
		
		$soh=$_POST["txtpsoh"];
		$mfg=$_POST["txtpmfg"];
		$war=$_POST["txtpwarranty"];
		$clr=$_POST["txtpcolor"];
		if($_FILES["txtphoto"]["name"]!="")
		{
			
			unlink($photo);
			$photo="../images/".$_FILES["txtphoto"]["name"];
		move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$photo);
		}
		
	
		
		
			$con=mysql_connect('localhost','root','');
	mysql_select_db('shoppingcart',$con);
	$res=mysql_query ("update  pro_tbl set pro_name='$name',price='$price',soh='$soh',mfg='$mfg',warranty='$war',color='$clr', pro_img='$photo' where pro_id='$id'",$con);
			
		if($res==1)
		{
				HEADER("Location:pro1.php");
		}
			else
			{
					echo "Something Went Wrong";
			}
		
	
 ?>