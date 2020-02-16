<?php 
require "header.php" ?>
    
    <article>
        <div class="conteiner">
            <div class="main_content">
                <hr><div id="allGH" class="title_single">
                    <h1>теплицы</h1> 
                     <a href="#allGH" class="single_add">
                        <span class="plus_single">
                        </span>
                    </a>
                </div><hr>
             <?php

                    $single = get_singles();
                     foreach ($single as $value):?>
                <div class="single">
                    <div class="single_item">
                     <div class="single_name">
                        <a href="/single.php?ID=<?=$value["ID"]?>"><h2><?= $value["Name"]?></h2></a>
                     </div>
                     <div class="single_img">
                        <img src="img/teplica.png" alt="">
                     </div>
                    </div>  
                </div>
                 <?php endforeach; ?> 
            </div>
            <div class="main_content">
                <hr><div id="myGH" class="title_single">
                    <h1> Мои теплицы</h1> 
                     <a href="#allGH" class="single_add">
                        <span class="plus_single">
                        </span>
                    </a>
                </div><hr>
                 <?php
                 
                    $singleUser = get_grenhouses_id($id["ID"]);
                    foreach ($singleUser as $value):
                     ?>
                <div class="single">
                    <div class="single_item">
                     <form action="deleteGH.php" method="POST">
                        <div class="plus_delete">
                             <a href="/deleteGH.php?ID=<?=$value["ID"]?>"><span class="plus_single"></span></a>
                        </div>
                     </form>
                     <div class="single_name">
                        <a href="/single.php?ID=<?=$value["ID"]?>"><h2><?= $value["Name"]?></h2></a>
                     </div>
                     <div class="single_img">
                        <img src="img/teplica.png" alt="">
                     </div>
                    </div>  
                </div>
                 <?php endforeach; ?> 
            </div>
        </div>
        <div class="modal_window_single">
            <div class="modal_window">
                <div class="modal_single" id="modal">
                
                    <div class="modal_close">
                       <a href="" ><span class="plus_single"></span></a>
                    </div>
             
                    <div class="title_modal">
                        <h2>Введите название теплицы</h2>
                    </div>
                    <div class="modal_add">
                        <form name="addGH" action="add.php" method="post" >                        
                            <input name="nameGH" type="text" class="input_modal">
                            <div class="button_modal">
                               <a href="#"> <button name="send" type="submit" class="add">Добавить </button ></a>
                                <a href="#allGH"><button class="close" type="button" >Отмена</button></a>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </article>
    <script src="js/script.js">
    </script>
    <p></p>
</body>
</html>