<?php
$email=$_POST['email'];
$password=$_POST['password'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login form</title>

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
      
   .formdiv1{
	         width:35%;
			 height:450px;
			 float:left;
			 border:0px solid black;
			 margin-left:420px;
			 margin-top:100px;
			 background-color:#141414;
			 opacity:0.5;
			 filter:alpha(opacity=50);
			 box-shadow:5px 5px 5px 5px black;
	       }
.formdiv2{
	         width:35%;
			 height:450px;
			 float:left;
			 border:0px solid black;
			 margin-left:420px;
			 margin-top:-450px;
			 z-index:200;
			 /*background-color:red;*/
			 position:relative;
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
			 margin-top:70px;
			 margin-left:10px;
			 border:0px solid white;
			 text-align:center; 
		 }
input[type='email']{
	                 width:60%;
					 height:35px;
				     margin-left:100px;
					 border-radius:20px;
					 border:none;
	               }
		
input[type='password']{
	                 width:60%;
					 height:35px;
					 margin-left:100px;
					 border-radius:20px;
					 border:none;
	               }
button[type='button']{
	                 width:60%;
					 height:35px;
					 background-color:#00F;
					 border:none;
					 margin-left:100px;
					 margin-top:20px;
					 border-radius:20px;
	               }
			   .t1{
				      width:40%;
			          height:25px;
			          float:left;
			          margin-left:190px;
			          border:0px solid white;
			          text-align:center;
				   }
				 .t2{
				      width:50%;
			          height:25px;
			          float:left;
					  margin-top:10px;
			          margin-left:120px;
			          border:0px solid white;
			          text-align:center;
				   }
				   .t3{
				      width:40%;
			          height:20px;
			          float:left;
			          margin-left:40px;
					  margin-top:10px;
			          border:0px solid white;
			          text-align:center;
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
					 font-weight:400; 
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
      <div class="background">
                <div class="formdiv1"></div>
                <div class="formdiv2">
                     <form action="loginform.php" method="post">
                                 <div class="heading">
                                      <text>Login To Your Account</text>
                                 </div>
                                       <div class="t3"><t3>E-mail</t3></div><br/>
                                      <input type="email" placeholder="    E-mail Address"  name="email" required="required"/>
                                      <br/>
                                      <div class="t3"><t3>Password</t3></div><br/>
                                      <input type="password" placeholder="    Password" name="password" required="required"/>
                                      <br/>
                                      
                                     <div class="t1">
                                          <t1>Forgot Your Password?</t1>
                                     </div>
                                     
                                     <button type="button" onclick="loginform.php" value="login"><text>Log In<text></button>
                                     <br/>
                                     
                                    <div class="t2">
                                         <t1>Not a member?<t2>Sign up now!</t2></t1>
                                     </div>
                     </form>
                </div>
      </div>
</body>
</html>
