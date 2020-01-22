<?php
$obj=new user;
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
				$print .="<div class='query_topn'>".$n_data['n_name']."</div>";
				$print .="<div class='query_topd'>Date: ".$n_data['date']."</div>";
				$print .= "</div>";
				$print .="<div class='query'>". $n_data['notice']."</div>";
				$print .="</div>";
			}
		}else echo "no result found 1";
	}else echo "no result found 2";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		background-color:white;
	}
.heading
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
	.buttondiv
	{
		height:50px;
		width:20%;
		float:left;
		margin-left:800px;
		margin-top:10px;
		border:0px solid #000;
	}
	.noticediv
	{
		
		width:90%;
		float:left;
		margin-left:70px;
		margin-top:20px;
		background-color:#C4C4C4;
		border:0px solid black;
		font-size:18px;
		font-family:Verdana, Geneva, sans-serif;
	}
	.notice_topn
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
	.notice_topd
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
	.notice
	{
		height:auto;
		width:100%;
		float:left;
		border:px solid black;
		padding:15px;
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
</style>
</head>-->

<body>
<div class="main">
<div class="heading2">
            	<h1 style="color:#000; font-size:36px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; text-align:center;"> Notice Update</h1>
</div>
			<div class="querymain">
          	<?php echo $print;?>
         </div>
 </div>
</body>
</html>