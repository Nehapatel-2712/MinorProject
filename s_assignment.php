<?php 
$obj=new user;
$a_fetch=$obj->a_fetch();
	$print=" ";
	if($a_fetch)
	{
		if(count($a_fetch)>0)
		{
			foreach($a_fetch as $key=>$a_data)
			{
				$print .= "<div class='querydiv'>";
				$print .= "<div class='top'>";
				$print .="<div class='query_topn'>". $a_data['n_name']."</div>";
				$print .="<div class='query_topd'>Date:". $a_data['date']."</div>";
				$print .="</div>";
				$print .="<div class='query'>". $a_data['assignment']."</div>";
				$print .="</div>";
			}
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="post.css" />
</head>

<body>
<div class="main">
<div class="heading2">
            	<h1 style="color:#000; font-size:36px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; text-align:center; font-style:italic;"> Take your Assignments</h1>
</div>
			<div class="querymain">
          	<?php echo $print;?>
         </div>
 </div>
</body>
</html>