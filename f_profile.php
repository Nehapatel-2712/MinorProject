<?php
//session_start();
include "db_user.php";
 		 $fn=$_SESSION['f_fname'];
		 $ln=$_SESSION['f_lname'];
		 $con=$_SESSION['f_con'];
		 $bd=$_SESSION['f_bday'];
		 $ps=$_SESSION['f_pass'];
		 $em=$_SESSION['f_email'];
		 //echo $con;
		 
		  //database connect
$obj3=new db;
$res3=$obj3->dbcon();
//user obj
$obj2=new user; 

//$sno=$_SESSION['sno'];
$f_sno=$_SESSION['f_sno'];
//echo $f_sno;
	//page connectivity
if(isset($_GET['page'])){
	$page=$_GET['page'];
	}
	else{
	 $page="f_query";
		}
		//logout
if(@($_GET["page"]=="logout")){
  $obj2=new user; 
 $logout1=$obj2->f_logout();
 if($logout1){
	 header("location:home.php");}else{ echo "not loged in";}
 }
 //upload image
 
 /*if(isset($_FILES['f1']))
 {
	 $res=$obj2->imgup($sno);
	 //echo $sno;
	 if($res)
	 {
		 echo "uploaded";
	 }
	 else echo "not uploaded";
 }
	 $res1=mysql_query("select image from student where s_sno='$sno'");
	 
	 
	 $str="";
	 if(mysql_num_rows($res1)>0)
	 {
		// echo "hello";
		 $data=mysql_fetch_assoc($res1);
		 //$_SESSION['sno']=$data['sno'];
	 //echo $_SESSION['sno'];
		$str="<img src='profile/".$data['image']."' height='180px' width='100%' style='border-radius:50%'/>";
	 }
	 else
	 {
		 echo "upload new image";
	 }*/
	 
	 //post query
	//uplode faculty image
	
	if(isset($_FILES['f2']))
	{
		$f_res=$obj2->f_imgup($f_sno);
		//echo $f_sno;
		if($f_res)
		{
			echo "uploaded";
		}
		else
		{
			echo "not uploaded";
		}
	}
		$sel=mysql_query("select f_image from faculty where f_sno='$f_sno'");
		//echo "select f_image from faculty where f_sno='$f_sno'";
		$str="";
		if(mysql_num_rows($sel)>0)
		{
			//echo "hello";
			$data=mysql_fetch_assoc($sel);
			$str="<img src='f_profile/". $data['f_image']."' height='180px' width='100%' style='border-radius:50%'/>";
		}
	else
	{
		echo "uploade new image";
	}
	
	//edit profile
	
	if(@($_POST['sub']))
	 {
		$fn=$_POST['fname']; 
		$ln=$_POST['lname']; 
		$pass=$_POST['password']; 
		$con=$_POST['contactno']; 
		$bd=$_POST['bday']; 
		
		$up=mysql_query("UPDATE faculty SET fname='$fn',lname='$ln',password='$pass',contactno='$con',birthday='$bd' WHERE email='$em'");
	 }
	
	
	
	//notification 
	
	$note="";
	$sel=mysql_query("select * from query where ans_id='$em' order by sno desc");
	if(mysql_num_rows($sel)>0)
	{
		while($data=mysql_fetch_assoc($sel))
		{
			$note .="<div class='notify_in'>";
			$note .= $data['s_name']." asked a query ".$data['query']."<br/>";
			$note .="</div>";
		}
	}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>profile page</title>
