<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録情報 - Pure</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 100%;
            max-width: 500px;
            padding-top: 40px; /* ヘッダーとページタイトル間の空白 */
            box-sizing: border-box;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding-bottom: 20px;
        }
        .header {
            width: 100%;
            background-color: #ccffcc;
            color: #000;
            padding: 10px;
            text-align: center;
            font-size: 24px;
            font-family: cursive;
            box-sizing: border-box;
            position: fixed;
            top: 0;
            left: 0;
        }
        .page-title {
            padding: 10px;
            font-size: 22px;
            color: #333;
            text-align: center;
            font-weight: bold;
            margin-top: 20px; /* ページタイトルの上の空白を小さくしました */
        }
        .section-title {
            padding: 10px;
            font-size: 18px;
            color: #333;
            background-color: #e0e0e0;
            font-weight: bold;
            text-align: left;
            width: 100%;
            box-sizing: border-box;
        }
        .info-item {
            padding: 15px;
            font-size: 16px;
            color: #333;
            box-sizing: border-box;
            border-bottom: 2px solid #ddd;
            display: flex;
            justify-content: space-between;
        }
        .info-item span {
            font-weight: bold;
        }
        .info-item:last-child {
            border-bottom: none;
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
    <div class="header">登録情報</div>
    <div class="container">
        <!-- ページタイトル -->
        <div class="page-title">登録情報</div>

        <!-- 基本情報セクション -->
        <div class="section-title">基本情報</div>
        <div class="info-item"><span>名前</span><span>麻生 太郎</span></div>
        <div class="info-item"><span>生年月日</span><span>1970年1月1日</span></div>
        <div class="info-item"><span>メールアドレス</span><span>example@example.com</span></div>
        <div class="info-item"><span>支払方法</span><span>コンビニ支払い</span></div>

        <!-- お届け先の追加・変更セクション -->
        <div class="section-title">お届け先の追加・変更</div>
        <div class="info-item"><span>郵便番号</span><span>123-4567</span></div>
        <div class="info-item"><span>住所</span><span>福岡県福岡市博多区博多駅南2丁目12-32</span></div>
    </div>
    <a href="mypage.php" class="back-button">&larr;</a>
</body>
</html>
