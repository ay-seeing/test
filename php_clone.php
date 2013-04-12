<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
class tt{
	public $name;
	function fntt($name){
		$this->a=$name;
	}
	function __clone(){
		echo '__clone<hr />';
	}
}

$a=new tt();
$a->fntt(67889);
printf("base class %s<hr />",$a->a);

$b=clone $a;  // 克隆对象$a，并运行该对象类中的 __clone 函数
$b->fntt(123);
printf("base class %s<hr />",$b->a);


?>
</body>
</html>