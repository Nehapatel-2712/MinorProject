<?php
session_start();
error_reporting(0);
		$con=mysql_connect("localhost","root","");
		$sel=mysql_select_db("registration");
		
		
		$fname=$_SESSION['fname'];
		$enrollmentno=$_SESSION['enrollmentno'];
		$s_fname=$_SESSION['fname'];
		$s_lname=$_SESSION['lname'];
		$s_name=$s_fname." ".$s_lname;
if(isset($_POST['liked'])){
	echo "hello";
	$postid=$_POST['postid'];
	$result=mysql_query("SELECT * FROM query WHERE sno=$postid");
	$row=mysql_fetch_array($result);
	$n=$row['like'];
	//mysql_query("UPDATE query SET like='$n+1' WHERE sno='$postid'");
	//$l=$n+1;
	mysql_query("INSERT INTO s_likes VALUES('','$enrollmentno','$postid')");
	mysql_query("UPDATE `registration`.`query` SET `like` = '$n'+1 WHERE `query`.`sno` ='$postid'");
	exit();
	}
if(isset($_POST['unliked'])){
	$postid=$_POST['postid'];
	$result=mysql_query("SELECT * FROM query WHERE sno='$postid'");
	$row=mysql_fetch_array($result);
	$n=$row['like'];
	$l=$n-1;
	mysql_query("DELETE FROM s_likes WHERE postid='$postid' AND userid='$enrollmentno'");
	mysql_query("UPDATE `registration`.`query` SET `like` = '$l' WHERE `query`.`sno` ='$postid'");
	exit();
	}
	
