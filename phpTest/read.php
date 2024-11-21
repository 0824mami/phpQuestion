<?php
//  data read
$fp = fopen("board.csv", "r");
if ($fp == false) {
    echo "ファイルの読み込みに失敗しました";
    exit;
}
// 一行を処理する
$row = fgetcsv($fp);
while ($row = fgetcsv($fp)) {
    echo "<br>";
    echo "ジャンル:", "$row[0]" . "<br>";
    echo "答え:", "$row[4]" . "<br><br>";
}
