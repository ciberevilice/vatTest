<!DOCTYPE html>
<html>
		<head>
			<title>Авторизация</title>		
			<link rel="stylesheet" type="text/css" href="../style.css">
			<link rel="shortcut icon" href="../img/icon.1078218340.png" type="image/x-icon">

			<script type="text/javascript" src = "js/jquery-3.0.0.min.js"></script>
			<script type="text/javascript" src = "js/jquery-migrate-1.4.1.min.js"></script>
			<script type="text/javascript" src = "js/script.js"></script>
		</head>
	<body>
		<div>
			<div id="results"></div>
			<form id="login" class="login" action="" method="post" name = "forma">

				<h2><img src="../img/icon.1078218340.png" class="imgavtorization">АВТОРИЗАЦИЯ</h2>
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
