<?php 
error_reporting(0);
$obj2=new user;
		$fetch=$obj2->getlist();
		$str=0;
		if($fetch)
		{
			if(count($fetch)>0)
			{
				foreach($fetch as $key=>$data)
				{
					$str .="<option value='".$data['email']."'>".$data['fname']." ".$data['lname']."</option>";
				}
			}
			else echo "no result found 1";
		}
		else echo "no result found 2";
		


	 if(isset($_POST['q1']))
	 {
		 
		 //echo "same page";
		//$query=$_POST['q1'];
		$fname=$_SESSION['fname'];
		$lname=$_SESSION['lname'];
		$enrollmentno=$_SESSION['enrollmentno'];
		$email=$_POST['select'];
		$s_name=$fname." ".$lname;
		//echo $data['email'];
		//if(isset($_POST['submitquery']))
		//{
			$query=$_POST['q1'];
			//$f_name=$_POST['ans_name'];
		//}
		 $result=$obj2->t_query($fname,$lname,$enrollmentno,$query,$email,$f_name);
		 
	 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>tutors</title>
</head>
<style>
	/*.header
	{
		height:250px;
		width:100%;
		float:left;
		border:0px solid black;
		background-image:url(images/education-header.jpg);
		background-size:100% 250px;
	}
	.headerbox
	{
		
		height:100px;
		width:50%;
		float:left;
		border:0px solid black;
		margin-left:40px;
		margin-top:40px;
		padding-left:90px;
		padding-top:30px;
	}*/
	.main
	{
		height:2400px;
		width:73%;
		float:left;
		border:0px solid black;
		
	}
	.box
	{
		height:300px;
		width:40%;
		float:left;
		border:0px solid black;
		margin-left:40px;
		margin-top:30px;
		
		
	}
	.box:hover
	{
		height:300px;
		width:40%;
		float:left;
		border:0px solid black;
		margin-left:40px;
		margin-top:30px;
		background-color:#A1A1A1
		
		
	}
	.circle
	{
		height:160px;
		width:50%;
		float:left;
		border:7px solid black;
		margin-left:75px;
		margin-top:30px;
		border-radius:50%;
		border-color:#FF5C0F;
		
	}
	.namebox
	{
		height:70px;
		width:95%;
		float:left;
		border:0px solid black;
		margin-left:7px;
		margin-top:5px;
		border-color:#F63;
	}
	d
	{
		font-size:18px;
		font-family:Arial, Helvetica, sans-serif;
		font-style:italic;
		color:#000;
		padding:62px;
	}
	links
	{
		font-size:18px;
		font-family:Arial, Helvetica, sans-serif;
		font-style:italic;
		color:#000;
		padding:50px;
	}
		
	.aside
	{
		height:2400px;
		width:26%;
		float:left;
		border-left:2px solid black;
	
	}
	.asidebox1
	{
		height:270px;
		width:96%;
		float:left;
		border:0px solid black;
		margin-left:10px;
		background-color:#D6D6D6;
		margin-top:10px;
	}
	
	
	.facultydiv
	{
		height:50px;
		width:60%;
		float:left;
		margin-left:20px;
		border:0px solid #000;
		margin-top:10px;
	}
	.buttondiv
	{
		height:40px;
		width:50%;
		float:left;
		margin-top:10px;
		border:0px solid #000;
		margin-left:110px;
	}
	textarea
	{
		font-size:20px;
		font-weight:bolder;
		padding:10px;
		height:120px;
		width:90%;
		margin-left:5%;
		border-radius:12px;
		border:2px solid #000;
		border-style:double;
		
	}
	/*.footer
	{
		height:200px;
		width:100%;
		float:left;
		border:1px solid black;
	}*/
	




</style>

<body>
	<!--<div class="header">
    		<div class="headerbox">
            		<font style="color:#000; font-size:60px; font-weight:500; font-style:italic;">Find Your Tutors</font>
            </div>
    </div>-->
    <div class="main">
    	<div class="box">
        	<div class="circle">
            	<img src="images/kb.jpg" style="height:160px; width:100%; border-radius:50%;"/>
            </div>
            <div class="namebox">
            	<d> Prof.kunal Batra </d><br/>
                <d>Specialization : TOC </d><br/>
                <links><a> click here for more detail</a></links>
            </div>
        </div>
        <div class="box">
        	<div class="circle">
            	<img src="images/Screenshot-2018-2-4 Professor Jayesh - Google+.jpg" style="height:160px; width:100%; border-radius:50%;"/>
            </div>
             <div class="namebox">
             	<d> Prof.Jayesh Umre </d><br/>
                <d>Specialization : ADA </d><br/>
                <links><a> click here for more detail</a></links>
             </div>
        </div>
        <div class="box">
        	<div class="circle">
            	<img src="images/km.jpg" style="height:160px; width:100%; border-radius:50%;"/>
            </div>
             <div class="namebox">
             	<d> Prof.krishna Mahajan </d><br/>
                <d>Specialization : DBMS </d><br/>
                <links><a> click here for more detail</a></links>
             </div>
        </div>
        <div class="box">
        	<div class="circle">
            	<img src="images/am.jpg" style="height:160px; width:100%; border-radius:50%;"/>
            </div>
             <div class="namebox">
             	<d> Prof.Arpit Maheshwari </d><br/>
                <d>Specialization : CGMM </d><br/>
                <links><a> click here for more detail</a></links>
             </div>
        </div>
         <div class="box">
         	<div class="circle">
            	<img src="images/cs.jpg" style="height:160px; width:100%; border-radius:50%;"/>
            </div>
             <div class="namebox">
             	<d> Prof.Chetan Sawaldekar </d><br/>
                <d>Specialization : PHP </d><br/>
                <links><a> click here for more detail</a></links>
             </div>
         </div>
          <div class="box">
          	<div class="circle">
            	<img src="images/rp.jpg" style="height:160px; width:100%; border-radius:50%;"/>
            </div>
             <div class="namebox">
             	<d> Prof.Rahul Patil </d><br/>
                <d>Specialization : PPL </d><br/>
                <links><a> click here for more detail</a></links>
             </div>
          </div>
           <div class="box">
           	<div class="circle">
            	<img src="images/vy.jpg" style="height:160px; width:100%; border-radius:50%;"/>
            </div>
             <div class="namebox">
             	<d> Prof.Vikas Yadav </d><br/>
                <d>Specialization : IOT </d><br/>
                <links><a> click here for more detail</a></links>
             </div>
           </div> 
            <div class="box">
           	<div class="circle">
            	<img src="" style="height:160px; width:100%; border-radius:50%;"/>
            </div>
             <div class="namebox">
             	<d> Prof.Swapnil Gupta </d><br/>
                <d>Specialization : CN </d><br/>
                <links><a> click here for more detail</a></links>
             </div>
           </div> 
           <div class="box">
           	<div class="circle">
            	<img src="" style="height:160px; width:100%; border-radius:50%;"/>
            </div>
             <div class="namebox">
             	<d> Prof.Varsha Peshwani </d><br/>
                <d>Specialization : DS </d><br/>
                <links><a> click here for more detail</a></links>
             </div>
           </div>
            <div class="box">
            	<div class="circle">
                	<img src="" style="height:160px; width:100%; border-radius:50%;"/>
                </div>
                 <div class="namebox">
                 	<d> Prof.Nitu Bari </d><br/>
                <d>Specialization :  </d><br/>
                <links><a> click here for more detail</a></links>
                 </div>
            </div>
             <div class="box">
             	<div class="circle">
                	<img src="images/yk.jpg" style="height:160px; width:100%; border-radius:50%;"/>
                </div>
                 <div class="namebox">
                 	<d> Asst Prof.Yogesh Kirar </d><br/>
                <d>Specialization :  </d><br/>
                <links><a> click here for more detail</a></links>
                 </div>
             </div>
              <div class="box">
             	<div class="circle">
                	<img src="" style="height:160px; width:100%; border-radius:50%;"/>
                </div>
                 <div class="namebox">
                 	<d> Asst Prof.Kundan Patil </d><br/>
                <d>Specialization :  </d><br/>
                <links><a> click here for more detail</a></links>
                 </div>
             </div>
              <div class="box">
             	<div class="circle">
                	<img src="" style="height:160px; width:100%; border-radius:50%;"/>
                </div>
                 <div class="namebox">
                 	<d> Asst Prof.Ritesh  </d><br/>
                <d>Specialization : </d><br/>
                <links><a> click here for more detail</a></links>
                 </div>
             </div>
           
    </div>
    <div class="aside">
    		<div class="asidebox1">
            	<marquee direction="up" scrollamount="2">
                	<font style="font-size:24px; font-style:italic; padding:12px; "> Welcome to Tutorials point..!!<br/></font>
                    <font style="font-size:24px; font-style:italic; padding:12px; ">If you are finding the tutors<br/></font>
                     <font style="font-size:24px; font-style:italic; padding-left:20px; ">to solve your queries <br/></font>
                     <font style="font-size:24px; font-style:italic; padding:10px; ">then you are at right place<br/></font>
                     <font style="font-size:24px; font-style:italic; padding-left:50px; ">Here is the <br/></font>
                      <font style="font-size:24px; font-style:italic; padding:10px; ">online Tutors Ready to help 24/7</font>
                </marquee>
            </div>
            <div class="asidebox1">
            	<form action="profile.php?page=tutors" method="post" style="margin-left:5%; margin-top:2%;">
            	 <div class="facultydiv">
                <select name="select"  style="height:45px;background-color; font-size:18px; border:2px solid #000;
		border-style:double;  padding:6px; color:#800000; font-weight:bold; border-radius:20px;">
                	<option value="0"> Find Tutors</option>
                    <?php echo $str;?>
                </select>
                </div>
            	<textarea placeholder="Write your query" name="q1" ></textarea>
               
              
                 <div class="buttondiv">
                <input type="submit" value="Post" name="submitquery" style="  height:35px; width:55%; border-radius:20px;  background:linear-gradient(to bottom right, #058CFA, #4040FF); font-size:18px; border:thick; color:white; font-size:24px;"/>
                </div>
                 <error style="font-size:18px; color:#800000; font-weight:bold; margin-left:32px;"> <?php echo $result; ?></error>
            </form>
           
    </div>
    <div class="asidebox1">
    <center><div class="button" style="height:30px; width:70%; background-color:#0052A4; color:white; padding:10px; font-size:24px; font-weight:bold; margin-top:50px;">
    <a href="profile.php?page=sp_query">personal query</a>
    </div></center>
    </div>
    <div class="footer"></div>
</body>
</html>