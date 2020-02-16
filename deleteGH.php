<?php 
require "db.php";
$id = $_GET["ID"];
	delete_grenhouses($id);
	header('Location: /index.php#allGH');
