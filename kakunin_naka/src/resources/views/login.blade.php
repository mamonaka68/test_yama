<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <title>Document</title>
</head>
<body>
<form name="login_form">
  <div class="login_form_top">
    <h1>FashionablyLate</h1>
     </div>
    <div class="login_form_mid">
    <h2>Login</h2>
  </div>
  <div class="login_form_btm">
    <span class="form__label--item">メールアドレス</span>
    <input type="email" name="email" placeholder="例：test@example.com"><br>
    <span class="form__label--item">パスワード</span>
    <input type="password" name="password"placeholder="例：coachtech06"><br>
  <button type="submit">ログイン</button>
  </div>
</form>
</body>
</html>