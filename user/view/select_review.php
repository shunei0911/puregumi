<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アイテムレビュー</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }

        header {
            width: 100vw;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #a8e4a0;
            position: fixed;
            top: 0;
            left: 0;
        }

        .logo {
            font-size: 24px;
            font-family: cursive;
            margin-left: 20px;
        }

        .cart {
            font-size: 24px;
            margin-right: 20px;
            text-decoration: none;
            color: black;
        }

        .container {
            width: 320px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 60px; /* ヘッダーの高さ分を確保 */
            padding-bottom: 20px;
        }

        main {
            padding: 20px;
        }

        h2 {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .item-review {
            display: flex;
            padding: 20px; /* グレー部分を広げるためにパディングを増加 */
            background-color: #e0e0e0; /* 背景をグレーに変更 */
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .item-image {
            width: 120px; /* 商品画像を大きく */
            height: 120px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 20px; /* 画像と説明の間隔を広げる */
        }

        .item-description {
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 14px;
        }

        .item-description .title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .item-description .price {
            color: #ff5722;
            margin-top: 5px;
        }

        .item-description .size {
            font-size: 12px;
            margin-top: 3px;
        }

        .item-description .extra-description {
            font-size: 12px;
            margin-top: 10px;
            color: #333;
        }

        .review-button {
            width: 100%;
            max-width: 200px; /* ボタンをさらに短く */
            padding: 12px;
            background-color: #00aaff;
            color: white;
            text-align: center;
            border-radius: 4px;
            font-size: 16px;
            text-decoration: none;
            display: block;
            margin: 20px auto 0; /* ボタンを中央揃え */
        }

        .review-button:hover {
            background-color: #0088cc;
        }

        .back-button {
            position: absolute;
            bottom: 10px;
            left: 10px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">Pure</div>
        <a href="カート.php" class="cart">🛒</a>
    </header>

    <div class="container">
        <main>
            <h2>アイテムレビュー</h2>

            <!-- 商品レビューセクション -->
            <div class="item-review">
                <img src="../images/商品1.png" alt="Leeデニムジャケット" class="item-image">
                <div class="item-description">
                    <div class="title">Leeデニムジャケット（Gジャン）</div>
                    <div class="size">サイズ：FREE SIZE</div>
                    <div class="price">¥7,499（税込）</div>
                    <!-- 商品説明追加 -->
                    <div class="extra-description">メンズ　デニムジャケット</div>
                </div>
            </div>

            <!-- レビュー用ボタン -->
            <a href="review.php" class="review-button">レビューする</a>
        </main>
        <a href="home.php" class="back-button">&larr;</a>
    </div>

</body>
</html>
