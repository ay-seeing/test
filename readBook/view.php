<?php 
include("header.php");
 ?>

<div class="wraper content">
	<?php 
	$str="select * `readbook`.`bookinfo` while `id`=$_GET[sid]";
	$arr=mysql_fetch_array(mysql_query($str));
	 ?>
	<h2><?php echo $arr["title"]  ?></h2>
	<p><?php echo $arr["content"]  ?></p>
</div>

 <?php 
include("footer.php");
 ?>