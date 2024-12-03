<!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../style/pure_user.css">
    <title>新規登録</title>
</head>
 
<body>
    <header class="signup_header">
        Pure
    </header>
    <main class="signup_main">
        <div class="signup_container">
            <form action="shinki2.php" method="post">
                <h1 class="signup_h1">新規登録</h1>
                <label>名前</label><br>
                <input type="text" name="user_name" class="signup_text" required><br>
                <label>性別</label><br>
                <div class="gender_area">
                    <input type="radio" name="gender" value="男性" required>男性
                    <input type="radio" name="gender" value="女性">女性
                    <input type="radio" name="gender" value="その他">その他
                </div>
                <label>住所</label><br>
                <input type="text" name="user_address" class="signup_text" required><br>
                <label>生年月日</label><br>
                <div class="birth_area">
                    <input type="number" name="birth_year" class="birth" required>年<input type="number" name="birth_month" class="birth" required>月<input name="birth_day" type="number" class="birth" required>日
                </div>
                <label>メールアドレス</label><br>
                <input type="text" name="user_mail" class="signup_text" required><br>
                <label>郵便番号</label><br>
                <input type="text" name="user_post" class="signup_text" required><br>
                <label>パスワード</label><br>
                <input type="password" name="user_pass" class="signup_text" required><br>
                <label>パスワード確認</label><br>
                <input type="password" name="user_repass" class="signup_text" required><br>
                <div class="signup_btn_area">
                    <input onclick="history.back()" type="button" class="signup_back_btn" value="戻る">
                    <input type="submit" class="signup_entry_btn" value="登録">
                </div>
            </form>
        </div>
    </main>
</body>
 
</html>