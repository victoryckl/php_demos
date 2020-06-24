<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
class Site {
	var $url;
	var $title;
	
	function __construct($par1, $par2) {
		$this->url = $par1;
		$this->title = $par2;
		echo get_class($this) .'.'. __FUNCTION__ . ' ' . '构造函数 ' . $this->title . '<br/>';
	}
	
	function __destruct() {
		echo get_class($this) .'.'. __FUNCTION__ . ' ' . '析构函数 ' . $this->title . '<br/>';
	}
	
	function setUrl($par) {
		$this->url = $par;
	}
	
	function getUrl() {
		echo get_class($this) .'.'. __FUNCTION__ . ' ' . $this->url . "<br>";
	}
	
	function setTitle($par) {
		$this->title = $par;
	}
	
	function getTitle() {
		echo get_class($this) .'.'. __FUNCTION__ . ' ' . $this->title . "<br>";
	}
}

$w3cschool = new Site('www.w3cschool.cn', 'W3Cschool教程');
$taobao = new Site('www.taobao.com', '淘宝');
$google = new Site('www.google.com', 'Google 搜索');

// 调用成员函数，获取标题和URL
$w3cschool->getTitle();
$taobao->getTitle();
$google->getTitle();

$w3cschool->getUrl();
$taobao->getUrl();
$google->getUrl();

class Child_Site extends Site {
	var $category;
	
	function setCate($par) {
		$this->category = $par;
	}
	
	function getCate() {
		echo get_class($this) .'.'. __FUNCTION__ .' '.$this->category . "<br/>";
	}
	
	function getUrl() {
		echo get_class($this) .'.'. __FUNCTION__ .' '.$this->url."<br>";
	}
}

echo "<hr>";
$child1 = new Child_Site("www.baidu.com", "百度");
$child1->setCate('新闻');
$child1->getCate();
$child1->getUrl();

echo "<hr>";

class MyClass {
	public $public = 'Public';
	protected $protected = 'Protected';
	private $private = 'Private';
	
	function printHello() {
		echo $this->public."<br>";
		echo $this->protected."<br>";
		echo $this->private."<br>";
	}
	
	// 声明一个公有的方法
    public function MyPublic() {
		echo get_class($this) . '->' . __FUNCTION__ . ' ' . "<br/>";
	}

    // 声明一个受保护的方法
    protected function MyProtected() { }

    // 声明一个私有的方法
    private function MyPrivate() { }

    // 此方法为公有
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$obj = new MyClass;
$obj->printHello();
echo $obj->public."<br>";
//echo $obj->protected."<br>";
//echo $obj->private."<br>";

class MyClass2 extends MyClass {
	protected $protected = 'Protected2';
	
	function printHello() {
		echo $this->public."<br>";
		echo $this->protected."<br>";
		//echo $this->private."<br>";
	}
	
	// 此方法为公有
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        //$this->MyPrivate(); // 这行会产生一个致命错误
    }
}

echo "<hr>";
$obj2 = new MyClass2();
$obj2->printHello(); // 输出 Public、Protected2 和 Undefined
echo $obj2->public."<br>"; // 这行能被正常执行
//echo $obj2->private."<br>"; // 未定义 private
//echo $obj2->protected."<br>"; // 这行会产生一个致命错误

echo "<hr>";

$myclass = new MyClass;
$myclass->MyPublic(); // 这行能被正常执行
//$myclass->MyProtected(); // 这行会产生一个致命错误
//$myclass->MyPrivate(); // 这行会产生一个致命错误
$myclass->Foo(); // 公有，受保护，私有都可以执行
echo "<hr>";

$myclass2 = new MyClass2;
$myclass2->MyPublic(); // 这行能被正常执行
$myclass2->Foo2(); // 公有的和受保护的都可执行，但私有的不行

class Bar 
{
    public function test() {
        $this->testPrivate();
        $this->testPublic();
    }

    public function testPublic() {
        echo "Bar::testPublic\n";
    }
    
    private function testPrivate() {
        echo "Bar::testPrivate\n";
    }
}

