<?php
	session_start();
	if (!$_SESSION){
		header('location:index.php');
	}
?>
<?php
	require_once 'function.php';

$fact = getQuestion($db);

?>

<!DOCTYPE html>
<html>
		<head>
			<meta charset = "cp154">
			<title>Тестирование</title>
            <!--<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>-->
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="shortcut icon" href="img/icon.1078218340.png" type="image/x-icon">
		</head>
	<body>
		<header>
			<div class="header-bg">
				<p class="shapka"><img src="img/icon.1078218340.png" class="imgavtorization1">Тестирование</p>
		</header>
		<div class="content" >
			<script src = "function.js"></script>
			<form action = "rezulttest.php" method = "POST">
			<?php if ($fact) : ?>
			<table align="center">
				<tr>
					<th class = "nomer"><b>№</b></th>
					<th class = "quest"><b>Вопрос</b></th>
					<th class = "answer"><b>Ответ</b></th>
				</tr>
				<?php foreach($fact as $quest) :?>
                    <tr>
					<td class = "al">
						<?php
							echo $quest['id'];
						?>
					</td>
					<td>
						<?php 
							echo $quest['quest'];
						?>
					</td>
					<td class = "al">
						<span>Да</span>
						<input type = "radio" value = "1"  name = "YesNo[<?= $quest['id']; ?>]"  required>
						<span>Нет</span>
						<input type = "radio" value = "0"  name = "YesNo[<?= $quest['id'];  ?>]">
					</td>
				</tr>
				<?php endforeach; ?>
				</table>
				<?php else: ?>
					<h3> Нет Вопросов </h3>
            <?php endif ?>
				<span><br><br></span>
				<input type="submit" class="Tbutton" value="Получить результаты"/>
			</form>
		</div>
		<footer>
		<div>
			<span>KOLBES company&copy; KOS-TEST 2016</span>
		</div>
		</footer>
	</body>
</html>