
<?php
class Database
{
	private static $host='devisha.db.9462939.hostedresource.com';
	private static $uname='devisha';
	private static $pwd='Demo8@1212';
	private static $con=NULL;
	
	public static function connect()
	{
		self::$con=mysql_connect(self::$host,self::$uname,self::$pwd);
		mysql_select_db('devisha',self::$con);
		return self::$con;
	}
	public function view($email)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where email_id='$email'" ,$con);
			return $res;
			database::disconnect();
	}
	
	
	public function veiw1($rno)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where rno='$rno'",$con);
			return $res;
			database::disconnect();
	}
	public function view2()
	{		$con=database::connect();
			$res=mysql_query('select count(p.pro_id)"cnt",c.cat_id,c.cat_name,p.fk_cat_id from cat_tbl as c,pro_tbl as p where c.cat_id=p.fk_cat_id group by(c.cat_name)',$con);
			return $res;
			database::disconnect();
	}
	public function addque($que_title,$que_des,$que_img,$que_date,$email_id,$sub_id,$que_cnt,$que_flag,$que_like)
	{		$con=database::connect();
			$res=mysql_query("insert into que_tbl values(Null,'$que_title','$que_des','$que_img','$que_date','$email_id','$sub_id','$que_cnt','$que_flag','$que_like')",$con);
			return $res;
			database::disconnect();
	}
	public function cloview()
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl",$con);
			return $res;
			database::disconnect();
	}
	
	
	public function pro_view($id)
	{		$con=database::connect();
			$res=mysql_query("select * from pro_tbl where fk_cat_id='$id'",$con);
			return $res;
			database::disconnect();
	}
	public function addcart1($id)
	{		$con=database::connect();
			$res=mysql_query("select * from pro_tbl where pro_id='$id'",$con);
			return $res;
			database::disconnect();
	}
	public function addcart2($amt,$date,$id,$email)
	{		$con=database::connect();
			$res=mysql_query("insert into order_tbl values(NULL,'$amt','$date','$id','$email','1','cart')",$con);
			return $res;
			database::disconnect();
	}

	public function getanswerinsert($que_id,$desc,$email,$date)
	{		$con=database::connect();
			$res=mysql_query("insert into ans_tbl values(NULL,'$desc','$email','$que_id','$date',NULL)",$con);
			return $res;
			database::disconnect();
	}
	public function disquebyid($id)
	{
		$con=database::connect();
			$res=mysql_query("select * from que_tbl where pk_que_id='$id'",$con);
			return $res;
			database::disconnect();
	}
	public function disque1()
	{
		$con=database::connect();
			$res=mysql_query("select * from que_tbl as q,user_tbl as u where q.fk_email_id=u.pk_email_id",$con);
			return $res;
			database::disconnect();
		
	}
	public function cntans($id)
	{
		$con=database::connect();
			$res=mysql_query("select * from ans_tbl where fk_que_id='$id'",$con);
			return $res;
			database::disconnect();
		
	}
	public function getquedel($id)
	{
		$con=database::connect();
			$res=mysql_query("delete from que_tbl where pk_que_id='$id'",$con);
			$res=mysql_query("delete from ans_tbl where fk_que_id='$id'",$con);
			return $res;
			database::disconnect();
		
	}
	
	public function disviewbysub($id)
	{		$con=database::connect();
			$res=mysql_query("select * from que_tbl as q,user_tbl as u where q.fk_email_id=u.pk_email_id and q.fk_sub_id='$id'",$con);
			return $res;
			database::disconnect();
	}
	
	public function subadd()
	{
		$con=database::connect();
		$res=mysql_query('select count(q.pk_que_id)"cnt",s.sub_name,q.fk_sub_id,s.pk_sub_id from sub_tbl as s,que_tbl as q  where s.pk_sub_id=q.fk_sub_id group by(s.sub_name)',$con);
		return $res;
	database::disconnect();
	}
	public function checkpwd($email_id,$pass)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where pk_email_id='$email_id' and user_password='$pass'",$con);
		return $res;
	database::disconnect();
	}
	public function changepwd($email_id,$pass)
	{
		$con=database::connect();
		$res=mysql_query("update user_tbl set user_password='$pass' where pk_email_id='$email_id'",$con);
		return $res;
	database::disconnect();
	}
	public function signup($email,$name,$pwd,$mobile,$city,$gender,$type)
	{
		$con=database::connect();
		$res=mysql_query("insert into user_tbl values('$eid','$uname','$pwd','$mobile','$city','$gender','user')",$con);
		return $res;
	database::disconnect();
	}
	public function login($email,$pwd)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where email_id='$email' and password='$pwd'",$con);
		return $res;
	database::disconnect();
	}
	public function userdetail()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl",$con);
		return $res;
	database::disconnect();
	}
	public static function disconnect()
	{
		mysql_close(self::$con);
		self::$con=NULL;
	}
}
?>