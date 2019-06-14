<?php
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Controllers/insertPetDetails.php");
session_start();

        $vacName=$_POST['vname'];
        //var_dump($_POST['date1']);
        if($_POST['date1'] == ""){
        $vacDate=$_POST['date2'];
        }else{
        $vacDate=$_POST['date1']; 
        }
        
        $vacPeriod=$_POST['vperiod'];
        $vacPeriodType=$_POST['vptype'];
        $petId=$_SESSION['pet_id'];
        $vacStatus=$_POST['isDate'];
        
        try{
          insertPetDetails::insertVaccine($petId, $vacName, $vacDate, $vacPeriod, $vacPeriodType, $vacStatus);          
          $msg="Vaccination Details saved";
          echo json_encode(array("code" => "200", "msg" => $msg ));

        } catch (Exception $ex) {
           $msg="Error";
            echo json_encode(array("code" => "300", "msg" => $msg )); 
        }
    
