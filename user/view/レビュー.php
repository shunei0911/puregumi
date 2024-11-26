<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お気に入り画面</title>
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

        .item {
            display: flex;
            margin-bottom: 20px;
        }

        .item-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 15px;
        }

        .item-description {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .item-description .title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .item-description .price {
            font-size: 14px;
            color: #00aaff;
        }

        .item-description .size {
            font-size: 12px;
            margin-top: 3px;
        }

        .add-to-cart-button {
            width: 100%;
            padding: 12px;
            background-color: #00aaff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .add-to-cart-button:hover {
            background-color: #0088cc;
        }

        .star {
            font-size: 20px;
            color: gold;
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
            <h2>お気に入りアイテム</h2>

            <div class="item">
                <img src="../images/商品1.png" alt="Leeデニムジャケット" class="item-image">
                <div class="item-description">
                    <div class="title">Leeデニムジャケット（Gジャン）</div>
                    <div class="price">¥7,499（税込）</div>
                </div>
            </div>

            <!-- カートに入れるボタン -->
            <button class="add-to-cart-button">
                カートに入れる
                <span class="star">★</span>
            </button>
        </main>
        <a href="レビュー選択.php" class="back-button">&larr;</a>
    </div>

</body>
</html>
