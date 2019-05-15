<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
		<head>
			<meta charset="utf-8">
			<title>Администратор</title>
			<link rel="stylesheet" type="text/css" href="../style.css">
			<link rel="shortcut icon" href="../img/icon.1078218340.png" type="image/x-icon">
		</head>
	<body>
    <script src = "../function.js"></script>

    <!--	Шапка-->
		<header>
			<div class="header-bg">
				<p class="shapka"><img src="../img/icon.1078218340.png" class="imgavtorization1">Результаты тестирования</p>
		</header>

<!--    Страница-->
		<div>
            <form class="content" method="post" action="form.php">
                <span>  Вывести данные студента</span>
                <label><input id="rbtn1" type = "radio" value = "radiobtn" name = "radiobtn" onchange="check1()"></label><br>
                <span>  Вывести данные по группе</span>
                <label><input id="rbtn2" type = "radio" value = "radiobtn"  name = "radiobtn" onChange="check1()"></label>

                <form class="content" method = "post" action = 'form.php'>
                    <br>
                    <!--	Данные студента name, grps, date-->
                    <div id = "block1">
                        <!--<span>  Вывести данные студента</span>
                        <label><input id="rbtn1" type = "radio" value = "radiobtn" name = "radiobtn" onchange="check1()"></label>-->
                        <br>
                        <div id="info1" style="display: none" class="div_content_radio">
                            <div class="spo_npo">
                                <p>Выберите отделение:
                                    <select name="spo_npo_st">
                                        <option value="1">ППССЗ</option>
                                        <option value="2">ППКРС</option>
                                    </select>
                                </p>
                            </div>
                            <label>Фамилия и имя студента: <input type="text" class="div_content_input" name="name" required></label><br>
                            <label>Группа (КС.121): <input type="text" class="div_content_input" name="grps" required></label><br>
                            <input type = "submit" class="Admin_button" value = "Просмотреть отчет" name="getdata1">

                        </div>
                    </div>
                </form>

                <!--	Данные группы group, dat-->
                <form class="content" method="post" action = "form.php">
                    <!--<span>  Вывести данные по группе</span>
                    <label><input id="rbtn2" type = "radio" value = "radiobtn"  name = "radiobtn" onChange="check1()"></label>-->
                    <div id = "block2">

                        <br>
                        <div id="info2" style="display: none" class="div_content_radio">
                            <div class="spo_npo">
                                <p>Выберите отделение:
                                    <select name="spo_npo_grp">
                                        <option value="3">ППССЗ</option>
                                        <option value="4">ППКРС</option>
                                    </select>
                                </p>
                            </div>
                            <label>Группа: <input type="text" class="div_content_input" name="group" required></label><br>
                            <input type = "submit" class="Admin_button" value = "Просмотреть отчет" name = "getdata2">
                        </div>
                    </div>
                    <br>

                </form>
            </form>


		</div>

<!--	Подвал-->
		<footer>
		<div>
			<span>KOLBES company&copy; KOS-TEST 2016</span>
		</div>
		</footer>

	</body>
</html>


