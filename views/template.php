<?php
function showTemplate(){
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical</title>
</head>
<body>
<header>
    Logotipo
</header>
<?php
include "nav";
?>
<section>
<?php
$ctrl = new controller();
$ctrl -> enlacespaginas();
?>
</section>
</body>
</html>
<?php } ?>