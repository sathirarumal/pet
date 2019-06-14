<?php
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/Connection.php");

/**
 * Description of selectionBox
 *
 * @author sathi
 */
class selectionBox {
    //put your code here
    
    public static function selectBreed(){
        $dbs = Connection::connect();
        $sql = "select * from set_breed"; 
        $result = mysqli_query($dbs,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        return $row;
    }
    
    public static function selectType(){
        $dbs = Connection::connect();
        $sql = "select * from set_type"; 
        $result = mysqli_query($dbs,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        return $row;
    }
    
    public static function selectPeriod(){
        $dbs = Connection::connect();
        $sql = "select * from set_periods"; 
        $result = mysqli_query($dbs,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
        
        return $row;
    }
    
    public static function selectCountry(){
        $dbs = Connection::connect();
        $sql = "select * from set_country"; 
        $result = mysqli_query($dbs,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        return $row;
    }
}
