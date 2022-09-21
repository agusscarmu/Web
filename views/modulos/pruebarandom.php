<form action="" method="POST">
    <input name="text" type="text">
    <button type="submit">enviar</button>
</form>
<?php 
    if(isset($_POST['text'])){
        $text = $_POST['text'];
    }
    $db = new PDO('mysql:host=localhost;'.'dbname=pruebalucas;charset=utf8', 'root', '');
    $query = $db -> prepare ("INSERT INTO `pruebalucas`(`text`) VALUES (?)");
    $query -> execute([$text]);
?>