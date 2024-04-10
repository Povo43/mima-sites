<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>ログイン - BookTower</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" href="../images/logos/mima-5.jpeg"/>
 <link rel="stylesheet" href="./login_signin.css">
 <link rel="stylesheet" href="./login.css">
 </head>
 <body>
    <header>
			<h1><a href="../../index.html" class="header-logo"><img src="../images/logos/mima-5.jpeg" alt="logo" class="logo"></a></h1>
	</header>

	<div class="form_bg">
		<div id="login_title">ログイン</div>
		<form action="./afternew/afternew.php" method="POST">
	   	    <input id="signin-id" name="username" type="text" placeholder="ユーザー名 または メールアドレス">
    	    <input id="signin-pass" name="password" type="password" placeholder="パスワード">
			<p class="form-p">アカウントがありませんか?<a href="New.php">作成</a>してみましょう!</p>
    	    <button class="form-button" name="signin" type="submit">ログインする</button>
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