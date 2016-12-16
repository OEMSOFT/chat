<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php 
	$usernamecook = $_COOKIE['ChatUSER'];
?>
<form method="POST">
<input placeholder="Username" value="<?php echo $usernamecook; ?>" type="text" name="username">
<input type="submit" value="Войти в чат!">
</form>
<?php
	if($_POST){
	SetCookie("ChatUSER", $_POST['username']);
	Header("Location: ./chat.php");
	}
?>
</body>
</html>