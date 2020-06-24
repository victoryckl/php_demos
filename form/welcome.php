<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

Welcome <?php echo $_POST['fname']; ?>!<br>
You are <?php echo $_POST['age']; ?> years old.<br>
<?php
echo $_SERVER["PHP_SELF"];
?>
<br/>

</body>
</html>