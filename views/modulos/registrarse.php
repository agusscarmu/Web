<?php 
require_once 'models/model.php';
function showRegistrarse(){
    ?>
<form action=" " method="POST">
    <div class=grupoformulario>
        <label for="">Su nombre:</label><input type="text" name="name" placeholder="Apellido y Nombre">
    </div>
    <div class=grupoformulario>
        <label for="">Su numero de documento:</label><input type="number" name="dni" placeholder="DNI">
    </div>
    <div class=grupoformulario>
        <label for="">Fecha de nacimiento:</label><input type="text" name="nacimiento" placeholder="dd/mm/aaaa">
    </div>
    <div class=grupoformulario>
     <select name="genero">
        <option value="">
            Genero
        </option>
        <option value="m" id="masculino">
            Masculino
        </option>
        <option value="f" id="femenino">
            Femenino
        </option>
        <option value="o" id="otro">
            Otro
        </option>
        <option value="n" id="nodice">
            Prefiero no decirlo
        </option>
     </select>
    </div>
    <div class=grupoformulario>
        <label for="">Correo electronico:</label><input type="text" name= "mail" placeholder="Direccion de correo electronico">
    </div>
    <div class=grupoformulario>
        <label for="">Establezca una contraseña:</label><input type="password" name="pass" placeholder="Contraseña">
    </div>

    <button type="submit">Registrarse</button>
</form>
<?php }?>

<?php 
    if(isset($_POST['name'])&&isset($_POST['dni'])&&isset($_POST['nacimiento'])&&isset($_POST['mail'])&&isset($_POST['pass'])&&isset($_POST['genero'])){
        $name = $_POST['name'];
        $dni = $_POST['dni'];
        $nacimento = $_POST['nacimiento'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        $genero = $_POST['genero'];

        // $BD = new BD();
        // $BD->registro($name,$dni,$nacimiento,$mail,$pass,$genero);
        $db = new PDO('mysql:host=localhost;'.'dbname=Pacientes;charset=utf8','root', '' );
        $query = $db -> prepare ("INSERT INTO `Usuarios`(`name`, `dni`, `nacimiento`, `mail`, `pass`, `genero`) VALUES (?,?,?,?,?,?)");
        $query -> execute([$name,$dni,$nacimiento,$mail,$pass,$genero]);
    }
    
?>
