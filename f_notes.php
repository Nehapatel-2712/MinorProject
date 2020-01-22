<?php 
error_reporting(0);
	$obj=new user;
	
	
	//echo $type;
	if(@($_FILES['file1']))
	{
		$tit=$_POST['title'];
		$sub=$_POST['subj'];
		$sem=$_POST['sem'];
		$not=$_FILES['file1'];
		$ins=$obj->n_uplode($sem,$sub,$tit,$not);
		
		
	}
	
	
	if(@($_POST['l_sub']))
{
		$tit=$_POST['title'];
		$link=$_POST['link'];
		$sub=$_POST['subj'];
		$sem=$_POST['sem'];
		$n_id=$_SESSION['f_email'];
			$fname=$_SESSION['f_fname'];
			$lname=$_SESSION['f_lname'];
			$n_name=$fname." ".$lname;
		//echo $lname;
		
		$ins=mysql_query("INSERT INTO f_notes VALUES('','$n_id','$n_name','$sem','$sub','$tit','','$link')");
		//echo "INSERT INTO f_notes VALUES ('','$email','$n_name','$sem','$sub','','$link')";
		if($ins)
		{
			$error1="Link is successfully uploaded";
		}else
		{
			$error1="Link is not uploaded";
		}
}

	
	
	  
	  //sem fetch when uploading notes
	  
	$sel=mysql_query("select distinct sem from subj_info");
	$str="";
	if(mysql_num_rows($sel)>0)
	{
		while($data_sem=mysql_fetch_assoc($sel))
		{
			$str .="<option id=".$data_sem['sem']." class='sem1'>".$data_sem['sem']."</option>";
		}
	}
	
	//sem fetch 2 when acessing the notes
	
	$sel2=mysql_query("select distinct sem from subj_info");
	$str2="";
	if(mysql_num_rows($sel2)>0)
	{
		while($data_sem=mysql_fetch_assoc($sel2))
		{
			$str2 .="<option id=".$data_sem['sem']." class='sem2'>".$data_sem['sem']."</option>";
		}
	}
	
	//sem fetch for video link
	
	$sel3=mysql_query("select distinct sem from subj_info");
	$str3="";
	if(mysql_num_rows($sel3)>0)
	{
		while($data_sem3=mysql_fetch_assoc($sel3))
		{
			$str3 .="<option id=".$data_sem3['sem']." class='sem3'>".$data_sem3['sem']."</option>";
		}
	}
	
	
	//subj fetch
	
	/*$sel_sub=mysql_query("SELECT sub FROM subj_info");
	$str_sub="";
	if(mysql_num_rows($sel_sub))
	{
		while($data=mysql_fetch_assoc($sel_sub))
		{
			$str_sub .="<option id=".$data['sub'].">".$data['sub']."</option>";
		}
	}*/
	
	
	
	//fetch code for notes
	
	if(@($_POST['n_sub']))
	{
		$n_sem=$_POST['sem'];
		$n_sub=$_POST['subj'];
		$type=$_POST['type'];
		//echo $type;
		$sel=mysql_query("SELECT * FROM f_notes WHERE semester='$n_sem' and subject='$n_sub' or notes!='' or link!='' order by n_sno desc");
		//echo "SELECT * FROM subj_info WHERE semester='$n_sem' and subject='$n_sub'";
		
		if(mysql_num_rows($sel)>0)
		{
			while($data=mysql_fetch_assoc($sel))
			
			{ 
			
			if($n_sem==$data['semester'] && $n_sub==$data['subject'])
			{
				if($type=='pdf' && $data['notes']!='')
				{
					$str4 .=  "<div class='querydiv'>";
					$str4 .=  "<div class='top'>";
					$str4 .=  "<div class='query_topn'>".$data['n_name']."</div>";
					$str4 .=  "<div class='query_topd'>subject:  ".$data['subject']."</div>";
					$str4 .=  "<div class='query_tops'>semester:  ".$data['semester']."</div>";;
					$str4 .= "</div>";
					$str4 .=  "<div class='query'>";
					$str4 .=  "<div class='query_dow'>";
					$str4 .="&nbsp;&nbsp;<img src='images/inpdf.jfif' style='height:80px; width:20%;'/><a href=notes/".$data['notes']." download style='color:blue;font-size:26px;'>".$data['title']."</a><down>Download</down>";
					$str4 .=  "</div>";
					$str4 .=  "<div class='query_dow'>";
					$str4 .="&nbsp;&nbsp;<img src='images/inpdf.jfif' style='height:80px; width:20%;'/><a href=notes/".$data['notes']." target='_blank' style='color:blue;font-size:26px;'><img src='img/5ab0e1fbc5bbe.jpg' height='10px' width='10px' />".$data['title']."</a><down>Open</down>";
					$str4 .=  "</div>";
					$str4 .=  "</div>";
					
											 " <td><a href=notes/".$data['notes']." target='_blank'><img src='img/5ab0e1fbc5bbe.jpg' height='10px' width='10px' />".$data['title']."</a>&nbsp;&nbsp;open</td>
											  <td>".$data['semester']."</td>
											  <td>".$data['subject']."</td>
											  </tr>
											 
								 
								 ";
								 
					   $str4 .= "</div>";
				}//pdf notes
				
				else if($type=='link' && $data['link']!='')
				{
					$str4 .=  "<div class='querydiv'>";
					$str4 .=  "<div class='top'>";
					$str4 .=  "<div class='query_topn'>".$data['n_name']."</div>";
					$str4 .=  "<div class='query_topd'>subject:  ".$data['subject']."</div>";
					$str4 .=  "<div class='query_tops'>semester:  ".$data['semester']."</div>";
					$str4 .= "</div>";
					$str4 .=  "<div class='query'>";
					//$str4 .=  "<div class='query_dow'>";
					//$str4 .="Topic : <topic style='color:red; font-size:26px; font-weight:bold;'>".$data['title']."</topic>";
					//$str4 .=  "</div>";
					$str4 .=   "<div class='query_link'>";
			$str4 .=  "<img src='images/ypou.jfif' style='height:80px; width:10%;'> <a href=".$data['link']." target='_blank' style='color:red; font-size:20px;'>".$data['title']."</a>";

		
					$str4 .=  "</div>";
					$str4 .=  "</div>";
					$str4 .= "</div>";
					
					
				}//links
				
				else if($type=='both')
				{
					if($data['notes']!='')
						{
						$str4 .=  "<div class='querydiv'>";
						$str4 .=  "<div class='top'>";
						$str4 .=  "<div class='query_topn'>".$data['n_name']."</div>";
						$str4 .=  "<div class='query_topd'>subject:  ".$data['subject']."</div>";
						$str4 .=  "<div class='query_tops'>semester:  ".$data['semester']."</div>";;
						$str4 .= "</div>";
						$str4 .=  "<div class='query'>";
						$str4 .=  "<div class='query_dow'>";
						$str4 .="&nbsp;&nbsp;<img src='images/inpdf.jfif' style='height:80px; width:20%;'/><a href=notes/".$data['notes']." download style='color:blue; font-size:26px;'>".$data['title']."</a><down>Download</down>";
						$str4 .=  "</div>";
						$str4 .=  "<div class='query_dow'>";
						$str4 .="&nbsp;&nbsp;<img src='images/inpdf.jfif' style='height:80px; width:20%;'/><a href=notes/".$data['notes']." target='_blank' style='color:blue;font-size:26px;'><img src='img/5ab0e1fbc5bbe.jpg' height='10px' width='10px' />".$data['title']."</a><down>Open</down>";
						$str4 .=  "</div>";
						$str4 .=  "</div>";
						
												 " <td><a href=notes/".$data['notes']." target='_blank'><img src='img/5ab0e1fbc5bbe.jpg' height='10px' width='10px' />".$data['title']."</a>&nbsp;&nbsp;open</td>
												  <td>".$data['semester']."</td>
												  <td>".$data['subject']."</td>
												  </tr>
												 
									 
									 ";
									 
						   $str4 .= "</div>";
						}
						if($data['link']!='')
						{
						$str4 .=  "<div class='querydiv'>";
						$str4 .=  "<div class='top'>";
						$str4 .=  "<div class='query_topn'>".$data['n_name']."</div>";
						$str4 .=  "<div class='query_topd'>subject:  ".$data['subject']."</div>";
						$str4 .=  "<div class='query_tops'>semester:  ".$data['semester']."</div>";
						$str4 .= "</div>";
						$str4 .=  "<div class='query'>";
						//$str4 .=  "<div class='query_dow'>";
						//$str4 .="Topic : <topic style='color:red; font-size:26px; font-weight:bold;'>".$data['title']."</topic>";
						//$str4 .=  "</div>";
						$str4 .=   "<div class='query_link'>";
			$str4 .=  "<img src='images/ypou.jfif' style='height:80px; width:10%;'> <a href=".$data['link']." target='_blank' style='color:red; font-size:20px;'>".$data['title']."</a>";

			
						$str4 .=  "</div>";
						$str4 .=  "</div>";
						$str4 .= "</div>";
						}
					
					
				}//both
				
			}//sem and subj
			}//while
		}//if of rows
	}//if  of sub button
	else
	{
		$str7="";
$sel8=mysql_query("SELECT * FROM f_notes where notes!='' or link!='' order by n_sno desc");
		//echo "SELECT * FROM subj_info WHERE semester='$n_sem' and subject='$n_sub'";
		
		if(mysql_num_rows($sel8)>0)
		{
			//echo mysql_num_rows($sel8);
			while($data8=mysql_fetch_assoc($sel8))
			{
				if($data8['link']!='')
			{
				//$link=$data8['link'];
				//echo $link;
				$str7 .=  "<div class='querydiv'>";
			$str7 .=  "<div class='top'>";
			$str7 .=  "<div class='query_topn'>".$data8['n_name']."</div>";
			$str7 .=  "<div class='query_topd'>subject:  ".$data8['subject']."</div>";
			$str7 .=  "<div class='query_tops'>semester:  ".$data8['semester']."</div>";
			$str7 .= "</div>";
			$str7 .=  "<div class='query'>";
			//$str7 .=  "<div class='query_dow'>";
			//$str7 .="Topic : <topic style='color:red; font-size:26px; font-weight:bold;'>".$data8['title']."</topic>";
			//$str7 .=  "</div>";
			$str7 .=  "<div class='query_link'>";
			$str7 .=  "<img src='images/ypou.jfif' style='height:80px; width:10%;'> <a href=".$data8['link']." target='_blank' style='color:red; font-size:20px;'>".$data8['title']."</a>";

			$str7 .=  "</div>";
			$str7 .=  "</div>";
			$str7 .= "</div>";
			}
			if($data8['notes']!='')
			{
					//echo $link;
				$str7 .=  "<div class='querydiv'>";
			$str7 .=  "<div class='top'>";
			$str7 .=  "<div class='query_topn'>".$data8['n_name']."</div>";
			
			$str7 .=  "<div class='query_topd'>subject:  ".$data8['subject']."</div>";
			$str7 .=  "<div class='query_tops'>semester:  ".$data8['semester']."</div>";
			
			$str7 .= "</div>";
			$str7 .=  "<div class='query'>";
			$str7 .=  "<div class='query_dow'>";
			$str7 .="&nbsp;&nbsp;<img src='images/inpdf.jfif' style='height:80px; width:20%;'/><a href=notes/".$data8['notes']." download style='color:blue; font-size:26px;'>".$data8['title']."</a> <down>Download</down>";
			$str7 .=  "</div>";
			$str7 .=  "<div class='query_dow'>";
			$str7 .="&nbsp;&nbsp;<img src='images/inpdf.jfif' style='height:80px; width:20%;'/><a href=notes/".$data8['notes']." target='_blank' style='color:blue;  font-size:26px;'>".$data8['title']."</a> <down>Open</down>";
			$str7 .=  "</div>";
			$str7 .=  "</div>";
			$str7 .= "</div>";
			}
			
			
			
			
			
			}
		}
	}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			/*if($data['notes']!='')
			{
			$str4 .=  "<div class='querydiv'>";
			$str4 .=  "<div class='top'>";
			$str4 .=  "<div class='query_topn'>".$data['n_name']."</div>";
			$str4 .=  "<div class='query_topd'>subject:  ".$data['subject']."</div>";
			$str4 .=  "<div class='query_tops'>semester:  ".$data['semester']."</div>";;
			$str4 .= "</div>";
			$str4 .=  "<div class='query'>";
			$str4 .=  "<div class='query_dow'>";
			$str4 .="&nbsp;&nbsp;Click here to download-><a href=notes/".$data['notes']." download style='color:blue;'>".$data['title']."</a>";
			$str4 .=  "</div>";
			$str4 .=  "<div class='query_dow'>";
			$str4 .="&nbsp;&nbsp;Click here to Read-><a href=notes/".$data['notes']." target='_blank' style='color:blue;'><img src='img/5ab0e1fbc5bbe.jpg' height='10px' width='10px' />".$data['title']."</a>";
			$str4 .=  "</div>";
			$str4 .=  "</div>";
			
									 " <td><a href=notes/".$data['notes']." target='_blank'><img src='img/5ab0e1fbc5bbe.jpg' height='10px' width='10px' />".$data['title']."</a>&nbsp;&nbsp;open</td>
									  <td>".$data['semester']."</td>
									  <td>".$data['subject']."</td>
									  </tr>
									 
						 
						 ";
						 
			   $str4 .= "</div>";
			}
			if($data['link']!='')
			{
			$str4 .=  "<div class='querydiv'>";
			$str4 .=  "<div class='top'>";
			$str4 .=  "<div class='query_topn'>".$data['n_name']."</div>";
			$str4 .=  "<div class='query_topd'>subject:  ".$data['subject']."</div>";
			$str4 .=  "<div class='query_tops'>semester:  ".$data['semester']."</div>";
			$str4 .= "</div>";
			$str4 .=  "<div class='query'>";
			$str4 .=  "<div class='query_dow'>";
			$str4 .="Topic : <topic style='color:red; font-size:26px; font-weight:bold;'>".$data['title']."</topic>";
			$str4 .=  "</div>";
			$str4 .=  "<div class='query_dow'>";
			$str4 .=  "click here : <a href=".$data['link']." target='_blank' style='color:red; font-size:20px;'>".$data['link']."</a>";

			$str4 .=  "</div>";
			$str4 .=  "</div>";
			$str4 .= "</div>";
			}
		}
	}
}*/
			
			
		/*$str7="";
$sel8=mysql_query("SELECT * FROM f_notes WHERE semester='$n_sem' and subject='$n_sub' and link!='' order by n_sno desc");
		//echo "SELECT * FROM subj_info WHERE semester='$n_sem' and subject='$n_sub'";
		
		if(mysql_num_rows($sel8)>0)
		{
			//echo mysql_num_rows($sel8);
			while($data8=mysql_fetch_assoc($sel8))
			{
				$link=$data8['link'];
				//echo $link;
				$str7 .=  "<div class='querydiv'>";
			$str7 .=  "<div class='top'>";
			$str7 .=  "<div class='query_topn'>".$data8['n_name']."</div>";
			$str7 .=  "<div class='query_topd'>subject:  ".$data8['subject']."</div>";
			$str7 .=  "<div class='query_tops'>semester:  ".$data['semester']."</div>";
			$str7 .= "</div>";
			$str7 .=  "<div class='query'>";
			$str7 .=  "<div class='query_dow'>";
			$str7 .="Topic : <topic style='color:red; font-size:26px; font-weight:bold;'>".$data8['title']."</topic>";
			$str7 .=  "</div>";
			$str7 .=  "<div class='query_dow'>";
			$str7 .=  "click here : <a href=".$data8['link']." target='_blank' style='color:red; font-size:20px;'>".$data8['link']."</a>";

			$str7 .=  "</div>";
			$str7 .=  "</div>";
			$str7 .= "</div>";
			}
		}
			
		
		}
	}
	
	}*/
	//else
	//{
	
	//fetch all notes
		
		/*$str4="";
	
		$sel=mysql_query("SELECT * FROM f_notes where notes!='' order by n_sno desc");
		//echo "SELECT * FROM subj_info WHERE semester='$n_sem' and subject='$n_sub'";
		
		if(mysql_num_rows($sel)>0)
		{
			while($data=mysql_fetch_assoc($sel))
			{ $str4 .=  "<div class='querydiv'>";
			$str4 .=  "<div class='top'>";
			$str4 .=  "<div class='query_topn'>".$data['n_name']."</div>";
			
			$str4 .=  "<div class='query_topd'>subject:  ".$data['subject']."</div>";
			$str4 .=  "<div class='query_tops'>semester:  ".$data['semester']."</div>";
			
			$str4 .= "</div>";
			$str4 .=  "<div class='query'>";
			$str4 .=  "<div class='query_dow'>";
			$str4 .="&nbsp;&nbsp;Click here to download-><a href=notes/".$data['notes']." download style='color:blue;'>".$data['title']."</a>";
			$str4 .=  "</div>";
			$str4 .=  "<div class='query_dow'>";
			$str4 .="&nbsp;&nbsp;Click here to Read-><a href=notes/".$data['notes']." target='_blank' style='color:blue;'><img src='img/5ab0e1fbc5bbe.jpg' height='10px' width='10px' />".$data['title']."</a>";
			$str4 .=  "</div>";
			$str4 .=  "</div>";
			$str4 .= "</div>";
			}
			
			
			
		$str7="";
$sel8=mysql_query("SELECT * FROM f_notes where link!='' order by n_sno desc");
		//echo "SELECT * FROM subj_info WHERE semester='$n_sem' and subject='$n_sub'";
		
		if(mysql_num_rows($sel8)>0)
		{
			//echo mysql_num_rows($sel8);
			while($data8=mysql_fetch_assoc($sel8))
			{
				$link=$data8['link'];
				//echo $link;
				$str7 .=  "<div class='querydiv'>";
			$str7 .=  "<div class='top'>";
			$str7 .=  "<div class='query_topn'>".$data8['n_name']."</div>";
			$str7 .=  "<div class='query_topd'>subject:  ".$data8['subject']."</div>";
			$str7 .=  "<div class='query_tops'>semester:  ".$data['semester']."</div>";
			$str7 .= "</div>";
			$str7 .=  "<div class='query'>";
			$str7 .=  "<div class='query_dow'>";
			$str7 .="Topic : <topic style='color:red; font-size:26px; font-weight:bold;'>".$data8['title']."</topic>";
			$str7 .=  "</div>";
			$str7 .=  "<div class='query_dow'>";
			$str7 .=  "click here : <a href=".$data8['link']." target='_blank' style='color:red; font-size:20px;'>".$data8['link']."</a>";

			$str7 .=  "</div>";
			$str7 .=  "</div>";
			$str7 .= "</div>";
			}
		}
		}	}*/



			
			
			
		
		






