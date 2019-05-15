<!DOCTYPE html>
<html>
		<head>
			<title>Авторизация</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="shortcut icon" href="img/icon.1078218340.png" type="image/x-icon">
		</head>
	<body>
		<div>
			<form id="login" class="login" action="auth.php" method="post" name = "forma">
				<h2 class="login_h2"><img src="img/icon.1078218340.png" class="imgavtorization">АВТОРИЗАЦИЯ</h2>
                <H4 class="badlogin">Неверные данные входа</H4>
				<!--ИМЯ ФАМИЛИЯ-->
				<label for="name"></label>
				<input class="name" required placeholder="Введите фамилию и имя" name="lgn"/>
				<!--ГРУППА-->
				<label for="group"></label>
				<input class="group" required placeholder="Введите группу" name="grp"/>
				<!--КНОПКА-->
				<input type="submit" class = "Authbutton" value="Войти" onclick="input()"/>
			</form> 
			
		</div>
	</body>
</html>
