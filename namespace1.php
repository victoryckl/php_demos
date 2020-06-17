<?php

namespace MyProject {
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
	function myNamespace() {
		echo __NAMESPACE__ . "<br/>";
	}
}

namespace AnotherProject {
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
	function myNamespace() {
		echo __NAMESPACE__ . "<br/>";
	}
}

namespace {
	MyProject\myNamespace();
	AnotherProject\myNamespace();
	echo "<hr>";
	echo "在声明命名空间之前唯一合法的代码是用于定义源文件编码方式的 declare 语句。所有非 PHP 代码包括空白符都不能出现在命名空间的声明之前。";
}
?>