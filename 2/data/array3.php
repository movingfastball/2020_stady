<body>
    <?php
        $airports = [
            [
                'name' => '羽田',
                'address' => '東京都大田区'

            ],
            [
                'name' => '成田',
                'address' => '千葉県成田市'
            ],

        ];
        
        $airports[] =
        [
            'name' => '関西国際',
            'address' => '大阪府泉佐野市'           
        ];
    ?>

    <?php for($i = 0; $i < 3; $i++):?>
    <p><?=$airports[$i]['name']?> - <?=$airports[$i]['address']?></p>
    <?php endfor;?>
    <p><pre><?php print_r($airports);?></pre></p>
</body>