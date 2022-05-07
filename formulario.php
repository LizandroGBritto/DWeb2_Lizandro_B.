<?php
$errores=[];
$error=0;
if ($_POST)
{
  if ($_POST['nombre']=="")
  {
    $error++;
    array_push($errores,"El nombre no debe estar vacio");
  }
  if ($_POST['apellido']=="")
  {
    $error++;
    array_push($errores,"El apellido no debe estar vacio");
  }
  $nfecha=date_parse($_POST['fecha']);
  if ($nfecha['error_count'] )
   {
     $error++;
     array_push($errores,"la fecha debe ser valida ");
   }
   if ($error>0) {
  print_r($errores);
} else
{
  echo '<p style="color:white;"> "la solicitud fue procesada"</p>';
}

} else {
echo '<p style="color:white;">"la solicitud no puede ser procesada"</p>';
}
    session_start();
    $_SESSION['personas']=[];
    $proceso=[];
    if (!$_POST){
        $_POST['nombre']= '';
        $_POST['apellido']= '';
        $_POST['fecha']= '';
    }

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $fecha=$_POST['fecha'];
   if (!empty($_POST['array'])){
       $datos= explode(",",$_POST['array']);
   }else{
       $datos=array();
   }

    array_push($datos, $nombre);
    array_push($datos, $apellido);
    array_push($datos, $fecha);
    $_SESSION['personas']= $datos;

    function tabla(){
        echo "<table> <tr>
        <th style='color:white;''>Nombre </th>
        <th style='color:white;'>Apellido </th>
        <th style='color:white;'>Fecha de Nacimiento</th>
        </tr>";

            for ($i=0; $i<count($_SESSION['personas']);$i=$i+3){
                echo "<tr>";
                echo "<th style='color:white;'>".$_SESSION['personas'][$i]."</th>";
                echo "<th style='color:white;'>".$_SESSION['personas'][$i+1]."</th>";
                echo "<th style='color:white;'>".$_SESSION['personas'][$i+2]."</th>";
                echo "</tr>";
            }
        echo "</table>";
    }
    function borrar(){
        session_destroy();
    }

?>
