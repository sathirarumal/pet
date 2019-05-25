<?php
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/ADMIN.php");

$ref_type_id=$_POST['tname'];
$pet_breed_name=$_POST['bname'];
$pet_breed_country=$_POST['cname'];
//var_dump($ref_type_id);
try {
    ADMIN::Insert_Breed($ref_type_id, $pet_breed_name, $pet_breed_country);
} catch (ErrorException $ex) {
    echo $ex;
}