if(isset($_POST['ans']))
{
	$postid=$_POST['postid'];
	$apost=$_POST['apost'];
	
	//if(a)
	//{
		//$ins=mysql_query("UPDATE `registration`.`ans` SET `ans` = '$apost' WHERE `ans`.`an_sno` ='$postid'
//");
	//}
	//else{
	$ins=mysql_query("INSERT INTO ans VALUES('','$postid','$s_name','$enrollmentno','$apost')");
	//}
}
if(isset($_POST['edit_ans']))
{
	$postid=$_POST['postid'];
	$apost=$_POST['apost'];
	
	$ins=mysql_query("UPDATE `registration`.`ans` SET `ans` = '$apost' WHERE `ans`.`an_sno` ='$postid'
");
	
}


if(@($_POST['delete']))
{
	$postid=$_POST['postid'];
	echo $postid;
	$del=mysql_query("DELETE FROM ans where an_sno='$postid'");
}

if(@($_POST['edit']))
{
	echo $postid=$_POST['postid'];
	//echo $postid;
	$ft=mysql_query("SELECT * FROM ans where an_sno='$postid'");
	if(mysql_num_rows($ft)==1)
	{
		while($fetch=mysql_fetch_assoc($ft))
		{
			$ans=$fetch['ans'];
			echo $ans;
		}
	}
	
}
?>


<script src="js/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.like').click(function(){
		var postid=$(this).attr('id');
		//alert(postid);
		$.ajax({
			url: 's_qu_page.php',
			type:'post',
			async: false,
			data:{
				'liked':1,
				'postid':postid
				},
				success: function(data){
					//$('#d1').html(data);
					setInterval(function(){
						$('.qu_page').load('s_qu_page.php');
						});
					}
			
			});
		});
		
		
		
		$('.unlike').click(function(){
		var postid=$(this).attr('id');
		$.ajax({
			url: 's_qu_page.php',
			type:'post',
			async: false,
			data:{
				'unliked':1,
				'postid':postid
				},
				success: function(){
					setInterval(function(){
						$('.qu_page').load('s_qu_page.php');
						});
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
			url: 's_qu_page.php',
			type:'post',
			async: false,
			data:{
				'ans':1,
				'apost':apost,
				'postid':postid
				},
				success: function(data){
					//$('#d1').html(data);
					setInterval(function(){
						$('.qu_page').load('s_qu_page.php');
						});
					}
			
			});
		});
		$('.ans_delete').click(function(){
		var postid=$(this).attr('id');
		//alert(postid);
		//var txt='#p'+postid;
		//var apost=$(txt).val();
		//alert(apost);
		//alert(postid);
		$.ajax({
			url: 's_qu_page.php',
			type:'post',
			async: false,
			data:{
				'delete':1,
				'postid':postid
				},
				success: function(data){
					//$('#d1').html(data);
					setInterval(function(){
						$('.qu_page').load('s_qu_page.php');
						});
					}
			
			});
		});
		
		$('.ans_edit').click(function(){
		var postid=$(this).attr('id');
		alert(postid);
		//var apost=$(postid).val();
		//alert(apost);
		//alert(postid);
		$.ajax({
			url: 's_qu_page.php',
			type:'post',
			async: false,
			data:{
				'edit':1,
				'postid':postid
				},
				success: function(data){
				$('.ans').html(data);
					/*setInterval(function(){
						$('.qu_page').load('s_qu_page.php');
						});*/
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
			url: 's_qu_page.php',
			type:'post',
			async: false,
			data:{
				'edit_ans':1,
				'apost':apost,
				'postid':postid
				},
				success: function(data){
					//$('#d1').html(data);
					setInterval(function(){
						$('.qu_page').load('s_qu_page.php');
						});
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



 <div class="querymain">
          	<?php //echo $print;?>
            <?php
		  $query=mysql_query("select * from query where ans_id='toall' order by sno desc");
		  while($row=mysql_fetch_array($query)){ ?>
        <div class='querydiv'>
        <div class='top'>
        <div class='query_topn'><?php echo $row['s_name']?></div>
        <!--<div class='query_topedit'><img src="images/9f84849c-fed5-459a-851e-e615291f2ab9.png" style="height:30px; width:40%; margin-left:20px;"/></div>-->
        
        <div class='query_topd'> Date :<?php  echo $row['date'] ?></div>
          
        </div>
         <!--<div class='query_ed'>
         
         </div>-->
		<div class="query">
        <div id="ans"></div>
		 <?php echo $row['query'];?>
         </div>
         <div class='query_bottom'>
         <div class='qb_like'>
         
         <?php
		   //echo $uname;
		   $result=mysql_query("SELECT * FROM s_likes WHERE userid='$enrollmentno' AND postid=".$row['sno']."");
		   if(mysql_num_rows($result)==1){ ?>
			   <br /><span><div class="unlike" id="<?php echo $row['sno'];?>"> <div class='q_unlike'></div></div></span>
			<?php }else{ ?>
			
			<br /><span><div class="like" id="<?php echo $row['sno'];?>"> <div class='q_like'></div></div></span>
		
			<?php } ?></div><div class="liken"> <?php echo $row['like'];?></div>
            
            <!--<div class='qb_getans'>Get answer</div>-->
            <div class='qb_ans' id="b<?php echo $row['sno'];?>"> <img src="images/images39.png" style="border-radius:50%; height:32px; width:25%; float:right;" />Answers</div>
			</div>
            <div class="answer">
            <textarea placeholder="give your answer" class="ans" value="$ans" name="ans" id="p<?php echo $row['sno'];?>" style="font-size:20px; font-weight:bolder; padding:10px; height:70px; width:75%; margin-left:12%; margin-top:9px; border-radius:12px; border:2px solid #000024; border-style:double;"></textarea>
            <input type="submit" value="Post Answer" class="subm" id="<?php echo $row['sno'];?>" name="sub" style=" height:35px; width:12%; border-radius:20px; background-color:#00F; font-size:18px; border:thick; color:white; font-size:18px; margin-right:140px; float:right; margin-top:5px;"/>
            </div>
           	</div>
            <div class="main_ans" id="ab<?php echo $row['sno'];?>">
            <?php $an_sno=$row['sno'];
			$ans=mysql_query("SELECT * FROM ans WHERE q_id='$an_sno' order by an_sno desc");
			if(mysql_num_rows($ans)>=1)
			{
				while($data=mysql_fetch_array($ans))
				{?>
					<div class="ans_list">
					<div class="ans_name">
					<?php echo $data['an_name']; ?></div>
					<?php echo $data['ans']; ?>
                    <?php if($_SESSION['enrollmentno']==$data['q_userid'])
					{?>
                    <div class="ans_bottom">
                    
                     <div class="ans_delete" id="<?php echo $data['an_sno'];?>">Delete</div>
                    <div class="ans_edit" id="<?php echo $data['an_sno']; ?>">Edit</div>
                   
                    </div>
                   <?php }?>
                    </div>
  				<?php }
			}else echo "not fetched"; ?>
            </div>
			
            
    


<?php }?>
</div>
