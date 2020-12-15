<body>
    <?php
        $itemNumber = 'abc123';

        $mailBody = <<< MAIL
        お問い合わせを受け付けました
        ■お問い合わせ番号「{$itemNumber}」について、サイズと色の種類を教えてください

        MAIL;
    ?>

    <p><pre><?=$mailBody?></pre></p>
</body>