<html>

<head>
<?php require "header.php" ?>
</head>

<body>
<?php
$file = fopen("welcome.txt", "r") or exit('Unable to open file!');

while (!feof($file)) {
	echo fgets($file) . "<br/>";
}

fclose($file);
?>
</body>

</html>
