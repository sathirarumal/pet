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
    
    
}
