<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 22.11.2016
 * Time: 11:07
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Админ панель</title>
        <meta charset = "utf-8">
        <!--<link rel = "stylesheet" type = "text/css" href = "/style.css">-->
        <link rel = "stylesheet" type = "text/css" href = "test.css">
    </head>
    <body>
        <div class = "container">
            <div class="header">
                <div class="nav">
                    <ul class="menu">
                        <li class="menulist">
                            <div class="btn">
                                <form action = "admintest.php" method = "POST">
                                    <input type="submit" value="Главная" id = "button" class="frameOne">
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="btn">
                                <form action = "#" method = "POST">
                                    <input type="submit" value="Добавить студента" id = "button" class="frameTwo">
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="btn">
                                <form action = "#" method = "POST">
                                    <input type="submit" value="Добавить группу" id = "button" class = "frameThree">
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="btn">
                                <form action = "../index.php" method = "POST" >
                                    <input type="submit" value="Выход" id = "button">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mainFrame">
                <div class="textContet">
                    <iframe name = "main" seamless>

                    </iframe>
                </div>
            </div>
        </div>
    </body>
</html>
