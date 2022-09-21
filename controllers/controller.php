<?php  

class controller{
    public function plantilla(){
        include "template";
    }

    public function enlacespaginas(){
       
       if(isset($_GET["action"])){
        $enlaces = $_GET["action"];
       }
       else{
        $enlaces = "index";
       }
        
        
        $respuesta = enlacespaginas::enlacespaginasmodel($enlaces);
        include $respuesta;
        

    }
}

?>

