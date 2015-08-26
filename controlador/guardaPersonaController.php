<?php

include_once './db/Conexion.php';
include_once './modelo/Persona.php';
include_once './modelo/PersonaModelo.php';
$bandas = implode(",", $data['bandas']);
$autorizaInfo = (($data['autorizaInfo'] == 1 || isset($data['autorizaInfo']))) ? 'S' : 'N';
$recibeInfo = (($data['recibeInfo'] == 1 || isset($data['autorizaInfo']))) ? 'S' : 'N';
$persona = new Persona($data['nombre'], $data['genero'], $data['ciudad'], $bandas, $data['descripcion'], $autorizaInfo, $recibeInfo);
$persona->guardarPersona();
$registro = new PersonaModelo();
$registros = $registro->getRegistros();
echo json_encode($registros);

