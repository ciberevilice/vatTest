<?php
session_start();
include_once 'function.php';
if (!$_SESSION) {
	header("location:index.php"); exit();
}
?>
<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8">
			<title>Начало</title>
			<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="shortcut icon" href="img/icon.1078218340.png" type="image/x-icon">
		</head>
	<body>
		<div>
			<p class="STtext">Добро пожаловать, <?= $_SESSION['login'] ?>! По прохождению тестирования результаты можно будет узнать у преподавателя.</p>
			<form action = "test.php" method="get">
				<input type="submit" class="STbutton" value="Начать тестирование"/>
			</form>
		</div>
	</body>
</html>