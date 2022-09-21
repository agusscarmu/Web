<?php
function showIndex(){
require_once "controllers/controller.php";
require_once "models/model.php";

$ctrl = new controller();
$ctrl -> plantilla();
}
?>