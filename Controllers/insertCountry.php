<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of insertCountry
 *
 * @author Kisal Nelaka
 */
class insertCountry {
   public static function Insert_Country($country) {
      $dbs = Connection::connect();  
      try{
          $sql = "INSERT INTO set_country (country)"
             . "values ('$country')";
      $dbs->query($sql);
      } catch (Exception $ex) {
          echo $ex;
   }}
}
