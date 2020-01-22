
<?php
error_reporting(0);
include "db_user.php";
$obj=new db;
$con=$obj->dbcon();
$obj1=new user;
if($_POST){
    if(@($_POST["fname"])){
	   $ins=$obj1->s_reg();
	   if($ins)
	   {
		   $error="Congratulations...! You are successfully Registered";
	   }
	   else
	   {
		   $error="The emailId or Enrollment number you inserted is already exist....please try again with another emailId or Enrollment number";
	   }
	}
	   //faculty reg
    if(@($_POST["fname1"])){
	   $ins2=$obj1->f_reg();
	   if($ins2)
	   {
		   $error="Congratulations...! You are successfully Registered";
	   }
	   else
	   {
		   $error="The emailId or Enrollment number you inserted is already exist....please try again with another emailId or Enrollment number";
	   }
	}
		//faculty login
	if(@($_POST["email1"]))
	{
		$email=$_POST['email1'];
		$pw=$_POST['pw'];
		$login=$obj1->f_login($email,$pw);
		if($login){
			header("location:f_profile.php");
		}
		else
		{
			$error="Invalid userid and password";
		}
			
	}
		//student login
		//echo $_POST['eno'];
	if(@($_POST["eno"]))
	{
		$obj1=new user;
		$eno=$_POST['eno'];
		$pw=$_POST['pw'];
		$login=$obj1->s_login($eno,$pw);
		if($login){
			header("location:profile.php");
		}
		else{
		$error="Invalid userid and password";
		}
		
	}
}


//faculty password
if(@($_POST['f_pass_sub']))
{
echo $f_pass=$_POST['m_password'];
if($f_pass=='123')
{?>
	<script src="js/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(e) {
			$('.bg').fadeIn(1000);
			$('.bg1').fadeIn(1000);
	});
	</script>
<?php }
else {
	header('location:home.php');
}
}

?>


<!--student login

<?//php
if($_POST){
$eno=$_POST['eno'];

$pw=$_POST['pw'];
}
?>-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<script src="js/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
        $("#sr1").click(function(){
			$(".sbg").fadeIn(1000);
			});
		$("#sr1").click(function(){
			$(".sbg1").fadeIn(1000);
			});
		$("#csr1").click(function(){
			$(".sbg").fadeIn(1000);
			});
		$("#csr1").click(function(){
			$(".sbg1").fadeIn(1000);
			});
		$(".close").click(function(){
			$(".sbg").hide();
			});
		$(".close").click(function(){
			$(".sbg1").hide();
			});
		/*$("#fr2").click(function(){
			$(".bg").fadeIn(1000);
			});
		$("#fr2").click(function(){
			$(".bg1").fadeIn(1000);
			});*/
		$(".close").click(function(){
			$(".bg").hide();
			});
		$(".close").click(function(){
			$(".bg1").hide();
			});
		$("#fl").click(function(){
			$(".flbg").fadeIn(1000);
			});
		$("#fl").click(function(){
			$(".flbg1").fadeIn(1000);
		});
		$("#cfl1").click(function(){
			$(".flbg").fadeIn(1000);
			});
		$("#cfl1").click(function(){
			$(".flbg1").fadeIn(1000);
		});
		
		$(".close").click(function(){
			$(".flbg").hide();
		});
		$(".close").click(function(){
			$(".flbg1").hide();
		});
		$("#sl").click(function(){
			$(".slbg").fadeIn(1000);
			});
		$("#sl").click(function(){
			$(".slbg1").fadeIn(1000);
			});
		("#csl1").click(function(){
			$(".slbg").fadeIn(1000);
			});
		$("#csl1").click(function(){
			$(".slbg1").fadeIn(1000);
			});
		$(".close").click(function(){
			$(".slbg").hide();
			});
		$(".close").click(function(){
			$(".slbg1").hide();
			});
		$("#nfr23").click(function(){
			alert("hello");
			$("#f_pass").fadeIn(1000);
			$("#trans_pass").fadeIn(1000);
			});
			
		
		/*$("#cfr1").click(function(){
			$(".trans_pass").fadeIn(1000);
			});
		$("#cfr1").click(function(){
			$(".f_pass").fadeIn(1000);
			});*/
    });

