<body>
    <?php
        function someFunction()
        {
            echo '現在の関数名は:', __FUNCTION__, 'です<br>';
        }
        echo '現在のファイル名',__FILE__,'です<br>';
        echo '現在の行番号は',__LINE__,'です<br>';
        someFunction();
    ?>
</body>