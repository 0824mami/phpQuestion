<?php require 'header.php'; ?>

<h3>ご協力ありがとうございます！</h3>
<p><b>送信完了しました。</b></p>
<?php
date_default_timezone_set('Japan');
echo '<p>', date('Y/m/d H:i:s'), '</p>';
echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';

$opinions = $_POST['opinion1'];
$memo     = $_POST['memo'];
var_dump($memo);
$csv = ',';
// $str = $opinion1 . $csv . $opinionAll . $csv . $memo;
$str = $opinion1 . $csv . $memo;
$file = fopen('board.csv', 'a');
fwrite($file, $str . "\n");
fclose($file);
// header("location: index.php");
exit;

// $file = 'board.csv';
// if (file_exists($file)) {
//     $board = json_decode(file_get_contents($file));
//     var_dump($board);
// }
// $board[] = $_REQUEST['opinion1'];
// file_put_contents($file, json_encode($board));
// foreach ($board as $opinion1) {
//     echo '<td value="', $opinion1, '">', $opinion1, '</td>
//     <hr>';
// }
// $board[] = $_REQUEST['opinion2'];
// file_put_contents($file, json_encode($board));
// foreach ($board as $opinion2) {
//     echo '<td value="', $opinion2, '">', $opinion2, '</td>
//     <hr>';
// }
// $board[] = $_REQUEST['opinion3'];
// file_put_contents($file, json_encode($board));
// foreach ($board as $opinion2) {
//     echo '<td value="', $opinion3, '">', $opinion3, '</td>
//     <hr>';
// }
// $board[] = $_REQUEST['opinion4'];
// file_put_contents($file, json_encode($board));
// foreach ($board as $opinion2) {
//     echo '<td value="', $opinion4, '">', $opinion4, '</td>
//     <hr>';
// }
// $board[] = $_REQUEST['opinion5'];
// file_put_contents($file, json_encode($board));
// foreach ($board as $opinion2) {
//     echo '<td value="', $opinion5, '">', $opinion5, '</td>
//     <hr>';
// }
// $board[] = $_REQUEST['opinion6'];
// file_put_contents($file, json_encode($board));
// foreach ($board as $opinion2) {
//     echo '<td value="', $opinion6, '">', $opinion6, '</td>
//     <hr>';
// }
?>
<?php require 'footer.php'; ?>