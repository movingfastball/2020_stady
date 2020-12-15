<?php declare(strict_types=1);?>

<body>
    <a href="to.php?message=あいうえお">URLエンコードしないリンク</a><br>
    <a href="to.php?message=<?=urlencode('あいうえお')?>">URLエンコードしたリンク</a>
</body>