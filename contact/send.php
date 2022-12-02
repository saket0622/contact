<?php
date_default_timezone_set('Asia/Tokyo');

if(isset($_POST['name'], $_POST['email'], $_POST['tel'], $_POST['type'], $_POST['contact'], $_POST['message'])) {
    $fp = fopen("data/" . date("Ymd") . ".txt", "a");
    $fp_matome = fopen("matome/matome.txt", "a");
    $write_str = $_POST['goods_name'] . "\t" . $_POST['send'] . "\t".$_POST['size'] . "\t".$_POST['number_of_copies'] . "\n";
    fwrite($fp, $write_str);
    fwrite($fp_matome, $write_str);
    fclose($fp);
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>送信完了ページ</title>
    </head>
    <body>
 
    <p>送信完了しました</p>
 
    </body>
</html>
