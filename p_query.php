<?php $f_email=$_SESSION['f_email']; 

if(@($_POST['ans']))
{
	$postid=$_POST['postid'];
	$apost=$_POST['apost'];
	$email=$_SESSION['f_email'];
	$f_fname=$_SESSION['f_fname'];
$f_lname=$_SESSION['f_lname'];
$f_name=$f_fname." ".$f_lname;
$ins=mysql_query("INSERT INTO ans VALUES('','$postid','$f_name','$email','$apost')");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="post.css" />
</head>
<script src="js/js/jquery-1.9.1.min.js"></script>
<script>
	$(document).ready(function() {
		
		$('.subm').click(function(){
			var postid=$(this).attr('id');
			//alert(postid);
			var txt='#p'+postid;
			var apost=$(txt).val();
			$.ajax({
				url:'f_profile.php?page=p_query',
				type:'post',
				async: false,
				data:{
					'ans':1,
					'postid':postid,
					'apost':apost
				},
				success: function(){
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
    });

</script>

<body>
<div class="name">
            	<h1 style="color:#000; font-size:36px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; text-align:center;"> Latest Queries Update</h1>
            </div>
           <div class="querymain">
            <?php
		  $query=mysql_query("select * from query where ans_id='$f_email' order by sno desc ");
		  while($row=mysql_fetch_array($query)){ ?>
        <div class='querydiv'>
        <div class='top'>
        <div class='query_topn'><?php echo $row['s_name']?></div>
        <div class='query_topd'> <?php Date : echo $row['date'] ?></div>
        </div>
		<div class="query">
		 <?php echo $row['query'];?>
         </div>
         
         
        
          <div class='query_bottom'>
         
         <div class='qb_ans' id="b<?php echo $row['sno'];?>">Answer</div>
			</div>
            <div class="answer">
            <textarea placeholder="give your answer" name="ans" id="p<?php echo $row['sno'];?>" style="font-size:20px; font-weight:bolder; padding:10px; height:80px; width:60%; margin-left:18%; margin-top:9px; border-radius:12px; border:2px solid #000024; border-style:double;"></textarea>
            <input type="submit" value="Post Answer" class="subm" id="<?php echo $row['sno'];?>" name="sub"  style=" height:30px; width:12%; border-radius:20px; background:linear-gradient(to bottom right,#195dd6, #ACD6FF ); font-size:18px; border:thick; color:black; font-size:18px; margin-right:230px; float:right; margin-top:5px;"/>
            </div>
            
             <div class="main_ans" id="ab<?php echo $row['sno'];?>">
            <?php $an_sno=$row['sno'];
			$ans=mysql_query("SELECT * FROM ans WHERE q_id='$an_sno'");
			if(mysql_num_rows($ans)>=1)
			{
				while($data=mysql_fetch_array($ans))
				{?>
					<div class="ans_list">
					<div class="ans_name">
					<?php echo $data['an_name']; ?></div>
					<?php echo $data['ans'];?></div>
  				<?php }
			}else echo "no answer available"; ?>
            </div>
            </div>
           
			
            
    


 <?php } ?>
</div>
  

       </div>
      
            
            
</body>
</html>