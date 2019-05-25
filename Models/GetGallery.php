<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GetGallery
 *
 * @author sathi
 */
class GetGallery {
    
    public static function getPhotos(){
      $dbs = Connection::connect();  
      $userId = $_SESSION['usr_id'];
      
      $sql = "SELECT * FROM user_gallery WHERE ref_usrId = '$userId'";
      $result = mysqli_query($dbs,$sql);
      
      
      return $result;
     }
}
