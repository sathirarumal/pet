<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Insert_Details
 *
 * @author Rashini Gangadarie
 */
class Insert_Details {
    //put your code here
     public static function Insert_Vaccine($petid, $name, $date, $period, $ptype, $status) {
      $dbs = Connection::connect();  
      try{
          $sql = "INSERT INTO pet_vaccine (ref_pet_id, pet_vac_name, pet_vac_date, pet_vac_period, ref_period_type, pet_vac_status)"
             . "values ('$petid' ,'$name' , '$date' , '$period' , '$ptype' , '$status')";
          $dbs->query($sql);
      
      } catch (Exception $ex) {
          echo $ex;
      }    
         
     }
        
}
