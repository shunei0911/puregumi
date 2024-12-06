<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細</title>
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
            min-height: 100vh;
        }
 
        header {
            width: 100vw;
            display: flex;
            justify-content: flex-start; /* 左寄せに変更 */
            align-items: center;
            background-color: #a8e4a0;
            padding: 20px 10px;
        }
 
        .logo {
            font-size: 24px;
            font-family: cursive;
            margin-left: 20px; /* ロゴの左側に余白を追加 */
        }
 
        .product-detail {
            display: flex;
            justify-content: center;
            margin: 100px auto;
            flex-direction: column;
            align-items: center;
            width: 90%;
            max-width: 800px;
        }
 
        .image-container {
            position: relative;
            width: 100%;
            height: auto;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
 
        .product-images {
            display: flex;
            transition: transform 0.3s ease;
            justify-content: center;
            align-items: center;
        }
 
        .product-images img {
            width: 100%;
            height: 600px;
            object-fit: cover;
            display: none;
        }
 
        .product-images img.active {
            display: block;
        }
 
        .image-navigation {
            position: absolute;
            top: 50%;
            left: 10px;
            right: 10px;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }
 
        .nav-button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
        }
 
        .nav-button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
 
        .product-info {
            text-align: center;
            margin-top: 20px;
        }
 
        .product-info .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
 
        .product-info .price {
            font-size: 18px;
            color: #00aaff;
            margin-bottom: 20px;
        }
 
        .product-info .description {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
            text-align: left;
        }
 
        .action-buttons {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 0 20px;
            position: fixed;
            bottom: 0;
            left: 0;
            background-color: #fff;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }
 
        .action-buttons button {
            padding: 12px 20px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }
 
        .back-button {
            background-color: #ccc;
            color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
 
        .cart-button {
            background-color: #00aaff;
            color: white;
        }
 
        .favorite-button {
            background-color: transparent;
            border: none;
            font-size: 30px;
            color: #ffd700;
            cursor: pointer;
        }
 
        .favorite-button.filled {
            color: #ffcc00;
        }
 
        .back-button:hover {
            background-color: #999;
        }
 
        .favorite-button:hover {
            opacity: 0.8;
        }
 
    </style>
</head>
<body>
 
    <header>
        <div class="logo">Pure</div>
    </header>
 
    <div class="product-detail">
        <div class="image-container">
            <div class="product-images" id="productImages">
                <img src="../images/商品1.png" alt="商品1" class="active">
                <img src="../images/商品2.png" alt="商品2">
                <img src="../images/商品3.png" alt="商品3">
            </div>
            <div class="image-navigation">
                <button class="nav-button" onclick="prevImage()">‹</button>
                <button class="nav-button" onclick="nextImage()">›</button>
            </div>
        </div>
 
        <div class="product-info">
            <div class="title" id="productName">Leeデニムジャケット</div>
            <div class="price" id="productPrice">¥7,499（税抜）</div>
            <div class="description" id="productDescription">
                商品の説明<br>
                メンズ　デニムジャケット<br>
                ヴィンテージアイテム<br>
                ダメージ、破損などはなし
            </div>
        </div>
    </div>
 
    <div class="action-buttons">
        <button class="back-button" onclick="window.history.back()">×</button>
        <button class="cart-button" onclick="location.href='cart.php'">カートに入れる</button>
        <button class="favorite-button" onclick="toggleFavorite()">☆</button>
    </div>
 
    <script>
        let currentIndex = 0;
        const images = document.querySelectorAll('.product-images img');
       
        function prevImage() {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = images.length - 1;
            }
            updateSlider();
        }
 
        function nextImage() {
            if (currentIndex < images.length - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateSlider();
        }
 
        function updateSlider() {
            images.forEach((img, index) => {
                img.classList.remove('active');
                if (index === currentIndex) {
                    img.classList.add('active');
                }
            });
        }
 
        function toggleFavorite() {
            const favoriteButton = document.querySelector('.favorite-button');
            favoriteButton.classList.toggle('filled');
        }
    </script>
 
</body>
</html>