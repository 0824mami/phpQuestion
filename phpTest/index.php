<?php require 'header.php'; ?>

<body>
    <h3>ぞうさん引越センターです</h3>
    <form role="questionnaire" action="confirm.php" method="post">
        <div class="text">
            <table>
                <tbody>
                    <tr>
                        <th colspan="4">1申込時の電話受付の対応</th>
                    </tr>
                    <tr>
                        <td><input type="radio" value="「大変良い」" name="opinion1">大変良い</td>
                        <td><input type="radio" value="「良い」" name="opinion1">良い</td>
                        <td><input type="radio" value="「悪い」" name="opinion1">悪い</td>
                        <td><input type="radio" value="「答えない」" name="opinion1">答えない</td>
                    </tr>
                    <tr>
                        <th colspan="4">２営業員の対応</th>
                    </tr>
                    <tr>
                        <td><input type="radio" value="「大変良い」" name="opinion2">大変良い</td>
                        <td><input type="radio" value="「良い」" name="opinion2">良い</td>
                        <td><input type="radio" value="「悪い」" name="opinion2">悪い</td>
                        <td><input type="radio" value="「答えない」" name="opinion2">答えない</td>
                    </tr>
                    <tr>
                        <th colspan="4">３引っ越し作業員の対応</th>
                    </tr>
                    <tr>
                        <td><input type="radio" value="「大変良い」" name="opinion3">大変良い</td>
                        <td><input type="radio" value="「良い」" name="opinion3">良い</td>
                        <td><input type="radio" value="「悪い」" name="opinion3">悪い</td>
                        <td><input type="radio" value="「答えない」" name="opinion3">答えない</td>
                    </tr>
                    <tr>
                        <th colspan="4">４：梱包（荷造り、荷解き）作業員の対応</th>
                    </tr>
                    <tr>
                        <td><input type="radio" value="「大変良い」" name="opinion4">大変良い</td>
                        <td><input type="radio" value="「良い」" name="opinion4">良い</td>
                        <td><input type="radio" value="「悪い」" name="opinion4">悪い</td>
                        <td><input type="radio" value="「答えない」" name="opinion4">答えない</td>
                    </tr>
                    <tr>
                        <th colspan="4">５：電気工事員の対応</th>
                    </tr>
                    <tr>
                        <td><input type="radio" value="「大変良い」" name="opinion5">大変良い</td>
                        <td><input type="radio" value="「良い」" name="opinion5">良い</td>
                        <td><input type="radio" value="「悪い」" name="opinion5">悪い</td>
                        <td><input type="radio" value="「答えない」" name="opinion5">答えない</td>
                    </tr>
                    <tr>
                        <th colspan="4">６：引っ越し後に問題はありましたか</th>
                    </tr>
                    <tr>
                        <td><input type="radio" value="「大変良い」" name="opinion6">大変良い</td>
                        <td><input type="radio" value="「良い」" name="opinion6">良い</td>
                        <td><input type="radio" value="「悪い」" name="opinion6">悪い</td>
                        <td><input type="radio" value="「答えない」" name="opinion6">答えない</td>
                    </tr>
                    <tr>
                        <th colspan="4">７：その他ご意見をお聞かせください</th>
                    </tr>
                    <tr>
                        <td colspan="4"><textarea name="memo" cols="40" rows="5"></textarea><br>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="btn" type="submit" value="to_confirm">確認画面へ</button>
        </div>
    </form>
    <?php require 'footer.php'; ?>