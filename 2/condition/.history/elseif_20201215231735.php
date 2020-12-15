<body>
    <?php
        $point = 55;
        $message = '通常スコア';
        if($point >= 80){
            $message = 'ハイスコア';
        }elseif($point >= 50){
            $message = 'ミドルスコア';
        }
    ?>
    <p>メッセージ:<?=$message?></p>
</body>