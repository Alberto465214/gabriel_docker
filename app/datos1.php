
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
   <form method="POST">


     <div class="card-body px-lg-2 pt-10"><h1><center><em>Anexos</em></center></h1>
       <div class="card-body px-lg-2 pt-10">
        <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2zqycbfL-wiIi2csxzYm8lDl7ccpzQ0_7Gg&usqp=CAU" width="250">
          <h3 class="text"  style="color: #006648;">Agregue Datos</h3><br></center>

        </div>
      </div>

      <div class="container">
        <!-- Gutter g-1 -->
        <div class="row g-1">
          <div class="col">
            <!-- Name input -->
            <div class="form-outline">
              <label class="form-label" for="form9Example2">N°Carpeta de investigacion</label>
              <input type="text" id="form9Example2" class="form-control"  name="numcarpeta" id="numcarpeta" />

            </div>
          </div>

        </div>

        <hr />

        <!-- Gutter g-5 -->
        <div class="row g-5">
          <div class="col">
            <!-- Name input -->
            <div class="form-outline">
              <label class="form-label" for="form9Example3">NUC</label>
              <input type="text" id="form9Example3" class="form-control" name="nuc" id="nuc" />

            </div>
          </div>
          <div class="col">
            <!-- Email input -->
            <div class="form-outline">
             <label class="form-label" for="form9Example3">Fecha de inicio</label>
             <input  id="form9Example3"class="form-control" type="date" name="fecha" id="fecha" />

           </div>
         </div>
       </div>

       <hr />

       <!-- Gutter g-5 -->
       <div class="row g-5">
        <div class="col">
          <!-- Name input -->
          <div class="form-outline">

            <label class="form-label" for="form9Example4">Detenido</label>
            <select name="detenido" id="detenido" class="form-control">

              <option value="#"  disabled selected></option>
              <option value="Original">Original</option>
              <option value="Copia">Copia</option> 
            </select>
          </div>
        </div>
        <div class="col">
          <!-- Email input -->
          <div class="form-outline">
            <label class="form-label" for="form9Example4">Nombre de indiciado(s)</label>
            <input type="text" id="form9Example3" class="form-control" name="nombre_indiciado" id="nombre_indicado" />
          </div>
        </div>
      </div>

      <hr />

      <!-- Gutter g-5 -->
      <div class="row g-5">
        <div class="col">
          <!-- Name input -->
          <div class="form-outline">
            <label class="form-label" for="form9Example3">Delito</label>
            <input type="text" id="form9Example3" class="form-control" name="delito" id=" delito" />
          </div>
        </div>
        <div class="col">
          <!-- Email input -->
          <div class="form-outline">
            <label class="form-label" for="form9Example4">Nombre de la victima(s)Y/O Ofendido(s)</label>
            <input type="text" id="form9Example3" class="form-control" name="nombre_victima" id=" nombre_victima"  />
          </div>
        </div>
      </div>

      <hr />

      <!-- Gutter g-5 -->
      <div class="row g-5">
        <div class="col">
          <!-- Name input -->
          <div class="form-outline">
            <label class="form-label" for="form9Example3">Denunciante</label>
            <input type="text" class="form-control" name="denunciante" id="denunciante">
          </div>
        </div>
      </div>

      <hr />

      <!-- Gutter g-5 -->
      <div class="row g-5">
        <div class="col">
          <!-- Name input -->
          <div class="form-outline">
            <label class="form-label" for="form9Example3">Orden de aprehencion</label>
            <select name="orden_aprehencion" id="orden_aprehencion " class="form-control">
             <option value="#"  disabled selected></option>
             <option value="Concedida">Concedida</option>
             <option value="Negada">Negada</option> 
           </select>
         </div>
       </div>
       <div class="col">
        <!-- Email input -->
        <div class="form-outline">
          <label class="form-label" for="form9Example4">Audiencia</label>
          <input type="text" id="form9Example3" class="form-control"  name="audiencia" id=" audiencia" />
        </div>
      </div>
    </div>  

    <hr>

    <!-- Gutter g-5 -->
    <div class="row g-5">
      <div class="col">
        <!-- Name input -->
        <div class="form-outline">
          <label class="form-label" for="form9Example3">Vinculacion</label>
          <input type="text" id="form9Example3" class="form-control" name="vinculacion" id="vinculacion" />

        </div>
      </div>
      <div class="col">
        <!-- Email input -->
        <div class="form-outline">
         <label class="form-label" for="form9Example3">novinculacion</label>
         <input  id="form9Example3"class="form-control" type="text" name="novinculacion" id="novinculacion" />

       </div>
     </div>
   </div>

   <hr />

   <!-- Gutter g-5 -->
   <div class="row g-5">
    <div class="col">
      <!-- Name input -->
      <div class="form-outline">
        <label class="form-label" for="form9Example3">inicio</label>
        <input type="date" id="form9Example3" class="form-control" name="inicio" id="inicio" />

      </div>
    </div>
    <div class="col">
      <!-- Email input -->
      <div class="form-outline">
       <label class="form-label" for="form9Example3">conclucion</label>
       <input  id="form9Example3"class="form-control" type="date" name="conclucion" id="conclucion" />

     </div>
   </div>
 </div>

 <hr />



 <!-- Gutter g-5 -->
 <div class="row g-5">
  <div class="col">
    <!-- Name input -->
    <div class="form-outline">
      <label class="form-label" for="form9Example3">Acusacion, acuerdo, reparatorio, sobreseimiento-Y/O SUSPENCION A PRUEBA</label>
      <input type="text" id="form9Example3" class="form-control" name="acusacion" id="acusacion" />
    </div>
  </div>
