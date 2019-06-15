<?php

$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Controllers/insertPetDetails.php");
session_start();

        $name=$_POST['mname'];
        $mtype=$_POST['mtype'];
        //var_dump($_POST['date1']);
        if($_POST['date1'] != ""){
        $mDate=$_POST['date1'];
        }else{
        $mfDate=$_POST['date2']; 
        $status=$_POST['status'];
        $Periodcount=$_POST['periodcount'];
        }
        $pmid=$_SESSION['pet_id'];
        
        insertPetDetails::insertMedicine($pmid,$name,$mDate,$mfDate,$Periodcount,$status,$ptype);
