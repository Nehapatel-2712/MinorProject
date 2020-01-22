<?php 
	$con=mysql_connect("localhost","root","");
	if($con){
		$sel=mysql_select_db("test_database");
		if($sel)
		{
			echo "selected";
			$sel=mysql_query("select * from registration");
			$size=mysql_num_rows($sel);
			if($size>0)
			{
				while($data=mysql_fetch_assoc($sel))
				{
					echo $data["name"];
				}
			}
			
			
			//echo $sel;
			if($sel)
			{
				echo "data selected";
			}
			else
			{
				echo "not selected";
			}
		}
		else{
			echo "not seleected";
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>