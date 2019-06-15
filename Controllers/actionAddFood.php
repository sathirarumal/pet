<?php
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Controllers/insertPetDetails.php");
session_start();

        $fname=$_POST['fname'];
        $ftype=$_POST['ftype'];
        if($_POST['fdate'] != ""){
            $fdate=$_POST['fdate'];
      
        }else{
            $FDate=$_POST['ffdate'];
            $Periodtype=$_POST['fptype'];
            $FDate="";
        }
        $Periodcount=$_POST['fperiodcount'];               
        $pfid=$_SESSION['pet_id'];
        try{
            insertPetDetails::insertFood($pfid, $Foodname, $FDate, $Periodcount, $Periodtype, $FoodInitialdate, $Foodbrand);
 
        } catch (Exception $ex) {
            echo $ex;
        }
   
      
        

