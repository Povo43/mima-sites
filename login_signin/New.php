<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>ログイン - BookTower</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" href="../images/logos/mima-5.jpeg"/>
 <link rel="stylesheet" href="./login_signin.css">
 <link rel="stylesheet" href="./new.css">
 </head>
 <body>
    <header>
			<h1><a href="../../index.html" class="header-logo"><img src="../images/logos/mima-5.jpeg" alt="logo" class="logo"></a></h1>
	</header>

	<div class="form_bg">
		<div id="login_title">アカウントの作成</div>
		<form action="" method="POST">
	   	    <input class="input" id="name" name="username" type="text" placeholder="ユーザー名">
    	    <input class="input" id="email" name="email" type="email" placeholder="メールアドレス">
    	    <p class="form-p">登録できるのはoutlook.com、yahoo.co.jp,gmail.comのみです</p>
            <input class="input" id="pass" name="password" type="text" placeholder="パスワード">
			<input class="input" id="re-pass" name="password-re" type="text" placeholder="パスワード-確認">
    	    <button class="form-button" name="signin" type="submit">作成</button>
    	</form>
	</div>

	<footer>
		<div class="footer">
			<p><small>Copyright &copy; 2024 Povo Tako All Rights Reserved.</small></p>
			<a href="" class="footer-a">プライバシーポリシー</a>
		</div>
 	</footer>
 </body>
</html>