<?php 
mysql_connect('localhost','root','');
			mysql_select_db('registration');

//echo "hello";			
if(@($_POST['sem1']))
{
	$postid=$_POST['postid'];
	//echo $postid;
	//echo "hello";
	$str_subj="";
	$result=mysql_query("SELECT distinct * from subj_info where sem='$postid'");
	if(mysql_num_rows($result)>0)
	{
		
		while($data_subj=mysql_fetch_assoc($result))
		{
			$str_subj .="<option id=".$data_subj['sub'].">".$data_subj['sub']."</option>";
		}
		echo $str_subj;
	}
}



if(@($_POST['sem2']))
{
	$postid=$_POST['postid'];
	//echo $postid;
	//echo "hello";
	$str_subj="";
	$result=mysql_query("SELECT distinct * from subj_info where sem='$postid'");
	if(mysql_num_rows($result)>0)
	{
		
		while($data_subj=mysql_fetch_assoc($result))
		{
			$str_subj .="<option id=".$data_subj['sub'].">".$data_subj['sub']."</option>";
		}
		echo $str_subj;
	}
}


if(@($_POST['sem3']))
{
	$postid=$_POST['postid'];
	//echo $postid;
	//echo "hello";
	$str_subj="";
	$result=mysql_query("SELECT distinct * from subj_info where sem='$postid'");
	if(mysql_num_rows($result)>0)
	{
		
		while($data_subj=mysql_fetch_assoc($result))
		{
			$str_subj .="<option id=".$data_subj['sub'].">".$data_subj['sub']."</option>";
		}
		echo $str_subj;
	}
}

?>