?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="post.css" />
<style>
down
{
	color:black;
	font-size:36px;
	font-weight:bold;
	margin-left:10px;
}
a:link
{
	font-size:22px;
	color:#6F3;
	font-weight:bold;
	font-family:Verdana, Geneva, sans-serif;
	text-decoration:none;
}
a:hover
{
	color:#000;
}
tr
{
	height:50px;
	width:100%;
	border:1px solid black;
}
td
{
	text-align:center;
	width:20%;
	border:q1px solid black;
}
.notes_form
{
	height:300px;
	width:60%;
	float:left;
	background-color:#CACACA;
	margin-left:20%;
	margin-top:30x;
}
.sem1{
	}
.main
	{
		height:1800px;
		width:100%;
		float:left;
		background-color:#E4E4E4;
	}
	font
	{
		font-size:22px;
		font-family:Georgia, "Times New Roman", Times, serif;
		color:#000;
	}
	select
	{
		height:30px;
		width:60%;
		color:#1E1E1E;
		font-weight:700;
		font-size:18px;
		border:1px solid black;
		border-radius:12px;
		background-color:white;
	}
	.notes_main
	{
		height:2200px;
		width:95%;
		margin-left:2.5%;
		float:left;
		background-color:white;
		border:0px solid black;
		overflow:scroll;
	}
	
	.post_q
	{
		height:360px;
		width:40%;
		float:left;
		border:0px solid black;
		background-color:white;
		margin-left:7%;
		margin-top:30px;
		border-radius:12px;
		margin-bottom:20px;
	}
	.get_not
	{
		height:220px;
		width:45%;
		float:left;
		border:0px solid black;
		background-color:#EAEAEA;
		margin-left:30%;
		margin-top:14px;
		border-radius:12px;
		margin-bottom:20px;
	}
	

