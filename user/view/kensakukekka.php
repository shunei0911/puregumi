<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索結果画面</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
 
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
        }
 
        header {
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #a8e4a0;
            padding: 20px 10px;
            position: fixed;
            top: 0;
            left: 0;
        }
 
        .logo {
            font-size: 24px;
            font-family: cursive;
        }
 
        .search-bar-container {
            width: 100%;
            background-color: #fff;
            padding: 15px 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            position: fixed;
            top: 70px;
            left: 0;
        }
 
        .search-bar {
            display: flex;
            align-items: center;
            width: 80%;
            max-width: 500px;
        }
 
        .search-bar input {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
 
        .search-bar button {
            padding: 8px 16px;
            margin-left: 10px;
            background-color: #00aaff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
 
        .search-bar button:hover {
            background-color: #0088cc;
        }
 
        .container {
            width: 90%;
            max-width: 800px;
            margin: 180px auto 0 auto; /* マージンをさらに増加（180px） */
        }
 
        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
 
        .product {
            width: 200px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: center;
        }
 
        .product img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 10px;
        }
 
        .product .title {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }
 
        .product .price {
            font-size: 14px;
            color: #00aaff;
        }
    </style>
</head>
<body>
 
    <header>
        <div class="logo">Pure</div>
    </header>
 
    <!-- 検索バーを独立 -->
    <div class="search-bar-container">
        <div class="search-bar">
            <input type="text" id="searchQuery" placeholder="商品名を入力">
            <button onclick="searchProducts()">検索</button>
        </div>
    </div>
 
    <div class="container">
        <a href="shohin.php"><div class="product-list" id="productList"></div></a>
    </div>
 
    <script>
        // サンプルデータ（データベースから取得する部分をシミュレート）
        const products = [
            { id: 1, name: "Leeデニムジャケット", price: 7499, image: "../images/画像1.png" },
            { id: 2, name: "SERACEスウェット", price: 5940, image: "../images/画像2.png" },
            { id: 3, name: "ミッキーT BLOC28", price: 1800, image: "../images/画像3.png" },
            { id: 4, name: "apres jour mignon バルーンブルゾン", price: 5995, image: "../images/画像4.png" }
        ];
 
        function displayProducts(filteredProducts) {
            const productList = document.getElementById('productList');
            productList.innerHTML = ''; // 商品リストをクリア
            filteredProducts.forEach(product => {
                const productDiv = document.createElement('div');
                productDiv.className = 'product';
                productDiv.innerHTML = `
                    <img src="${product.image}" alt="${product.name}">
                    <div class="title">${product.name}</div>
                    <div class="price">¥${product.price.toLocaleString()}（税込）</div>
                `;
                productList.appendChild(productDiv);
            });
        }
 
        function searchProducts() {
            const query = document.getElementById('searchQuery').value.toLowerCase();
            const filteredProducts = products.filter(product =>
                product.name.toLowerCase().includes(query)
            );
            displayProducts(filteredProducts);
        }
 
        // 初期表示
        displayProducts(products);
    </script>
 
</body>
</html>