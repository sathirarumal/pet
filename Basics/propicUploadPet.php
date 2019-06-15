<?php

$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/Connection.php");
session_start();

$dbs = Connection::connect(); 
$petId = $_SESSION['pet_id'];
$check = getimagesize($_FILES["image"]["tmp_name"]);

        
if($check !== FALSE){
    
$imageFile = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$insert_image="UPDATE pet_profile SET pet_pic='$imageFile' WHERE pet_id='$petId';";
$dbs->query($insert_image);

header('Location: /pet/Basics/PetProfile.php');
}else{
    
}

