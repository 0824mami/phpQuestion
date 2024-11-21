<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>送信完了</title>
</head>

<body>

    <h1>送信が完了しました。ありがとうございます！</h1>
    <?php
    date_default_timezone_set('');
    echo '<p>', date('Y/m/d H:i:s'), '</p>';
    echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';
    ?>
    <script>
        setTimeout(() => {
            window.location.href = 'index.php';
        }, 8000); // 5秒後にリダイレクト 
    </script>
</body>