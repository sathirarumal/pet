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
    
    public static function insertActivities($pid,$date,$hours,$starttime,$endtime,$event,$dis)
    {
        $dbs= Connection::connect();
        try{
            $sql= "INSERT INTO pet_activities(ref_pet_id, Date, Hours, Startime, Endtime, Event, Description) VALUES ('$pid','$date','$hours','$starttime','$endtime','$event','$dis')";
            $dbs->query($sql);
        }
        catch (Exception $ex){
            echo $ex;
        }   
    }
    
    public static function insertMedicine($pmid,$name,$mDate,$mfDate,$Periodcount,$status,$ptype)
    {
        $dbs= Connection::connect();
        try{
            $sql= "INSERT INTO pet_medicine(ref_pet_id,pet_med_name,pet_med_date,pet_med_date2,pet_med_count,pet_med_status,ref_period_type) VALUES ('$pmid','$name','$mDate','$mfDate','$Periodcount','$status','$ptype')";
            $dbs->query($sql);
        }
        catch (Exception $ex){
            echo $ex;
        }   
    }
    
    public static function insertFood($pfid, $Foodname, $FDate, $Periodcount, $Periodtype, $FoodInitialdate, $Foodbrand)
    {
        $dbs= Connection::connect();
        try{
            $sql= "INSERT INTO pet_foods (ref_pet_id,pet_food_name,pet_food_date,pet_food_pcount,red_period_type,pet_food_idate,pet_food_brand) VALUES ('$pfid','$Foodname','$FDate','$Periodcount','$Periodtype','$FoodInitialdate','$Foodbrand')";
            $dbs->query($sql);
        }
        catch (Exception $ex){
            echo $ex;
        }   
    }
}

