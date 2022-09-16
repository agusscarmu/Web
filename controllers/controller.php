<?php  

class controller{
    public function plantilla(){
        include "views/template.php";
    }

    public function enlacespaginas(){
        $enlaces = $_GET["action"];
        
        $respuesta = enlacespaginas::enlacespaginasmodel($enlaces);
        include $respuesta;
        

    }
}

?>