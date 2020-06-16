<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h1>My first PHP page</h1> 
<?php

echo "My first PHP script! echo<br/>";
print "print<br/>";

$x = 5;
$y = 6;
$z = $x + $y;
echo "$x + $y = $z<br>";

function myTest() {
	$m = 10;//局部变量
	echo "output in myTest()<br/>";
	echo "x=$x";
	echo "<br/>";
	echo "m=$m";
	echo "<br/>"; 
}

function myTestGlobal() {
	global $x,$y;
	$m = 10;//局部变量
	echo "output in myTestGlobal()<br/>";
	echo "x=$x";
	echo "<br/>";
	echo "m=$m";
	echo "<br/>";
	
	$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y']; 
	echo "y=".$GLOBALS['y'];
	echo "<br/>";
}

myTest();

echo "output in outside<br/>";
echo "x=$x";
echo "<br/>";
echo "m=$m";
echo "<br/>";

myTestGlobal();

function staticTest() {
	static $var = 0;
	echo "var=".$var."<br/>";
	$var++;
}

staticTest();
staticTest();
staticTest();

function paramTest($p) {
	echo "p=".$p."<br/>";
}

paramTest(3);
paramTest(358);

echo "<h2>PHP 很有趣!</h2>";
echo "Hello world!<br>";
echo "我要学 PHP!<br>";
echo "这是一个", " 字符串", " 使用了", " 多个", " 参数。";
echo "<br>";

$txt1 = "学习 PHP";
$txt2 = "w3cschool.cn";
$cars = array("Volvo","BMW","Toyota");

echo $txt1;
echo "<br>";
echo "在 $txt2 学习 PHP ";
echo "<br>";
echo "我车的品牌是 {$cars[0]}<br/>";

print_r("Hello World!<br/>");
print_r("Goodbye World!<br/>");
print_r($cars);

echo "<br/>______________________________<br/>";
$x = 5985;
var_dump($x);
$x = -345; // 负数
var_dump($x);
$x = 0x8C; // 十六进制数
var_dump($x);
$x = 047; // 八进制数
var_dump($x); 

echo "<br>";
echo "<br>";
echo "<br>";

if (true === TRUE) echo "<br>true === TRUE<br>";
$x=true;  var_dump($x);       
$y=false; var_dump($y);
var_dump($cars);

$arr=array(1,"2","fwefw",-33,4.2,true);
var_dump($arr);

class Car {
	var $color;
	function Car($color="green") {
		return $this->color = $color;
	}
	function what_color() {
		return $this->color;
	}
}

function print_vars($obj) {
	//print_r(get_object_vars($obj));
	foreach (get_object_vars($obj) as $prop => $val) {
		echo "$prop = $val";
	}
}

$herbie = new Car("white");
echo "herbie: Properties<br/>";
print_vars($herbie);

?>

</body>
</html>
