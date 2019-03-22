<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of insertAdmin
 *
 * @author Kisal Nelaka
 */


class insertAdmin {
  public static function Insert_type($pet_type_name) {
      $dbs = Connection::connect();  
      try{
          $sql = "INSERT INTO set_type (pet_type_name)"
             . "values ('$pet_type_name')";
      $dbs->query($sql);
      } catch (Exception $ex) {
          echo $ex;
      }
}
}
