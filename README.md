﻿# phpQuestion
# ①課題名
PhP＿アンケートフォーム
## ②課題内容（どんな作品か）
ラジオボタンのあるフォームを使ったアンケート　
（ラジオボタン属性で、途中までしかデータ受渡できていないため修正中）

## ③アプリのデプロイURL
さくらデプロイ：
https://okachimenko.sakura.ne.jp/phpTest/index.html
GitHub :
https://github.com/0824mami/phpQuestion

## ④アプリのログイン用IDまたはPassword（ある場合）
なし

## ⑤工夫した点・こだわった点
-PHPのデータ送受信が実装しきれなかった。
radioボタンの選択肢がoption1~6まで多くなり、実装が複雑になったため修正中。
CONFIRMページを挟んだことで難易度が上がりましたが、チャレンジ段階です。
最後はThankYouページから10秒以内でリダイレクトするようにしました。

実際のお客様アンケートのように、まず強力の同意を取り、ユーザーを意識しました。
radio button タグに”role”と任意の値を追加しました、
本当はaria属性を設定したかったですが、無闇に使うと致命的なミスにもなり得るそうなので辞めました。



## ⑥難しかった点・次回トライしたいこと（又は機能）
引越しをなんどもする人は珍しいが、人によっては短期間の再引越しの方もいるはず。
過去の引越しデータや、荷物の増減が先々確認できたら面白そうだと思いこのテーマにしました。

てこずっていますが、他のレポジトリに進化版もゆくゆく作っていきたいです。
そこでは、自宅の在庫管理も兼ねて、過去の引越しから荷物がどれだけ増減したかわかったり、
断捨離を進める（矛盾した）引越しサイトがあっても面白いかと考えています。



## ⑦フリー項目（感想、シェアしたいこと等なんでも）
今回は使いませんでしたが、aria 属性が奥深いと言うサイト
　⇨ https://zenn.dev/yusukehirao/articles/e3512a58df58fd

- [感想]
　　PHPに早く慣れていけるようにします！
