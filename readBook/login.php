<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>读书记登录</title>
	<link rel="stylesheet" href="css/common.css" />
	<style>
.login_box{position:fixed;left:50%;top:50%;width:300px;padding:15px;background:#f0f0f0;border:1px solid #eee;border-radius:5px;box-shadow:1px 1px 3px #ccc;margin:-180px 0 0 -155px;}
.login_box--h{font:18px/normal "Microsoft YaHei";color:black;margin-bottom:15px;}
.login_box input{width:294px;height:30px;line-height:30px;padding: 0 2px;border:1px solid #999;color:#999;border-radius:2px;}
.login_box input:focus{color:#666;}
.login_box .btn{width:auto;padding:0 15px;color:white;font-size:18px;border:1px solid #0f4da2;cursor:pointer;background:-webkit-linear-gradient(top,#2875de,#185dbc);box-shadow:inset 1px 1px 0 0 rgba(255,255,255,0.2);text-shadow:-1px -1px 1px #0f4da2;}
</style>
</head>
<body>
<div class="login_box">
	<h1 class="login_box--h">看书记登录</h1>
	<form action="index.php" method="post">
		<div><input type="text" name="user" placeholder="用户名" /></div>
		<div class="mt15"><input type="password" name="userPass" placeholder="密码" /></div>
		<div class="mt15"><input type="button" class="btn" value="登 录"></div>
	</form>
</div>
</body>
</html>