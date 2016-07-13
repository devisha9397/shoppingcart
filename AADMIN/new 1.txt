<?php 
	session_start();
?>

<?php

	if(isset($_POST["btninsert"]))
	{
		$id=$_POST["txtcatid"];
		$name=$_POST["txtcatname"];
		
		require '../database.php';
		$obj=new database();
		$res=$obj->getdata ("update  cat_tbl set cat_name='$name' where cat_id='$id'");
			
		if($res==1)
		{
				HEADER("Location:cat_display.php");
			}
			else
			{
					echo "Something Went Wrong";
			}
		
	}
 ?>