</script>
<script src="js/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">

	function cpw()
	{
		//alert ("hello");
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
<style>
	.header
	{
		height:400px;
		width:100%;
		float:left;
		border:0px solid black;
		background-image:url("images/a72edf4f921646a387436a0f52461991.jpg");
		background-size:100% 400px;
		background-repeat:inherit;
	
	}
	.headername
	{
		height:70px;
		width:70%;
		float:left;
		border:0px solid black;
		margin-top:20px;
		margin-left:350px;
		
		 
	}
	.headername2
	{
		height:70px;
		width:60%;
		float:left;
		border:0px solid black;
		margin-top:50px;
		margin-left:300px;
		 
	}
	.headersearch
	{
		height:70px;
		width:80%;
		float:left;
		border:0px solid black;
		margin-top:10px;
		margin-left:190px;
	}
	.headerlink
	{
		height:70px;
		width:80%;
		float:left;
		border:0px solid white;
		margin-left:60px;
		margin-top:30px;
	}
	.hlogo
	{
		height:70px;
		width:5%;
		float:left;
		border:0px solid white;
		margin-left:0px;
		margin-top:0px;
	}
	.hname
	{
		height:70px;
		width:30%;
		float:left;
		border:0px solid white;
		margin-left:0px;
		margin-top:0px;
	}
	.hlink
	{
		height:70px;
		width:14%;
		float:left;
		border:0px solid white;
		margin-left:0px;
		margin-top:0px;
		
	}
	.reglink1
	{
		height:80px;
        width:108%;
        float:left;
		margin-top:-70px;              
	    
		font-size:16px;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		color:white;
		margin-left:-20px;
		border:0px solid black;
		position:relative;
		z-index:200;
		text-align:center;
		padding:5px;
		font-size:18px;
		display:none;
	}
	.reglink11
	{
		height:80px;
        width:108%;
        float:left;
        background-color:#000;                  
	    
		font-size:16px;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		color:white;
		margin-left:-20px;
		opacity:0.7;
		display:none;
	}
	.hlink:hover>.reglink1
	{
	   display:block;
	   position:relative;	
	}
	.hlink:hover>.reglink11
	{
	   display:block;
	   position:relative;	
	}
	.hlink2:hover>.reglink1
	{
	   display:block;
	   position:relative;	
	}
	.hlink2:hover>.reglink11
	{
	   display:block;
	   position:relative;	
	}
	a:hover
	{
		color:red;
	}
	.hlink2
	{
		height:70px;
		width:10%;
		float:left;
		margin-top:-20px;
		border:0px solid white;
		margin-left:6px;
		margin-top:0px;
	}
	/*.reglink22
	{
		height:90px;
        width:80%;
        float:left;
        background-color:#000;                  
	    
		font-size:16px;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		color:white;
		padding:20px;
		margin-left:19px;
		opacity:0.4;
	}*/
	l
	{
		font-size:30px; 
		font:'Times New Roman', Times, serif;
		color:#FFF; 
		font-weight:100;
		padding:10px;
		font-style:italic;
	}
	l:hover
	{
		color:red
	}
	.marque
	{
		height:30px;
		width:100%;
		background-color:#FF1313;
		float:left;
	}
	
	.link
	{
		height:400px;
		width:49.5%;
		float:left;
		border:0px solid black;
	}
	a:hover
	{
		text-decoration:none;
		color:#F00;
	}
	a:link
	{
		text-decoration:none;
		color:#000;
	}
	
	input[type='search']
	{
		margin-left:20px;
		font-size:14px;
		width:60%;
		height:40px;
	    border-radius:20px;
		border:none;
		padding-left:20px;
		font-size:24px;
	    border:thick;
	}
	button[type='button1']
	{
		margin-left:0px;
		font-size:18px;
		width:20%;
		height:40px;
	    border-radius:20px;
	    border:thick;
		background-color:#399;
	}
   /*After Header*/
	.afterh
	{
		height:350px;
		width:100%;
		float:left;
		border:0px solid black;
		background-color:white;
	
	}
	.slider
	{
		height:350px;
		width:40%;
		float:left;
		margin-top:10px;
		margin-left:10px;
	}
	.sliderside
	{
		height:350px;
		width:57.5%;
		float:left;
		margin-top:10px;
		margin-left:10px;
	}
	.insliderside1
	{
		height:350px;
		width:48%;
		float:left;
		margin-top:8px;
		margin-left:9px;
	}
	.insliderside2
	{
		height:350px;
		width:48%;
		float:left;
		/*border:1px solid black;*/
		margin-top:8px;
		margin-left:9px;
	}
	.circle1
	{
	    height:140px;
		width:40%;
		float:left;
		border:5px solid #E84711;
		border-radius:50%;
		margin-top:8px;
		margin-left:100px; 	
		background-image:url("images/icon1.jpg");
		background-size:100% 140px;
	}
	.circlelink
	{
		height:100px;
        width:65%;
        float:left;
        background-color:black;                  
	    display:none;
		font-size:16px;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		color:white;
		padding:30px;
		border-radius:50%;
		margin-left:170px;
		float:left;
	}
	.circlelink
	{
		height:100px;
        width:65%;
        float:left;
        background-color:BLACK;                  
	    display:none;
		font-size:16px;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		color:white;
		padding:30px;
		border-radius:50%;
		margin-left:170px;
		float:left;
		opacity:0.8;
		
	}
	.circle1:hover>.circlelink
	{
	   display:block;
	   position:relative;	
	}
	.circle2
	{
	    height:140px;
		width:40%;
		float:left;
		border:5px solid #E84711;
		border-radius:50%;
		margin-top:8px;
		margin-left:100px; 
		background-image:url("images/icon2.png");
		background-size:100% 140px;		
    }
	.circle2:hover>.circlelink
	{
	   display:block;
	   position:relative;	
	}

	.circlebox
	{
	    height:90px;
		width:85%;
		float:left;
		margin-top:5px;
		margin-left:35px;
		text-align:center; 
		border: 0px solid black;	
	}
	circletext
	{
		color:#000;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		font-size:20px;
		font-weight:500; 
	   }
	   /*After afterh*/
	   .footer1
	{
		height:350px;
		width:100%;
		float:left;
		border:0px solid black;
		background-image:url(images/IMG-20180127-WA0060.jpg);
		background-size:100% 350px;
		background-repeat:inherit;
		background-attachment:fixed;
		opacity:0.7;
		filter:alpha(opacity=50);
	}
	 .footer12
	{
		height:350px;
		width:100%;
		float:left;
		border:0px solid black;
		margin-top:-350px;
		
	}
	.footer2
	{
		height:400px;
		width:100%;
		float:left;
		background-image:url(images/note-book-green-shadow-header.jpg);
		background-size:100% 400px;
		background-repeat:inherit;
	}
	.footer22
	{
		height:150px;
		width:100%;
		float:left;
		margin-top:20px;
		margin-left:80px;
	}
	.footerblock1
	{
		height:200px;
		width:22%;
		float:left;
		background-color:#000;
		border:1px solid #575757;
		margin-top:20px;
		margin-left:30px;
		opacity:0.5;
		
	}
	.footerblock2
	{
		height:200px;
		width:22%;
		float:left;
		margin-top:20px;
		margin-left:-22%;
		z-index:200;
		position:relative;
			}
	.footertext
	{
		height:25px;
		width:100%;
		float:left;
		margin-top:5px;
		margin-top:5px;
		text-align:center;
		font-size:20px;
		font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
		font-weight:600;
		color:white;
	}
	.footertext1
	{
		height:170px;
		width:100%;
		float:left;
		margin-top:2px;
		text-align:center;
		font-size:18px;
		font-family:"Comic Sans MS", cursive;
		font-weight:500;
		color:#FF8000;
	}
	.contactblock
	{
	    height:60px;
		width:90%;
		float:left;
		margin-top:10px;
		margin-left:35px;
		text-align:center; 	
	}
	.contactimg1
	{
		height:60px;
		width:22%;
		float:left;
		border-radius:50%;
	    background-image:url(images/ficon4.jpg);
		background-size:100% 100%;
	}
	.contactno
	{
		height:50px;
		width:60%;
		float:left;
		margin-top:3px;
		margin-left:3px;
	}
	
	.contactimg2
	{
		height:70px;
		width:80%;
		float:left;
		margin-left:30px;
		margin-top:20px;
		border:1px solid white;
		border-radius:30px;
	    background-image:url(images/ficon.jpg);
		background-size:100% 100%;
	}
	
	/* student registration form*/
	
	.sbg{
	width:100%;
	height:1000px;
	float:left;
	background-color:black;
	opacity:0.7;
	border:1px solid black;
	display:none;
	margin-top:-1540px;
	}
.sbg1{
	width:100%;
	height:1000px;
	float:left;
	margin-top:-1540px;
	z-index:200;
	position:relative;
	display:none;
	}
	.close
	{
		height:28px;
		width:5%;
		float:right;
		color:#000;
		font-size:16px;
		font-weight:500;
		margin-top:5px;
		background-image:url(images/nbg15.png);
		background-size:100% 100%;
	}
		
.sfdiv{
	width:46%;
	height:800px;
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
			 font-weight:bold;
			 font-size:26px;
			 font-style:italic;
			 
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
/*input[type='email']{
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
                    }  */    
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
					 font-size:20px;
					 font-weight:bold;
					 font-style:italic;
				}
				
	/* faculty registration form */
.bg{
	width:100%;
	height:900px;
	float:left;
	background-color:black;
	opacity:0.7;
	border:1px solid black;
	display:none;
	margin-top:-1540px;
	}
.bg1{
	width:100%;
	height:900px;
	float:left;
	margin-top:-1540px;
	z-index:200;
	position:relative;
	display:none;
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
   /* text{
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
				}*/
				
				/*faculty login*/
				
				
.flbg{
	width:100%;
	height:800px;
	float:left;
	background-color:black;
	opacity:0.6;
	border:1px solid black;
	margin-top:-1550px;
	display:none;
	}
.flbg1{
	width:100%;
	height:650px;
	float:left;
	margin-top:-650px;
	z-index:200;
	position:relative;
	display:none;
	
	}
.flfdiv{
	width:35%;
	height:450px;
	float:left;
	background-color:#CD1D6C;
	background-image:url(images/nbg11.jpg);
	background-size:100% 100%;
	margin-left:420px;
	margin-top:50px;
	box-shadow:5px 5px 5px 5px #232323;
	margin-top:-700px;
	 }
 ftext{
			 color:#FFF;
			 font-family:Georgia, "Times New Roman", Times, serif;
			 font-weight:bold;
			 font-size:26px;
			 font-style:italic;
			 
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
					 margin-top:5px;
				}

input[type='password']{
	                 width:60%;
					 height:35px;
					 border-radius:20px;
					 border:none;
					 margin-left:90px;
					  margin-top:5px;
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
					 color:white;
					 font-family:"Times New Roman", Times, serif;
					 font-size:20px;
					 vertical-align:baseline;
					 font-weight:bold;
					 font-style:italic;

				   }
				   
				   /*student login*/
				   
.slbg{
	width:100%;
	height:800px;
	float:left;
	background-color:black;
	opacity:0.6;
	border:1px solid black;
	display:none;
	margin-top:-1550px;
	}
.slbg1{
	width:100%;
	height:650px;
	float:left;
	margin-top:-650px;
	z-index:200;
	position:relative;
	display:none;
	}
.slfdiv{
	width:35%;
	height:450px;
	float:left;
	background-color:#CD1D6C;
	background-image:url(images/nbg11.jpg);
	background-size:100% 100%;
	margin-left:420px;
	margin-top:100px;
	box-shadow:5px 5px 5px 5px #232323;
	margin-top:-700px;
	 }
	 input[type='text']{
	                 width:60%;
					 height:35px;
					 border-radius:20px;
					 border:none;
					 margin-left:90px;
					  margin-top:5px;
				}
				
				
				
/*faculty pass*/
.f_pass
{
	height:130px;
	width:30%;
	float:left;
	margin-left:500px;
	background-color:#F5B838;
	margin-top:-1300px;
	padding:20px;
	position:relative;
	z-index:200;
	display:none;
	background-image:url(images/nbg1.png); 
	background-size:100% 100%;
	
}
.trans_pass
{
	height:800px;
	width:100%;
	float:left;
	background-color:black;
	opacity:0.8;
	margin-top:-1500px;
	display:none;
	
}
.trans_cn
{
	height:800px;
	width:100%;
	float:left;
	background-color:black;
	opacity:0.8;
	margin-top:-1500px;
	display:none;
	
}
.main_cn
{
	height:550px;
	width:80%;
	float:left;
	margin-left:10%;
	background-color:#B0B0B0;
	margin-top:-1450px;
	padding:20px;
	position:relative;
	z-index:200;
	display:none;

	
	
}
</style>
<body style="margin:0px;">
<div class="header">
    <div class="headerlink">
    	 
         <div class="hlogo">
         	<img src="images/9f84849c-fed5-459a-851e-e615291f2ab9.png" style="width:70%;"/>
         </div>
          <div class="hname">
          	<font style="font-size:36px; font:'Times New Roman', Times, serif;color:#FFF; font-weight:800; font-style:italic;"> Shareyourknowlege </font>
          </div>
           <div class="hlink">
           	<a><l id="l1"> Registration </l></a>
            <div class="reglink11"></div>
            <div class="reglink1">
            <script type="text/javascript">
            $(document).ready(function(e) {
                $("#nfr23").click(function(){
					//alert("hello");
					$("#f_pass").fadeIn(1000);
			$("#trans_pass").fadeIn(1000);
					});
				$('#trans_pass').click(function(){
					$("#f_pass").hide();
			$("#trans_pass").hide();
					});
					
					
					$(".close").click(function(){
					//alert("hello");
					$("#f_pass").hide();
			$("#trans_pass").hide();
					});
		
					
            });
            </script>
            	<a id="nfr23" class="reg" style="font-size:18px; font-style:italic;">Faculty Registration</a><br/><br/>
                <a id="sr1" style="font-size:18px; font-style:italic;">Student Registration</a>
           
           </div>
           
           </div>
           
           <div class="hlink2">
           	<l>Login </l>
            <div class="reglink11"></div>
            <div class="reglink1">
            	<a id="fl" style="font-size:18px; font-style:italic;">Faculty login</a><br/><br/>
                <a id="sl" style="font-size:18px; font-style:italic;">Student login</a>
           
           </div>
           </div>
           <div class="hlink" id="cu">
           	<l> contact us</l>
           </div>
           <script src="js/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(e) {
			$("#au").click(function(){
			//alert("hello");
			$("#trans_cn").fadeIn(1000);
			$("#main_cn").fadeIn(1000);
			});
			$("#trans_cn").click(function(){
			//alert("hello");
			$("#trans_cn").hide(1000);
			$("#main_cn").hide(1000);
			});
 });
