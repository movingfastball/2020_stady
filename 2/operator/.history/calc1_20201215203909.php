<body>
<?php
    $greeting = null;
    $message = $greeting === null ? 'Hello':$greeting;
    var_dump($greeting);
    echo'挨拶は',$message,PHP_EOL;

    $greeting = 'Good Morning';
    $message = $greeting === null ? 'Hello':$greeting;
    echo'挨拶は',$message,PHP_EOL;

    $greeting = null;
    $message = $greeting ?? 'Hello';
    echo'挨拶は',$message,PHP_EOL;

    $greeting = 'Good Morning';
    $message = $greeting ??'Hello';
    echo '挨拶は',$message,PHP_EOL;
?>