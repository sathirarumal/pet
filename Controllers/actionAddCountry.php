<?php
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/ADMIN.php");

$country=$_POST['coname'];

try {
    ADMIN::Insert_Country($country);
} catch (Exception $ex) {
    echo $ex;
}