</script>
           <div class="hlink" id="au">
           	<l> Aboutus </l>
           </div>
           
         
    </div>
    

    <!--<div class="headername">
        <font style="color:#FFF; text-shadow:#33FF66; font-size:45px; font-style:bold;font-weight:700; font-family:'Arial Black', Gadget,sans-serif">Thakur ShivKumarsingh Group of Institutions</font>
    </div>-->
    
    <div class="headername2">
        <font style="color:#FFF; font-size:50px; font-style:bold; font-weight:700; font-family:'Arial Black', Gadget,sans-serif; font-style:italic;">Online Tutors Ready to help 24/7</font>
    </div>
		 <center><div class="error" style="color:red; margin-bottom:-400px; font-size:36px; font-weight:bold; border:1px solid black; height:30px; width:60%;"><?php echo $error;?></div>  </center>  
      
    <!--<div class="headersearch">
        <form >
               <input type="search" name="search1" placeholder="search for tutors"/>
                <button type="button1"> Find your Tutors</button>
        </form>
    </div> -->
</div>
      <div class="marque">
    		<marquee style="font-size:24px; font-weight:200;"> Thakur Shivkumarsign Engineering College</marquee>
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      <!--After Header Part-->
      <div class="afterh">
           <div class="slider">
                 <!-- Caption Style -->
    <style> 
        .captionOrange, .captionBlack
        {
            color: #fff;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }
        .captionOrange
        {
            background: #EB5100;
            background-color: rgba(235, 81, 0, 0.6);
        }
        .captionBlack
        {
        	font-size:16px;
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
        a.captionOrange, A.captionOrange:active, A.captionOrange:visited
        {
        	color: #ffffff;
        	text-decoration: none;
        }
        a.captionOrange:hover
        {
            color: #eb5100;
            text-decoration: underline;
            background-color: #eeeeee;
            background-color: rgba(238, 238, 238, 0.7);
        }
        .bricon
        {
            background: url(../img/browser-icons.png);
        }
    </style>
    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/js/jssor.js"></script>
    <script type="text/javascript" src="js/js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
            //Swing Outside in Stairs
            {$Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 1.3, $Top: 2.5} }

            //Dodge Dance Outside out Stairs
            , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.1, 0.9], $Top: [0.1, 0.9] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

            //Dodge Pet Outside in Stairs
            , { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

            //Dodge Dance Outside in Random
            , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

            //Flutter out Wind
            , { $Duration: 1800, x: 1, y: 0.2, $Delay: 30, $Cols: 10, $Rows: 5, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $Reverse: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2050, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseOutWave, $Clip: $JssorEasing$.$EaseInOutQuad }, $Outside: true, $Round: { $Top: 1.3} }

            //Collapse Stairs
            , { $Duration: 1200, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2049, $Easing: $JssorEasing$.$EaseOutQuad }

            //Collapse Random
            , { $Duration: 1000, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $JssorEasing$.$EaseOutQuad }

            //Vertical Chess Stripe
            , { $Duration: 1000, y: -1, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $ChessMode: { $Column: 12} }

            //Extrude out Stripe
            , { $Duration: 1000, x: -0.2, $Delay: 40, $Cols: 12, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5} }

            //Dominoes Stripe
            , { $Duration: 2000, y: -1, $Delay: 60, $Cols: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: $JssorEasing$.$EaseOutJump, $Round: { $Top: 1.5} }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                }
            };

            var jssor_slider2 = new $JssorSlider$("slider2_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider2.$ScaleWidth(Math.min(parentWidth, 600));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);

            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="slider2_container" style="position: relative; width: 600px;
        height: 300px;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
            <div>
                <a u=image href="#"><img src="images/graduation.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="images/istock_000073747895_small_0-825x510.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="images/images3.jpg" /></a>
            </div>
            <div>
                <a u=image href="#"><img src="images/45558_lmw_new_stress1_100411o1-938x535.jpg" /></a>
            </div>
        </div>
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 01 css */
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            .jssorb01 {
                position: absolute;
            }

                .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 12px;
                    height: 12px;
                    filter: alpha(opacity=70);
                    opacity: .7;
                    overflow: hidden;
                    cursor: pointer;
                    border: #000 1px solid;
                }

                .jssorb01 div {
                    background-color: gray;
                }

                    .jssorb01 div:hover, .jssorb01 .av:hover {
                        background-color: #d3d3d3;
                    }

                .jssorb01 .av {
                    background-color: #fff;
                }

                .jssorb01 .dn, .jssorb01 .dn:hover {
                    background-color: #555555;
                }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url(../img/a17.png) no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
        </span>
        <a style="display: none" href="http://www.jssor.com">Carousel Slider</a>
    </div>
    <!-- Jssor Slider End -->
           </div>
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           <div class="sliderside">
                <div class="insliderside1">
                     <div class="circle2">
                     <div class="circlelink">
                     	<a id="cfr1" style="font-size:18px; font-style:italic;">Faculty Registration</a><br/><br/>
                		<a id="csr1" style="font-size:18px; font-style:italic;">Student Registration</a>
                     </div>
                     </div>
                     <div class="circlebox">
                     <circletext>Register Your Account</circletext><br/><br/>
                     <font style="font-family:'Times New Roman', Times, serif; font-size:18px;"> Getting Started and Finding an expert online <br/>Tutors who can help you is easy.Just tell us <br/>what you need help with.</font>
                     </div>
                </div>
                <div class="insliderside2">
                     <div class="circle1">
                     <div class="circlelink">
                     	
            	<br/><a id="cfl1" style="font-size:18px; font-style:italic;">Faculty login</a><br/><br/>
                		<a id="csl1" style="font-size:18px; font-style:italic;">Student login</a>
                     </div>
                     </div>
                     <div class="circlebox">
                     <circletext>Login To Your Account</circletext><br/><br/>
                      <font style="font-family:'Times New Roman', Times, serif; font-size:18px;">If you are finding a tutor to solve your query<br/>Then you are at right place<br/>Login here and connected with us.</font>
                     </div>
                     </div>
                </div>
           </div>
      </div>
      <!--footer1-->
      <div class="footer1"> </div>
      <div class="footer12">
        	<font style="font-size:36px; font:'Times New Roman', Times, serif;color:#FFF; font-weight:800;">Build yours</font>
        </div>
       <div class="footer2">
           <div class="footerblock1"></div>
           <div class="footerblock2">
                <div class="footertext">References</div>
                <div class="footertext1">
                 <headertext><a>WWW.Chegg.com</a></headertext><br/>
                 <headertext><a> WWW.tutor.com<a></headertext><br/>
                 <headertext><a> WWW.jiskha.com<a></headertext><br/>
                 <headertext<a>>WWW.assignmentmakers.com<a></headertext><br/>
                 <headertext><a>WWW.helpwithassignment.com<a></headertext><br/>
                 <headertext><a>WWW.24hoursanswer.com<a></headertext><br/>
                 </div>
           </div>
           <div class="footerblock1"></div>
           <div class="footerblock2">
               <div class="footertext">Contact Us</div>
               <div class="footertext1">
                    <div class="contactblock">
                         <div class="contactimg1"></div>
                         <div class="contactno">
                         <headertext>9754016788<headertext><br/>
                         <headertext>9777888999<headertext>
                         </div>
                    </div>
                    <div class="contactimg2"></div>
               </div>
           </div>
           <div class="footerblock1"></div>
           <div class="footerblock2">
                <div class="footertext">About Us</div>
                <div class="footertext1">
                       <headertext><br/><a>Click  here  for  the  details.</a></headertext>
                </div>
           </div>
           <div class="footerblock1"></div>
           <div class="footerblock2">
                 <div class="footertext">Stay tuned</div>
                 <div class="footertext1">
                        <headertext> <br/>Connect with us and stay in the loop. </headertext>
                 </div>
           </div>
           <div class="footer22">
                 <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/js/jssor.js"></script>
    <script type="text/javascript" src="js/js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 0,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 4,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseLinear,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 1600,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 140,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 100,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 7,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1324));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 980px; height: 100px; overflow: hidden;">
            <div><img u="image" alt="amazon" src="js/img/logo/amazon.jpg" /></div>
            <div><img u="image" alt="android" src="js/img/logo/android.jpg" /></div>
            <div><img u="image" alt="bitly" src="js/img/logo/bitly.jpg" /></div>
            <div><img u="image" alt="blogger" src="js/img/logo/blogger.jpg" /></div>
            <div><img u="image" alt="dnn" src="js/img/logo/dnn.jpg" /></div>
            <div><img u="image" alt="drupal" src="js/img/logo/drupal.jpg" /></div>
            <div><img u="image" alt="ebay" src="js/img/logo/ebay.jpg" /></div>
            <div><img u="image" alt="facebook" src="js/img/logo/facebook.jpg" /></div>
            <div><img u="image" alt="google" src="js/img/logo/google.jpg" /></div>
            <div><img u="image" alt="ibm" src="js/img/logo/ibm.jpg" /></div>
            <div><img u="image" alt="ios" src="js/img/logo/ios.jpg" /></div>
            <div><img u="image" alt="joomla" src="js/img/logo/joomla.jpg" /></div>
            <div><img u="image" alt="linkedin" src="js/img/logo/linkedin.jpg" /></div>
            <div><img u="image" alt="mac" src="js/img/logo/mac.jpg" /></div>
            <div><img u="image" alt="magento" src="js/img/logo/magento.jpg" /></div>
            <div><img u="image" alt="pinterest" src="js/img/logo/pinterest.jpg" /></div>
            <div><img u="image" alt="samsung" src="js/img/logo/samsung.jpg" /></div>
            <div><img u="image" alt="twitter" src="js/img/logo/twitter.jpg" /></div>
            <div><img u="image" alt="windows" src="js/img/logo/windows.jpg" /></div>
            <div><img u="image" alt="wordpress" src="js/img/logo/wordpress.jpg" /></div>
            <div><img u="image" alt="youtube" src="js/img/logo/youtube.jpg" /></div>
        </div>
        <a style="display: none" href="http://www.jssor.com">Carousel Slider</a>
    </div>
    <!-- Jssor Slider End -->
           </div>
      </div>
      
