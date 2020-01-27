<?php

header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once 'Pascals.php';

$uri = $_SERVER['REQUEST_URI'];
$uri = explode('/', $uri);


$seque = 0;

if(isset($_GET)){
	if(is_numeric($_GET['a'])){
		$seque = (int)$_GET['a'];
	}else{
		$seque = 0;
	}
}elseif(isset($_POST)){
	if(is_numeric($_POST['a'])){
		$seque = (int)$_POST['a'];
	}else{
		$seque = 0;
	}
}

$requestMethod = $_SERVER["REQUEST_METHOD"];

$dfd = new Pascals();
$tria = $dfd->Triangle($seque);

foreach($tria as $val){
	foreach($val as $value){
		echo $value . '&nbsp;';
	}
	echo '<br/>';
}

// $items = array(); 
// foreach($tria as $val){
// 	foreach($val as $value){
// 		$items[] = $value . '&nbsp;';
// 	}
// 	$items[] = '<br>';
// }

// echo json_encode($items);