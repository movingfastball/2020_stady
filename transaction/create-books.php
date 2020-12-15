<?php
    declare(strict_types=1);
    function connect(): PDO
    {
        $pdo = new PDO('mysql:host=localhost; dbname=honkaku; charset=utf8mb4', 'root', 'nao51900');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        return $pdo;
    }

    try{
        $pdo = connect();
    }catch(PDOException $e){
        echo '接続に成功した';
        return;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>トランザクション</title>
</head>
<body>
<pre>
<?php

    $pdo->beginTransaction();

    try{
        $pdo->exec("INSERT INTO books(created,title) VALUES(CURRENT_TIMESTAMP,'SAMPLE BOOK 1')");
        echo 'SAMPLE BOOK 1のレコード登録に成功しました',PHP_EOL;

        $pdo->exec("*MISS SQL*");
        echo 'MISS SQLのレコード登録に成功しました',PHP_EOL;

        $pdo->exec("INSERT INTO books(created,title) VALUES(CURRENT_TIMESTAMP,'SAMPLE BOOK 2')");
        echo 'SAMPLE BOOK 2のレコード登録に成功しました',PHP_EOL;

        $pdo->commit();
        echo 'データベースの処理完了',PHP_EOL;
    }catch(Exception $e){
        $pdo->rollback();
        echo 'エラーによりロールバック';
    }
?>
</pre>
</body>
</html>