</div>
</body>
<div class="sbg"></div>
    <div class="sbg1">
         <div class="sfdiv">
         <div class="close"><font style="color:#000;font-size:20px;font-weight:500; text-align:center; "></font></div>
               <form action="home.php" method="post">
                                 <div class="heading">
                                      <text>     Students Registration Form</text>
                                 </div>
                                     
                                      <div class="t1"><t1>Name</t1></div><br/>
                                      <div class="text1">
                                      <input type="text1" placeholder="    First Name"  name="fname"  required="required"/>
                                      <input type="text1" placeholder="    Last Name"  name="lname"  required="required"/>
                                      </div>
                                      <br/>
                                       <div class="t1"> <t1>Enrollment Number</t1></div><br/>
                                      <input type="text2" placeholder="    Enrollment No."  name="enrollmentno" required=                                        "required" pattern="(?=.*\d)(?=.*[c,C])(?=.*[s,S]).{12}"/>
                                      <br/>
                                        <div class="t1"><t1>E-mail</t1></div><br/>
                                      <input type="email" placeholder="    E-mail Address"  name="email"  required="required" style="	                 width:72%;height:35px; border-radius:20px; border:none; margin-left:85px"/>
                                      <br/>
                                       <div class="t1"> <t1>Password</t1></div><br/>
                                      <input type="password" placeholder="    Password" name="password" id="password" required="required"  style="width:72%; height:35px;
