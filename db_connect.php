<?php
  // データベースユーザ
  //$user = 'root';
  $user = 'foaexeereyhmch';
  //$password = '';
  $password = '52ba0ee1be8c68da37638cbb6b1876c5da70f3a45505675c8a90b8b17435c93c';
  // 利用するデータベース
  //$dbName = 'shop';
  $dbName = 'da5asa8fcdmdo';
  // MySQLサーバ
  //$host = 'localhost';
  $host = 'ec2-54-243-92-68.compute-1.amazonaws.com';
  $port ='5432'
  // MySQLのDSN文字列
  //$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
  $dsn = "pgsql:host={$host};port='5432';dbname={$dbName};charset=utf8";
  //MySQLデータベースに接続する
  try {
    $pdo = new PDO($dsn, $user, $password);
    // プリペアドステートメントのエミュレーションを無効にする
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 例外がスローされる設定にする
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span><br>';
    echo $e->getMessage();
    exit();
  }
  ?>
