<?php
include "db_user.php";
//session_start();
 		 $fn=$_SESSION['fname'];
		 $ln=$_SESSION['lname'];
		 $con=$_SESSION['con'];
		 $bd=$_SESSION['bday'];
		 $ps=$_SESSION['pass'];
		 $em=$_SESSION['email'];
		 $en=$_SESSION['enrollmentno'];
		 $cy=	$_SESSION['current_y'];
		 //echo $_SESSION['con'];
	 
if($_SESSION['enrollmentno']==false){header("location:home.php");}
 //database connect
$obj3=new db();
$res3=$obj3->dbcon();

//user obj
$obj2=new user; 

$sno=$_SESSION['sno'];
	//page connectivity
if(isset($_GET['page'])){
	$page=$_GET['page'];
	}
	else{
	 $page="query";
		}
		//logout
if(@($_GET["page"]=="logout")){
  $obj2=new user; 
 $logout1=$obj2->f_logout();
 if($logout1){
	 header("location:home.php");}else{ echo "not loged out";}
 }
 //upload image
 $res="";
 if(isset($_FILES['f1']))
 {
	 //echo $sno;
	 
	 $res=$obj2->imgup($sno);
	 //echo $sno;
	 if($res==1)
	 {
		 
		 echo "uploaded";
	 }
	 //else echo $res;
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
	 }
	 
	 //edit profile
	 
	 	
	 if(@($_POST['sub']))
	 {
		$fn=$_POST['fname']; 
		$ln=$_POST['lname']; 
		$em=$_POST['email']; 
		$pass=$_POST['password']; 
		$con=$_POST['contactno']; 
		$cy=$_POST['current_y'];
		$bd=$_POST['bday']; 
		
		$up=mysql_query("UPDATE student SET fname='$fn',lname='$ln',email='$em',password='$pass',contactno='$con',current_y='$cy',birthday='$bd' WHERE enrollmentno='$en'");
	 }
	
	
	
	//notification 
	
	$note="";
	$sel=mysql_query("select * from notice where type='N' or type='A' order by n_sno desc");
	if(mysql_num_rows($sel)>0)
	{
		while($data=mysql_fetch_assoc($sel))
		{
			if($data['type']=='N')
			{
			$note .="<div class='notify_in'>";
			$note .= $data['n_name']." posted a notice ".$data['notice']."<br/>";
			$note .="</div>";
			//$note .= "Assignment".$data['assignment']."<br/>";
			}
			if($data['type']=='A')
			{
				$note .= "<div class='notify_in'>";
			$note .= $data['n_name']." posted a Assignment ".$data['assignment']."<br/>";
			$note .= "</div>";
			}
			
		}
	}
	/*$ass="";
	$sel1=mysql_query("select * from notice where type='A' order by n_sno desc");
	if(mysql_num_rows($sel1)>0)
	{
		while($data1=mysql_fetch_assoc($sel1))
		{
			//$note .= "notice".$data['notice']."<br/>";
			$ass .= "<div class='notify_in'>";
			$ass .= $data1['n_name']." posted a Assignment ".$data1['assignment']."<br/>";
			$ass .= "</div>";
		}
	}*/
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" s"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>profile page</title>
<link rel="stylesheet" href="style_profile.css" />
<style>

</style>
</head>

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
				$('.edit_trans').fadeIn(1000);
				});
			$('#edit_pro').click(function(){
				
				$('.edit_form').fadeIn(1000);
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
					url:'ajax_insert.php',
					type:'post',
					async:false,
					data:{'insert':1},
					success: function(){
					}
					
					});
				
				});
				
			/*$(".p_headerdownin").click(function(){
			$(this).css("background-color","red");
			},
			function(){
			$(this).css("background-color","black");
			});*/
			
			
			function notification()
			{
				$.ajax({
					url:'ajax_get.php',
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
      				<?php echo $str; echo "<font style='color:white; font-size:26px;'>".$res."</font>";?>
          </div>
          <div class="p_name"><?php echo $_SESSION['fname']."&nbsp;&nbsp;"; echo $_SESSION['lname'];?> </div>
          <div class="up_image">Update Image</div>
             <div class="upform">
            <form action="profile.php" method="post" enctype="multipart/form-data" name="f">
            	<input type="file" name="f1" />
                <input type="submit" value="Upload" name="submit" style="font-size:18px; height:30px; width:40%; margin-top:5px;"/>
            </form>
            </div>
           <div class="slidedown">
          
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
          <a href="?page=query"> <div class="p_headerdownin">
                   <p_downtext>Query</p_downtext>
              </div></a>
              <a href="?page=notice"><div class="p_headerdownin">
                    <p_downtext>NOTICE</p_downtext>
              </div></a>
             <a href="?page=tutors"> <div class="p_headerdownin">
                   <p_downtext>TUTORS</p_downtext>
              </div></a>
             <a href="?page=s_assignment"> <div class="p_headerdownin">
                    <p_downtext>ASSIGNMENT</p_downtext>
              </div></a>
              <a href="?page=s_notes"> <div class="p_headerdownin">
                    <p_downtext>Notes</p_downtext>
              </div></a>
          </div>
     </div>
     <div class="p_main">
          <div class="p_section">
          <div class="p_sectionbox">
                     <div class="p_sectionbox1">
                         <a href="?page=principal_main"><section_txt style=" margin-top:200px;">Principal</section_txt><br/></a>
                     </div>
                </div>
          		<div class="p_sectionbox">
                     <div class="p_sectionbox1">
                         <a href="?page=query"><section_txt style=" margin-top:200px;">Query</section_txt><br/></a>
                     </div>
                </div>
                <div class="p_sectionbox">
                   <div class="p_sectionbox1">
                          <a href="?page=notice">Notice<br/></a>
                    </div>
                </div>
                <div class="p_sectionbox">
                     <div class="p_sectionbox1">
                         <a href="?page=tutors">Tutors<br/></a>
                     </div>
                </div>
                <div class="p_sectionbox">
                      <div class="p_sectionbox1">
                       <a href="?page=s_assignment">Assignment</a>
                      </div>
                </div>
                 <div class="p_sectionbox">
                      <div class="p_sectionbox1">
                       <a href="?page=s_notes">Notes</a>
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
            
            <form action="profile.php" method="post">
            <div class="heading"> <text>Edit Your Profile</text> </div>
             <div class="t1"><t1>Name</t1></div><br/>
                 <div class="text1">
                     <input type="text1" placeholder="    First Name"  name="fname" value="<?php echo $fn; ?>"  required="required"/>
                     <input type="text1" placeholder="    Last Name"  name="lname" value="<?php echo $ln; ?>"  required="required"/>
                  </div>
                  <br/>
                   <div class="t1"><t1>E-mail</t1></div><br/>
                     <input type="email" placeholder="    E-mail Address"  name="email" value="<?php echo $em; ?>"  required="required"/>
                     <br/>
                   <div class="t1"> <t1>Password</t1></div><br/>
                     <input type="password" placeholder="    Password" name="password" value="<?php echo $ps; ?>"  required="required"/>
                     <br/>
                  <div class="t1"><t1>Contact Number</t1></div><br/>
                     <input type="text2" placeholder="    Contact No."  name="contactno"  value="<?php echo $con; ?>" required="required" pattern="[0-9]{10}"/>
                     <br/>
                     <div class="t1"><t1>current year</t1></div><br/>
                     <input type="text2" placeholder="    current year"  name="current_y"  value="<?php echo $cy; ?>" required="required"/>
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