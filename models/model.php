<?php

class enlacespaginas{
    public static function enlacespaginasmodel($enlacesmodel){
        if($enlacesmodel == "registrarse" || $enlacesmodel == "ingresar" || $enlacesmodel == "nosotros" || $enlacesmodel == "soporte"){
            $module = "modulos/". $enlacesmodel.".php";
         }
         return $module;
    }
}
?>