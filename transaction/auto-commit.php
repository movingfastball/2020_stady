<?php

declare(strict_types = 1);

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
    echo '接続に失敗しました';
    return;
}
?>

<body>
    <?php
        try{
            $pdo->exec("INSERT INTO books(created,title)VALUES(CURRENT_TIMESTAMP,'ブランド牛肉1巻')");
            $pdo->exec("INSERT INTO books(created,title)VALUES(CURRENT_TIMESTAMP,'ブランド牛肉2巻')");
            echo "本の登録に成功しました";
        }catch (Exception $e){
            echo '例外が発生しました';
        }
    ?>
</body>