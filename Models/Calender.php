<?php

$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/Calendar.php");

class Calender {
    

    //get calender
    
    public static function getdays(){
      $dbs = Connection::connect();  
      $petId = $_SESSION['pet_id'];
      
      $sql = "SELECT * FROM user_calender WHERE ref_pet_id = '$petId'";
      $result = mysqli_query($dbs,$sql);
      
      
      return $result;
     }
}

    