border-radius:20px; border:none; margin-left:85px;"/>
                                      <br/>
                                       <div class="t1"> <t1>Confirm Password</t1></div><br/>
                                       <input type="password" placeholder="    Confirm Password" name="cpassword"id="cpassword"  style="width:72%; height:35px;
border-radius:20px; border:none; margin-left:85px;" onBlur="cpw()"/>
                                      <br/>
                                       <div class="t1"> <t1>Current Year</t1></div><br/>
                                       <input type="text" placeholder="    Admission year" required="required" name="adyear"  pattern="{1-4}"style="width:72%;"/>
                                      <br/>
                                        <div class="t1"><t1>Contact Number</t1></div><br/>
                                      <input type="text2" placeholder="    Contact No."  name="contactno" required="required"                                      pattern="[0-9]{10}"/>
                                      <br/>
                                       <div class="t1"> <t1>Birthday</t1></div><br/>
                                       <input type="date" name="bday"/>
                                       <br/>
                                         <div class="t1"><t1>Gender</t1></div><br/>
                                             <div class="text1">
                                             <input type="radio" name="g" value="male"/><t1>Male</t1>
                                             <input type="radio" name="g" value="female"/><t1>Female</t1>
                                              <input type="radio" name="g" value="other"/><t1>Other</t1>
                                              </div>
                                        <br/>
                                     <input type="submit" value="Submit" onClick="confirm('Are you sure you want to submit')"  style=" width:25%; height:31px; background-color:#00F; border:none;border-radius:20px; margin-left:400px; color:white; font-size:24px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;"/>
                                     <br/>
                                     
                                   
                     </form>
         </div>
    </div>
    
   <!--Faculty registration form -->
   
   <div class="bg"></div>
    <div class="bg1">
         <div class="fdiv">
         <div class="close"><font style="color:#000;font-size:20px;font-weight:500; text-align:center;"></font></div>
               <form action="home.php" method="post">
                                 <div class="heading">
                                      <text>Faculty Registration Form</text>
                                 </div>
                                     
                                      <div class="t1"><t1>Name</t1></div><br/>
                                      <div class="text1">
                                      <input type="text1" placeholder="    First Name"  name="fname1"  required="required"/>
                                      <input type="text1" placeholder="    Last Name"  name="lname"  required="required"/>
                                      </div>
                                      <br/>
                                        <div class="t1"><t1>E-mail</t1></div><br/>
                                      <input type="email" placeholder="    E-mail Address"  name="email"  required="required" style="	                 width:72%;height:35px; border-radius:20px; border:none; margin-left:85px"/>
                                      <br/>
                                       <div class="t1"> <t1>Password</t1></div><br/>
                                      <input type="password" placeholder="    Password" name="password" required="required" id="password"  style="width:72%; height:35px;
