<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>读书记</title>
	<link rel="stylesheet/less" type="text/css" href="css/common.less" />
	<link rel="stylesheet" href="css/index.css" />
	<link rel="stylesheet/less" type="text/css" href="css/page.less" />
	<script src="https://raw.github.com/cloudhead/less.js/master/dist/less-1.3.3.min.js"></script>
</head>
<body>
<?php 
include("conn.php");
?>
<?php 
if( !empty($_GET["out"])){
	setcookie("use","",time()-1);
	setcookie("ps","out");
	echo "<script type='text/javascript'>window.location.href='index.php';</script>";
}
 ?>
<header class="header">
	<div class="wraper">
		<menu class="menu"><a href="index.php" class="current">书籍分类</a><a href="list.php">计算机类</a></menu>
		<div class="lobin_box">
		<?php 
		if(!empty($_COOKIE["ps"]) && $_COOKIE["ps"] == "in" && preg_match('/\/upfile.php/',$_SERVER['PHP_SELF'])){
			echo '<a href="?out=loginOut" class="blue">退出</a>';
		}elseif(!empty($_COOKIE["ps"]) && $_COOKIE["ps"] == "in"){
			echo '<a href="upfile.php" class="blue">上传文件</a><a href="?out=loginOut" class="blue ml15">退出</a>';
		}else{
			echo '<a href="login.php" class="blue">登录</a>';
		}
		 ?>
		</div>
	</div>
</header>