</div>




<!-- Gutter g-5 -->
<div class="row g-5">
  <div class="col">
    <!-- Name input -->
    <div class="form-outline">
     <label class="form-label" for="form9Example3">audiencia_s</label>
     <input  id="form9Example3"class="form-control" type="text" name="audiencia_s" id="audiencia_s" />
   </div>

 </div>
 <div class="col">
  <!-- Email input -->
  <div class="form-outline">
   <label class="form-label" for="form9Example3">audiencia_i</label>
   <input  id="form9Example3"class="form-control" type="text" name=" audiencia_i" id=" audiencia_i" />

 </div>
</div>
</div>

<hr />

<!-- Gutter g-5 -->
<div class="row g-5">
  <div class="col">
    <!-- Name input -->
    <div class="form-outline">
      <label class="form-label" for="form9Example3">juicio</label>
      <input type="text" id="form9Example3" class="form-control" name="juicio" id="juicio" />

    </div>
  </div>
  <div class="col">
    <!-- Email input -->
    <div class="form-outline">
      <label class="form-label" for="form9Example3"> observaciones</label>
      <input type="text" id="form9Example3" class="form-control" name="observaciones" id="observaciones" />

    </div>

  </div>
</div>

<hr />

<br>
<button type="submit" name="enviar" id="enviar" class="btn btn-outline"> Registrar </button>

</div>
</form>
</div>
</div>

</section>

</body>
</html>


<?php
if (isset($_POST['enviar'])) {

  $numcarpeta=$_POST['numcarpeta'];
  $nuc=$_POST['nuc'];
  $fecha=$_POST['fecha'];
  $detenido=$_POST['detenido'];
  $nombre_indiciado=$_POST['nombre_indiciado'];
  $delito=$_POST['delito'];
  $nombre_victima=$_POST['nombre_victima'];
  $orden_aprehencion=$_POST['orden_aprehencion'];
  $denunciante=$_POST['denunciante'];
  $audiencia=$_POST['audiencia'];
  $vinculacion=$_POST['vinculacion'];
  $novinculacion=$_POST['novinculacion'];
  $inicio=$_POST['inicio'];
  $conclucion=$_POST['conclucion'];
  $acusacion=$_POST['acusacion'];
  $audiencia_i=$_POST['audiencia_i'];
  $juicio=$_POST['juicio'];
  $audiencia_s=$_POST['audiencia_s'];
  $observaciones=$_POST['observaciones'];

  if (!empty($numcarpeta) && !empty($nuc) && !empty($fecha) && !empty($detenido) && !empty($nombre_indiciado) && !empty($delito) && !empty($nombre_victima) && !empty($orden_aprehencion) && !empty($denunciante) && !empty($audiencia)  && !empty($vinculacion) && !empty($novinculacion) && !empty($inicio) && !empty($conclucion) && !empty($acusacion) && !empty($audiencia_i) && !empty($juicio) && !empty($audiencia_s) && !empty($observaciones)) {


    $sql=$cnnPDO->prepare('INSERT INTO rci (numcarpeta,nuc,fecha,detenido,nombre_indiciado,delito,nombre_victima,orden_aprehencion,denunciante,audiencia, vinculacion, novinculacion, inicio,  conclucion,  acusacion, audiencia_i, juicio,  audiencia_s, observaciones ) VALUES (:numcarpeta,:nuc,:fecha,:detenido,:nombre_indiciado,:delito,:nombre_victima,:orden_aprehencion,:denunciante,:audiencia, :vinculacion, :novinculacion, :inicio,  :conclucion,  :acusacion, :audiencia_i, :juicio,  :audiencia_s, :observaciones)');


    $sql->bindParam(':numcarpeta',$numcarpeta);
    $sql->bindParam(':nuc',$nuc);
    $sql->bindParam(':fecha',$fecha);
    $sql->bindParam(':detenido',$detenido);
    $sql->bindParam(':nombre_indiciado',$nombre_indiciado);
    $sql->bindParam(':delito',$delito);
    $sql->bindParam(':nombre_victima',$nombre_victima); 
    $sql->bindParam(':orden_aprehencion',$orden_aprehencion);
    $sql->bindParam(':denunciante',$denunciante);
    $sql->bindParam(':audiencia',$audiencia);
    $sql->bindParam(':vinculacion',$vinculacion);
    $sql->bindParam(':novinculacion',$novinculacion);
    $sql->bindParam(':inicio',$inicio);
    $sql->bindParam(':conclucion',$conclucion); 
    $sql->bindParam(':acusacion',$acusacion);
    $sql->bindParam(':audiencia_i',$audiencia_i);
    $sql->bindParam(':juicio',$juicio);
    $sql->bindParam(':audiencia_s',$audiencia_s);
    $sql->bindParam(':observaciones',$observaciones);


    $sql->execute();
    unset($sql); 
    echo '<script>
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Registro Realizado con Exito",
      showConfirmButton: false,
      timer: 2000
      })
      </script>';
    }
  }
  ?>



  <?php
}
else{
  header("Location:index.php");
  ob_end_flush();
}
?>
