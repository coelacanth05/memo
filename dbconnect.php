<?php
try {
$db = new PDO('mysql:dbname=mydb;host=127.0.0.1;port=3306;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
echo 'DB接続エラー: ' . $e->getMessage();
}
