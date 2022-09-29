<?php
// require_once "templates/header.php";
// require_once "views/view.php";
require_once "controllers/registController.php";
require_once "controllers/pageController.php";


if($_GET['action']==''){
    $action='pacientes';
}else{
    $action = $_GET['action'];
}



$parse = explode ('/',$action);

$registController = new registController;
$pageController = new pageController;

// $userView = new userView;
        
switch($parse[0]){
    case 'registro':
    $registController->addRegistro();
    $pageController->getPacientes(); 
    break;

    case 'pacientes':
    // $userView->showInicio();
    $pageController->getPacientes();
    break;

    case 'ingresar':
    $pageController->getIngreso();
    break;

    case 'nosotros':
    $pageController->getNosotros();
    break;

    case 'registrarse':
    $pageController->getRegistro();
    break;
    
    case 'soporte':
    $pageController->getSoporte();
    break;
        
    
    }

