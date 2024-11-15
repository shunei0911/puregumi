<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索画面</title>
    <style>
        /* 全体のスタイル */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            height: 100vh;
            overflow: hidden;
        }

        /* ヘッダー部分 */
        .header {
            width: 100%;
            background-color: #b6f1b1;
            color: black;
            text-align: center;
            padding: 15px 0;
            font-size: 1.5em;
            font-family: 'Brush Script MT', cursive;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
        }

        .header .title {
            flex: 1;
            text-align: center;
        }

        .header .cart-icon {
            font-size: 1.5em;
        }

        /* 検索バー */
        .search-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }

        .search-bar input[type="text"] {
            width: 80%;
            padding: 8px;
            font-size: 1em;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        .search-icon {
            margin-left: -30px;
            font-size: 1.2em;
        }

        .ranking-icon {
            font-size: 1em;
            margin-left: 10px;
        }

        /* コーディネートボタン */
        .category-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .category-button {
            padding: 8px 15px;
            border-radius: 5px;
            color: white;
            font-size: 0.9em;
            cursor: pointer;
            text-align: center;
            border: none;
        }

        .category-button.古着 { background-color: #d4c50f; }
        .category-button.ストリート { background-color: #e96c65; }
        .category-button.韓国系 { background-color: #4db5bd; }
        .category-button.清楚 { background-color: #4a9d59; }
        .category-button.カジュアル { background-color: #f6a3a3; }
        .category-button.その他 { background-color: #d9d9d9; color: #333; }

        /* 検索履歴 */
        .search-history {
            width: 90%;
            margin-top: 20px;
        }

        .search-history-title {
            font-size: 1em;
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }

        .history-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-top: 1px solid #ccc;
            font-size: 1em;
        }

        .history-icon {
            font-size: 1.2em;
            transform: rotate(90deg);
        }

        /* 戻るボタン */
        .back-button {
            position: fixed;
            bottom: 15px;
            left: 15px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5em;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- ヘッダー -->
    <div class="header">
        <div class="title">Pure</div>
        <div class="cart-icon">🛒</div>
    </div>

    <!-- 検索バー -->
    <div class="search-bar">
        <input type="text" placeholder="検索">
        <span class="search-icon">🔍</span>
        <span class="ranking-icon">ランキング</span>
    </div>

    <!-- コーディネートボタン -->
    <div >
        <button class="category-button 古着" onclick="handleButtonClick('古着')">古着</button>
        <button class="category-button ストリート" onclick="handleButtonClick('ストリート')">ストリート</button>
        <button class="category-button 韓国系" onclick="handleButtonClick('韓国系')">韓国系</button>
        <button class="category-button 清楚" onclick="handleButtonClick('清楚')">清楚</button>
        <button class="category-button カジュアル" onclick="handleButtonClick('カジュアル')">カジュアル</button>
        <button class="category-button その他" onclick="handleButtonClick('その他')">その他</button>
    </div>

    <!-- 検索履歴 -->
    <div class="search-history">
        <div class="search-history-title">検索履歴</div>
        <div class="history-item">
            パーカー
            <span class="history-icon">↗</span>
        </div>
        <div class="history-item">
            デニムパンツ
            <span class="history-icon">↗</span>
        </div>
    </div>

    <!-- 戻るボタン -->
     <form action="home.html">
        <div class="back-button" onclick="back()">←</div>
     </form>
    
    <!-- JavaScriptでクリックイベント処理 -->
    <script>
        function handleButtonClick(category) {
            alert(category + "ボタンがクリックされました");
        }

        function back(){
            window.location.href = 'home.php';
        }
    </script>

</body>
</html>
