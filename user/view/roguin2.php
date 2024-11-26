<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding-top: 80px; /* タイトル分のスペースを空ける */
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
        }
        .container {
            width: 100%;
            max-width: 600px;
            padding: 40px;
            box-sizing: border-box;
            text-align: center;
            background-color: #ffffff;
        }
        h2 {
            font-size: 32px;
            margin: 20px 0;
        }
        .input-container {
            margin: 15px 0;
            text-align: left;
            font-size: 20px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            background-color: #f5f5f5; /* 背景色を薄いグレーに設定 */
            border: 1px solid black; /* 黒枠を追加 */
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 18px;
        }
        .password-container {
            position: relative;
        }
        .password-container img {
            position: absolute;
            right: 15px;
            top: 65%; /* アイコンを下に配置 */
            transform: translateY(-50%);
            cursor: pointer;
            width: 24px;
            height: 24px;
        }
        .login-button {
            width: 100%;
            padding: 15px;
            background-color: #00aaff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">Pure</div>
    <div class="container">
        <h2>ログイン画面</h2>
        <div class="input-container">
            <label for="login-id">ログインID</label>
            <input type="text" id="login-id" name="login-id">
        </div>
        <div class="input-container password-container">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password">
            <img src="https://img.icons8.com/ios-glyphs/30/000000/visible.png" alt="show password" onclick="togglePassword()">
        </div>
        <button class="login-button">ログイン</button>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</body>
</html>
