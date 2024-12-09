<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking Page</title>
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
        .title {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin: 30px 0;
        }
        .ranking {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin: 20px 0;
        }
        .ranking-item {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #ffffff;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 150px;
        }
        .ranking-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .ranking-item .product-name {
            font-size: 16px;
            text-align: center;
        }
        .ranking-item .rank {
            position: absolute;
            top: 5px;
            left: 5px;
            background-color: #ff6347;
            color: #ffffff;
            font-size: 14px;
            font-weight: bold;
            padding: 2px 5px;
            border-radius: 5px;
        }
        .floating-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 50px;
            height: 50px;
            background-color: #808080;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            border: none;
            font-size: 24px;
        }
        .floating-button:hover {
            background-color: #696969;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Pure</div>
    </header>
 
    <div class="title">
        ランキング
    </div>
 
    <div class="ranking">
        <div class="ranking-item">
            <div class="rank">1位</div>
            <img src="../images/商品1.png" alt="Leeデニムジャケット">
            <div class="product-name">Leeデニムジャケット</div>
        </div>
        <div class="ranking-item">
            <div class="rank">2位</div>
            <img src="../images/画像2.png" alt="SERACEスウェット">
            <div class="product-name">SERACEスウェット</div>
        </div>
        <div class="ranking-item">
            <div class="rank">3位</div>
            <img src="../images/画像3.png" alt="ミッキーT BLOC28">
            <div class="product-name">ミッキーT BLOC28</div>
        </div>
        <div class="ranking-item">
            <div class="rank">4位</div>
            <img src="../images/画像4.png" alt="apres jour mignonバルーンブルゾン">
            <div class="product-name">apres jour mignonバルーンブルゾン</div>
        </div>
    </div>
 
    <!-- 左下のボタン -->
    <form action="kensaku.php">
        <button class="floating-button">
            ←
        </button>
    </form>
</body>
</html>