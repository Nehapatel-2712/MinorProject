<?php
if($_POST){
$eno=$_POST['eno'];

$pw=$_POST['pw'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Login Form</title>
</head>
<style type="text/css">
.slbg{
	width:100%;
	height:650px;
	float:left;
	background-color:black;
	opacity:0.6;
	border:1px solid black;
	}
.slbg1{
	width:100%;
	height:650px;
	float:left;
	margin-top:-650px;
	z-index:200;
	position:relative;
	}
.slfdiv{
	width:35%;
	height:450px;
	float:left;
	background-color:#CD1D6C;
	margin-left:420px;
	margin-top:100px;
	box-shadow:5px 5px 5px 5px #232323;
	 }
 text{
			 color:#FFF;
			 font-family:Georgia, "Times New Roman", Times, serif;
			 font-weight:500;
			 font-size:20px;
			 
		 }
 .heading{
		     width:100%;
			 height:30px;
			 float:left;
			 margin-top:40px;
			 border:0px solid white;
			 text-align:center; 
		 }
input[type='text']{
	                 width:60%;
					 height:35px;
					 border-radius:20px;
					 border:none;
					 margin-left:90px;
				}

input[type='password']{
	                 width:60%;
					 height:35px;
					 border-radius:20px;
					 border:none;
					 margin-left:90px;
	               }
button[type='button']{
	                 width:60%;
					 height:35px;
					 background-color:#00F;
					 border:none;
					 margin-top:20px;
					 border-radius:20px;
					 margin-left:90px;
	               }
			   .t1{
				      width:80%;
			          height:25px;
			          float:left;
			          margin-left:60px;
			          border:0px solid white;
			          text-align:center;
				   }
				 .t2{
				      width:90%;
			          height:25px;
			          float:left;
					  margin-top:10px;
			          margin-left:40px;
			          border:0px solid white;
			          text-align:center;
				   }
				   .t3{
				      width:55%;
			          height:20px;
			          float:left;
					  margin-top:20px;
					  margin-left:95px;
			          border:0px solid white;
			          text-align:left;
					  vertical-align:text-bottom;
				   }

				 t1{
					 color:black;
					 font-family:"Times New Roman", Times, serif;
					 font-size:16px;
					 font-weight:400;
				     
				   }
				 t2{
					 color:#06F;
					 font-family:"Lucida Console", Monaco, monospace;
					 font-size:16px;
					 font-weight:600; 
				   }
				 t3{
					 color:black;
					 font-family:"Times New Roman", Times, serif;
					 font-size:16px;
					 font-weight:400;
					 vertical-align:baseline;
				   }

</style>
<body>
<div class="bg"></div>
    <div class="bg1">
         <div class="fdiv">
              <form action="slogin.php" method="post">
                                 <div class="heading">
                                      <text>Students Login Form</text>
                                 </div>
                                        <div class="t3"><t3>Enrollment N0.</t3></div><br/>
                                      <input type="text" placeholder="    Enrollment No."  name="eno" required=                                        "required" pattern="[0-9 A-Z a-z]{12}"/>
                                      <br/>
                                       
                                      <div class="t3"><t3>Password</t3></div><br/>
                                      <input type="password" placeholder="    Password" name="pw" required="required"/>
                                      <br/>
                                      
                                     <div class="t1">
                                          <t1>Forgot Your Password?</t1>
                                     </div>
                                     
                                     <button type="button" onclick="slogin.php" value="login"><text>Log In<text></button>
                                     <br/>
                                     
                                    <div class="t2">
                                         <t1>Not a member?<t2>Sign up now!</t2></t1>
                                     </div>
                     </form>
         </div>
    </div>
</body>
</html>