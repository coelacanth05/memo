<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>PHP</title>
</head>

<body>
  <header>
    <h1 class="font-weight-normal">PHP</h1>
  </header>

  <main>
    <h2>Practice</h2>
    <pre>
      <?php

      const DB_HOST = 'mysql:dbname=mydb;host=127.0.0.1;
            charset = utf8';
      const DB_USER = 'root';
      const DB_PASSWORD = 'root';
      try {
        $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD);
        // echo '接続成功';
      } catch (PDOException $e) {
        echo 'DB接続エラー: ' . $e->getMessage();
      }
      // try {
      //   $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;port=3306;charset=utf8', 'root', 'root');
      // } catch (PDOException $e) {
      //   echo 'DB接続エラー: ' . $e->getMessage();
      // }


      $count = $pdo->exec('INSERT INTO my_items SET id=1, item_name ="もも",price=210,keyword="缶詰,ピンク,甘い"');
      echo $count . '件のデータを挿入しました';
      ?>
    </pre>
  </main>
</body>

</html>
