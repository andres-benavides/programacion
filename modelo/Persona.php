<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author benavidesa
 */
class Persona {

  private $nombre;
  private $genero;
  private $ciudad;
  private $bandas;
  private $descripcion;
  private $autorizaInfo;
  private $recibeInfo;
  private $db;

  public function __construct($nombre, $genero, $ciudad, $bandas, $descripcion, $autorizaInfo, $recibeInfo) {
    $this->nombre = $nombre;
    $this->genero = $genero;
    $this->ciudad = $ciudad;
    $this->bandas = $bandas;
    $this->descripcion = $descripcion;
    $this->autorizaInfo = $autorizaInfo;
    $this->recibeInfo = $recibeInfo;
    $this->db = Conexion::conexionDb();
  }
  function getNombre() {
    return $this->nombre;
  }

  function getGenero() {
    return $this->genero;
  }

  function getCiudad() {
    return $this->ciudad;
  }

  function getBandas() {
    return $this->bandas;
  }

  function getDescripcion() {
    return $this->descripcion;
  }

  function getAutorizaInfo() {
    return $this->autorizaInfo;
  }

  function getRecibeInfo() {
    return $this->recibeInfo;
  }

  function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  function setGenero($genero) {
    $this->genero = $genero;
  }

  function setCiudad($ciudad) {
    $this->ciudad = $ciudad;
  }

  function setBandas($bandas) {
    $this->bandas = $bandas;
  }

  function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  function setAutorizaInfo($autorizaInfo) {
    $this->autorizaInfo = $autorizaInfo;
  }

  function setRecibeInfo($recibeInfo) {
    $this->recibeInfo = $recibeInfo;
  }

  

    public function guardarPersona() {
    try {
      $sql = $this->db->prepare("INSERT INTO registros VALUES (NULL,:nombre,:genero,:ciudad,:bandas,:descripcion,:autorizaInfo,:recibeInfo)");
      $sql->execute(array('nombre'=>$this->nombre,'genero'=>$this->genero,
                          'ciudad'=>$this->ciudad,'bandas'=>$this->bandas,
                          'descripcion'=>$this->descripcion,'autorizaInfo'=>$this->autorizaInfo,
                          'recibeInfo'=>$this->recibeInfo));
      return "registroOk";
    } catch (PDOException $e) {
      return "ERROR: " . $e->getMessage();
    }
  }

}
