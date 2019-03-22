<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of insertBreed
 *
 * @author Kisal Nelaka
 */
class insertBreed {
public static function Insert_Breed($ref_type_id, $pet_breed_name, $pet_breed_country) {
      $dbs = Connection::connect();  
      try{
          $sql = "INSERT INTO set_breed (ref_type_id, pet_breed_name, pet_breed_country)"
             . "values ('$ref_type_id, $pet_breed_name, $pet_breed_country')";
      $dbs->query($sql);
      } catch (Exception $ex) {
          echo $ex;
      }
}
}
