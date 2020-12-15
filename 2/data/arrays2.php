<body>
    <?php

        $arr3 = [
            'a' => 'value A<br>',
            'b' => 'value B<br>',
        ];
        $arr4 = [
            'a' => 'value C<br>',
            'b' => 'value D<br>',
            'c' => 'value E<br>',
        ];
        $mergedE = $arr3 + $arr4;
        $mergedF = $arr4 + $arr3;
        $mergedG = array_merge($arr3,$arr4);
        $mergedH = array_merge($arr4,$arr3);
    ?>
    <p>●配列の合成結果:</p>
margesd E:<?php print_r($mergedE)?><br>
margesd F:<?php print_r($mergedF)?><br>
margesd G:<?php print_r($mergedG)?><br>
margesd H:<?php print_r($mergedH)?><br>

</body>