<link rel="stylesheet" href="style_profile.css" />
</head>
<style type="text/css">
 /*a:link{
        text-decoration:none;
       } 
a:visited{
       text-decoration:none;
	   color:#FEBCD0;
       }
a:hover{
       text-decoration:underline;
       color:black;
       }
a:active{
       color:#FEBCD0;
	   background-color:black;
       }
.p_body{
	width:100%;
    height:3100px;
	float:left;
	border:2px solid black;
     }
.p_header{
	width:100%;
    height:300px;
	float:left;
	/*background-image:url(images/nbg11.jpg);
	background-size:100% 100%;
	background-color:#a4d4ff;
	   }
.p_top{
	width:30%;
    height:50px;
	float:left;
	margin-top:10px;
	margin-left:69%;
	border:0px solid black;
	}
.p_topbox{
	width:24.5%;
    height:45px;
	float:left;
	border:0px solid pink;
	text-align:left;	}
p_topboxtext{
	color:white;
	font-family:"Times New Roman", Times, serif;
	font-size:26px;
	font-weight:600;
		}
.p_photo{
	width:14%;
    height:180px;
	float:left;
	border-radius:50%;
	background-size:100% 100%;
	margin-top:5px;
	margin-left:-215px;
	border:1px solid black;
	}
.p_dummypic
{
	width:14%;
    height:180px;
	float:left;
	border-radius:50%;
	background-image:url(images/person-dummy.jpg);
	background-size:100% 100%;
	margin-top:5px;
	margin-left:20px;
	border:1px solid black;
}
.p_name{
	width:30%;
    height:50px;
	float:left;
	margin-left:5px;
	margin-top:90px;
	text-align:left;
	color:white;
    font-family:Georgia, "Times New Roman", Times, serif;
	font-size:28px;
	font-weight:900;
	border:0px solid black;
}
.p_main{
	width:100%;
    height:2550px;
	float:left;
	}
.p_section{
	width:19%;
    height:2550px;
	float:left;
	background-color:#195dd6;

	}
.p_sectionbox{
	width:100%;
    height:85px;
	float:left;
	border-bottom:1px solid #FEBCD0;
	

	}
.p_sectionbox1{
	width:70%;
    height:40px;
	float:left;
	margin-top:25px;
	margin-left:80px;
	color:#FEBCD0;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-weight:700;
	font-size:28px;
	text-align:left;
	border:0px solid #3F0;

	}
.p_aside{
	width:81%;
    height:2550px;
	float:left;
	border:0px solid black;
	}
.p_headerdown1{
	width:82%;
    height:50px;
	float:left;
	background-image:url(images/nbg11.jpg);
	background-size:100% ;
	margin-top:px;
	margin-left:18%;
	opacity:0.5;
	border:0px solid #3F0;
	 }
.p_headerdown2{
	width:82%;
    height:40px;
	float:left;
	margin-top:-40px;
	margin-left:18%;
	position:relative;
	z-index:200;
	border:0px solid black;
	 }
.p_headerdownin{
	width:18.2%;
    height:30px;
	float:left;
	text-align:center;
	padding:10px;
	margin-top:-10px;
	border:0px solid black;
	 }
.p_headerdownin:hover{
   background-color:#FD7966;
	         }
p_downtext{
	color:#FECDD6;
	font-family:"Lucida Console", Monaco, monospace;
	font-size:24px;
	font-weight:600;
	}
.p_footer{
	width:100%;
    height:240px;
	float:left;
	background-color:blue;
     }*/
</style>
<script src="js/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(e){
		$(".setting").click(function(){
			$(".slidedown").slideDown(500);
			});
			
			$(".p_header").click(function(){
			$(".slidedown").hide();
			});
			$('#edit_pro').click(function(){
				$('.edit_trans').slideDown(100);
				});
			$('#edit_pro').click(function(){
				
				$('.edit_form').slideDown(100);
				});
			$('.edit_trans').click(function(){
				$('.edit_trans').hide();
				});
			$('.edit_trans').click(function(){
				
				$('.edit_form').hide();
				});
			$('.up_image').click(function(){
				
				$('.upform').toggle(700)
				});
			$('.bellicon').click(function(){
				$('.notify').toggle(50);
				
				$.ajax({
					url:'f_ajax_insert.php',
					type:'post',
					async:false,
					data:{'insert':1},
					success: function(){
					}
					
					});
				
				});
				
			function notification()
			{
				$.ajax({
					url:'f_ajax_get.php',
					type:'post',
					async:false,
					data:{'insert':1},
					success: function(data){
						$('.notify_count').html(data);
					}
					
					});
			}
			notification();
		});
</script>
<body style="margin:0PX;">
 <?php //echo $_SESSION['fname']; echo $_SESSION['lname']; echo "  email:".$_SESSION['email'];?>
  <?php //echo $_SESSION['fname']; echo $_SESSION['lname'];echo $_SESSION['lname']; echo "  enrollmentno:".$_SESSION['enrollmentno']; echo $sno;?>
  <?php //echo $fname; echo $enrollmentno; ?> 
