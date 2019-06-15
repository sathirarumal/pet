<?php

$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Controllers/insertPetDetails.php");
session_start();

        $Data=$_POST['date'];
        if($_POST['hours'] != ""){
        $hours=$_POST['hours'];
        }else{
        $starttime=$_POST['starttime'];
        $endtime=$_POST['endtime'];
        }
        $Event=$_POST['event'];
        $Description=$_POST['dis'];
        
        $pid=$_SESSION['pet_id'];
        
       
       insertPetDetails::insertActivities($pid,$Data, $hours, $starttime, $endtime, $Event, $Description);
        
       

