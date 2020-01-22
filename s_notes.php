<?php
error_reporting(0);

	$sel2=mysql_query("select distinct sem from subj_info");
	$str2="";
	if(mysql_num_rows($sel2)>0)
	{
		while($data_sem=mysql_fetch_assoc($sel2))
		{
			$str2 .="<option id=".$data_sem['sem']." class='sem2'>".$data_sem['sem']."</option>";
		}
	}


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


		//fetch all notes
		
		

		/*if(@($_POST['n_sub']))
		{

$str4="";
	
		$n_sem=$_POST['sem'];
		$n_sub=$_POST['subj'];
		$sel=mysql_query("SELECT * FROM f_notes WHERE semester='$n_sem' and subject='$n_sub' and notes!='' order by n_sno desc");
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
		}else{}
		
		$str7="";
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
			else echo "no notes available";
}
else
{
	$str4="";
	
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
		}else echo "no notes available";
		
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
			$str7 .=  "click here :<a href=".$data8['link']." target='_blank' style='color:red; font-size:20px;'>".$data8['link']."</a>";

			$str7 .=  "</div>";
			$str7 .=  "</div>";
			$str7 .= "</div>";
			}
		}
		else echo "no notes available";
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="post.css" />
<style>
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
	color:#FFF;
}
font1
{
	color:red;
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
	background-color:#FF0;}
.main
	{
		height:1200px;
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
		margin-top:20px;
		border-radius:12px;
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
	down
{
	color:black;
	font-size:36px;
	font-weight:bold;
	margin-left:10px;
}

</style>
</head>
<script src="js/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
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
        
    });
	</script>

<body>
<div class="main">
<div class="notes_main">
	<div class="name">
            	<h1 style="color:#000; font-size:36px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; text-align:center; margin-top:-2px;"> Latest Notes Updates</h1>
            </div>
	<div class="get_not">
    		<form action="profile.php?page=s_notes" enctype="multipart/form-data" method="post">
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
    <?php echo $str7;?>
</div>

</div>
</body>
</html>