class Foo extends Bar 
{
    public function testPublic() {
        echo "Foo::testPublic\n";
    }
    
    private function testPrivate() {
        echo "Foo::testPrivate\n";
    }
}

$myFoo = new Foo();
$myFoo->test(); // Bar::testPrivate 
                // Foo::testPublic

echo "<hr>";

// 声明一个'iTemplate'接口
interface iTemplate {
	public function setVariable($name, $var);
	public function getHtml($template);
}

// 实现接口
class Template implements iTemplate {
	private $vars = array();
	public function setVariable($name, $var) {
		$this->vars[$name] = $var;
	}
	
	public function getHtml($template) {
		$t2 = '';
		foreach ($this->vars as $name => $value) {
			$t2 .= str_replace($name , $value, $template);
			$t2 .="<br/>";
		}
		return $t2;
	}
}

$t1 = new Template;
$t1->setVariable('world','Shanghai');
echo $t1->getHtml("Hello world!");

echo "<hr>";

class MyClass3 {
	const constantVar = '这是一个常量值';
	function showConstant() {
		echo $this::constantVar . ", " . self::constantVar . "<br/>";
	}
}

$my3 = new MyClass3;
$my3->showConstant();
echo MyClass3::constantVar . "<br/>";

echo "<hr>";

abstract class AbstractClass {
	//强制要求子类定义这些方法
	abstract protected function getValue();
	// 我们的抽象方法仅需要定义需要的参数
	abstract protected function prefixValue($prefix);
	
	//普通方法(非抽象方法)
	public function printOut() {
		print $this->getValue() . '<br/>';
	}
}

class ConcreteClass1 extends AbstractClass {
	protected function getValue() {
		return 'ConcreteClass1';
	}
	
	public function prefixValue($prefix) {
		return "{$prefix} ConcreteClass1";
	}
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_')."<br/>";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_')."<br/>";

echo "<hr>";

class ConcreteClass extends AbstractClass {
	protected function getValue() {
		return 'ConcreteClass';
	}
	
	// 我们的子类可以定义父类签名中不存在的可选参数
	public function prefixValue($name, $separator = "->") {
		if ($name == "Pacman") {
			$prefix = "Mr";
		} else if ($name == "PacWoman") {
			$prefix = "Mrs";
		} else {
			$prefix = "";
		}
		return "{$prefix}{$separator}{$name}";
	}
}

$class = new ConcreteClass;
echo $class->prefixValue('Pacman'), '<br/>';
echo $class->prefixValue('PacWoman'), '<br/>';

echo "<hr>";

class Fool {
	public static $my_static = 'fool';
	
	public function staticValue() {
		return self::$my_static;
	}
}

print Fool::$my_static . "<br/>";
$fool = new Fool();
print $fool->staticValue() . "<br/>";


echo "<hr>";

class BaseClass {
	function __construct() {
		print "BaseClass 类中的构造方法 <br/>";
	}
	
	public function test() {
		echo "BaseClass::test() called" . PHP_EOL;
	}
	
	final public function moreTesting() {
		echo "BaseClass::moreTesting() called"  . PHP_EOL;
	}
}

class ChildClass extends BaseClass {
   //public function moreTesting() {
   //    echo "ChildClass::moreTesting() called"  . PHP_EOL;
   //}
}
// 报错信息 Fatal error: Cannot override final method BaseClass::moreTesting()

//调用父类构造方法
class SubClass extends BaseClass {
	function __construct() {
		parent::__construct(); //子类构造方法不能自动调用父类的构造方法
		print "SubClass 类中构造方法 <br/>";
	}
}

class OtherSubClass extends BaseClass {
    // 继承 BaseClass 的构造方法
}

$obj = new BaseClass();// 调用 BaseClass 构造方法
$obj = new SubClass();// 调用 BaseClass、SubClass 构造方法
$obj = new OtherSubClass();// 调用 BaseClass 构造方法

echo "<hr>";

echo "<hr>";
?>

</body>
</html>