<?php
session_start();

if (!$_SESSION){
	header("location:index.php"); exit();
}

include_once 'config.php';
require 'function.php';
?>

<?php
$db = conn();

$key = array(
	1 => "А",
	2 => "И",
	3 => "Р",
	4 => "П",
	5 => "Э",
	6 => "К",
	7 => "О"
);

$_keyA = getKey($db, $key[1]);
$_keyI = getKey($db, $key[2]);
$_keyR = getKey($db, $key[3]);
$_keyP = getKey($db, $key[4]);
$_keyE = getKey($db, $key[5]);
$_keyK = getKey($db, $key[6]);
$_keyO = getKey($db, $key[7]);

$rezultA = 0;
$rezultI = 0;
$rezultR = 0;
$rezultP = 0;
$rezultE = 0;
$rezultK = 0;
$rezultO = 0;

/**
 * Автономность
 */
foreach ($_keyA as $newA) {
	for ($i = 1; $i <140; $i++){
		if ($i == $newA['id'] && $_POST['YesNo'][''.$i.''] == $newA['answer']){
			$rezultA = $rezultA + 1;
		}
	}
}

/**
 * Информативность
 */
foreach ($_keyI as $newI) {
	for ($i = 1; $i <140; $i++){
		if ($i == $newI['id'] && $_POST['YesNo'][''.$i.''] == $newI['answer']){
			$rezultI = $rezultI + 1;
		}
	}
}

/**
 *Принятие решения
 */
foreach ($_keyR as $newR) {
	for ($i = 1; $i <140; $i++){
		if ($i == $newR['id'] && $_POST['YesNo'][''.$i.''] == $newR['answer']){
			$rezultR = $rezultR + 1;
		}
	}
}

/**
 *Планирование
 */
foreach ($_keyP as $newP) {
	for ($i = 1; $i <140; $i++){
		if ($i == $newP['id'] && $_POST['YesNo'][''.$i.''] == $newP['answer']){
			$rezultP = $rezultP + 1;
		}
	}
}

/**
 *Эмоциональное отношение
 */
foreach ($_keyE as $newE) {
	for ($i = 1; $i <140; $i++){
		if ($i == $newE['id'] && $_POST['YesNo'][''.$i.''] == $newE['answer']){
			$rezultE = $rezultE + 1;
		}
	}
}

/**
 * Коммуникативные склонности
 */
foreach ($_keyK as $newK) {
	for ($i = 1; $i <140; $i++){
		if ($i == $newK['id'] && $_POST['YesNo'][''.$i.''] == $newK['answer']){
			$rezultK = $rezultK + 1;
		}
	}
}

/**
 *Организаторские склонности
 */
foreach ($_keyO as $newO) {
	for ($i = 1; $i <140; $i++){
		if ($i == $newO['id'] && $_POST['YesNo'][''.$i.''] == $newO['answer']){
			$rezultO = $rezultO + 1;
		}
	}
}

$date = date("Y-m-d");

$rezultK = $rezultK*0.05;
$rezultO = $rezultO*0.05;

$sql = "INSERT INTO rez (N, D, A, I, R, P, E, K, O, G) VALUES (
'".$_SESSION['login']."', '".$date."', '".$rezultA."', '".$rezultI."', '".$rezultR."', '".$rezultP."', '".$rezultE."', '".$rezultK."', '".$rezultO."', '". $_SESSION['group'] ."')";

$row = $db->query($sql);
if (!$row) {
	echo "no";
}
?>

<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8">
			<title>Конец</title>
			<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="shortcut icon" href="img/icon.1078218340.png" type="image/x-icon">
		</head>
	<body>

		<div>
			<table class="table">
				<tr class="tr">
					<th class="th">
						Компетенция
					</th>
					<th class="th">
						Результат
					</th>
				</tr>
				<tr class="tr">
					<td class="td">
						Понимание сущности и социальной значимости своей будущей профессии
					</td>
					<td class="td">
						<?=$rezultE;?>
					</td>
				</tr>
				<tr class="tr">
					<td class="td">
						Организация собственной деятельности
					</td>
					<td class="td">
						<?=$rezultP;?>
					</td>
				</tr>
				<tr class="tr">
					<td class="td">
						Способность принимать решения в стандартной и нестандартной ситуациях
					</td>
					<td class="td">
						<?=$rezultR;?>
					</td>
				</tr>
				<tr class="tr">
					<td class="td">
						Способность работы в коллективе и команде
					</td>
					<td class="td">
						<?=$rezultK;?>
					</td>
				</tr>
				<tr class="tr">
					<td class="td">
						Способность к организаторским склонностям
					</td>
					<td class="td">
						<?=$rezultO;?>
					</td>
				</tr>
			</table>
		</div>

		<div>
			<p class="RTtext">Спасибо за прохождение тестирования!<br></p>
			<a href="index.php"><input type="button" class="STbutton" value="Закрыть"/></a>
		</div>
	</body>
</html>
<?php
session_destroy();
?>