<?php

$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Controllers/Basic.php");
session_start();

$pet_name=$_POST['name'];
$pet_type=$_POST['type'];
$pet_breed=$_POST['breed'];
$pet_birthday=$_POST['bday'];
$pet_gender=$_POST['gender'];
//$pet_note=$_POST['note'];
$pet_id=$_SESSION['pet_id'];


try {
   $dbs = Connection::connect();
   $sql = "UPDATE pet_profile SET pet_name='$pet_name',pet_type='$pet_type',pet_breed='$pet_breed',pet_birthday='$pet_birthday',pet_gender='$pet_gender' WHERE pet_id='$pet_id' ";
   $dbs->query($sql);
  
   $msg="Username or Email has already taken";
   echo json_encode(array("code" => "300", "msg" => $msg ));
   }
   catch (Exception $ex) {
    echo $ex;
   } 


