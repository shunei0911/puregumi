<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding-top: 80px;
            background-color: #ffffff;
            box-sizing: border-box;
        }

        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #ccffcc;
            padding: 20px;
            font-size: 36px;
            font-family: 'Brush Script MT', cursive;
            color: black;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .container {
            width: 100%;
            max-width: 600px;
            padding: 40px;
            box-sizing: border-box;
            text-align: center;
            background-color: #ffffff;
        }

        .header-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
            color: black;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label,
        .form-group span {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .gender-options {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .gender-options label {
            display: inline-flex;
            align-items: center;
            font-size: 16px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        .btn {
            width: 48%;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-back {
            background-color: #cccccc;
        }

        .btn-submit {
            background-color: #3399ff;
            color: white;
        }

        input,
        .confirm-value {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
    
</head>

<body>
    <div class="header">Pure</div>

    <!-- 入力画面 -->

    <!-- 確認画面 -->
    <div id="confirmation-container" class="container" style="display: none;">
        <p class="header-title">入力内容確認</p>
        <form action="home.php" method="post">
            <div class="form-group"><label>名前</label><span id="confirm-name" class="confirm-value"></span></div>
            <div class="form-group"><label>性別</label><span id="confirm-gender" class="confirm-value"></span></div>
            <div class="form-group"><label>住所</label><span id="confirm-address" class="confirm-value"></span></div>
            <div class="form-group"><label>生年月日</label><span id="confirm-birthdate" class="confirm-value"></span></div>
            <div class="form-group"><label>メールアドレス</label><span id="confirm-email" class="confirm-value"></span></div>
            <div class="form-group"><label>郵便番号</label><span id="confirm-postal-code" class="confirm-value"></span></div>
            <div class="buttons">
                <button type="button" class="btn btn-back" onclick="goBackToForm()">戻る</button>
                <button type="submit" class="btn btn-submit">登録</button>
            </div>
        </form>
    </div>
    </div>
</body>

</html>
