<?php 
error_reporting(0);
$obj=new user;
$fn=$_SESSION['f_fname'];
$ln=$_SESSION['f_lname'];
$em=$_SESSION['f_email'];
if(@($_POST['qa']))
{
	$ass_year=$_POST['select'];
	//echo $ass_year;
	//echo "hello";
	$ins=$obj->f_ass($fn,$ln,$em,$ass_year);
	
}
$a_fetch=$obj->fa_fetch();
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
				$print .="<div class='ans_bottom'>";
                    
                $print .="<div class='ans_delete' id=" .$a_data['n_sno'].">Delete</div>";
                $print .="<div class='ans_edit' id=".$a_data['n_sno'].">Edit</div>";
                   
                  $print .="  </div>";
				$print .="</div>";
			}
		}
	}
	
	
if(@($_POST['delete']))
{
	//echo "hello";
	$postid=$_POST['postid'];
	//echo $postid;
	$del=mysql_query("DELETE FROM notice Where n_sno='$postid'");
	if($del)
	{
		echo "deleted";
	}else echo "not";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<link rel="stylesheet" href="post.css" />
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
		height:380px;
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
<script src="js/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.ans_delete').click(function(){
		var postid=$(this).attr('id');
		alert(postid);
		$.ajax({
			url: 'f_profile.php?page=f_assignment',
			type:'post',
			async: false,
			data:{
				'delete':1,
				'postid':postid
				},
				success: function(data1){
					//$('#dlt').html(data1);
					}
			
			});
		});
	});
</script>
<body>
<div class="main">
<div class="post_q">
			<div class="heading">Post Assignments here</div>
    		<form action="f_profile.php?page=f_assignment" method="post" style="margin-left:5%; margin-top:2%;">
            	 <div class="facultydiv">
                <select name="select" style="height:45px; background-color; font-size:18px; border:2px solid #000;
		border-style:double;  padding:6px; color:#800000; font-weight:bold; border-radius:20px;">
                	<option value="0"> select year </option>
                    <option value="1"> 1st year </option>
                    <option value="2"> 2nd year </option>
                    <option value="3"> 3rd year </option>
                    <option value="4"> 4th year </option>
                    <?php //echo $str;?>
                </select>
                </div>
            	<textarea placeholder="Write assignments here" name="qa" ></textarea>
              
                 <div class="buttondiv">
                <input type="submit" value="post" name="submitquery" style=" height:35px; width:44%; border-radius:20px; background:linear-gradient(to bottom right, #058CFA, #4040FF); font-size:18px; border:thick; color:white; font-size:24px;"/>
                </div>
                 <error style="font-size:18px; color:#800000; font-weight:bold; margin-left:200px;"> <?php echo $ins; ?></error>
            </form>
            </div>
            <div class="name" id="name" >
            	<h1 style="color:#000; font-size:36px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; text-align:center;"> Assignments</h1>
            </div>
            
            <div class="querymain">
           
   
         <?php echo $print;?>
         </div>
</div>
     
</body>
</html>