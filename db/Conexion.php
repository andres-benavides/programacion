<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author benavidesa
 */
class Conexion {

  private $dsn;
  private $user;
  private $password;
  
  public static function conexionDb($dsn="mysql:host=localhost;dbname=formulariomvc", $user="root", $password="1nt3r4ct1v3") {
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
    $conexion = new PDO( $dsn,  $user, $password,$opciones);
    return $conexion;
  }


}
