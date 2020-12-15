<body>
    <?php $total = 500 * 1.08 ?>
    <p>税込み金額は<?php echo $total; ?>円です</p>
    <p>税込み金額は<?php print $total; ?>円です</p>
    <p>税込み金額は<?=$total?>円です。</p>
    <p><?php echo '税込み価格は',$total,'円です'?></p>
    <p><?php print '税込み価格は'.$total.'円です'?></p>
    <p><?='税込み価格は',$total,'円です'?>
</body>