</style>
<script src="js/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		
		//for upload notes
			//alert("hello");
		$('.sem1').click(function(){
			var postid=$(this).attr('id');
			//alert(postid);
			$.ajax({
			url:'notes_ajax.php',
			type:'post',
			async:false,
			data:{
				'sem1':1,
				'postid':postid
			},
			success: function(data4){
					$('#subj1').html(data4);
					}
			})
			
			});
			
			//for fetching notes
			
			$('.sem2').click(function(){
			var postid=$(this).attr('id');
			//alert(postid);
			$.ajax({
			url:'notes_ajax.php',
			type:'post',
			async:false,
			data:{
				'sem2':1,
				'postid':postid
			},
			success: function(data5){
					$('#subj2').html(data5);
					}
			})
			
			});
        
		
		
		 //upload video link
		 
		 $('.sem3').click(function(){
			var postid=$(this).attr('id');
			//alert(postid);
			$.ajax({
			url:'notes_ajax.php',
			type:'post',
			async:false,
			data:{
				'sem3':1,
				'postid':postid
			},
			success: function(data6){
					$('#subj3').html(data6);
					}
			})
			
			});
        
    });

</script>
</head>


<body>
<div class="main">
	<div class="post_q">
    <div class="heading">Upload Notes PDF</div>
