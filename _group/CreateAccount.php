<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PC Parts shop</title>

  
</head>

<body>
<?php require 'navber.php'; ?>
  

  </header>
  <!-- start #header -->

  <!-- start #main-site -->
  <main id="main-site">

    <div class="signup-form">
      <form action="" method="post">
        <h2>アカウント登録</h2>
        　<div class="form-group">
          <div class="row">
            <div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="姓"
                required="required"></div>
            <div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="名"
                required="required"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="パスワード" required="required">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="confirm_password" placeholder="パスワード(確認用)"
            required="required">
        </div>
        <div class="form-group">
          <label class="checkbox-inline"><input type="checkbox" required="required"><a href="#">利用規約
              </a>に同意する</label>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info btn-lg btn-block">登録する</button>
        </div>
      </form>
      <div class="text-center">Already have an account? <a href="login_input.php">Sign in</a></div>
    </div>


    <!-- Top Sale -->

  </main>
  <!-- start #main-site -->

  <!-- start #footer -->
  <footer>

  </footer>
  
</body>

</html>