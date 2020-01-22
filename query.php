<?php
	//include "db_user.php";	
	 error_reporting(0);
		$fname=$_SESSION['fname'];
		$enrollmentno=$_SESSION['enrollmentno'];
		$s_fname=$_SESSION['fname'];
		$s_lname=$_SESSION['lname'];
		$s_name=$s_fname." ".$s_lname;
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
		 $result=$obj2->query($fname,$lname,$enrollmentno,$query,$email);
		
	 }
	/* $query_ft=$obj2->showquery();
	 $print=" ";
	 if($query_ft)
	 {
		 //echo "hello";
		 if(count($query_ft)>0)
		 {
			 foreach($query_ft as $key=>$query)
			 {
				$print .= "<div class='querydiv'>";
				$print .="<div class='top'>";
				 $print .="<div class='query_topn'>". $query['s_name']."</div>";
				 $print .="<div class='query_topd'> Date : ".$query['date']."</div>";
				 $print .="</div>";
				 $print .= "<div class='query'>".$query['query']."</div>";
				  
				 //echo $print;
				   //$print .="<div class='querymain'>";
				
				$print .="<div class='query_bottom'>";
				$print .="<div class='qb_like'></div>";
				$print .="<div class='qb_getans'>Get answer</div>";
				$print .="<div class='qb_putans'>Put answer</div>";
				 $print .="</div>";
				$print .= "</div>";
				//$print .= "</div>";
			 }
		 }
		 else echo "no result found1";
	 }else echo "no result found2";*/
	 
	 
	/* $resul2t=$obj2->showquery();
	  if($result2)
		 {
			 echo "posted1";
		 }
		 else echo "not posted2";
	*/ 
	 
		 	
	//echo $sno;
	
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<link rel="stylesheet" href="post.css" />
    </head>
<!--<style>
	.main
	{
		height:1200px;
		width:100%;
		float:left;
		background-color:#E6F2FF;
	}
	
	.name
	{
		height:70px;
		width:95%;
		margin-left:2.5%;
		margin-top:20px;
		float:left;
		background-color:white;
	}
	.querymain
	{
		height:800px;
		width:95%;
		margin-left:2.5%;
		float:left;
		background-color:white;
		border:0px solid black;
		
	}
	textarea
	{
		font-size:24px;
		font-weight:bolder;
		padding:10px;
		height:100px;
		width:50%;
		margin-left:24%;
		height:200px;
		width:50%;
		border-radius:3%;
		border:1px solid #000024;
		border-style:double;
		
	}
	/*.postdiv
	{
		height:50px;
		width:100%;
		float:left;
		margin-top:10px;
		border:0px solid #000;
	}*/
	.facultydiv
	{
		height:50px;
		width:20%;
		float:left;
		margin-left:280px;
		border:0px solid #000;
	}
	.buttondiv
	{
		height:50px;
		width:20%;
		float:left;
		margin-left:800px;
		margin-top:10px;
		border:0px solid #000;
	}
	.querydiv
	{
		
		width:90%;
		float:left;
		margin-left:70px;
		margin-top:20px;
		background-color:#E9E9E9;
		border:0px solid black;
	}
	.query_topn
	{
		height:30px;
		width:40%;
		float:left;
		border:0px solid black;
		color:black;
		font-size:14px;
		font-style:bold;
		font-family:Verdana, Geneva, sans-serif;
		margin-left:3%;
		margin-top:8px;
	}
	.query_topd
	{
		height:30px;
		width:20%;
		float:right;
		border:0px solid black;
		color:black;
		font-size:14px;
		font-style:bold;
		font-family:Verdana, Geneva, sans-serif;
		margin-left:3%;
		margin-top:8px;
	}
	.query
	{
		height:auto;
		width:100%;
		float:left;
		border:0px solid black;
		padding:15px;
		font:Verdana, Geneva, sans-serif;
		font-size:18px;
	}
	
	.query_bottom
	{
		height:50px;
		width:100%;
		float:left;
		border-top:0px solid #B00058;
		margin-top:10px;
	}
	.qb_like
	{
		height:40px;
		width:7%;
		float:left;
		border:0px solid #B00058;
		background-image:url(images/1200px-Bot%C3%B3n_Me_gusta.svg.png);
		background-size:100% 100%;
		border-radius:20%;
		margin-left:10px;
		
	}
	.qb_getans
	{
		height:30px;
		width:10%;
		float:right;
		border:0px solid #B00058;
		background-color:#9797FF;
		font-size:14px;
		font-family:Verdana, Geneva, sans-serif;
		text-align:center;
		margin-top:10px;
	}
	.qb_putans
	{
		height:30px;
		width:10%;
		float:right;
		border:0px solid #B00058;
		background-color:#9797FF;
		margin-right:10px;
		margin-top:10px;
		font-size:14px;
		font-family:Verdana, Geneva, sans-serif;
		text-align:center;
	}
    
