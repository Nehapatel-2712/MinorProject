<?php
class database_con{
	 function dbco(){
		$con=mysql_connect("localhost","root","");
		if($con){
			$sel=mysql_select_db("minor_project");
			if($sel){
				return TRUE;
			}
			else
			   return FALSE;
		 }
	}
}
?>
