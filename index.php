<?php
if(!isset($_SESSION['personas'])){
    $_SESSION['personas']=[];
}
require ("formulario.php");
?>

<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Formulario PHP</title>
    </head>
    <body style="background-color:#172b4d;">
        <h1 style="color:white;">Formulario PHP</h1>
        <form action="index.php" method="post">
          <div class="tabla" style="background-color:#21427a; margin:50px; border-radius:7px;">


  <div class="mb-3">
    <label for= class="form-label" style="color:white;">Nombre</label>
    <input type="text" class="form-control"  name="nombre">
    <div  class="form-text"></div>
  </div>
  <div class="mb-3">
    <label class="form-label"style="color:white;" >Apellido</label>
    <input type="text" class="form-control" name='apellido' >
  </div>
  <div class="mb-3">
    <label class="form-label" style="color:white;">Fecha de Nacimiento</label>
    <input type="date" class="form-control"  name = 'fecha'>
  </div>
 <input type="hidden" name="array" value="<?php echo implode(",",  $_SESSION['personas']) ?>">
  <button type="submit" class="btn btn-primary" style="color:white;">Enviar</button>
  <?php
  tabla();
  ?>
</form>
</div>

        <?php
        echo "<a class='btn btn-primary' style='margin-left:75px;'' href='index.php?p='1'>Cerrar sesion</a>";
        $_GET['p']=0;
        if ($_GET["p"]==1){
            borrar();
        }
        ?>
    </body>
</html>
