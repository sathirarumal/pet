<?php

$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/Connection.php");
session_start();

$dbs = Connection::connect(); 
$userId = $_SESSION['usr_id'];
$check = getimagesize($_FILES["image"]["tmp_name"]);
$title=$_POST['title'];
$date=date("Y-m-d");
        
if($check !== FALSE){
    
$imageFile = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$insert_image="INSERT INTO user_gallery (pic,ref_usrId,title,date) VALUES('$imageFile','$userId','$title','$date')";
$dbs->query($insert_image);

header('Location: /pet/Gallery/Gallery.php');
}else{
    
header('Location: /pet/Gallery/Gallery.php');
}

