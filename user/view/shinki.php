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
            padding-top: 250px;
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
    <script>
        function showConfirmation() {
            const name = document.getElementById("name").value;
            const gender = document.querySelector('input[name="gender"]:checked')?.value || "";
            const address = document.getElementById("address").value;
            const birthYear = document.querySelector('input[name="birth_year"]').value;
            const birthMonth = document.querySelector('input[name="birth_month"]').value;
            const birthDay = document.querySelector('input[name="birth_day"]').value;
            const email = document.getElementById("email").value;
            const postalCode = document.getElementById("postal-code").value;

            document.getElementById("confirm-name").textContent = name;
            document.getElementById("confirm-gender").textContent = gender;
            document.getElementById("confirm-address").textContent = address;
            document.getElementById("confirm-birthdate").textContent = `${birthYear}年 ${birthMonth}月 ${birthDay}日`;
            document.getElementById("confirm-email").textContent = email;
            document.getElementById("confirm-postal-code").textContent = postalCode;

            document.getElementById("form-container").style.display = "none";
            document.getElementById("confirmation-container").style.display = "block";
        }

        function goBackToForm() {
            document.getElementById("form-container").style.display = "block";
            document.getElementById("confirmation-container").style.display = "none";
        }
    </script>
</head>

<body>
    <div class="header">Pure</div>
    <form action="signup_complete.php" method="post">
        <!-- 入力画面 -->
        <div id="form-container" class="container">
            <div class="form">
                <p class="header-title">新規登録</p>
                <form onsubmit="event.preventDefault(); showConfirmation();">
                    <div class="form-group">
                        <label for="name">名前</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>性別</label>
                        <div class="gender-options">
                            <label><input type="radio" name="gender" value="男性"> 男性</label>
                            <label><input type="radio" name="gender" value="女性"> 女性</label>
                            <label><input type="radio" name="gender" value="その他"> その他</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">住所</label>
                        <input type="text" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label>生年月日</label>
                        <input type="number" name="birth_year" placeholder="年" min="1900" max="2024" style="width: 25%;" required> 年
                        <input type="number" name="birth_month" placeholder="月" min="1" max="12" style="width: 20%;" required> 月
                        <input type="number" name="birth_day" placeholder="日" min="1" max="31" style="width: 20%;" required> 日
                    </div>
                    <div class="form-group">
                        <label for="email">メールアドレス</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="postal-code">郵便番号</label>
                        <input type="text" id="postal-code" name="postal_code" required>
                    </div>
                    <div class="form-group">
                        <label for="password">パスワード</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">パスワード確認</label>
                        <input type="password" id="confirm-password" name="confirm_password" required>
                    </div>
                    <div class="buttons">
                        <button type="button" class="btn btn-back" onclick="window.location.href='roguin2.html'">戻る</button>
                        <a href="shinki2.php" class="btn btn-submit">登録</a>
                    </div>
                </form>
            </div>
        </div>
    </form>
</body>
</html>