<?php 
include("header.php");
 ?>
<div class="content">
	<div class="edit">
		<form action=<?php echo __FILE__; ?> method="post">
			<div class="f14"><strong class="blue">书名</strong><span class="ml15 gray">出版日期</span></div>
		 	<div class="mt10"><textarea name="notes" cols="30" rows="10" class="textarea"></textarea></div>
		 	<div class="mt10"><input type="button" value="保存" class="btn"></div>
	 	</form>
	</div>
</div>
 <?php 
include("footer.php");
 ?>