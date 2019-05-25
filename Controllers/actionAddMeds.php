<?php

$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Controllers/insertPetDetails.php");
session_start();

        $vacName=$_POST['vname'];
        $vacType=$_POST['vtype'];
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
        
        insertPetDetails::insertVaccine($petId, $vacName, $vacType, $vacDate, $vacPeriod, $vacPeriodType, $vacStatus);
