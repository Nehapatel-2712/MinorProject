<?php
class db{
	function dbcon()
	{
		$con=mysql_connect("localhost","root","");
		if($con)
		{
			$sel=mysql_select_db("registration");
			if($sel)
			{
				//echo "selected";
				return true;
			}
			else
			{
				//echo "not selected";
				return false;
				
			}
		}
	}
}


?>