border-radius:20px; border:none; margin-left:85px;"/>/>
                                      <br/>
                                       <div class="t1"> <t1>Confirm Password</t1></div><br/>
                                       <input type="password" placeholder="    Confirm Password" id="cpassword" name="cpassword"   style="width:72%; height:35px;
border-radius:20px; border:none; margin-left:85px;" onBlur="cpw()"/>
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
                                     <input type="submit"  value="Submit" onClick="confirm('Are you sure you want to submit')" style=" width:25%; height:31px; background-color:#FFAEFF;border:none;
border-radius:20px; margin-left:400px; color:black; font-size:24px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">
                                     <br/>
                                     
                                   
                     </form>
         </div>
    </div>
    <!--faculty login -->
   <div class="flbg"></div>
    <div class="flbg1">
         <div class="flfdiv">
         <div class="close"><font style="color:#000;font-size:20px;font-weight:500; text-align:center;"></font></div>
              <form action="home.php" method="post">
                                 <div class="fheading">
                                
                                      <ftext>Faculty Login Form</text>
                                 </div>
                                        <div class="ft3"><ft3>E-mail</ft3></div><br/>
                                      <input type="email" placeholder="    E-mail Address"  name="email1" required=                                        "required" />
                                      <br/>
                                       
                                      <div class="ft3"><ft3>Password</ft3></div><br/>
                                      <input type="password" placeholder="    Password" name="pw" required="required"/>
                                      <br/>
                                      
                                     <div class="ft1">
                                          <ft1>Forgot Your Password?</t1>
                                     </div>
                                     
                                     <input type="submit"  value="Log In" style="width:60%;height:35px;background-color:#00F;border:none;margin-top:20pxborder-radius:20px; margin-left:90px; border-radius:20px;color:white; font-size:18px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">
                                     <br/>
                                     
                                    <div class="ft2">
                                         <ft1>Not a member?<ft2>Sign up now!</ft2></ft1>
                                     </div>
                     </form>
         </div>
    </div>
    
    <!--student login-->
      <script type="text/javascript">
            $(document).ready(function(e) {
                $(".close").click(function(){
					//alert("hello");
					$(".slbg").hide();
			$(".slbg1").hide();
					});
			});
					</script>
    
    <div class="slbg"></div>
    <div class="slbg1">
         <div class="slfdiv">
         <div class="close" id="clo"><font style="color:#000;font-size:20px;font-weight:500; t"></font></div>
                       <form action="home.php" method="post">
                                 <div class="fheading">
                                      <ftext>Students Login Form</text>
                                 </div>
                                        <div class="ft3"><ft3>Enrollment N0.</ft3></div><br/>
                                      <input type="text" placeholder="    Enrollment No."  name="eno" required=                                        "required" pattern="[0-9 A-Z a-z]{12}"/>
                                      <br/>
                                       
                                      <div class="ft3"><ft3>Password</ft3></div><br/>
                                      <input type="password" placeholder="    Password" name="pw" required="required"/>
                                      <br/>
                                      
                                     <div class="ft1">
                                          <ft1>Forgot Your Password?</ft1>
                                     </div>
                                     
                                     <input type="submit"  value="Log In" style="width:60%;height:35px;background-color:#00F;border:none;margin-top:20pxborder-radius:20px; margin-left:90px; border-radius:20px;color:white; font-size:18px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">
                                     <br/>
                                     
                                    <div class="ft2">
                                         <ft1>Not a member?<t2>Sign up now!</ft2></ft1>
                                     </div>
                     </form>
         </div>
    </div>


