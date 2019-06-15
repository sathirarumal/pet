<?php


$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Controllers/Basic.php");
session_start();

$pet_name=$_POST['name'];
$pet_type=$_POST['type'];
$pet_breed=$_POST['breed'];
$pet_birthday=$_POST['bday'];
$pet_gender=$_POST['gender'];
$user_id= $_SESSION['usr_id'];
$default=1;

try {   
   Basic::insertPet($user_id,$pet_name, $pet_type, $pet_breed, $pet_birthday, $pet_gender,$default);   
   echo json_encode(array("code" => "200", "msg" => $msg ));
   
} catch (Exception $ex) {
    
    $msg="Error";
   echo json_encode(array("code" => "300", "msg" => $msg ));
}

 




