<?php
$root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/GetData.php");
include("$root/pet/Models/Connection.php");
//session_start();

/**
 * Description of BasicController
 *
 * @author sathi
 */
class Basic{
    
    public static function setPetprofile($petId)
    {
        $petid=(int)$petId;
        $_SESSION['pet_id']=$petid;
        $row=GetData::getPetProfile($petid);
        return $row;
    }
    
    public static function login(){
        $data=GetData::getUsrprofile();
        if($data != null)
        {   
            $_SESSION['usr_id']=$data['usr_id'];
            header('Location: main.php');
            
        }
        else{
            
        }
        
    }
    
    public static function getTypeByID($Id)
    {
        $dbs = Connection::connect();  

        $typeid=$Id;
        
        $sql = "select * from set_type where pet_type_id = '$typeid'";
        $result = mysqli_query($dbs,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        return $row['pet_type_name'];
    }        
    
    public static function getBreedByID($Id)
    {
        $dbs = Connection::connect();  

        $breedid=$Id;
        
        $sql = "select * from set_breed where pet_breed_id = '$breedid'";
        $result = mysqli_query($dbs,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        return $row['pet_breed_name'];
    }
    
}
