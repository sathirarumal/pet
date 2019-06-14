<?php

class GetGallery {
    
    public static function getPhotos(){
      $dbs = Connection::connect();  
      $userId = $_SESSION['usr_id'];
      $toDate=$_COOKIE['todate'];
      $fromDate=$_COOKIE['fromdate'];
      
      if($toDate == "" || $fromDate == ""){      
      
          $sql = "SELECT * FROM user_gallery WHERE ref_usrId = '$userId'";
      } else {
      
          $sql = "SELECT * FROM user_gallery WHERE date >= '$fromDate' AND date <= '$toDate' AND ref_usrId = '$userId'";    
      }
      
      $result = mysqli_query($dbs,$sql);
      
      
      return $result;
     }
     
     public static function getUserImages($imgID){
      $dbs = Connection::connect();     
      
      $sql = "SELECT * FROM user_gallery WHERE picId = '$imgID'";
      $result = mysqli_query($dbs,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      return $row;
     }
     
     public static function deleteUserImages($imgID){
      $dbs = Connection::connect();  
      $sql = "DELETE FROM user_gallery WHERE picId = '$imgID'";
      $dbs->query($sql);
      
     }
     
     public static function getUserByEmail($email){
      $dbs = Connection::connect();  
      $sql = "SELECT * FROM user_details WHERE usr_email = '$email'";
      $result = mysqli_query($dbs,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      return $row['usr_id'];
      
     }
     
     public static function shareUserImages($imgID,$ownerID,$sUserId,$sDate){
      $dbs = Connection::connect();  
      $sql = "INSERT INTO share_gallery (ref_pic_Id,ref_owner_Id,ref_sharedUser_Id,shared_Date) VALUES ('$imgID','$ownerID','$sUserId','$sDate')";
      $dbs->query($sql);
      
     }
     
     public static function getSharedPhotos(){
      $dbs = Connection::connect();  
      $userId = $_SESSION['usr_id'];
      $toDate=$_COOKIE['stodate'];
      $fromDate=$_COOKIE['sfromdate'];
      
      if($toDate == "" || $fromDate == ""){      
      
          $sql = "SELECT * FROM user_gallery WHERE ref_usrId = '$userId'";
      } else {
      
          $sql = "SELECT * FROM user_gallery WHERE date >= '$fromDate' AND date <= '$toDate' AND ref_usrId = '$userId'";    
      }
      
      $result = mysqli_query($dbs,$sql);
      
      
      return $result;
     }
    
}
