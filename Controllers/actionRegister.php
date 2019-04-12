<?php
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Controllers/Basic.php");

$usr_fname=$_POST['fname'];
$usr_lname=$_POST['lname'];
$usr_b_day=$_POST['bday'];
$usr_gender=$_POST['gender'];
$usr_country=$_POST['country'];
$usr_email=$_POST['email'];
$usr_telno=$_POST['pnum'];
$uname=$_POST['username'];
$pwd=$_POST['password'];
try {
   
   $user_id = Basic::register($usr_fname, $usr_lname, $usr_b_day, $usr_gender, $usr_country, $usr_email, $usr_telno);
   Basic::password($uname, $pwd,$user_id);
   
} catch (Exception $ex) {
    echo $ex;
}        


