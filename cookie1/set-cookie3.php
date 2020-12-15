<?php
    declare(strict_types=1);
    setcookie('name-as-map[key1]','valueinu',time() + 60 * 60,'/','',false,true);
    setcookie('name-as-map[key2]','valuekuma',time() + 60 * 60,'/','',false,true);
    setcookie('name-as-map[key3]','valuesaru',time() + 60 * 60,'/','',false,true);
?>
<body>
    <p>PHPからクッキーを送出しました。</p>
</body>