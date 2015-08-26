<?php
include_once './db/Conexion.php';
include_once './modelo/PersonaModelo.php';
$registro = new PersonaModelo();
$registros = $registro->getRegistros();
echo json_encode($registros);

