<?php
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/ADMIN.php");

$pet_type_name=$_POST['tname'];

try {
    ADMIN::Insert_type($pet_type_name);
} catch (Exception $ex) {
    echo $ex;
}
