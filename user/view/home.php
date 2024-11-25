<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../style/a.css">
    <title>Pure</title>
</head>

<body>

    <!-- ヘッダー -->
    <div class="header">
        <div class="title">Pure</div>
        <div class="cart-icon">🛒</div>
    </div>

    <!-- コンテンツ -->
    <div class="content">

        <div id="img-area"><img style="height: 400px;" src="./../images/S__835587.jpg"></div>

        <!-- サムネイルのドットスクロール -->
        <div class="thumbnail-scroll">
            <div class="thumbnail-dot active" onclick="changeSlide(0)"></div>
            <div class="thumbnail-dot" onclick="changeSlide(1)"></div>
            <div class="thumbnail-dot" onclick="changeSlide(2)"></div>
            <div class="thumbnail-dot" onclick="changeSlide(3)"></div>
            <div class="thumbnail-dot" onclick="changeSlide(4)"></div>
        </div>
    </div>

     <!-- プロモーションボタン -->
     <div class="promo-button">人気ブランドが多数ラインナップ！</div>

    <!-- ナビゲーションメニュー -->
    <div class="navigation-menu">
        <button onclick="navigateTo('home')">
            <div class="icon">🏠</div>
            <p>ホーム</p>
        </button>
        <button onclick="navigateTo('お気に入り.php')">
            <div class="icon">⭐</div>
            <p>お気に入り</p>
        </button>
        <button onclick="navigateTo('kensaku.php')">
            <div class="icon">🔍</div>
            <p>検索</p>
        </button>
        <button onclick="navigateTo('マイページ.php')">
            <div class="icon">👤</div>
            <p>マイページ</p>
        </button>
    </div>
    <script src="./../script/a.js"></script>
</body>

</html>