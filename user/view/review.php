<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../style/pure_review.css">
    <title>Document</title>
</head>

<body>
    <header class="review_header">
        <div>Pure</div>
        <a href="cart.php" class="cart-icon">🛒</a>
    </header>
    <h1 class="review_h1">アイテムレビュー</h1>
    <main class="review_main">
        <div class="review_container">
            <div class="container">
                <img src="./../images/商品1.png" class="item_image">
                <div>
                    <p>Lee デニムジャケット　Gジャン</p>
                    <p>どの程度の評価にしますか？</p>
                    <P>★★★★★</P>
                </div>
            </div>
            <br>
            <div class="">
                <h3 class="review_h3">レビューにタイトルをつける</h3>
                <textarea placeholder="もっとも伝えたいポイントは何ですか？" class="review_point"></textarea><br><br>
                <h3 class="review_h3">レビューを記入する</h3>
                <textarea placeholder="気に入ったこと・気に入らなかったことは何ですか？この製品をどのように使いましたか" class="review_detail"></textarea>
            </div><br>
            <div class="tourokubtn_area">
                <button class="touroku_btn">登録する</button>
            </div>
        </div>
    </main><br>
    <a href="select_review.php" class="back-button">&larr;</a>
</body>

</html>