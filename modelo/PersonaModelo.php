<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonaModelo
 *
 * @author AndresV
 */
class PersonaModelo {
  private $db;
  private $persona;

  public function __construct() {
    $this->db = Conexion::conexionDb();
    $this->persona = array();
  }
  public function getRegistros() {
    try {
      $sql = $this->db->prepare("SELECT * FROM registros");
      $sql->execute();
      while($fila = $sql->fetch(PDO::FETCH_ASSOC) ){
        $this->persona[] = $fila;
      }
      return $this->persona;
    } catch (PDOException $e) {
      return "ERROR: " . $e->getMessage();
    }
  }
}
