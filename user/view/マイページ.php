<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pure</title>
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
            padding-top: 50px;
            box-sizing: border-box;
            background-color: transparent;
            border: none;
            box-shadow: none;
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
        .user-info {
            padding: 10px;
            text-align: center;
            font-size: 18px;
        }
        .section-title {
            padding: 10px;
            font-size: 14px;
            color: #333;
            background-color: #e0e0e0;
            font-weight: bold;
            text-align: left;
            width: 100%;
            box-sizing: border-box;
        }
        .menu {
            width: 100%;
        }
        .menu-item {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            font-size: 16px;
            color: #333;
            box-sizing: border-box;
            border-bottom: 2px solid #ddd; /* 下に線を追加 */
        }
        .menu-item:last-child {
            border-bottom: none; /* 最後の項目には線を表示しない */
        }
        .menu-item a {
            text-decoration: none;
            color: inherit;
        }
        .footer {
            padding: 15px;
            font-size: 14px;
            color: #333;
            display: flex;
            justify-content: space-between;
        }
        .logout-button {
            width: 90%;
            margin: 10px auto;
            padding: 10px;
            background-color: #ffcccc;
            color: #ff0000;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            font-size: 16px;
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
    <div class="header">Pure</div>
    <div class="container">
        <div class="user-info">麻生 太郎 様</div>

        <!-- 会員登録情報セクション -->
        <div class="section-title">会員登録情報</div>
        <div class="menu">
            <div class="menu-item"><a href="登録情報.php">登録情報　　　　　　　　　　　　　　　　　　　　　　　　></a></div>
            <div class="menu-item"><a href="#">注文履歴　　　　　　　　　　　　　　　　　　　　　　　　></a></div>
            <div class="menu-item"><a href="レビュー選択.php">アイテムレビュー　　　　　　　　　　　　　　　　　　　　></a></div>
        </div>

        <!-- その他セクション -->
        <div class="section-title">その他</div>
        <div class="menu">
            <div class="menu-item"><span>バージョン情報</span><span>1.1</span></div>
        </div>

        <button class="logout-button">ログアウト</button>
    </div>
    <a href="home.php" class="back-button">&larr;</a>
</body>
</html>