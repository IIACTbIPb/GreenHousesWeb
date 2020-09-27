<?php
	require "db.php";


		if(isset($_POST["name"]) and isset($_POST["password"])){
          $name = $_POST["name"];
          $password =$_POST["password"];

       global $db;
      $log = "SELECT * FROM users WHERE Name = '$name' and password = '$password'";
      
      $result = $db->prepare($log); 
      $result->execute(); 
      $count = $result->fetchColumn(); 
      if($count >= 1){
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;
      }else
      {
      		$error = "ошибка";
        } 
        if(isset($_SESSION['name'])){
        	 // echo'<script> window.location="index.php"; </script> ';
          header("Location: index.php");
        	
        }else
        {
        	echo 'Неверный логин или пароль';
          echo "<a href='index.php'>Вернуться</a>";
        }
      }
