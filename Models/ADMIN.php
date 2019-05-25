<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ADMIN
 *
 * @author Rashini Gangadarie
 */
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/Connection.php");

class ADMIN {
    
    
    public static function Insert_type($pet_type_name) {
      
      $dbs = Connection::connect();  
      try{
            $sql = "INSERT INTO set_type (pet_type_name)"
             . "values ('$pet_type_name')";
            $dbs->query($sql);
         } catch (Exception $ex) {
            echo $ex;
         }
    } 
    
    public static function Insert_Breed($ref_type_id, $pet_breed_name, $pet_breed_country) {
      
      $dbs = Connection::connect();  
      try{
            $sql = "INSERT INTO set_breed (ref_type_id, pet_breed_name, pet_breed_country)"
             . "values ('$ref_type_id', '$pet_breed_name', '$pet_breed_country')";
            $dbs->query($sql);
         } catch (Exception $ex) {
             return $ex;
         }
     }
      
    public static function Insert_Country($country) {
      
      $dbs = Connection::connect();  
      try{
          $sql = "INSERT INTO set_country (country)"
             . "values ('$country')";
          $dbs->query($sql);
        } catch (Exception $ex) {
          echo $ex;
        }       
    }
    
    public static function Insert_period($period) {
      
      $dbs = Connection::connect();  
      try{
          $sql = "INSERT INTO set_periods (period)"
             . "values ('$period')";
          $dbs->query($sql);
         } catch (Exception $ex) {
          echo $ex;
         }      
    }
    
}
