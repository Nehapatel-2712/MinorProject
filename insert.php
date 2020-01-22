<?php 
//mysql_connect("localhost","root","");
//mysql_select_db("test_database");
echo "ok";
if(isset($_POST["sub"]))
{
	echo "ok";
	$n=$_POST["name"];
	echo $n;
	//mysql_query("insert into reg values('$n')");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form method="post">
	<input type="text" name="name" placeholder="name" height="10px" width="10px"  /><br />
   	<input type="submit" name="sub" style="margin:10px" />
    </form>
</body>
</html>