<form action="f_profile.php?page=f_notes" enctype="multipart/form-data" method="post">
	<table style="border:0px solid black;">
    <tr>
    	<td><font>Title</font></td>
        <td><input type="text" placeholder="Title" name="title"  style="height:10px; width:60%; border-radius:12px; border:1px solid black; font-size:20px; padding:10px;"/></td>
    </tr>
     <tr>
    	<td><font>Notes</font></td>
        <td><input type="file" placeholder="title" name="file1" /></td>
    </tr>
     <tr>
    	<td><font>Semester</font></td>
        <td>
        	<select name="sem" id="sem">
            	<option value="0">Select Semester</option>
                <?php echo $str;?>
            </select>
        </td>
    </tr>
     <td><font>Subject</font></td>
        <td>
        	<select name="subj" id="subj1">
            	<option value="0">Select Subject</option>
                <?php //echo $str_sub;?>
            </select>
        </td>
    </tr>
    <tr><td></td><td><input type="submit" value="Upload" name="n_sub" /></td></tr>
     <tr><td colspan="2"><error style="font-size:18px; color:#800000; font-weight:bold; margin-left:200px;"> <?php echo $ins; ?></error></tr></td>

</form>

</table>
</div>

	<div class="post_q">
    <div class="heading">Upload video links</div>
