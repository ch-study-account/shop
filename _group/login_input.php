<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php require 'navber.php'; ?>

<main id="main-site">

    <div class="signup-form">
      <form action="login_output.php" method="post">
        <h2>ログイン</h2>
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

  </main>



</html>