<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 *
 * @author sathi
 */
class DB {

    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "pet";
    public $conn;

public static function connect(){
    $conn = new mysqli($servername, $username, $password, $dbname);
    return conn;
}
        
  
}
