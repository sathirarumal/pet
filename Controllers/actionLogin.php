<?php
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Controllers/Basic.php");

$username=$_POST['username'];
$password=$_POST['password'];
$status=Basic::login($username,$password);
        
//        if($status == 'error')
//        {
//            
//        }
