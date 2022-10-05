<!DOCTYPE html>
    <html lang="en">
    <head>
        <base href="{MODIF_URL}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consultorio</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <header>
    </header>
    <nav class="navbar-expand-sm   navbar-light bg-light nav-pills nav-fill">

        <div class="shadow-lg p-3 mb-5 bg-body rounded">
          <ul class="nav">
            <li class="mr-auto">
              <a class="nav-link " href="administracion">Volver</a>
            </li>
          </ul>
        </div>
      </nav>
  
<section>
<div>
  <h1 class="revealUp2">Modificar paciente</h1>
</div>
<div>
<div class="revealUp modifpx contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
    <form action="actualizar" method="POST">
    <label for="basic-url" class="form-label">Datos del paciente:</label>
   
    <div class="mb-3 ">
        <input type="hidden" id="disabledTextInput" name="id" value="{$paciente[0]->ID}" class="form-control" placeholder="{$paciente[0]->ID}">
    </div>
        
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Paciente</span>
      <input type="text" class="form-control" name="name" placeholder="Nombre y Apellido" value="{$paciente[0]->nombre}" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3">
    <span class="input-group-text">Edad</span>
      <input type="number" class="form-control" name="edad" placeholder="Edad" aria-label="Recipient's username" value="{$paciente[0]->edad}" aria-describedby="basic-addon2">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">DNI</span>
      <input type="number" class="form-control" name="dni" value="{$paciente[0]->dni}"  placeholder="D.N.I." id="basic-url" aria-describedby="basic-addon3">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text">Obra social</span>
      <div>
      <select name="obrasocial" class="form-control" aria-label="Recipient's username">
    
      {foreach from=$osocial item=$obras} 
            {if $paciente[0]->ID_obrasocial==$obras->ID}
                <option value="{$obras->ID}" selected>{$obras->nombre}</option>
            {else}
                <option value="{$obras->ID}">{$obras->nombre}</option>
            {/if}
            
      {/foreach}
      </select>
      </div>
      
    </div>
    
    <div class="input-group">
      <span class="input-group-text">Motivo de consulta</span>
      <input class="form-control" name="motivo" value="{$paciente[0]->motivo}" placeholder="Ingrese motivo de consulta" aria-label="With textarea"></input>

    </div>
        <button type="submit" class="botonagregar btn btn-success">Actualizar paciente</button>
    </form>
</div>
<div class="ml-5 abs-center">
<a href='borrar/{$paciente[0]->ID}' type='button' class='btn btn-danger shadow-lg p-3 mb-5 bg-body rounded'>Borrar paciente</a>
</div>

 </section>
 <script src="js/main.js"></script>
 </body>
 </html>