<?php
$item_id = $_GET['item_id'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>トップ画面</title>
	<link rel="stylesheet" href="style.css">

</head>

<body>
<?php require 'navber.php'; ?>
    <?php
    
	require 'db_connect.php';
	$sql = "select * from product where item_id = :item_id";
	$stm = $pdo->prepare($sql);
	$stm->bindValue(':item_id',$_REQUEST['item_id'],PDO::PARAM_STR);
	$stm->execute();
	$result = $stm->fetchAll(PDO::FETCH_ASSOC);

	foreach ($result as $row) {
	?>
		<p><img src="assets/product/<?= $row['item_category'] ?>/<?= $row['item_image'] ?>"></p>
		<form action="cart.php" method="post">
			<p>商品番号：<?= $row['item_id'] ?></p>
			<p>商品名：<?= $row['item_name'] ?></p>
			<p>価格：<?= $row['item_price'] ?></p>
			<p>個数：<select name="count">
					<?php
					for ($i = 1; $i <= 10; $i++) {
					?>
						<option value="<?= $i ?>"><?= $i ?></option>
					<?php
					}
					?>
				</select></p>
			<input type="hidden" name="item_id" value="<?= $row['item_id'] ?>">
			<input type="hidden" name="item_name" value="<?= $row['item_name'] ?>">
			<input type="hidden" name="item_price" value="<?= $row['item_price'] ?>">
			<p><input type="submit" value="カートに追加"></p>
		</form>
	<?php
	}
	?>
</body>


</html>