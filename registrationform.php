<?php
if($_post)
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$birthday=$_POST['bday'];
$contactno=$_POST['contactno'];
$gender=$_POST['g'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
</head>
<style type="text/css">
.background{
		     width:100%;
			 height:700px;
			 float:left;
			 position:relative;
			 border:2px solid black;
			 background-image:url("1.jpg");
			 background-size:100% 100%;
			 background-repeat:no-repeat;
		   }
      

   .aside1{
	         width:40%;
			 height:650px;
			 float:left;
			 margin-left:350px;
			 padding-left:140px;
			 background-color:#161616;
			 opacity:0.5;
			 filter:alpha(opacity=50);
			 margin-top:20px;
			 box-shadow:5px 5px 5px 5px black;
	       }
    .aside2{
	         width:40%;
			 height:650px;
			 float:left;
			 margin-left:350px;
			 margin-top:-650px;
             z-index:200;
			 padding-left:140px;
			  position:relative;
			}


      text{
			 color:white;
			 font-family:Georgia, "Times New Roman", Times, serif;
			 font-weight:500;
			 font-size:22px;
			 
		 }
 .heading{
		     width:80%;
			 height:40px;
			 float:left;
			 margin-top:15px;
			 text-align:center; 
		 }
input[type='text1']{
	                 width:37.5%;
					 height:35px;
					 border-radius:20px;
					 border:none;
					 
	               }
input[type='text2']{
	                 width:75%;
					 height:35px;
					 border-radius:20px;
					 border:none;
}
input[type='email']{
	                 width:75%;
					 height:35px;
					 border-radius:20px;
					 border:none;
	               }
		
input[type='password']{
	                 width:75%;
					 height:35px;
					 border-radius:20px;
					 border:none;
                    }      
input[type='date']{
	                 width:75%;
					 height:35px;
					 border-radius:20px;
					 border:none;
	               }

button[type='button']{
	                 width:25%;
					 height:31px;
					 background-color:#00F;
					 border:none;
					 border-radius:20px;
	               }
			   .t1{
				      width:100%;
			          height:25px;
			          float:left;
					  margin-top:10px;
			          margin-right:200px;
			          text-align:left;
				   }
                t1{
					 color:white;
					 font-family:"Times New Roman", Times, serif;
					 font-size:18px;
					 font-weight:500;
				}
</style>
<body>
<div class="background">
                <div class="aside1"></div>
                <div class="aside2">
                     <form action="registrationform.php" method="post">
                                 <div class="heading">
                                      <text>          Register Your Account</text>
                                 </div>
                                     
                                      <div class="t1"><t1>Name</t1></div><br/>
                                      <input type="text1" placeholder="    First Name"  name="fname"  required="required"/>
                                      <input type="text1" placeholder="    Last Name"  name="lname"  required="required"/>
                                      <br/><br/>
                                       <t1>E-mail</t1><br/>
                                      <input type="email" placeholder="    E-mail Address"  name="email"  required="required"/>
                                      <br/><br/>
                                       <t1>Password</t1><br/>
                                      <input type="password" placeholder="    Password" name="password" required="required"/>
                                      <br/><br/>
                                       <t1>Confirm Password</t1><br/>
                                       <input type="password" placeholder="    Confirm Password" name="cpassword" />
                                      <br/><br/>
                                       <t1>Contact Number</t1><br/>
                                      <input type="text2" placeholder="    Contact No."  name="contactno" required="required"/>
                                      <br/><br/>
                                       <t1>Birthday</t1><br/>
                                       <input type="date" name="bday"/>
                                       <br/><br/>
                                        <t1>Gender</t1><br/>
                                             <input type="radio" name="g" value="male"/>Male
                                             <input type="radio" name="g" value="female"/>Female
                                              <input type="radio" name="g" value="other"/>Other
                                        <br/><br/>
                                     <button type="button" onclick="registrationform.php" value="submit"><text>Submit<text></button>
                                     <br/>
                                     
                                   
                     </form>
                </div>
      </div>
</body>
</html>