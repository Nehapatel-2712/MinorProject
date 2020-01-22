<?php 
//print_r($f_name=$_FILES['f1']);
$f_name=$_FILES['f1']['name'];
//echo $f_name;
$f_size=$_FILES['f1']['size'];
$f_tmp=$_FILES['f1']['tmp_name'];
$ext=explode('.',$f_name);
//print_r($ext);
$extension=strtolower(end($ext));
//echo $extension;
$newfile=uniqid().'.'.$extension;
echo $newfile;
$newpath="images/".$newfile;
print_r($newpath);
if($extension==jpg||$extension==png||$extension==gif)
{
   if($f_size<1000000)
       {
	    if(move_uploaded_file($f_tmp,$newpath))
		{
			echo "uploaded";
		}
		else echo "not Uploaded";
	   }
	   else "size must be smaller than MB";	
}else "file type not supported";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
 echo "<img src=".$newpath." height='200px' width='20%'/>;"
?>
<form action="upload_img.php" method="post" enctype="multipart/form-data" name="form1">
                      <input type="file" name="f1" />
                      <input type="submit" name="submit" value="submit" /> 
                       </form>
</body>
</html>