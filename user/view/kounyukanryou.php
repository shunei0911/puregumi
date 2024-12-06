<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Page</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        header {
            width: 100vw;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            background-color: #a8e4a0;
            padding: 20px 10px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .ty-message {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin: 30px 0;
        }
        .img-Pure img {
            max-width: 100%;
            height: auto;
        }
        .message {
            text-align: center;
            font-size: 18px;
            margin: 20px 0;
        }
        .other-goods {
            display: flex;
            gap: 10px;
            margin: 20px 0;
        }
        .other-goods img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .toppage-button {
            margin: 30px 0;
        }
        .toppage-button button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #a8e4a0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .toppage-button button:hover {
            background-color: #87c887;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Pure</div>
    </header>
 
    <div class="ty-message">
        Thank You!!
    </div>
 
    <div class="img-Pure">
        <img src="../images/Pure.png" alt="Pure Logo">
    </div>
 
    <div class="message">
        ○○様<br>
        ご購入ありがとうございます。<br>
        ご注文内容は、注文履歴より<br>
        ご確認ください。
    </div>
 
    <div class="other-goods">
        <a href="shohin.php">
            <img src="../images/画像2.png" alt="画像2">
            <img src="../images/画像3.png" alt="商品3">
            <img src="../images/画像4.png" alt="商品4">
        </a>
    </div>
 
    <div class="toppage-button">
        <form action="home.php">
            <button type="submit">Pureグミ　トップ</button>
        </form>
    </div>
</body>
</html>