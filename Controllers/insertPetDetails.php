<?php
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/GetData.php");
include("$root/pet/Models/Connection.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of insertPetDetails
 *
 * @author sathi
 */
class insertPetDetails {
    
    public static function insertVaccine($petId, $vacName, $vacType, $vacDate, $vacPeriod, $vacPeriodType, $vacStatus)
    {
        $dbs= Connection::connect();
        try{
            $sql= "INSERT INTO pet_vaccine (ref_pet_id, pet_vac_name, pet_vac_type, pet_vac_date, pet_vac_period, ref_period_type, pet_vac_status) VALUES ('$petId', '$vacName', '$vacType', '$vacDate', '$vacPeriod', '$vacPeriodType', '$vacStatus')";
            $dbs->query($sql);
        }
        catch (Exception $ex){
            echo $ex;
        }   
    }
    
    
    
    
}