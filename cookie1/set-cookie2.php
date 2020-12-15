<?php
    declare(strict_types=1);
    setcookie('name-as-array[0]','valueinu',time() + 60 * 60,'/','',false,true);
    setcookie('name-as-array[1]','valuekuma',time() + 60 * 60,'/','',false,true);
    setcookie('name-as-array[2]','valuesaru',time() + 60 * 60,'/','',false,true);
?>
<body>
    <p>PHPからクッキーを送出しました。</p>
</body>