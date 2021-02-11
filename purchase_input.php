<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>購入画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>
	<?php
	//ログインの有無の確認
	if(!isset($_POST['customer'])){
		echo "購入手続きを行うにはログインしてください。";
	}else if(empty($_SESSION['product'])){
		echo "カートに商品がありません。";
	}else{
		//正常処理
	?>
	<p>お名前：<?= $_SESSION['customer']['name'] ?></p>
	<p>お名前：<?= $_SESSION['customer']['name'] ?></p>
	}
	
</body>

</html>