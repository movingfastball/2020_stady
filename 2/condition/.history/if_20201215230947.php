<body>
    <?php
        $point = 90;
        $message = '通常スコアです';
        if($point >= 80){
            $message = 'ハイスコア';
        }
    ?>
    <p>メッセージ:<?=$message?></p>
</body>