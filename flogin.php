<?php
if($_POST){
$email=$_POST['email'];

$pw=$_POST['pw'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faculty Login Form</title>
</head>
<style type="text/css">
.flbg{
	width:100%;
	height:800px;
	float:left;
	background-color:black;
	opacity:0.6;
	border:1px solid black;
	}
.flbg1{
	width:100%;
	height:650px;
	float:left;
	margin-top:-650px;
	z-index:200;
	position:relative;
	}
.flfdiv{
	width:35%;
	height:450px;
	float:left;
	background-color:#CD1D6C;
	margin-left:420px;
	margin-top:50px;
	box-shadow:5px 5px 5px 5px #232323;
	 }
 ftext{
			 color:#FFF;
			 font-family:Georgia, "Times New Roman", Times, serif;
			 font-weight:500;
			 font-size:20px;
			 
		 }
 .fheading{
		     width:100%;
			 height:30px;
			 float:left;
			 margin-top:40px;
			 border:0px solid white;
			 text-align:center; 
		 }
input[type='email']{
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
			   .ft1{
				      width:80%;
			          height:25px;
			          float:left;
			          margin-left:60px;
			          border:0px solid white;
			          text-align:center;
				   }
				 .ft2{
				      width:90%;
			          height:25px;
			          float:left;
					  margin-top:10px;
			          margin-left:40px;
			          border:0px solid white;
			          text-align:center;
				   }
				   .ft3{
				      width:55%;
			          height:20px;
			          float:left;
					  margin-top:20px;
					  margin-left:95px;
			          border:0px solid white;
			          text-align:left;
					  vertical-align:text-bottom;
				   }

				 ft1{
					 color:black;
					 font-family:"Times New Roman", Times, serif;
					 font-size:16px;
					 font-weight:400;
				     
				   }
				 ft2{
					 color:#06F;
					 font-family:"Lucida Console", Monaco, monospace;
					 font-size:16px;
					 font-weight:600; 
				   }
				 ft3{
					 color:black;
					 font-family:"Times New Roman", Times, serif;
					 font-size:16px;
					 font-weight:400;
					 vertical-align:baseline;
				   }

</style>
<body>
<div class="flbg"></div>
    <div class="flbg1">
         <div class="flfdiv">
              <form action="flogin.php" method="post">
                                 <div class="fheading">
                                      <ftext>Faculty Login Form</text>
                                 </div>
                                        <div class="ft3"><t3>E-mail</ft3></div><br/>
                                      <input type="email" placeholder="    E-mail Address"  name="email" required=                                        "required" />
                                      <br/>
                                       
                                      <div class="ft3"><ft3>Password</ft3></div><br/>
                                      <input type="password" placeholder="    Password" name="pw" required="required"/>
                                      <br/>
                                      
                                     <div class="ft1">
                                          <ft1>Forgot Your Password?</t1>
                                     </div>
                                     
                                     <button type="button" onclick="flogin.php" value="login"><ftext>Log In<ftext></button>
                                     <br/>
                                     
                                    <div class="ft2">
                                         <ft1>Not a member?<ft2>Sign up now!</ft2></ft1>
                                     </div>
                     </form>
         </div>
    </div>
</body>
</html>