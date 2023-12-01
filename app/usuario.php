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

       <font face="" color="#000000"><strong>Sistema De Archivo De Carpetas De Investigacion(SACI).</strong> </font>
       <a href="usuario.php"><button type="button" class="btn btn-outline"> Inicio </button> </a> 
       <a href="cerrar.php"><button type="button" class="btn btn-outline"> cerrar sesion </button> </a> 

     </div> 
   </div>
   <br>
   <div class="container text-white">
     <a href="datos.php"><button type="button" class="btn btn-outline"> Agregar datos </button> </a> 
   </div>

   <div class="card-body px-lg-2 pt-10"><h1><center><em>Anexos</em></center></h1></div>
   


   <div class="container">
    <?php

    if(isset($_POST['actualizar'])){
///////////// Informacion enviada por el formulario /////////////

      $id=$_POST['id'];
      $municipio=$_POST['municipio'];
      $cajas=$_POST['cajas'];
      $carpetas=$_POST['carpetas'];
      $documento=$_POST['documento'];
      $anaquel=$_POST['anaquel'];
      $entrepano=$_POST['entrepano'];
      $anio=$_POST['anio'];
      $observaciones=$_POST['observaciones'];

///////// Fin informacion enviada por el formulario /// 

////////////// Actualizar la tabla /////////
      $consulta = "UPDATE anexos
      SET `municipio`= :municipio, `cajas` = :cajas, `carpetas` = :carpetas, 
      `documento`= :documento, `anaquel` = :anaquel, `entrepano` = :entrepano ,
      `anio`= :anio, `observaciones` = :observaciones,`id` = :id
      WHERE `id` = :id";
      $sql = $cnnPDO->prepare($consulta);


      $sql->bindParam(':id',$id,PDO::PARAM_STR, 25);
      $sql->bindParam(':municipio',$municipio,PDO::PARAM_STR, 25);
      $sql->bindParam(':cajas',$cajas,PDO::PARAM_STR, 25);
      $sql->bindParam(':carpetas',$carpetas,PDO::PARAM_STR,25);
      $sql->bindParam(':documento',$documento,PDO::PARAM_STR, 25);
      $sql->bindParam(':anaquel',$anaquel,PDO::PARAM_STR, 25);
      $sql->bindParam(':entrepano',$entrepano,PDO::PARAM_STR,25);
      $sql->bindParam(':anio',$anio,PDO::PARAM_STR, 25);
      $sql->bindParam(':observaciones',$observaciones,PDO::PARAM_STR,25);


      $sql->execute();

      if($sql->rowCount() > 0)
      {
        $count = $sql -> rowCount();
        echo "<div class='content alert alert-primary' > 


        Gracias: $count registro ha sido actualizado  </div>";
      }
      else{
        echo "<div class='content alert alert-danger'> No se pudo actulizar el registro  </div>";

        print_r($sql->errorInfo()); 
      }
}// Cierra envio de guardado
?>
<h3 class="mt-5"></h3>
<hr>
<div class="row">

  <?php 
  if (isset($_POST['editar'])){
    $id = $_POST['id'];
    $sql= "SELECT * FROM anexos WHERE id = :id"; 
    $stmt = $cnnPDO->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->execute();
    $obj = $stmt->fetchObject();

    ?>

    <div class="col-12 col-md-12"> 

      <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <input value="<?php echo $obj->id;?>" name="id" type="hidden">
        <div class="form-row">
          <div class="form-group col-md-12">
            <div class="container">
              <!-- Gutter g-1 -->
              <div class="row g-1">
                <div class="col">
                  <!-- Name input -->
                  <div class="form-outline">

                    <label class="form-label" for="form9Example1">Municipio</label>
                    <select  name="municipio" id="municipio" class="form-control" >

                     <option value="<?php echo $obj->municipio;?>"><?php echo $obj->municipio;?></option>
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
                  <input value="<?php echo $obj->cajas;?>" type="text" id="form9Example2" class="form-control" name="cajas" />

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
                  <input value="<?php echo $obj->carpetas;?>"  type="text" id="form9Example3" class="form-control" name="carpetas" />

                </div>
              </div>
              <div class="col">
                <!-- Email input -->
                <div class="form-outline">
                  <label class="form-label" for="form9Example4">Tipo de documento</label>
                  <select  name="documento" id="documento" class="form-control">

                    <option value="<?php echo $obj->documento;?>"><?php echo $obj->documento;?></option>
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
                  <input value="<?php echo $obj->anaquel;?>" type="text" id="form9Example3" class="form-control" name="anaquel" />

                </div>
              </div>
              <div class="col">
                <!-- Email input -->
                <div class="form-outline">
                  <label class="form-label" for="form9Example4">Entrepaño</label>
                  <input value="<?php echo $obj->entrepano;?>" type="text" id="form9Example3" class="form-control" name="entrepano" />
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
                  <input value="<?php echo $obj->anio;?>" type="text" id="form9Example3" class="form-control" name="anio" />

                </div>
              </div>
              <div class="col">
                <!-- Email input -->
                <div class="form-outline">
                  <label class="form-label" for="form9Example4">Observaciones</label>
                  <input value="<?php echo $obj->observaciones;?>" type="text" id="form9Example3" class="form-control" name="observaciones" />
                </div>
              </div>
            </div>
          </div>
          <br>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <div class="container">
            <div class="row g-5">
              <div class="col-lg-3">
                <div class="form-group">
                  <center><button name="actualizar" type="submit" class="btn btn-primary  btn-block">Actualizar Registro</button></center>
                </div>
              </div>

              <div class="col-3">
                <div class="form-outline">
                  <button name="" type="submit" class="btn btn-primary  btn-block">regresar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div> 
<?php }?>


