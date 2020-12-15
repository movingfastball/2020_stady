<body>
    <?php
        $airports = ['Henda','Narita','Chubu'];
        $airports[] = 'Kansai';
        $airports[] = 'Naha';

        $airports[2] = 'Sendai';
    ?>

    <?php for($i=0; $i < 4; $i++): ?>
    <p><?=$airports[$i];?></p>
    <?php endfor;?>

    
    <p><pre><?php print_r($airports);?></pre><p>
</body>