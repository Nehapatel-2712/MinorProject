<?php 
//session_start();
include "db_user.php";
$obj1=new db;
$con=$obj1->dbcon();

$id=$_SESSION['enrollmentno'];

$sel=mysql_query("select * from notification where userid='$id'");

$no=mysql_num_rows($sel);

$q=mysql_query("SELECT * FROM notice");
while($data=mysql_fetch_assoc($q))
$max=$data['n_sno'];


if($no==0)
{
	$ins=mysql_query("INSERT INTO notification VALUES('','$id','$max')");
}
else
{
	$up=mysql_query("UPDATE notification SET no='$max'");
}

?>