<?php 
require "db.php";
$error = "";
$single = get_singles();
# Проверка занятости логина
$bool = true;
if(isset($_SESSION['name'])){
            $name = $_SESSION['name'];
            $password = $_SESSION['password'];
        }
 $id = user_id($name,$password);
 if(isset($_POST["send"])){
 	foreach ($single as $value) {
         	if($_POST["nameGH"]==$value["Name"]){
         		$error="Теплица с таким именем уже существует";
         		$bool=false;
         		header('Location: /index.php#allGH');
         	}}
         	if($bool)
         	{
	        	add_greenhouse($_POST["nameGH"],$id["ID"]);
	        	header('Location: /index.php#allGH');
	        	$error = "";
         	}
         	
        }
 
