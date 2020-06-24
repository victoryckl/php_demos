<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php  
echo "哈哈哈";
/*这里是php的注释

	$_SERVER["PHP_SELF"]服务器变量也会被植入脚本。
	原因就是跨网站脚本是附在执行文件的路径后面的，因此$_SERVER["PHP_SELF"]的字符串就会包含HTTP链接后面的JavaScript程序代码。
	考虑到用户会在浏览器地址栏中输入以下地址:
	/test_form.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E
	以上的 URL 中，将被解析为如下代码并执行：
	"<form method='post' action='test_form.php/'><script>alert('hacked')</script>"
*/
?>

<form id='form1' action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Name:<input type="text" name="fname">
Age:<input type="text" name="age">
<input type="submit">
</form>

<br>
<!-
$_SERVER["PHP_SELF"] 可以通过 htmlspecialchars() 函数来避免被利用。
->
<form id='form2' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
Name:<input type="text" name="fname">
Age:<input type="text" name="age">
<input type="submit">
</form>


</body>
</html>