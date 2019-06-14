<?php

$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Controllers/Basic.php");
session_start();

$usr_fname=$_POST['fname'];
$usr_lname=$_POST['lname'];
$usr_b_day=$_POST['bday'];
$usr_gender=$_POST['gender'];
$usr_country=$_POST['country'];
$usr_email=$_POST['email'];
$usr_telno=$_POST['pnum'];
$usr_id=$_SESSION['usr_id'];
    
if($usr_fname == null){
   echo json_encode(array("code" => "300", "msg" => $msg ));
}else{
try {
   $dbs = Connection::connect();
   $sql = "UPDATE user_details SET usr_fname='$usr_fname',usr_lname='$usr_lname',usr_b_day='$usr_b_day',usr_gender='$usr_gender',usr_country='$usr_country',usr_email='$usr_email',usr_telno='$usr_telno' WHERE usr_id='$usr_id' ";
   $dbs->query($sql);
  
   $msg="";
   echo json_encode(array("code" => "200", "msg" => $msg ));
   }
   catch (Exception $ex) {
    echo $ex;
   } 
}