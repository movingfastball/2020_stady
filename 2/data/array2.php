<body>
    <?php
        $user = [
            'name' => '山下なんとか',
            'age' => '30',
            'place' => '有田'
        ];
        $user['job'] = 'ニート';
        $user['hobby'] = '趣味';
    ?>
    <p><?=$user['name']?></p>
    <p><?=$user['age']?></p>
    <p><?=$user['place']?></p>
    <p><?=$user['job']?></p>
    <p><?=$user['hobby']?></p>
    <p><pre><?php print_r($user);?></pre></p>
</body>