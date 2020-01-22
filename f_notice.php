<?php 
//session_start();
error_reporting(0);
	$obj=new user;
	if(@($_POST['q1']))
	{
	$fn=$_SESSION['f_fname'];
	$ln=$_SESSION['f_lname'];
	$em=$_SESSION['f_email'];
	$notice=$obj->f_notice($fn,$ln,$em);
	
	}
	
	$n_fetch=$obj->n_fetch();
	$print="";
	if($n_fetch)
	{
		if(count($n_fetch)>0)
		{
			foreach($n_fetch as $key=>$n_data)
			{
				$print .= "<div class='querydiv'>";
				$print .= "<div class='top'>";
				$print .="<div class='query_topn'>". $n_data['n_name']."</div>";
				$print .="<div class='query_topd'>Date : " . $n_data['date']."</div>";
				$print .="</div>";
				$print .="<div class='query'>". $n_data['notice']."</div>";
				$print .="</div>";
			}
		}else echo "no result found 1";
	}else echo "no result found 2";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<link rel="stylesheet" href="post.css" />
    </head>
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
		height:330px;
		width:40%;
		float:left;
		border:0px solid black;
		background-color:white;
		margin-left:30%;
		margin-top:14px;
		border-radius:12px;
	}
</style>
</head>

<body>
<div class="main">
    		<div class="post_q">
            <div class="heading">Post Notice Here</div>
    		<form action="f_profile.php?page=f_notice" method="post">
            	 
            	<textarea placeholder="Write Notice here" name="q1" ></textarea>
            
                 <div class="buttondiv">
                <input type="submit" value="Post" name="submitquery" class="subm" style=" height:35px; width:44%; border-radius:20px;  background:linear-gradient(to bottom right, #058CFA, #4040FF); font-size:18px; border:thick; color:white; font-size:24px;"/>
                </div>
                 <error style="font-size:18px; color:#800000; font-weight:bold; margin-left:250px;"> <?php echo $notice; ?></error>
                        </form>
            </div>
            <div class="name">
            	<h1 style="color:#000; font-size:36px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; text-align:center;"> Notice Updates</h1>
            </div>
            <div class="querymain">
           
   
         <?php echo $print;?>
         </div>
         </div>
</body>
</html>