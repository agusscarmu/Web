<?php  

class controller{
    public function plantilla(){
        include "views/template.php";
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