<?php

$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/Connection.php");
session_start();

$dbs = Connection::connect(); 
$userId = $_SESSION['usr_id'];
$check = getimagesize($_FILES["image"]["tmp_name"]);

        
if($check !== FALSE){
    
$imageFile = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$insert_image="UPDATE user_details SET usr_propic='$imageFile' WHERE usr_id='$userId';";
$dbs->query($insert_image);

header('Location: /pet/Basics/UserProfile.php');
}else{
    
}