<form action="f_profile.php?page=f_notes"  method="post">
	<table style="border:0px solid black;">
    <tr>
    	<td><font>Title</font></td>
        <td><input type="text" placeholder="Title" name="title"  style="height:10px; width:60%; border-radius:12px; border:1px solid black; font-size:20px; padding:10px;"/></td>
    </tr>
     <tr>
    	<td><font>link</font></td>
        <td><input type="text" placeholder="video link" name="link" style="height:10px; width:60%; border-radius:12px; border:1px solid black; font-size:20px; padding:10px;"/></td>
    </tr>
     <tr>
    	<td><font>Semester</font></td>
        <td>
        	<select name="sem" id="sem3">
            	<option value="0">Select Semester</option>
                <?php echo $str3;?>
            </select>
        </td>
    </tr>
     <td><font>Subject</font></td>
        <td>
        	<select name="subj" id="subj3">
            	<option value="0">Select Subject</option>
                <?php //echo $str_sub;?>
            </select>
        </td>
    </tr>
    <tr><td></td><td><input type="submit" value="Upload" name="l_sub" /></td></tr>
     <tr><td colspan="2"><error style="font-size:18px; color:#800000; font-weight:bold; margin-left:200px;"> <?php echo $error1; ?></error></tr></td>


</form>

</table>
</div>

<div class="notes_main">
	<div class="heading">Latest Notes Update</div>
	<div class="get_not">
    		<form action="f_profile.php?page=f_notes" enctype="multipart/form-data" method="post">
	<table style="border:0px solid black;">
    
     
    	<td><font>Semester</font></td>
        <td>
        	<select name="sem" id="sem">
            	<option value="0">Select Semester</option>
                <?php echo $str2;?>
            </select>
        </td>
    </tr>
     <td><font>Subject</font></td>
        <td>
        	<select name="subj" id="subj2">
            	<option value="0">Select Subject</option>
                <?php //echo $str_sub;?>
            </select>
        </td>
    </tr>
     <td><font>Select Formate</font></td>
        <td>
        	<select name="type" id="type">
            	<option value="both">Both</option>
                <option value="pdf">PDF</option>
                <option value="link">LINKS</option>
                <?php //echo $str_sub;?>
            </select>
        </td>
    </tr>
    <tr><td></td><td><input type="submit" value="submit" name="n_sub" /></td></tr>

</form>
</table>
    </div>
    
    
    
    
    <?php echo $str4;?>
    <?php //echo $str5;?>
    <?php echo $str7;?>
    
    
</div>

</div>
</body>
</html>