<center>
  <div class="col-sm-12">
    <div class="row">
      <div class="col-md-12">

       <font face="Century Gothic" color="#22DF08"><table class="  table">

        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead class="table" style="background-color:#29B68B">
              <tr style="text-align: center">
                
                <th scope="col">MUNCIPIO</th>
                <th scope="col">CAJAS</th>
                <th scope="col">CARPETAS</th>
                <th scope="col">DOCUMENTO</th>
                <th scope="col">ANAQUEL</th>
                <th scope="col">ENTREPAÑO</th>
                <th scope="col">AÑO</th>
                <th scope="col">OBSERVACIONES</th>
                <th scope="col"></th>
                <th scope="col"></th>                               
              </tr>

            </thead>

            <tbody>
             
              <?php
              $sql = "SELECT * FROM anexos"; 
              $query = $cnnPDO -> prepare($sql); 
              $query -> execute(); 
              $results = $query -> fetchAll(PDO::FETCH_OBJ); 

              if($query -> rowCount() > 0)   { 
                foreach($results as $result) { 
                  echo "<tr>

                  <input type='hidden' name='' value=".$result -> id.">
                  <td>".$result -> municipio."</td>
                  <td>".$result -> cajas."</td>
                  <td>".$result -> carpetas."</td>
                  <td>".$result -> documento."</td>
                  <td>".$result -> anaquel."</td>
                  <td>".$result -> entrepano."</td>
                  <td>".$result -> anio."</td>
                  <td>".$result -> observaciones."</td>

                  <td>
                  <form method='POST' action='".$_SERVER['PHP_SELF']."'>
                  <input type='hidden'  name='id' value='".$result -> id."'>
                  <center><button name='editar' class='btn btn-primary'>Editar</button></center>
                  </td>
                  <td>
                  </form>
                  <form method='POST' action='elimina2.php'><input type='hidden' name='id' value='".$result -> id."'> 
                  <center><button name='eliminar' id='eliminar' value='Eliminar' class='btn btn-danger' onclick='return ConfirmDelete()'>Eliminar</button></center></form>
                  </td>


                  </tr>";

                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </center>
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





<?php

      //$sql = "SELECT * FROM anexos";
      //$stmt = $cnnPDO->prepare($sql);
      //$stmt->execute();
      ////echo "<table class='table' style='border-color: black';>";
      //echo "<tr><td scope='col' style='font-size: 20px'><b style='color: black';>Municipio</td>
      //<td scope='col' style='font-size: 20px'><b style='color: black';>Cajas</td> 
      //<td scope='col' style='font-size: 20px'><b style='color: black';>Carpetas</td> 
      //<td scope='col' style='font-size: 20px'><b style='color: black';>Documento</td>
      //<td scope='col' style='font-size: 20px'><b style='color: black';>Anaquel</td>
      //<td scope='col' style='font-size: 20px'><b style='color: black';>Entrepaño</td>
      //<td scope='col' style='font-size: 20px'><b style='color: black';>Año</td>
      //<td scope='col' style='font-size: 20px'><b style='color: black';>Observaciones</td>
      //</tr></center> ";

      //while ($campo = $stmt->fetch(PDO::FETCH_ASSOC)) {

       //echo "<br><br>";
       //echo '<tr>';
       //echo '<td>' . $campo['municipio'] . '</td>';
       //echo '<td>' . $campo['cajas'] . '</td>';
       //echo '<td>' . $campo['carpetas'] . '</td>';
       //echo '<td>' . $campo['documento'] . '</td>';
       //echo '<td>' . $campo['anaquel'] . '</td>';
       //echo '<td>' . $campo['entrepano'] . '</td>';
       //echo '<td>' . $campo['anio'] . '</td>';
       //echo '<td>' . $campo['observaciones'] . '</td>';   
      // echo '</tr>';
     //}

?>
