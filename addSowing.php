<?php 
	require "db.php";
	$seeds = get_seeds();
	$idSeeds = $_GET['nameId'];
	$idBeds = $_GET['idBeds'];
	update_beds_seeds($idSeeds,$idBeds);
	
