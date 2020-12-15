<body>
    <?php
        $value = 'World';

        $combined1 = 'Hello'.$value.'!';
        $combined2 = "Hello{$value}!";

        $combined3 = 'Hello';
        $combined3 .= $value;
        $combined3 .= '!';

        $combined4 = 'Hello {$value}!';
    ?>
    <p><?=$combined1?></p>
    <p><?=$combined2?></p>
    <p><?=$combined3?></p>
    <p><?=$combined4?></p>