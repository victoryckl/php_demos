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

echo "<hr>";
$x = 5985;
var_dump($x);
$x = -345; // 负数
var_dump($x);
$x = 0x8C; // 十六进制数
var_dump($x);
$x = 047; // 八进制数
var_dump($x); 

echo "<hr>";

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
		return color;
	}
}

function print_vars($obj) {
	//print_r(get_object_vars($obj));
	foreach (get_object_vars($obj) as $prop => $val) {
		echo "$prop = $val<br/>";
	}
}

$herbie = new Car("white");
echo "herbie: Properties<br/>";
print_vars($herbie);

echo "<hr>";

$s = null;
echo "s=".$s."<br/>";
var_dump($s);

define("GREETING","Welcome to w3cschool.cn!");
var_dump(GREETING);
echo GREETING;
echo "<br/>";
echo greeting;
echo "<br/>";
define("GREETING2","Welcome to w3cschool.cn! 2", true);
echo greeting2;
echo "<br/>";

echo "strlen(greeting2)=".strlen(greeting2)."<br/>";
$g = "";
echo "strlen(\$g)=".strlen($g)."<br/>";
echo "strpos('Hello world!','world') = ".strpos("Hello world!","world")."<br/>";
echo "strpos('Hello world!','World') = ".strpos("Hello world!","World")."<br/>";
var_dump(strpos("Hello world!","World"));
echo "stripos('Hello world!','World') = ".stripos("Hello world!","World")."<br/>";
echo "<br/>";

$x=10;
$y=6;
echo ($x + $y);echo "<br/>"; // 输出16
echo ($x - $y);echo "<br/>"; // 输出4
echo ($x * $y);echo "<br/>"; // 输出60
echo ($x / $y);echo "<br/>"; // 输出1.6666666666667
echo ($x % $y);echo "<br/>"; // 输出4 

echo "<hr>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y); 
$x2 = array("a" => "red", "b" => "green");
$x3 = array("a" => "red", "b" => "green2");
echo "var_dump(\$x == \$x2)" , var_dump($x == $x2);
echo "var_dump(\$x == \$x3)" , var_dump($x == $x3);
echo "<hr>";

$test = 'w3cschool在线教程';
// 普通写法
$username = isset($test) ? $test : 'nobody'; echo $username, "<br/>";

// PHP 5.3+ 版本写法
$username = $test ?: 'nobody'; echo $username, "<br/>"; 

echo "优先级： &&  >  =  >  and","<br/>";
echo "优先级： ||  >  =  >  or","<br/>";
$a = 3;
$b = false;
$c = $a or $b;
var_dump($c);          // 这里的 $c 为 int 值3，而不是 boolean 值 true
$d = $a || $b;
var_dump($d);          //这里的 $d 就是 boolean 值 true 

$t=date("H");
if ($t<"10") {
	echo "Have a good morning!";
} else if ($t<"20") {
	echo "Have a good day!";
} else {
	echo "Have a good night!";
}
echo "<hr>";


$favcolor="red";
switch ($favcolor) {
	case "red":
	echo "Your favorite color is red!";
	break;
	case "blue":
	echo "Your favorite color is blue!";
	break;
	case "green":
	echo "Your favorite color is green!";
	break;
	default:
	echo "Your favorite color is neither red, blue, or green!";
}
echo "<hr>";

$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; 
echo "<br/>";
echo "I like " , $cars[0] , ", " , $cars[1] , " and " , $cars[2] , "."; 
echo "<br/>";
echo "count(\$cars)=".count($cars); 
echo "<br/>";

$arrlength = count($cars);
for($x=0;$x<$arrlength;$x++) {
	echo $cars[$x];
	echo "<br>";
} 

$age=array("Peter"=>"35","Ben"=>37,"Joe"=>"43");
var_dump($age);
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";
foreach($age as $x=>$x_value) {
	echo "Key=" . $x . ", Value=" . $x_value;
	echo "<br>";
}
echo "<hr>";

$cars = array(
	array("Volvo",100,96),
	array("BMW",60,59),
	array("Toyota",110,100)
);
var_dump($cars);

$families = array(
	"Griffin"=>array (
		"Peter",
		"Lois",
		"Megan"),
	"Quagmire"=>array(
		"Glenn"),
"Brown"=>array(
		"Cleveland",
		"Loretta",
		"Junior")
 );
var_dump($families); 

echo "<hr>";
echo $x22;
echo $GLOBALS['x22'];
require "3.php";
echo $x22;

echo "<hr>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "<br>";

echo "<hr>";
$i=1;
while ($i<=5) {
	echo "The number is " . $i . "<br>";
	$i++;
}

echo "<hr>";

$i=1;
do
{
	$i++;
	echo "The number is " . $i . "<br>";
} while ($i<=5);

echo "<hr>";

for ($i=1; $i<=5; $i++) {
	echo "The number is " . $i . "<br>";
}

echo "<hr>";

$x=array("one","two","three");
foreach ($x as $value) {
	echo $value . "<br>";
}
foreach ($x as $key => $value) {
	echo $key . " => " . $value . "<br>";
}

echo "<hr>";
echo '这是 ' . __FILE__ . " 第 " . __LINE__ . ' 行' . "<br/>";
echo __DIR__ . "<br/>";
function myTss() {
	echo __FUNCTION__ . "<br/>";
}
myTss();

class Test {
    function _print() {
    echo '类名为：'  . __CLASS__ . "<br>";
    echo  '函数名为：' . __FUNCTION__ ;
    }}
$t = new Test();
$t->_print();
	
echo "<hr>";



echo "<hr>";
echo "<hr>";
echo "<hr>";

?>

</body>
</html>
