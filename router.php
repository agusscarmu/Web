<?php
require_once "views/modulos/ingresar.php";
require_once "views/modulos/inicio.php";
require_once "views/modulos/nav.php";
require_once "views/modulos/nosotros.php";
require_once "views/modulos/registrarse.php";
require_once "views/modulos/soporte.php";

if($_GET['action']==''){
    $action='home';
}else{
    $action=$_GET['action'];
}

$parse = explode ('/',$action);
switch($parse[0]){
    case 'ingresar':
        showIngresar();
        break;
    case 'inicio':
        showInicio();
        break;
    case 'nav':
        showNav();
        break;
    case 'nosotros':
        showNosotros();
        break;
    case 'registrarse':
        showRegistrarse();
        break;
    case 'soporte':
        showSoporte();
        break;
    case 'template':
        showTemplate();
        break;
    case 'index':
        showIndex();
        break;

}