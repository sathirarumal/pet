<?php
 $root=$_SERVER['DOCUMENT_ROOT'];
 include("$root/pet/Controllers/Basic.php");
 include("$root/pet/Models/GetGallery.php");
 
 $imgID=$_POST['picId'];

 try{    
   GetGallery::deleteUserImages($imgID);
 } catch (Exception $ex) {

 }
 
 
