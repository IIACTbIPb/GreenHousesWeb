<?php
  require 'db.php';

    $login = "";
    if(isset($_SESSION['name'])){
            $name = $_SESSION['name'];
            $password = $_SESSION['password'];
            $login = " Привет ".$name;
            $id = user_id($name,$password);
        }
       
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Merriweather|Pacifico&amp;subset=cyrillic" rel="stylesheet">
     <script src="jquery-3.3.1.min.js"></script>
    <script src="jquery-ui.min.js"></script>
    <title>GreenHouses</title>
</head>
<header class="header">
        <div class="conteiner">
            <nav class="nav">
                <div class="logo">
                    <img src="img/logo.png" alt="logo">
                </div>
                <ul class="menu">
                    <li class="menu_item"><a href="index.php">Главная</a></li>
                    <li class="menu_item"><a href="#allGH">Все теплицы</a></li>
                    <li class="menu_item"><a href="#myGH">Мои теплицы</a></li>
                    <li class="menu_item"><a href="https://vk.com/im?peers=c77_346741178">About</a></li>
                </ul>
                <?php if ( isset ($_SESSION['name']) ) : ?>
                     <div class="btn_login">
                        <a href="logout.php"> Выйти</a>
                     </div>
                <?php else : ?>
                <div class="btn_login">
                    <a href="#" id="auth">
                            Войти
                    </a>
                </div>
                <?php endif; ?>
            </nav>
        </div>
            <div class="offer">
                <div class="conteiner">
                    <div class="offer_content">
                        <div class="offer_text">
                            <h2><?=$login?></h2>
                             <h1>Покупайте <span style="color:forestgreen">теплицы</span> и <br> выращивайте продукты!</h1>
                        </div>
                        <div class="offer_img">
                            <img src="img/greenhouse.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact">
                <div class="conteiner">
                    <div class="contact_info">
                        <div class="adress">
                            <p>ул. Русская 35</p>
                        </div>
                        <div class="phone">
                            <img src="img/phone.png" alt="">
                            <p>8 963 965 42-34</p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="modal_window_single1">
            <div class="modal_window">
                <div class="modal_single" id="modal">
                    <div class="modal_close">
                       <a href=""><span class="plus_single"></span></a>
                    </div>
                    <div class="title_modal">
                        <h2>Авторизация</h2>
                    </div>
                    <div class="modal_add">
                        <form  action="auth.php" method="post">
                            <div class="auth_item">                     
                                    <input name="name" type="text" class="input_modal">
                                    <input name="password" type="password" class="input_modal">
                                <div class="button_modal">
                                   <button name="send" type="submit" class="add">Войти</button >
                                    <a href="register.php"><button class="close" type="button"  >Регистрация</button></a>
                                </div>
                            </div>  
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </header>
    <body>