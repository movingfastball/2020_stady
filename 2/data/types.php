<body>
    <?php

    $integerValue = 10;

    $floatValue = 12.34;

    $stringValue1 = '文字列';

    $stringValue2 = "文字列";

    $boolValue = true;

    $nullValue = null;

    $emptyStringValue = '';

    ?>

    <p>整数：<?php echo $integerValue; ?></p>
    <p>浮動小数点数:<?php echo $floatValue; ?></p>
    <p>文字列1:<?php echo $stringValue1; ?></p>
    <p>文字列2:<?php echo $stringValue2; ?></p> 
    <p>真偽値:<?php var_dump($boolValue); ?></p>   
    <p>NULL値:<?php var_dump($nullValue); ?></p> 
    <p>文字列3:<?php var_dump($emptyStringValue); ?></p>
</body>
