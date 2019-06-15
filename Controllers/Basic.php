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
    
    public static function login($username,$password){
        $data=GetData::getUsrprofile($username,$password);
        if($data != null)
        {   
            $_SESSION['usr_id']=$data['usr_id'];
            if(Basic::setPetDefault($data['usr_id'])){
                header('Location: /pet/MainDashboard/main.php');
            } else {
                header('Location:/pet/Basics/insertPet_Main.php');
            }            
        }
        else{
            return 'error'; 
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
   
    public static function register($usr_fname, $usr_lname, $usr_b_day, $usr_gender, $usr_country, $usr_email, $usr_telno)
    {
        $dbs= Connection::connect();
        try{
            $sql= "INSERT INTO user_details (usr_fname, usr_lname, usr_b_day, usr_gender, usr_country, usr_email, usr_telno) values ('$usr_fname', '$usr_lname', '$usr_b_day', '$usr_gender', '$usr_country', '$usr_email', '$usr_telno')";
            $dbs->query($sql);
            $usr_id = mysqli_insert_id($dbs);
        }
        catch (Exception $ex){
            echo $ex;
        }
        
        return $usr_id;
    }
    
    public static function insertPet($user_id, $pet_name, $pet_type, $breed, $birthday, $gender, $default)
    {
        $dbs= Connection::connect();
        try{
            $sql= "INSERT INTO pet_Profile (usr_id, pet_name, pet_type, pet_breed, pet_birthday, pet_gender, pet_default) values ('$user_id', '$pet_name', '$pet_type', '$breed', '$birthday', '$gender', '$default')";
            $dbs->query($sql);
            $usr_id = mysqli_insert_id($dbs);
            header('Location:/pet/Basics/PetProfile.php');
        }
        catch (Exception $ex){
            echo $ex;
        }
    }
    
    public static function password($uname, $pwd ,$usr_id)
    {
        $dbs= Connection::connect();
        try {
            $sql="INSERT INTO user_profile (usr_id, usr_username, usr_password) values ('$usr_id','$uname','$pwd')";
            $dbs->query($sql);
            
        } catch (Exception $ex) {
            echo $ex;
        }
    }
    
    public static function logout()
    {
        $_SESSION['usr_id'] = null;
    }
    
    public static function setPetDefault($usrid)
    {
        $dbs = Connection::connect();  
        
        $sql = "SELECT pet_id FROM pet_profile WHERE pet_default=1 AND usr_id='$usrid'";
        $result = mysqli_query($dbs,$sql);
        $petid = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if($petid['pet_id'] != NULL){
            $_SESSION['pet_id']=$petid['pet_id'];
            return TRUE;
        } else {
            header('Location:/pet/Basics/insertPet_Main.php');
            return FALSE;
        }
            
        
        
    }
    
    
}