<!--faculty password form -->
<div class="trans_pass" id="trans_pass"></div>
<div class="f_pass" id="f_pass">
 <div class="close" style="margin-top:-20px; margin-right:-20px;"><font style="color:#000;font-size:20px;font-weight:500; text-align:center; "></font></div>
 <div class="f_pass_head" style="height:50px; width:100%; font-size:28px; font-style:italic; font-weight:bold">
                                      <center>Enter the Password</center>
                                 </div>
                                 
<form action="home.php" method="post">
<input type="password" name="m_password" placeholder="Enter the password" style="border:1px solid black; font-size:16px; padding:4px;"/>
<input type="submit" name="f_pass_sub" id="f_pass_sub" value="submit" style="height:30px; width:30%; font-size:18px; font-style:bold; background-color:#00F; border-radius:13px; color:white; margin-left:250px; margin-top:10px; border:none;"/>
</form>
</div>

<!--About us -->
<div class="trans_cn" id="trans_cn"></div>
<div class="main_cn" id="main_cn">

<div class="my_name" style="height:500px; width:50%; margin-left:40px; margin-top:30px; font-size:24px; font-style:italic; font-weight:bold;">
	Neha Patel<br/>
    BE(Computer science)<br/>
    Tsec Burhanpur(m.p.)<br/><br/>
    
    Kratika Mahajan<br/>
    BE(Computer science)<br/>
    Tsec Burhanpur(m.p.)<br/>
    </div>
</div>


</html>