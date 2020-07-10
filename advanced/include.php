<html>

<?php
/*
include 和 require 除了处理错误的方式不同之外，在其他方面都是相同的：
    require 生成一个致命错误（E_COMPILE_ERROR），在错误发生后脚本会停止执行。
    include 生成一个警告（E_WARNING），在错误发生后脚本会继续执行。
	
因此，如果您希望继续执行，并向用户输出结果，即使包含文件已丢失，那么请使用 include。否则，在框架、CMS 或者复杂的 PHP 应用程序编程中，请始终使用 require 向执行流引用关键文件。这有助于提高应用程序的安全性和完整性，在某个关键文件意外丢失的情况下。
包含文件省去了大量的工作。这意味着您可以为所有网页创建标准页头、页脚或者菜单文件。然后，在页头需要更新时，您只需更新这个页头包含文件即可。
*/
?>

<head>

<?php include 'header.php'; ?>

</head>

<body>

<div class="leftmenu">
<?php require 'menu.php'; ?>
 </div>
 
<h1>Welcome to my home page.</h1>
<?php
include 'vars.php'; 
echo "I have a $color $car";
?>

</body>


</html>