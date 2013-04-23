<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>读书记登录</title>
	<link rel="stylesheet" href="css/common.css" />
	<style>
.login_box{position:fixed;left:50%;top:50%;width:300px;padding:15px;background:#f0f0f0;border:1px solid #eee;border-radius:5px;box-shadow:1px 1px 3px #ccc;margin:-150px 0 0 -155px;}
.login_box--h{font:18px/normal "Microsoft YaHei";color:black;margin-bottom:15px;}
.login_box input[name*="user"]{width:294px;height:30px;line-height:30px;padding: 0 2px;background:white;border:1px solid #999;color:#999;border-radius:2px;}
input:-webkit-autofill{background-color:black !important;color:#999 !important;box-shadow:none;}
.login_box input:focus{color:#666;}
</style>

</head>
<body>
<?php 
if( !empty($_GET["out"])){
	setcookie("use","",time()-1);
	setcookie("ps","out");
	echo "<script type='text/javascript'>window.location.href='login.php';</script>";
}
if(!empty($_POST["userPass"]) && $_POST["userName"] == "admin" && md5($_POST["userPass"] )== "e10adc3949ba59abbe56e057f20f883e"){
	setcookie("use",$_POST["userName"]);
	setcookie("ps","in");
	echo "<script type='text/javascript'>window.location.href='index.php';</script>";
}
 ?>
<div class="login_box">
	<?php 
	if(!empty($_COOKIE["ps"]) && $_COOKIE["ps"] == "in"){
	?>
	<h1 class="login_box--h">看书记登出</h1>
	<div class="mt15"><a href="index.php" class="underline">直接进入首页</a><a href="?out=loginOut" class="underline ml15">退出登录</a></div>
	
	<?php 
	}else{
	?>
	<h1 class="login_box--h">看书记登录</h1>
	<form action="login.php" method="post" name="loginForm">
		<div><input type="text" name="userName" /></div><!-- autocomplete="off" -->
		<div class="mt15"><input type="password" name="userPass" /></div>
		<div class="mt15"><a href="index.php" class="fr underline">直接进入首页</a><input type="button" class="btn" name="loginBtn" value="登 录"></div>
	</form>
	<?php
	}
	 ?>

</div>
<script>
var oForm=document.forms["loginForm"];
var oBtn=oForm["loginBtn"];
var oPs=oForm["userPass"];
oBtn.onclick=function(){
	oForm.submit();
}
oPs.onkeydown=function(ev){
	var oEvent=ev || event;
	if(oEvent.keyCode==13 && oEvent.ctrlKey){
		oForm.submit();
	};
}

</script>
<script>
// 去除用户名密码黄色背景，但是无效
// Stop chrome's autocomplete from making your input fields that nasty yellow. Yuck.
if (navigator.userAgent.toLowerCase().indexOf("chrome") >= 0) {
	$(window).load(function(){
		$('input:-webkit-autofill').each(function(){
			var text = $(this).val();
			var name = $(this).attr('name');
			$(this).after(this.outerHTML).remove();
			$('input[name=' + name + ']').val(text);
		});
	});
}
</script>

<p>http://www.benjaminmiles.com/2010/11/22/fixing-google-chromes-yellow-autocomplete-styles-with-jquery/</p>
<p>https://code.google.com/p/chromium/issues/detail?id=46543#c22</p>
<p>http://css-tricks.com/snippets/html/autocomplete-off/</p>

</body>
</html>

