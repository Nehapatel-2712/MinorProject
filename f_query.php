<?php
$obj2=new user;
$email=$_SESSION['f_email'];
$f_fname=$_SESSION['f_fname'];
$f_lname=$_SESSION['f_lname'];
$f_name=$f_fname." ".$f_lname;
 /*$query_ft=$obj2->showquery();
	 $print=" ";
	 if($query_ft)
	 {
		 //echo "hello";
		 if(count($query_ft)>0)
		 {
			 foreach($query_ft as $key=>$query)
			 {
				$print .= "<div class='querydiv'>";
				$print .="<div class='top'>";
				 $print .="<div class='query_topn'>". $query['s_name']."</div>";
				 $print .="<div class='query_topd'> Date : ".$query['date']."</div>";
				 $print .="</div>";
				 $print .= "<div class='query'>".$query['query']."</div>";
				  
				 //echo $print;
				   //$print .="<div class='querymain'>";
				
				$print .="<div class='query_bottom'>";
				$print .="<div class='qb_like'></div>";
				$print .="<div class='qb_getans'>Get answer</div>";
				$print .="<div class='qb_putans'>Put answer</div>";
				 $print .="</div>";
				$print .= "</div>";
				//$print .= "</div>";
			 }
		 }
		 else echo "no result found1";
	 }else echo "no result found2";*/
	 
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="post.css" />

</head>
<script src="js/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	/*$(document).ready(function() {
		$('.like').click(function(){
		var postid=$(this).attr('id');
		//alert(postid);
		$.ajax({
			url: 'profile.php?page=f_query',
			type:'post',
			async: false,
			data:{
				'liked':1,
				'postid':postid
				},
				success: function(data){
					//$('#d1').html(data);
					}
			
			});
		});
		
		
		
		$('.unlike').click(function(){
		var postid=$(this).attr('id');
		$.ajax({
			url: 'profile.php?page=f_query',
			type:'post',
			async: false,
			data:{
				'unliked':1,
				'postid':postid
				},
				success: function(){
					
					}
			
			});
		});
		$('.subm').click(function(){
		var postid=$(this).attr('id');
		var txt='#p'+postid;
		var apost=$(txt).val();
		//alert(apost);
		//alert(postid);
		$.ajax({
			url: 'profile.php?page=query',
			type:'post',
			async: false,
			data:{
				'ans':1,
				'apost':apost,
				'postid':postid
				},
				success: function(data){
					//$('#d1').html(data);
					}
			
			});
		});
		$('.qb_ans').click(function(){
			var postid=$(this).attr('id');
			var txt='#a'+postid;
			$(txt).toggle(1000);
			//alert(postid);
			//alert(txt);
			});
        
    });*/
</script>

<body>
 <div class="name">
            	<h1 style="color:#000; font-size:36px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; text-align:center;"> Latest Queries Update</h1>
            </div>
           <div class="qu_page">
           <?php  include "f_qu_page.php";?>
           </div>

       </div>
</body>
</html>