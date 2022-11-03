<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../class/Users.php';


$database = new Database();
$db = $database->getConnection();
$item = new User($db);


$item->name = $_GET['name'];
$item->pseudo = $_GET['pseudo'];
$item->age = $_GET['age'];
if($item->createEmployee()){
echo 'Employee created successfully.';
} else{
echo 'Employee could not be created.';
}