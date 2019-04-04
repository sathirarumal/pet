<?php

//session_start();

/**
 * Description of GetData
 *
 * @author sathi
 */
class GetData {

    
    public static function getUsrprofile($username,$password){
      $dbs = Connection::connect();     
        
      $sql = "SELECT * FROM user_profile WHERE usr_username = '$username' and usr_password = '$password'";
      $result = mysqli_query($dbs,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      return $row;
      
    }
    
    public static function getPets(){
      $dbs = Connection::connect();  
      $userId = $_SESSION['usr_id'];
      
      $sql = "SELECT * FROM pet_profile WHERE usr_id = '$userId'";
      $result = mysqli_query($dbs,$sql);

      return $result;
     }
     
     public static function getPetProfile($petId){
      $dbs = Connection::connect();  
      
      $sql = "SELECT * FROM pet_profile WHERE pet_id = '$petId'";
      $result = mysqli_query($dbs,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      return $row;
     }
     
     public static function getPetsWithThambnail(){
      $dbs = Connection::connect();  
      $petId = $_SESSION['pet_id'];
      
      $sql = "SELECT * FROM pet_profile WHERE pet_id = '$petId'";
      $result = mysqli_query($dbs,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      return $row;
     }
    
    public static function getUsrDetails(){
      $dbs = Connection::connect();  
      $userId = $_SESSION['usr_id'];
      
      $sql = "SELECT * FROM user_details WHERE usr_id = '$userId'";
      $result = mysqli_query($dbs,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      return $row;
     }
     
     public static function getUsrType(){
      $dbs = Connection::connect();  
      $userId = $_SESSION['usr_id'];
      
      $sql = "SELECT * FROM user_profile WHERE usr_id = '$userId'";
      $result = mysqli_query($dbs,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      return $row['usr_type'];
     }
     
     public static function getPetfoods(){
      $dbs = Connection::connect();  
      $petId = $_SESSION['pet_id'];
      
      $sql = "SELECT * FROM pet_foods WHERE ref_pet_id = '$petId'";
      $result = mysqli_query($dbs,$sql);
      
      return $result;
     }
     
     public static function getPetVaccin(){
      $dbs = Connection::connect();  
      $petId = $_SESSION['pet_id'];
      
      $sql = "SELECT * FROM pet_vaccine WHERE ref_pet_id = '$petId'";
      $result = mysqli_query($dbs,$sql);

      
      return $result;
     }
     
     public static function getPetMedicine(){
      $dbs = Connection::connect();  
      $petId = $_SESSION['pet_id'];
      
      $sql = "SELECT * FROM pet_medicine WHERE ref_pet_id = '$petId'";
      $result = mysqli_query($dbs,$sql);

      
      return $result;
     }

     
     public static function getPetactivity(){
      $dbs = Connection::connect();  
      $petId = $_SESSION['pet_id'];
      
      $sql = "SELECT * FROM pet_activities WHERE ref_pet_id = '$petId'";
      $result = mysqli_query($dbs,$sql);

      
      return $result;
     }
    
}
