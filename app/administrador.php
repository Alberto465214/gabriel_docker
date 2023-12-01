
<?php  
ob_start();
session_start();
if(($_SESSION['user'])!=''){

  ?>
  

  <?php 
  require_once 'cnn.php';
  require_once 'cdn.html';
  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SACI | Iniciar Sesion</title>

    <style type="text/css">

      hr{
       position: relative; 
       top: 20px; 
       border: none; 
       height: 1px; 
       background: black; 
       margin-bottom: 50px; 
     }


   </style>
 </head>
 <body>

  <section>
    <div class="card bg-ligth text-white">
      <div class="card-body">  

       <img
       src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2zqycbfL-wiIi2csxzYm8lDl7ccpzQ0_7Gg&usqp=CAU"
       height="80"
       alt=""
       loading="lazy"
       />  

       <font face="" color="#000000"><strong>Sistema De Archivo De Carpetas De Investigacion(SACI).</strong> </font>
       <a href="administrador.php"><button type="button" class="btn btn-outline"> Inicio </button> </a> 
       <a href="cerrar.php"><button type="button" class="btn btn-outline"> cerrar sesion </button> </a> 

     </div> 
   </div>
   <br>

    <div class="container text-white">
     <a href="datos1.php"><button type="button" class="btn btn-outline"> Agregar datos </button> </a> 
   </div>

<section>

  <br>
  <div class="center">
    <?php

    $sql = "SELECT * FROM rci";
    $stmt = $cnnPDO->prepare($sql);
    $stmt->execute();
    echo "<table class='table' style='border-color: black';>";
    echo "<tr><td scope='col' style='font-size: 20px'><b style='color: black';>N°</td>
    <td scope='col' style='font-size: 20px'><b style='color: black';>N°CARPETA DE INVESTIGACION</td> 
    <td scope='col' style='font-size: 20px'><b style='color: black';>NUC</td>
    <td scope='col' style='font-size: 20px'><b style='color: black';>FECHA DE INICIO</td>
    <td scope='col' style='font-size: 20px'><b style='color: black';>DETENIDO</td>
    <td scope='col' style='font-size: 20px'><b style='color: black';>NOMBRE DEL INDICIADO(S)</td>
    <td scope='col' style='font-size: 20px'><b style='color: black';>DELITO</td>
    <td scope='col' style='font-size: 20px'><b style='color: black';>NOMBRE DE LA VICTIMA(S) Y/O OFENDIDO(S)</td>
    <td scope='col' style='font-size: 20px'><b style='color: black';>DENUNCIANTE</td>
    <td scope='col' style='font-size: 20px'><b style='color: black';>ORDEN DE APREHENSION</td>
    <td scope='col' style='font-size: 20px'><b style='color: black';>AUDIENCIA INICIAL</td>
    </tr></center> ";

    while ($campo = $stmt->fetch(PDO::FETCH_ASSOC)) {

     echo "<br><br>";
     echo '<tr>';
     echo '<td>' . $campo['num'] . '</td>';
     echo '<td>' . $campo['numcarpeta'] . '</td>';
     echo '<td>' . $campo['nuc'] . '</td>';
     echo '<td>' . $campo['fecha'] . '</td>';
     echo '<td>' . $campo['detenido'] . '</td>';
     echo '<td>' . $campo['nombre_indiciado'] . '</td>';
     echo '<td>' . $campo['delito'] . '</td>';
     echo '<td>' . $campo['nombre_victima'] . '</td>';
     echo '<td>' . $campo['denunciante'] . '</td>';  
     echo '<td>' . $campo['orden_aprehencion'] . '</td>';  
     echo '<td>' . $campo['audiencia'] . '</td>';  

     echo '</tr>';
   }

   ?>

 </div>

</section>

</body>
</html>


<?php
}
else{
  header("Location:index.php");
  ob_end_flush();
}
?>
