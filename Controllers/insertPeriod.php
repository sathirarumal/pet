<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of insertPeriod
 *
 * @author Kisal Nelaka
 */
class insertPeriod {
 public static function Insert_period($period) {
      $dbs = Connection::connect();  
      try{
          $sql = "INSERT INTO set_periods (period)"
             . "values ('$period')";
      $dbs->query($sql);
      } catch (Exception $ex) {
          echo $ex;
 }}
}
