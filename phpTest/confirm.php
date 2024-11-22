<?php require 'header.php'; ?>

<body>
    <table>
        <tr>
            <?php
            // POSTされた値を受け取る
            $question = [
                "１申込時の電話受付の対応",
                "２営業員の対応",
                "３引っ越し作業員の対応",
                "４梱包（荷造り、荷解き）作業員の対応",
                "５電気工事員の対応",
                "6○○の対応",
            ];

            foreach ($question as $item) {
                echo '<th value ="', $item, '">', $item, '</th><hr>';
            } ?>
        </tr>
        <?php
        // echo '<th>質問は「', $_REQUEST['$question'], '」</th>';
        echo '<tr>';
        $opinionAll = [
            "opinion1",
            "opinion2",
            "opinion3",
            "opinion4",
            "opinion5",
            "opinion6",
        ];

        echo '<td>「', $_REQUEST['opinion1'], '」です</td>';
        echo '<td>', $_REQUEST['opinion2'], 'です</td>';
        echo '<td>', $_REQUEST['opinion3'], 'です</td>';
        echo '<td>', $_REQUEST['opinion4'], 'です</td>';
        echo '<td>', $_REQUEST['opinion5'], 'です</td>';
        echo '<td>', $_REQUEST['opinion6'], 'です</td>';
        echo '<td>', $_REQUEST['memo'], '</td>';
        echo '</tr>';
        echo "\n";
        ?>
    </table>
    <!-- // require_once 'fopen1.php'; -->
    <?php


    ?>
    <!-- postで送信したデータは検証ツールで確認できる -->
    <P>よろしいでしょうか？</P>
    <form role="questionary" action="write.php" method="post">
        <!-- データをhiddenフィールドで再送信 -->
        <input type="hidden" name="opinion1" value="<?php echo htmlspecialchars($_SESSION['opinion1'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="opinion2" value="<?php echo htmlspecialchars($_SESSION['opinion2'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="opinion3" value="<?php echo htmlspecialchars($_SESSION['opinion3'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="opinion4" value="<?php echo htmlspecialchars($_SESSION['opinion4'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="opinion5" value="<?php echo htmlspecialchars($_SESSION['opinion5'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="opinion6" value="<?php echo htmlspecialchars($_SESSION['opinion6'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="memo" value="<?php echo htmlspecialchars($_SESSION['memo'], ENT_QUOTES, 'UTF-8'); ?>">
        <button type="submit" name="to_write" value="to_write">送信</button>

    </form> <a href="thankyou.php">
        <button type="submit" value="to_index">修正する</button><br>
        <?php require 'footer.php'; ?>
        <!-- // nETWORK　doc　header　name　fromdata で検証ツールで確認できる-->