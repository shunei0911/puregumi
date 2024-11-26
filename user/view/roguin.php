<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pure</title>
<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #fff;
    }
    .container {
        text-align: center;
    }
    .title {
        font-family: 'Times New Roman', serif;
        font-size: 2em;
        margin-bottom: 40px;
    }
    .button {
        display: block;
        width: 200px;
        padding: 15px;
        font-size: 1em;
        color: #fff;
        border: none;
        border-radius: 5px;
        margin: 10px auto;
        cursor: pointer;
        text-decoration: none;
    }
    .login-btn {
        background-color: #3498db; /* Blue button */
    }
    .signup-btn {
        background-color: #000; /* Black button */
    }
</style>
</head>
<body>

<div class="container">
    <div class="title">Pure</div>
    <a href="roguin2.php" class="button login-btn">ログイン</a>
    <a href="shinki.php" class="button signup-btn">新規アカウント作成</a>
</div>

</body>
</html>
