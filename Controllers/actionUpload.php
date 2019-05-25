<?php
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/Connection.php");
session_start();

$dbs = Connection::connect(); 
$userId = $_SESSION['usr_id'];

$imageFile = addslashes(file_get_contents($_FILES['image']['tmp_name']));
var_dump($imageFile); die();
$insert_image="INSERT INTO user_gallery (pic,ref_usrId) VALUES('$imageFile','$userId')";

$dbs->query($insert_image);

