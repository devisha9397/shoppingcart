<?php 
	session_start();
?>

<?php

	if(isset($_POST["btninsert"]))
	{
		$id=$_POST["txtcatid"];
		$name=$_POST["txtcatname"];
		
		$con=mysql_connect('localhost','root','');
			mysql_select_db('shoppingcart',$con);
			$res=mysql_query ("update  cat_tbl set cat_name='$name' where cat_id='$id'");
			
		if($res==1)
		{
				HEADER("Location:cat.php");
			}
			else
			{
					echo "Something Went Wrong";
			}
		
	}
 ?>