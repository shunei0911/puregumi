<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>情報確認画面</title>
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

        .item-detail {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            font-size: 14px;
            border-bottom: 1px solid #ccc;
        }

        .total-amount {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        .address-detail, .payment-detail {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
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
        <a href="cart.html" class="cart">🛒</a>
    </header>

    <div class="container">
        <main>
            <h2>情報内容の確認</h2>

            <section class="section">
                <div class="section-title">支払い金額</div>
                <div class="item-detail">
                    <span>商品合計</span>
                    <span>¥10,000</span>
                </div>
                <div class="item-detail">
                    <span>送料</span>
                    <span>¥500</span>
                </div>
                <div class="item-detail">
                    <span>コンビニ決済手数料</span>
                    <span>¥330</span>
                </div>
                <hr>
                <div class="total-amount">
                    <span>合計</span>
                    <span>¥10,830</span>
                </div>
            </section>

            <section class="section">
                <div class="section-title">お届け先</div>
                <div class="address-detail">
                    福岡県福岡市博多区博多駅南2丁目12-32
                </div>
            </section>

            <section class="section">
                <div class="section-title">受け取り方法</div>
                <div class="address-detail">
                    対面で受け取り
                </div>
            </section>

            <section class="section">
                <div class="section-title">支払い方法</div>
                <div class="payment-detail">
                    コンビニ決済（手数料：¥300）
                </div>
            </section>

            <button class="submit-button" onclick="location.href='kounyukanryou.php'">確認へ進む</button>
        </main>
        <a href="select_review.php" class="back-button">&larr;</a>
    </div>

</body>
</html>
