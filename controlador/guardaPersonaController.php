<?php
include_once './db/Conexion.php';
include_once './modelo/Persona.php';
$bandas = implode(",", $data['bandas']);
$autorizaInfo = (($data['autorizaInfo']==1))?'S':'N';
$recibeInfo = (($data['recibeInfo']==1))?'S':'N';
$persona = new Persona($data['nombre'], $data['genero'], $data['ciudad'], $bandas, $data['descripcion'], $autorizaInfo, $recibeInfo);
$registro = $persona->guardarPersona();
echo $registro;
print_r($data);

