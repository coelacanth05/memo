<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/style.css" />

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
      require('dbconnect.php');

      $statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');
      $statement->execute(array($_POST['memo'], $_POST['id']));
      // try {
      //   $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;port=3306;charset=utf8', 'root', 'root');

      // $statement = $db->prepare('INSERT INTO memos SET memo=?,created_at=NOW()');
      // $statement->execute(array($_POST['memo']));
      // $statement->execute();
      // echo 'メッセージが登録されました';

      // $db->exec('INSERT INTO memos SET memo="' . $_POST['memo'] . '",created_at=NOW()');
      // } catch (PDOException $e) {
      //   echo 'DB接続エラー: ' . $e->getMessage();
      // }
      ?>
    </pre>
    <p>メモの内容を変更しました</p>
    <p><a href="index.php">戻る</a></p>
  </main>
</body>

</html>
