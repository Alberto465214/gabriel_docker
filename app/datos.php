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
	<title></title>

  
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


	 <div class="card bg-ligth text-white">
    <div class="card-body">  

     <img
     src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2zqycbfL-wiIi2csxzYm8lDl7ccpzQ0_7Gg&usqp=CAU"
     height="80"
     alt=""
     loading="lazy"
     />  

     <font face="" color="#000000"><strong>Sistema De Archivo De Carpetas De Investigacion(SACI). </strong> </font>
      <a href="usuario.php"><button type="button" class="btn btn-outline"> Inicio </button> </a> 
      <a href="cerrar.php"><button type="button" class="btn btn-outline"> cerrar sesion </button> </a> 

    </div> 
  </div>
  <br>

<div class="container text-white">
   <a href="datos.php"><button type="button" class="btn btn-outline"> Agregar datos </button> </a> 
</div>
  <br>

     <div class="card-body px-lg-2 pt-10">
      <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2zqycbfL-wiIi2csxzYm8lDl7ccpzQ0_7Gg&usqp=CAU" width="250">
        <h3 class="text"  style="color: #006648;">Agregue Datos</h3><br></center>

      </div>
    </div>

  <form method="POST">

    <div class="container">
      <!-- Gutter g-1 -->
      <div class="row g-1">
        <div class="col">
          <!-- Name input -->
          <div class="form-outline">

            <label class="form-label" for="form9Example1">Municipio</label>
            <select name="municipio" id="municipio" class="form-control" >

             <option value="#"  disabled selected></option>
             <option value="Abasolo">Abasolo</option>
             <option value="Acuña">Acuña</option> 
             <option value="Allende">Allende</option> 
             <option value="Arteaga">Arteaga</option>
             <option value="Castaños">Castaños</option>
             <option value="Candela">Candela</option>
             <option value="Cuatro Ciénegas">Cuatro Ciénegas</option>
             <option value="escobedo">Escobedo</option>
             <option value="Francisco I. Madero">Francisco I. Madero</option>
             <option value="Frontera">Frontera</option>
             <option value="General Cepeda">General Cepeda</option>
             <option value="Guerrero">Guerrero</option>
             <option value="Hidalgo">Hidalgo</option>
             <option value="Jiménez">Jiménez</option>
             <option value="Juárez">Juárez</option>
             <option value="Lamadrid">Lamadrid</option>
             <option value="Matamoros">Matamoros</option>
             <option value="Monclova">Monclova</option>
             <option value="Morelos">Morelos</option>
             <option value="Muzquiz">Múzquiz</option>
             <option value="Nadadores">Nadadores</option>
             <option value="Nava">Nava</option>
             <option value="Ocampo">Ocampo</option>
             <option value="Parras">Parras</option>
             <option value="Piedras Negras">Piedras Negras</option>
             <option value="Progreso">Progreso</option>
             <option value="Ramos Arizpe">Ramos Arizpe</option>
             <option value="Sabinas">Sabinas</option>
             <option value="Sacramento">Sacramento</option>
             <option value="Saltillo">Saltillo</option>
             <option value="San Buenaventura">San Buenaventura</option>
             <option value="San Juan de Sabinas">San Juan de Sabinas</option>
             <option value="San Pedro">San Pedro</option>
             <option value="Sierra Mojada">Sierra Mojada</option>
             <option value="Torreon">Torreón</option>
             <option value="Viesca">Viesca</option>
             <option value="Villa Union">Villa Unión</option>
             <option value="Zaragoza">Zaragoza</option>
           </select>

         </div>
       </div>
       <div class="col">
        <!-- Email input -->
        <div class="form-outline">
          <label class="form-label" for="form9Example2">Cajas</label>
          <input type="text" id="form9Example2" class="form-control" name="cajas" />

        </div>
      </div>
    </div>

    <hr />

    <!-- Gutter g-5 -->
    <div class="row g-5">
      <div class="col">
        <!-- Name input -->
        <div class="form-outline">
          <label class="form-label" for="form9Example3">Carpetas</label>
          <input type="text" id="form9Example3" class="form-control" name="carpetas" />

        </div>
      </div>
      <div class="col">
        <!-- Email input -->
        <div class="form-outline">
          <label class="form-label" for="form9Example4">Tipo de documento</label>
          <select name="documento" id="documento" class="form-control">

            <option value="#"  disabled selected></option>
            <option value="Original">Original</option>
            <option value="Copia">Copia</option> 
          </select>
        </div>
      </div>
    </div>

    <hr />

    <!-- Gutter g-5 -->
    <div class="row g-5">
      <div class="col">
        <!-- Name input -->
        <div class="form-outline">
          <label class="form-label" for="form9Example3">Anaquel</label>
          <input type="text" id="form9Example3" class="form-control" name="anaquel" />

        </div>
      </div>
      <div class="col">
        <!-- Email input -->
        <div class="form-outline">
          <label class="form-label" for="form9Example4">Entrepaño</label>
          <input type="text" id="form9Example3" class="form-control" name="entrepano" />
        </div>
      </div>
    </div>

    <hr />

    <!-- Gutter g-5 -->
    <div class="row g-5">
      <div class="col">
        <!-- Name input -->
        <div class="form-outline">
          <label class="form-label" for="form9Example3">Año</label>
          <input type="text" id="form9Example3" class="form-control" name="anio" />

        </div>
      </div>
      <div class="col">
        <!-- Email input -->
        <div class="form-outline">
          <label class="form-label" for="form9Example4">Observaciones</label>
          <input type="text" id="form9Example3" class="form-control" name="observaciones" />
        </div>
      </div>
    </div>


    <button type="submit" name="enviar" id="enviar" class="btn btn-outline"> Registrar </button>
  </form>


  <?php

  if (isset($_POST['enviar'])) {

    $municipio=$_POST['municipio'];
    $cajas=$_POST['cajas'];
    $carpetas=$_POST['carpetas'];
    $documento=$_POST['documento'];
    $anaquel=$_POST['anaquel'];
    $entrepano=$_POST['entrepano'];
    $anio=$_POST['anio'];
    $observaciones=$_POST['observaciones'];
    
    if (!empty($municipio) &&!empty($cajas) && !empty($carpetas) && !empty($documento) && !empty($anaquel) && !empty($entrepano) && !empty($anio) && !empty($observaciones)) {

      $sql=$cnnPDO->prepare('INSERT INTO anexos (municipio, cajas, carpetas, documento, anaquel, entrepano, anio, observaciones) VALUES (:municipio,:cajas,:carpetas,:documento,:anaquel,:entrepano,:anio,:observaciones)');
      $sql->bindParam(':municipio',$municipio);
      $sql->bindParam(':cajas',$cajas);
      $sql->bindParam(':carpetas',$carpetas);
      $sql->bindParam(':documento',$documento);
      $sql->bindParam(':anaquel',$anaquel);
      $sql->bindParam(':entrepano',$entrepano);
      $sql->bindParam(':anio',$anio);
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
</div>

</body>
</html>

<?php
}
else{
header("Location:index.php");
ob_end_flush();
}
  ?>
