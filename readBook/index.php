<?php  
include("header.php");
?>


<div class="wraper content">
	<aside class="aside">
		<article class="article">
			<header class="article--h"><h1 class="h1">读书笔记</h1><a href="#" class="more">更多</a></header>
			<ol class="notes">
				<?php 
				$snote="select * from `readbook`.`bookinfo` order by `id` desc limit 0,5";
				$query=mysql_query($snote,$conn);
				if(count(mysql_fetch_array($query))==0){
					while($arr=mysql_fetch_array($query)){
					?>
					<li><div href="#" class="name"><?php echo $arr["title"] ?></div><div><a href="view.php?sid="<?php echo $arr["title"] ?>>查看</a><a href="edit.php?sid="<?php echo $arr["title"] ?> class="ml10">编辑</a></div></li>
					<?php
					}
				}else{
				?>
					<li>暂无笔记。。。</li>
				<?php
				}
				 ?>
			</ol>
		</article>
	</aside>
	<div class="main">
		<section class="section">
			<header class="section--h"><h1 class="h1">计算机类</h1><a href="#" class="more">更多</a></header>
			<ul class="pic_list">
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
			</ul>
		</section>
		<section class="section">
			<header class="section--h"><h1 class="h1">健康生活类</h1><a href="#" class="more">更多</a></header>
			<ul class="pic_list">
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
				<li><a href="#"><img src="../../images/readbook_01.jpg" alt=""></a><div class="txt">士大夫似的</div></li>
			</ul>
		</section>
	</div>
</div>


<?php  
include("footer.php");
?>