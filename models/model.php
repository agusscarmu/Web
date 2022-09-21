<?php

class enlacespaginas{
    public static function enlacespaginasmodel($enlacesmodel){
        if($enlacesmodel == "registrarse" || $enlacesmodel == "ingresar" || $enlacesmodel == "nosotros" || $enlacesmodel == "soporte" || $enlacesmodel == "pruebarandom"){
            $module = "views/modulos/". $enlacesmodel.".php";
         }
         elseif ($enlacesmodel == "index"){
            $module = "views/modulos/inicio.php"; 
         }
         
         return $module;
            
    }
}

class BD{
    

    private function conectar(){
        $db = new PDO('mysql:host=localhost;'.'dbname=Pacientes;charset=utf8','root', '' );
        return $db;
        }
    
    
    function registro($name,$dni,$nacimiento,$mail,$pass,$genero){
        $db = $this->conectar(); 
        $query = $db -> prepare ("INSERT INTO `Usuarios`(`name`, `dni`, `nacimiento`, `mail`, `pass`, `genero`) VALUES (?,?,?,?,?,?)");
        $query -> execute([$name,$dni,$nacimiento,$mail,$pass,$genero]);
        
        }
    

}

   