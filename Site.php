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
	
	function setUrl($par) {
		$this->url = $par;
	}
	
	function getUrl() {
		echo $this->url . "<br>";
	}
	
	function setTitle($par) {
		$this->title = $par;
	}
	
	function getTitle() {
		echo $this->title . "<br>";
	}
}

$w3cschool = new Site;
$taobao = new Site;
$google = new Site;

// 调用成员函数，设置标题和URL
$w3cschool->setTitle( "W3Cschool教程" );
$taobao->setTitle( "淘宝" );
$google->setTitle( "Google 搜索" );

$w3cschool->setUrl( 'www.w3cschool.cn' );
$taobao->setUrl( 'www.taobao.com' );
$google->setUrl( 'www.google.com' );

// 调用成员函数，获取标题和URL
$w3cschool->getTitle();
$taobao->getTitle();
$google->getTitle();

$w3cschool->getUrl();
$taobao->getUrl();
$google->getUrl();

?>

</body>
</html>