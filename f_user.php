<?php
include "db_connect.php";

	$obj3=new db();
    $res3=$obj3->dbcon();
	if($res3){echo "connected"; }else echo "not connected";

class user
{


	function f_reg()
	{
		$fname=$_POST['fname1'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		$birthday=$_POST['bday'];
		$contactno=$_POST['contactno'];
		$gender=$_POST['g'];
		//echo "hello";
		
		$ins= "INSERT INTO faculty VALUES('','$fname','$lname','$email','$password','$cpassword','$birthday','$contactno','$gender','','A')";
		//echo "INSERT INTO faculty VALUES('','$fname','$lname','$email','$password','$cpassword','$birthday','$contactno','$gender')";
		$res=mysql_query($ins);
		if($res)
		{
			echo "inserted";
			return true;
		}
		else
		{
			echo"not inserted";
		}
	}
	
	//faculty login
	function f_login($email,$pw)
	{
		//echo $email.$pw;
		$res=mysql_query("select * from faculty where email='$email' and password='$pw'and A='A'");
		$row=mysql_num_rows($res);
		if($row==0)
		{
			return false;
		}
		else
		{
			session_start();
			$userdata=mysql_fetch_assoc($res);
			$_SESSION['f_fname']=$userdata['fname'];
			$_SESSION['f_lname']=$userdata['lname'];
			$_SESSION['f_email']=$userdata['email'];
			$_SESSION['f_sno']=$userdata['f_sno'];
			return true;
		}
			
		}

		/* Logout */
	function f_logout(){
		session_destroy();
		return true;
	} 
			
	
		//facu;lty image upload
		
		function f_imgup($f_sno)
		{
			$f_name=$_FILES['f2']['name'];
			$f_size=$_FILES['f2']['size'];
			$f_temp=$_FILES['f2']['tmp_name'];
			$exp=explode(".",$f_name);
			$ext=strtolower(end($exp));
			//echo $ext;
			$newfile=uniqid().'.'.$ext;
			$newpath="f_profile/".$newfile;
			//echo $newpath;
			
			if($ext=='jpg'||$ext=='png'||$ext=='gif')
			{
				if($f_size<200000)
				{
					if(move_uploaded_file($f_temp,$newpath))
					{
						$up=mysql_query("update faculty set f_image='$newfile' where f_sno='$f_sno'");
						return true;
					}
					echo "file size is larger";
				}
				echo "alert 'file not supported'";
			}
		}
	

	
	// fetch query
	
	function showquery()
	{
		$ft=array();
		$select=mysql_query("select * from query where ans_id='toall' order by sno desc ");
		
	 	if(mysql_num_rows($select)>0)
	 {
		 //echo "hello";
		 while($query=mysql_fetch_assoc($select)){
		 $ft[]=$query;
		 }
		 return $ft;
		 
	 }
	 else {return $ft;  echo "hello";}
	  
	}

	//faculty notice
	
	function f_notice($fn,$ln,$em)
	{
		$notice=$_POST['q1'];
		$f_name=$fn." ".$ln;
		$date=date("d-m-Y");
		$ins=mysql_query("insert into notice values('','$f_name','$em','$date','$notice')");
		//echo "insert into notice values('','$f_name','$em','$date','$notice')";
		if($ins)
		{
			//echo "inserted";
			return true;
		}
		else
		{
			//echo "not inserted";
			return false;
		}
		
	}
	
	//notice fetch
	
	function n_fetch()
	{
		//echo "hello";
		$ar=array();
		$sel=mysql_query("select * from notice order by n_sno desc");
		if(mysql_num_rows($sel)>0)
		{
			while($n_data=mysql_fetch_assoc($sel))
			{
				$ar[]=$n_data;
			}
			//echo "hello";
			return $ar;
		}else {return $ar;}
	}
	
	//faculty assignment
	
	function f_ass($fn,$ln,$em)
	{
		$ass=$_POST['q1'];
		$f_name=$fn." ".$ln;
		$date=date("d-m-Y");
		$ins=mysql_query("INSERT INTO assignment VALUES('','$f_name','$em','$date','$ass')");
		echo "INSERT INTO assignment VALUES('','$f_name','$em','$date','$ass')";
		if($ins)
		{
			//echo "inserted";
			return true;
		}else {//echo "not inserted";
			return false;}
	}	
	
	//fetch assignmnet
	
	function a_fetch()
	{
		$ar=array();
		$sel=mysql_query("select * from assignment order by a_sno desc");
		if(mysql_num_rows($sel)>0)
		{
			while($a_data=mysql_fetch_assoc($sel))
			{
				$ar[]=$a_data;
			}
			//echo "hello";
			return $ar;
		}else {return $ar;}
	}


}


?>