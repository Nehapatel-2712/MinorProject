<?php 
//session_start();
include "db_user.php";
$obj1=new db;
$con=$obj1->dbcon();

$id=$_SESSION['f_email'];

$sel=mysql_query("select * from f_notification where userid='$id'");

$no=mysql_num_rows($sel);

$q=mysql_query("SELECT * FROM query");
while($data=mysql_fetch_assoc($q))
$max=$data['sno'];


if($no==0)
{
	$ins=mysql_query("INSERT INTO f_notification VALUES('','$id','$max')");
}
else
{
	$up=mysql_query("UPDATE f_notification SET no='$max'");
}

?>