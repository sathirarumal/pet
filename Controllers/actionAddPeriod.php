<?php

$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/ADMIN.php");

$period=$_POST['pname'];

try {
    ADMIN::Insert_period($period);
} catch (Exception $ex) {
    echo $ex;
}