</style>-->
<style>
.main
	{
		height:1200px;
		width:100%;
		float:left;
		background-color:#E4E4E4;
	}
	.post_q
	{
		height:370px;
		width:40%;
		float:left;
		border:0px solid black;
		background-color:white;
		margin-left:30%;
		margin-top:14px;
		border-radius:12px;
	}
	input[type='submit']
	{
		 height:38px; 
		 width:40%; 
		 border-radius:20px;
		 background-color:#00F; 
		 font-size:18px; 
		 border:thick; 
		 color:white; 
		 font-size:24px
	}
</style>
<script src="js/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	/*$(document).ready(function() {
		$('.like').click(function(){
		var postid=$(this).attr('id');
		//alert(postid);
		$.ajax({
			url: 'profile.php?page=query',
			type:'post',
			async: false,
			data:{
				'liked':1,
				'postid':postid
				},
				success: function(data){
					//$('#d1').html(data);
					}
			
			});
		});
		
		
		
		$('.unlike').click(function(){
		var postid=$(this).attr('id');
		$.ajax({
			url: 'profile.php?page=query',
			type:'post',
			async: false,
			data:{
				'unliked':1,
				'postid':postid
				},
				success: function(){
					
					}
			
			});
		});
		$('.subm').click(function(){
		var postid=$(this).attr('id');
		var txt='#p'+postid;
		var apost=$(txt).val();
		//alert(apost);
		//alert(postid);
		$.ajax({
			url: 'profile.php?page=query',
			type:'post',
			async: false,
			data:{
				'ans':1,
				'apost':apost,
				'postid':postid
				},
				success: function(data){
					//$('#d1').html(data);
					}
			
			});
		});
		$('.qb_ans').click(function(){
			var postid=$(this).attr('id');
			var txt='#a'+postid;
			$(txt).toggle(1000);
			//alert(postid);
			//alert(txt);
			});
        
    });*/
</script>
</head>

<body>
	<div class="main">
    		<div class="post_q">
            <div class="heading">Post Query here</div>
    		<form action="profile.php?page=query" method="post" style="margin-left:5%; margin-top:2%;">
            	 <div class="facultydiv">
                <select name="select" style="height:45px; background-color; font-size:18px; border:2px solid #000;
		border-style:double;  padding:6px; color:#800000; font-weight:bold; border-radius:20px;">
                	<option value="toall"> To All </option>
                    <?php echo $str;?>
                </select>
                </div>
            	<textarea placeholder="Write your query" name="q1" ></textarea>
                <div class="postdiv">
              
                 <div class="buttondiv">
                <input type="submit" value="Post" name="submitquery" class="postbut" style="background-color:#00F;"/>
                </div>
               <error style="font-size:18px; color:#800000; font-weight:bold; margin-left:200px;"> <?php echo $result; ?></error>
                </div>
            </form>
            </div>
            <div class="name">
            	<h1 style="color:#000; font-size:36px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; text-align:center;"> Latest Queries Update</h1>
            </div>
            <div class="qu_page">
            	<?php include 's_qu_page.php';?>
            </div>
           
       </div>
     
</body>
</html>