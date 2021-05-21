<?php session_start(); ?>

<?php
	
	unset($_SESSION['user']);
	//MySQLデータベースに接続する
	require 'db_connect.php';
	
	$sql = "select * from user where email = :email and password = :password";
	
	$stm = $pdo->prepare($sql);
	
	$stm->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
	$stm->bindValue(':password',$_POST['password'],PDO::PARAM_STR);
	$stm->execute();
	$result = $stm->fetchAll(PDO::FETCH_ASSOC);
	foreach ($result as $row) {



		
		$_SESSION['user'] = [
			'user_id' => $row['user_id'], 'first_name' => $row['first_name'],
			'last_name' => $row['last_name'],
			'email' => $row['email'],
			'password' => $row['password'],
			'register_date' => $row['register_date']
		];
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ログイン画面</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php require 'navber.php'; ?>
	<?php
	if (isset($_SESSION['user'])) {
		echo 'ログインしました。','ようこそ', $_SESSION['user']['first_name'], 'さん。',
		'<br><a href="mypage.php">マイページ</a>'
		;
	} else {
		echo '
		<main id="main-site">

    <div class="signup-form">
      <form action="login_output.php" method="post">
		<h2>ログイン</h2>
		<p>Emailまたはパスワードが違います。</p>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="パスワード" required="required">
        </div>
        
        <div class="form-group">
          <button type="submit" class="btn btn-info btn-lg btn-block">Sign in</button>
        </div>
      </form>
      <div class="text-center"><a href="CreateAccount.php">アカウントを作成</a></div>
    </div>






    <!-- Top Sale -->

  </main>
		
		';
	}
	?>
</body>

</html>