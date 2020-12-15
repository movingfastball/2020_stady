<body>
    <?php
        $userData = [12345,'taro','TOKYO',32];
        list($id,$name,$prefecture,$age)=$userData;
    ?>

    <p>ユーザID:<?=$id?></p>
    <p>ユーザー名:<?=$name?></p>
    <p>都道府県:<?=$prefecture?></p>
    <p>年齢:<?=$age?></p>
</body>