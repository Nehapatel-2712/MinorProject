<?php
//session_start();
include "db_user.php";
$obj1=new db;
$con=$obj1->dbcon();

$id=$_SESSION['enrollmentno'];
//echo $id;
$sel=mysql_query("select * from notification where userid='$id'");
//echo "select * from notification where userid='$id'";

$no=mysql_num_rows($sel);

if($no==0)
{
	echo "0";
}
else
{
	while($data1=mysql_fetch_assoc($sel))
		$n1=$data1['no'];
		$sel2=mysql_query("select * from notice where '$n1'<n_sno");
		echo $no1=mysql_num_rows($sel2);
		
}
?>
