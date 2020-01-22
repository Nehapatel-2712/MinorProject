<?php
include "database_con.php";
class user{
	/* Student reg Function */
	function s_reg(){
		if($_POST){
		 $fname=$_POST['s_fname'];
         $lname=$_POST['s_lname'];
         $enrollmentno=$_POST['s_enrollmentno'];
         $email=$_POST['s_email'];
         $password=$_POST['s_password'];
         $cpassword=$_POST['s_cpassword'];
         $birthday=$_POST['s_bday'];
         $contactno=$_POST['s_contactno'];
         $gender=$_POST['g'];
		}
		$res1=mysql_query("INSERT INTO s_regform                    VALUES('','$fname','$lname','$enrollmentno','$email','$password','cpassword',' $birthday',' $contactno','$gender','A')");
		
		if($res1){
		   return true;}
        else
  		  return false;
	}
	/* faculty reg function */
	function f_reg(){
		if($_POST){
          $fname=$_POST['f_fname'];
          $lname=$_POST['f_lname'];
          $email=$_POST['f_email'];
          $password=$_POST['f_password'];
          $cpassword=$_POST['f_cpassword'];
          $birthday=$_POST['f_bday'];
          $contactno=$_POST['f_contactno'];
          $gender=$_POST['g'];
		}
		//echo "INSERT INTO f_regform VALUES('','$fname','$lname','$email','$password','cpassword',' $birthday','$contactno','$gender','A')";
		$res2=mysql_query("INSERT INTO f_regform VALUES('','$fname','$lname','$email','$password','cpassword',' $birthday',' $contactno','$gender','A')");
		
		if($res2){
       	  return true;
		  }
        else
		  return false;
	}
	/* faculty login function */
	function f_login($email,$password){
	    $res3=mysql_query("SELECT * FROM f_regform WHERE email='$email' and password='$password'");
		$Row=mysql_num_rows($res3);
		if($Row==0){ return false; 
		//echo "0 row";
		}else{ 
		session_start();
		$userData = mysql_fetch_assoc($res3);
		$_SESSION['fname']=$userData['fname'];
		$_SESSION['lname']=$userData['lname'];
		$_SESSION['email']=$userData['email'];
		return true;
	
		}
	} 
	/* Logout */
	function f_logout(){
		session_destroy();
		return true;
	} 
	
	/* student login function */
	function s_login($enrollmentno,$password){
		$obj=new database_con;
          $con=$obj->dbcon();
	    $res4=mysql_query("SELECT * FROM s_regform WHERE enrollmentno='$enrollmentno'");
		$Row=mysql_num_rows($res4);
		//echo $Row;
		if($Row==0){ return false;//echo "0 row";
		}else{ 
		session_start();
		$userData = mysql_fetch_assoc($res4);
		$_SESSION['fname']=$userData['fname'];
		$_SESSION['lname']=$userData['lname'];
		$_SESSION['enrollmentno']=$userData['enrollmentno'];
		return true;// echo "1 row";
		}
	} 

}
?>