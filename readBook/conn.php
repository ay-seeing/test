<?php 
$conn=@mysql_connect("localhost:3306","root","") or die ("数据库连接失败");
@mysql_select_db("readbook",$conn) or die ("数据库打开失败");
@mysql_query("set names 'utf8'");   //设置编码，用于老版本mysql
@mysql_set_charset("utf8");  //设置字符编码，用于mysql较新版本
 ?>