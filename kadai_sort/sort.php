<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
            $nums = [15, 4, 18, 23, 10];

            function sort_2way($array, $order) {
                if ($order === TRUE) {
                    sort($array);
                    echo '昇順でソートします' . '<br>';
                } else {
                    rsort($array);
                    echo '降順でソートします' . '<br>';
                }
                foreach($array as $num) {
                    echo $num . "<br>";
                }
            }
            // 昇順
            sort_2way($nums,TRUE);

            // 降順
            sort_2way($nums,FALSE);
            
        ?>
    </p>
</body>
</html>
