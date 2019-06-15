

<?php
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/Calender.php");
$Data=$_POST['txtcalender'];

try {
    HOME::Insert_type('Data');
} catch (Exception $ex) {
    echo $ex;
}