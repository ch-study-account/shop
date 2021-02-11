<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>会員登録画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>
	<form action="customer_output.php" method="post">
	    <label for="name">名前：</label><input type="text" name="name" value=""><br>
		<label for="address">住所：</label><input type="text" name="address" value=""><br>
        <label for="login">ログイン名：</label><input type="text" name="login"><br>
        <label for="password">パスワード</label><input type="password" name="password"><br>
        <input type="submit" value="登録">
    </form>
	</body>

</html>