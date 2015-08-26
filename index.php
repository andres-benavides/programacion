<?php
$data = json_decode(file_get_contents('php://input'), true);
if (isset($data['action'])) {
  switch ($data['action']){
    case'guardar':
      include_once './controlador/guardaPersonaController.php';
      break;
    case 'consultar':
      include_once './controlador/PersonaController.php';
      break;
  }
} else {
  include_once './controlador/mainController.php';
}
