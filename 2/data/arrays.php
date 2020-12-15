<body>
    <?php

        $arr1 = ['a','b'];
        $arr2 = ['d','e','f'];
        $arr3 = ['e','f'];
        $margedA = $arr1 + $arr2;
        $margedB = $arr2 + $arr1;
        $margedC = array_merge($arr1,$arr2);
        $margedD = array_merge($arr2,$arr1);
        $margedE = $arr2 + $arr3;
        $margedF = array_merge($arr2,$arr3);
        
    ?>
<p>●配列の合成結果:</p>
margesd A:<?php print_r($margedA)?><br>
margesd B:<?php print_r($margedB)?><br>
margesd C:<?php print_r($margedC)?><br>
margesd D:<?php print_r($margedD)?><br>
margesd E:<?php print_r($margedE)?><br>
margesd F:<?php print_r($margedF)?><br>
</body>