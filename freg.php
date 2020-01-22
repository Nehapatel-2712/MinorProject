<?php
if($_POST){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$birthday=$_POST['bday'];
$contactno=$_POST['contactno'];
$gender=$_POST['g'];
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faculty Registration Form</title>
<script type="text/javascript">

	function cpw()
	{
		var p=document.getElementById("password").value;
		var cp=document.getElementById("cpassword").value;
		
		if(p==cp)
		{}
		else{
			alert("The password you enter does not match");
			}
	}

</script>

</head>
<style type="text/css">
.bg{
	width:100%;
	height:900px;
	float:left;
	background-color:black;
	opacity:0.6;
	border:1px solid black;
	}
.bg1{
	width:100%;
	height:900px;
	float:left;
	margin-top:-900px;
	z-index:200;
	position:relative;
	}
.fdiv{
	width:46%;
	height:740px;
	float:left;
	background-image:url(images/IMG-20180127-WA0052.jpg);
	background-size:100% 100%;
	margin-left:360px;
	margin-top:60px;
	box-shadow:5px 5px 5px 5px #232323;
	 }
    text{
			 color:white;
			 font-family:Georgia, "Times New Roman", Times, serif;
			 font-weight:500;
			 font-size:24px;
			 
		 }
 .heading{
		     width:75.5%;
			 height:50px;
			 float:left;
			 margin-top:30px;
			 text-align:center;
			 margin-left:70px; 
		 }
	        .text1{
				      width:100%;
			          height:40px;
			          float:left;
			          margin-left:90px;
				   }
input[type='text1']{
	                 width:35%;
					 height:35px;
					 border-radius:20px;
					 border:none;
					 
	               }
input[type='text2']{
	                 width:72%;
					 height:35px;
					 border-radius:20px;
					 border:none;
					 margin-left:85px;
} 
input[type='email']{
	                 width:72%;
					 height:35px;
					 border-radius:20px;
					 border:none;
					 margin-left:85px;
	               }
		
input[type='password']{
	                 width:72%;
					 height:35px;
					 border-radius:20px;
					 border:none;
					 margin-left:85px;
                    }      
input[type='date']{
	                 width:72%;
					 height:35px;
					 border-radius:20px;
					 border:none;
					 margin-left:85px;
	               }

button[type='button']{
	                 width:25%;
					 height:31px;
					 background-color:#00F;
					 border:none;
					 border-radius:20px;
					 margin-left:80px;
	               }
			   .t1{
				      width:100%;
			          height:25px;
			          float:left;
					  margin-top:10px;
			          margin-left:95px;
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
<div class="bg"></div>
    <div class="bg1">
         <div class="fdiv">
               <form action="freg.php" method="post">
                                 <div class="heading">
                                      <text>Faculty Registration Form</text>
                                 </div>
                                     
                                      <div class="t1"><t1>Name</t1></div><br/>
                                      <div class="text1">
                                      <input type="text1" placeholder="    First Name"  name="fname"  required="required"/>
                                      <input type="text1" placeholder="    Last Name"  name="lname"  required="required"/>
                                      </div>
                                      <br/>
                                        <div class="t1"><t1>E-mail</t1></div><br/>
                                      <input type="email" placeholder="    E-mail Address"  name="email"  required="required"/>
                                      <br/>
                                       <div class="t1"> <t1>Password</t1></div><br/>
                                      <input type="password" placeholder="    Password" id="password" required="required"/>
                                      <br/>
                                       <div class="t1"> <t1>Confirm Password</t1></div><br/>
                                       <input type="password" placeholder="    Confirm Password" id="cpassword" onblur="cpw()" />
                                      <br/>
                                        <div class="t1"><t1>Contact Number</t1></div><br/>
                                      <input type="text2" placeholder="    Contact No."  name="contactno" required="required"                                      pattern="[0-9]{10}" />
                                      <br/>
                                       <div class="t1"> <t1>Birthday</t1></div><br/>
                                       <input type="date" name="bday"/>
                                       <br/>
                                         <div class="t1"><t1>Gender</t1></div><br/><br/>
                                             <div class="text1">
                                             <input type="radio" name="g" value="male"/><t1>Male</t1>
                                             <input type="radio" name="g" value="female"/><t1>Female</t1>
                                              <input type="radio" name="g" value="other"/><t1>Other</t1>
                                              </div>
                                        <br/>
                                     <button type="button" onclick="freg.php" value="submit"><text>Submit<text></button>
                                     <br/>
                                     
                                   
                     </form>
         </div>
    </div>
</body>
</html>