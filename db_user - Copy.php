<?php
session_start();
include "db_connect.php";
class user
{

	function s_reg()
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$enrollmentno=$_POST['enrollmentno'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		$adyear=$_POST['adyear'];
		$birthday=$_POST['bday'];
		$contactno=$_POST['contactno'];
		$gender=$_POST['g'];
		
		//echo $password;
		
		$ins= "INSERT INTO student VALUES('','$fname','$lname','$enrollmentno','$email','$password','$cpassword','$adyear','$birthday','$contactno','$gender','person-dummy.JPG','A')";
		//echo "INSERT INTO student VALUES('','$fname','$lname','$enrollmentno','$email','$password','$cpassword','$adyear','$birthday','$contactno','$gender')";
		$res=mysql_query($ins);
		if($res)
		{
			//echo "inserted";
			return true;
		}
		else
		{
			//echo"not inserted";
			return false;
		}
	}
	
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
		
		$ins= "INSERT INTO faculty VALUES('','$fname','$lname','$email','$password','$cpassword','$birthday','$contactno','$gender','person-dummy.JPG','A')";
		//echo "INSERT INTO faculty VALUES('','$fname','$lname','$email','$password','$cpassword','$birthday','$contactno','$gender')";
		$res=mysql_query($ins);
		if($res)
		{
			//echo "inserted";
			return true;
		}
		else
		{
			//echo"not inserted";
			return false;
		}
	}
	
	//faculty login
	function f_login($email,$pw)
	{
		//echo $email.$pw;
		$res=mysql_query("select * from faculty where email='$email' and password='$pw'and status='A'");
		$row=mysql_num_rows($res);
		if($row==0)
		{
			return false;
		}
		else
		{
			if($_SESSION['enrollmentno']==false)
			{
			session_start();
			$userdata=mysql_fetch_assoc($res);
			$_SESSION['f_fname']=$userdata['fname'];
			$_SESSION['f_lname']=$userdata['lname'];
			$_SESSION['f_email']=$userdata['email'];
			$_SESSION['f_sno']=$userdata['f_sno'];
			$_SESSION['f_con']=$userdata['contactno'];
			$_SESSION['f_bday']=$userdata['birthday'];
			$_SESSION['f_pass']=$userdata['password'];
			return true;
			}
				else
			{header("location:home.php");}
		}
			
		}
	//student login
	function s_login($eno,$pw)
	{
		//echo $eno.$pw;
		$res=mysql_query("select * from student where enrollmentno='$eno' and password='$pw' and status='A'");
		$row=mysql_num_rows($res);
		if($row==0)
		{
			//echo "0row";
			return false;
		}
		else
		{
			//echo "1 row";
			if($_SESSION['enrollmentno']==false)
			{
				session_start();
			
			$userdata=mysql_fetch_assoc($res);
			$_SESSION['fname']=$userdata['fname'];
			$_SESSION['lname']=$userdata['lname'];
			$_SESSION['con']=$userdata['contactno'];
			$_SESSION['bday']=$userdata['birthday'];
			$_SESSION['pass']=$userdata['password'];
			$_SESSION['email']=$userdata['email'];
			$_SESSION['current_y']=$userdata['current_y'];
			$_SESSION['enrollmentno']=$userdata['enrollmentno'];
			$_SESSION['sno']=$userdata['s_sno'];
			
			//echo $_SESSION['email'];
			//echo $_SESSION['fname'];
			return true;
			}
			else
			{header("location:home.php");}
		}
			
		}
		
		/* Logout */
	function f_logout(){
		session_destroy();
		return true;
	} 
			//student image upload
		
	function imgup($sno)
	{
		$f_name=$_FILES['f1']['name'];
		$f_size=$_FILES['f1']['size'];
		$f_temp=$_FILES['f1']['tmp_name'];
		$exp=explode(".",$f_name);
		$ext=strtolower(end($exp));
		$newfile=uniqid().'.'.$ext;
		$newpath="profile/".$newfile;
		//session_start();
			//$userdata=mysql_fetch_assoc($res);
			//$_SESSION['sno']=$userdata['sno'];
			
		if($ext=='jpg'||$ext=='png'||$ext=='gif')
		{
			if($f_size<2000000)
			{
				if(move_uploaded_file($f_temp,$newpath))
				{
					$up=mysql_query("update student set image='$newfile' where s_sno='$sno'");
					return true;
				}
				else {$error2="file size is larger";
				return $error2;}
				
			}
			else {
			$error1="file not supported";
			return $error1;}
		}
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
				if($f_size<2000000)
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
	
	//select faculty name
	
	function getlist()
	{
		$ar=array();
		$qr=mysql_query("select * from faculty");
		$size= mysql_num_rows($qr);
		if($size>0)
		{
			while($data=mysql_fetch_assoc($qr))
			{
				$ar[]=$data;
			}
			return $ar;
		}
		else return $ar;
	}
	
	//post query insert into database
	function query($fname,$lname,$enrollmentno,$query,$email)
	{
		//echo "hello";
		$query=$_POST['q1'];
		$s_name=$fname." ".$lname;
		$date=date('d:m:Y');
		
		if($email!='toall')
		{
			$res=mysql_query("select fname,lname from faculty where email='$email'");
			$str="";
			if(mysql_num_rows($res)>0)
			{
				$data=mysql_fetch_assoc($res);
				$f_name=$data['fname']." ".$data['lname'];
				
			}
			else
			{
				echo "no faculty available";
			}
			
		}else $f_name="toall";
		//echo "insert into query values('','$s_name','$enrollmentno','$query','$date','$email','$f_name','')";
		$ins=mysql_query("insert into query values('','$s_name','$enrollmentno','$query','$date','','$email','$f_name')"); 
		//mail("$email","student query by $s_name ","$query");
		if($ins)
		{
			$error1="your Query is successfully posted";
			return $error1;
		}
		else { $error2="your Query is not posted";
			return $error2;}
	}
	
	// on tutors page
	function t_query($fname,$lname,$enrollmentno,$query,$email,$f_name)
	{
		//echo "hello";
		$query=$_POST['q1'];
		$s_name=$fname." ".$lname;
		$date=date('d:m:Y');
		
			$res=mysql_query("select fname,lname from faculty where email='$email'");
			$str="";
			if(mysql_num_rows($res)>0)
			{
				$data=mysql_fetch_assoc($res);
				$f_name=$data['fname']." ".$data['lname'];
				
			}
			else
			{
				echo "no faculty available";
			}
		
		/*if($email!='toall')
		{
			$res=mysql_query("select fname,lname from faculty where email='$email'");
			$str="";
			if(mysql_num_rows($res)>0)
			{
				$data=mysql_fetch_assoc($res);
				$f_name=$data['fname']." ".$data['lname'];
				
			}
			else
			{
				echo "no faculty available";
			}
			
		}else $f_name="toall";*/
		//echo "insert into query values('','$s_name','$enrollmentno','$query','$date','$email','$f_name','')";
		$ins=mysql_query("insert into query values('','$s_name','$enrollmentno','$query','$date','','$email','$f_name')"); 
		if($ins)
		{
			$error1="your Query is successfully posted";
			return $error1;
		}
		else { $error2="your Query is not posted";
			return $error2;}
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
	 else {return $ft;  }//echo "hello";
	  
	}

	//faculty notice
	
	function f_notice($fn,$ln,$em)
	{
		$notice=$_POST['q1'];
		$f_name=$fn." ".$ln;
		$date=date("d-m-Y");
		$ins=mysql_query("insert into notice values('','$f_name','$em','$date','$notice','','','N')");
		//echo "insert into notice values('','$f_name','$em','$date','$notice')";
		if($ins)
		{
			//echo "inserted";
			$error1="Notice is successfully posted";
			return $error1;
			
		}
		else
		{
			//echo "not inserted";
			$error2="Notice is successfully posted";
			return $error2;
		}
		
	}
	
	//notice fetch
	
	function n_fetch()
	{
		//echo "hello";
		$ar=array();
		$sel=mysql_query("select * from notice where type='N' order by n_sno desc");
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
	
	function f_ass($fn,$ln,$em,$ass_year)
	{
		$ass=$_POST['qa'];
		$date=date('d-m-Y');
		$f_name=$fn." ".$ln;
		$ins=mysql_query("insert into notice values('','$f_name','$em','$date','','$ass','$ass_year','A')");
		//echo "insert into assignment values('','$f_name','$em','$date','$ass')";
		if($ins)
		{
			$error1="Assignment is successfully posted";
			return $error1;
		}else $error2="Assignment is successfully posted";
			return $error2;
	}
	
	//fetch assignmnet
	
	function a_fetch()
	{
		$ar=array();
		$curr_year=$_SESSION['current_y'];
		//echo $curr_year;
		$sel=mysql_query("select * from notice where type='A' and ass_year='$curr_year' order by n_sno desc");
		//echo "select * from notice where type='A' and current_y='$curr_year' order by n_sno desc";
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
	//faculty fetch ass
	
	function fa_fetch()
	{
		$ar=array();
		$curr_year=$_SESSION['current_y'];
		//echo $curr_year;
		$sel=mysql_query("select * from notice where type='A' order by n_sno desc");
		//echo "select * from notice where type='A' and current_y='$curr_year' order by n_sno desc";
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

	
	
	//uplode notes
	
	function n_uplode($sem,$sub,$tit,$not)
		{
			$f_name=$_FILES['file1']['name'];
			$f_size=$_FILES['file1']['size'];
			$f_temp=$_FILES['file1']['tmp_name'];
			$exp=explode(".",$f_name);
			$ext=strtolower(end($exp));
			//echo $ext;
			$newfile=uniqid().'.'.$ext;
			$newpath="notes/".$newfile;
			//echo $newpath;
			$n_id=$_SESSION['f_email'];
			$fname=$_SESSION['f_fname'];
			$lname=$_SESSION['f_lname'];
			$n_name=$fname." ".$lname;
			if($ext=='pdf')
			{
				if($f_size<500000000)
				{
					if(move_uploaded_file($f_temp,$newpath))
					{
						$up=mysql_query("INSERT INTO f_notes VALUES('','$n_id','$n_name','$sem','$sub','$tit','$newfile','')");
						$error1="Notes is successfully uploaded";
			return $error1;
					}else {$error1="Notes is not uploaded";
			return $error1;}
					
				}else echo "file size is larger";
				
			}else echo "file not supported";
		}
}


		
		
	


?>