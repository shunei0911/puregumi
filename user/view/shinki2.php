<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../style/pure_user.css">
    <title>Document</title>
</head>
 
<body>
    <header class="signup_header">
        Pure
    </header>
    <main class="signup_main">
        <div class="signup_container">
            <form action="signup_complete.php" method="post">
                <h1 class="signup_h1">入力内容確認</h1>
                <label>名前</label><br>
                <input type="text" name="user_name" class="signup_text" value="<?= $_POST['user_name'] ?>" readonly><br>
                <label>性別</label><br>
                <input type="text" name="gender" class="signup_text" value="<?= $_POST['gender'] ?>" readonly><br>
                <label>住所</label><br>
                <input type="text" name="user_address" class="signup_text" value="<?= $_POST['user_address'] ?>" readonly><br>
                <label>生年月日</label><br>
                <input type="text" name="birthday" class="signup_text" value="<?= $_POST['birth_year'], '年 ', $_POST['birth_month'], '月 ', $_POST['birth_day'], '日' ?>" readonly><br>
                <label>メールアドレス</label><br>
                <input type="text" name="user_mail" class="signup_text" value="<?= $_POST['user_mail'] ?>" readonly><br>
                <label>郵便番号</label><br>
                <input type="text" name="user_post" class="signup_text" value="<?= $_POST['user_post'] ?>" readonly><br>
                <input type="hidden" name="user_pass" value="<?= $_POST['user_pass'] ?>">
                <div class="signup_btn_area">
                    <input onclick="history.back()" type="button" class="signup_back_btn" value="戻る">
                    <input type="submit" class="signup_entry_btn" value="確定">
                </div>
            </form>
        </div>
    </main>
</body>
 
</html>