<div class="p_body">
     <div class="p_header">
          <div class="p_top">
                 <div class="p_topbox"></div>
                 <div class="p_topbox">
                 	<div class="setting"></div>
                 </div>
                 <div class="p_topbox">
                    <div class="bellicon"></div>
                    <div class="notify_count"></div>
                 </div>
                 <div class="p_topbox"><a href="?page=logout"><p_topboxtext>logout</p_topboxtext></a></div>
          </div>
          <div class="p_dummypic">
          	
          </div>
         
          <div class="p_photo">
      				<?php echo $str;?>
          </div>
          <div class="p_name"><?php echo $_SESSION['f_fname']."&nbsp;&nbsp;"; echo $_SESSION['f_lname'];?> </div>
          
          <div class="up_image">Update Image</div>
             <div class="upform">
            <form action="f_profile.php" method="post" enctype="multipart/form-data" name="f">
            	<input type="file" name="f2" />
                <input type="submit" value="Upload" name="submit" style="font-size:18px; height:30px; width:40%; margin-top:5px;"/>
            </form>
            </div>
           <div class="slidedown">
            <div class="slidedown_box">
          	<!--<form action="f_profile.php" method="post" enctype="multipart/form-data" name="f">
            	<input type="file" name="f2" />
                <input type="submit" value="Upload" name="submit" />
            </form>-->
            </div>
            <div class="slidedown_box" id="edit_pro"><font>Edit Profile</font></div>
            </div>
             <div class="notify">
            <?php echo $note; ?>
            <?php //echo $ass; ?>
            </div>
            
            
          <div class="p_headerdown1"></div>
          <div class="p_headerdown2">
           <a href="?page=principal_main"> <div class="p_headerdownin">
                   <p_downtext>PRINCIPAL</p_downtext>
              </div></a>
          <a href="?page=f_query"> <div class="p_headerdownin">
                   <p_downtext>QUERY</p_downtext>
              </div></a>
              <a href="?page=f_notice"><div class="p_headerdownin">
                    <p_downtext>NOTICE</p_downtext>
              </div></a>
             <a href="?page=f_tutors"> <div class="p_headerdownin">
                   <p_downtext>TUTORS</p_downtext>
              </div></a>
             <a href="?page=f_assignment"> <div class="p_headerdownin">
                    <p_downtext>ASSIGNMENT</p_downtext>
              </div></a>
               <a href="?page=f_notes"> <div class="p_headerdownin">
                    <p_downtext>NOTES</p_downtext>
              </div></a>
          </div>
     </div>
     <div class="header_hover"></div>
     <div class="p_main">
          <div class="p_section">
           <div class="p_sectionbox">
                      <div class="p_sectionbox1">
                       <a href="?page=principal_main" style="color:#FEBCD0;">Principal</a>
                      </div>
                </div>
          		<div class="p_sectionbox">
                     <div class="p_sectionbox1">
                         <a href="?page=f_query">Query<br/></a>
                     </div>
                </div>
                <div class="p_sectionbox">
                   <div class="p_sectionbox1">
                          <a href="?page=notice">NOTICE<br/></a>
                    </div>
                </div>
                <div class="p_sectionbox">
                     <div class="p_sectionbox1">
                         <a href="?page=f_tutors">Tutors<br/></a>
                     </div>
                </div>
                <div class="p_sectionbox">
                      <div class="p_sectionbox1">
                       <a href="?page=f_assignment">Assignment</a>
                      </div>
                </div>
               <div class="p_sectionbox">
                      <div class="p_sectionbox1">
                       <a href="?page=f_notes">Notes</a>
                      </div>
                </div>
                <div class="p_sectionbox">
                      <div class="p_sectionbox1">
                       <a href="?page=p_query">Personal query</a>
                      </div>
                </div>
               
          </div>
          <div class="p_aside">
               <?php
                    include $page.".php";
               ?>
          </div>
     </div>
               <div class="p_footer"></div>

</div>
</body>
<div class="edit_trans"></div>
            <div class="edit_form">
            
            <form action="f_profile.php" method="post">
            <div class="heading"> <text>Edit Your Profile</text> </div>
             <div class="t1"><t1>Name</t1></div><br/>
                 <div class="text1">
                     <input type="text1" placeholder="    First Name"  name="fname" value="<?php echo $fn; ?>"  required="required"/>
                     <input type="text1" placeholder="    Last Name"  name="lname" value="<?php echo $ln; ?>"  required="required"/>
                  </div>
                  <br/>
              
                   <div class="t1"> <t1>Password</t1></div><br/>
                     <input type="password" placeholder="    Password" name="password" value="<?php echo $ps; ?>"  required="required"/>
                     <br/>
                  <div class="t1"><t1>Contact Number</t1></div><br/>
                     <input type="text2" placeholder="    Contact No."  name="contactno"  value="<?php echo $con; ?>" required="required" pattern="[0-9]{10}"/>
                     <br/>
                  <div class="t1"> <t1>Birthday</t1></div><br/>
                     <input type="date" name="bday" value="<?php echo $bd; ?>" />
                    <br/>
                    <br/>
                    <input type="submit" name="sub" value="submit"/>
                     <br/>
            </form>
            </div>
</html>