<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>情報入力画面</title>
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

        .section {
            margin-bottom: 20px;
        }

        /* グレーの背景を追加 */
        .section-title {
            background-color: #e0e0e0;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        label {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        .date {
            color: gray;
            font-size: 12px;
        }

        .submit-button {
            width: 100%;
            padding: 12px;
            background-color: #00aaff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-button:hover {
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
        <div class="cart">🛒</div>
    </header>

    <div class="container">
        <main>
            <h2>情報入力</h2>

            <section class="section">
                <div class="section-title">お届け日指定</div>
                <label>
                    <input type="radio" name="delivery" checked>
                    通常配送 <span class="date">(9月19日〜9月21日発送予定)</span>
                </label>
                <label>
                    <input type="radio" name="delivery">
                    ゆっくり配送 <span class="date">(9月24日〜9月27日発送予定)</span>
                </label>
                <label>
                    <input type="radio" name="delivery">
                    日時指定
                </label>
            </section>

            <section class="section">
                <div class="section-title">お支払い方法</div>
                <label>
                    <input type="radio" name="payment">
                    代引引換
                </label>
                <label>
                    <input type="radio" name="payment">
                    クレジットカード
                </label>
                <label>
                    <input type="radio" name="payment">
                    コンビニ (手数料: ¥330)
                </label>
            </section>

            <button class="submit-button">確認へ進む</button>
        </main>
        <a href="レビュー選択.php" class="back-button">&larr;</a>
    </div>

</body>
</html>
