<?php

 $root=$_SERVER['DOCUMENT_ROOT'];
 include("$root/pet/Controllers/Basic.php");
 include("$root/pet/Models/GetGallery.php");
 session_start();
 
 $imgID=$_POST['picId'];
 $email=$_POST['email'];
 
  $sUserId=GetGallery::getUserByEmail($email);
  $sDate=date("Y-m-d");
  $ownerID=$_SESSION['usr_id'];
  if($sUserId == NULL){
      echo json_encode(array("code" => "300", "msg" => "error"));
  }else{ 
    
     try {
      
      GetGallery::shareUserImages($imgID, $ownerID, $sUserId, $sDate);
      echo json_encode(array("code" => "200", "msg" => "success"));
      
    } catch (Exception $ex) {
      echo json_encode(array("code" => "400", "msg" => "error"));
    }
    
  }  