<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>購入履歴画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>
	<?php
		//ログインの確認
		if(isset($_SESSION['customer'])){

			//MySQLデータベースに接続する
			require 'db_connect.php';
			//SQL文を作る（プレースホルダを使った式）
			$sql = "select * from purchase where  customer_id = :customer_id";
			//プリペアードステートメントを作る
			$stm = $pdo->prepare($sql);
			//プリペアードステートメントに値をバインドする
			$stm->bindValue(':customer_id',$_SESSION['customer']['id'], PDO::PARAM_STR);
			//SQL文を実行する
			$stm->execute();
			//結果の取得（連想配列で受け取る）
			$result = $stm->fetchAll(PDO::FETCH_ASSOC);
			
			foreach ($result as $row) {
			$total = 0;
			$sql = "select * from purchase_detail where purchase_id = :purchase_id";
			//プリペアードステートメントを作る
			$stm = $pdo->prepare($sql);
			//プリペアードステートメントに値をバインドする
			$stm->bindValue(':purchase_id', $row['id'], PDO::PARAM_STR);
			//SQL文を実行する
			$stm->execute();
			//結果の取得（連想配列で受け取る）
			$result2 = $stm->fetchAll(PDO::FETCH_ASSOC);
			}
	?>	
		<table>
			<th>商品番号</th>
			<th>商品名</th>
			<th>価格</th>
			<th>個数</th>
			<th>小計</th>

		<?php
		foreach($result2 as $p){
			//SQL文を作る（プレースホルダを使った式）
			$sql = "select * from product where id = :purchase_id";
			//プリペアードステートメントを作る
			$stm = $pdo->prepare($sql);
			//プリペアードステートメントに値をバインドする
			$stm->bindValue(':purchase_id', $p['product_id'], PDO::PARAM_STR);
			//SQL文を実行する
			$stm->execute();
			//結果の取得（連想配列で受け取る）
			$result3 = $stm->fetchAll(PDO::FETCH_ASSOC);

			foreach($result3 as $key){

		?>

		<?php
		?>

				<tr>
				<td><?= $key['id'] ?></td>
				<td><?= $key['name'] ?></td>
				<td><?= $key['price'] ?></td>
				<td><?= $p['count'] ?></td>
				<?php
				$subtotal = $key['price'] * $p['count'];
				$total += $subtotal;
				?>
				<td><?= $subtotal ?></td>
			</tr>
		<?php
			}

			}
		?>
		<tr>
					<td>合計</td>
					<td></td>
					<td></td>
					<td></td>
					<td><?= $total ?></td>
					<td></td>
				</tr>

		</table>
	<hr>
		<?php
		}else{
	?>
	購入履歴を表示するには、ログインしてください。
	<?php		
		}
	?>
</body>

</html>