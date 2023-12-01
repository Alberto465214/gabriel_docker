<?php 
   session_start();
   include_once 'cnn.php';
   require_once 'cdn.html';
?>

<!DOCTYPE html>
<html>

 <!-- JQuery Validate library -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

    <!-- Libreria de sweetalert 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

     <!-- Script para mostrar datos en un select en Materialize -->
  <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems);
    });
  </script>



<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <title>SACI | Iniciar Sesion</title>
  <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2zqycbfL-wiIi2csxzYm8lDl7ccpzQ0_7Gg&usqp=CAU">
   
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script >
</head>

<body>
  <form action="" method="post">
  <div class="card bg-ligth text-white">
    <div class="card-body">  
     
     <img
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2zqycbfL-wiIi2csxzYm8lDl7ccpzQ0_7Gg&usqp=CAU"
        height="80"
        alt=""
        loading="lazy"
      />  
    
   <font face="" color="#000000"><strong>Sistema De Archivo De Carpetas De Investigacion(SACI). </strong>
  
<a href="administrador.php"><button type="button" class="btn btn-outline" style="color: white; background-color: danger" > Regresar </button> </a>


    </div> 
</div>

    </div> 
</div>
<center>
<div class="col-6 col-md-7">
 <div class="card">
   <div class="card-body px-lg-5 pt-0"><h1><center><em>Registros</em></center></h1>

      
         <div class="col-lg-7">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2zqycbfL-wiIi2csxzYm8lDl7ccpzQ0_7Gg&usqp=CAU" width="250">
            <h3 class="text"  style="color: #006648;">Agregue Datos</h3><br>

           <div class="md-form mt-6">
               <label for="my-input">Usuario</label>
               <input class="form-control" type="text" name="user" id="user" >
               </div>

          <div class="md-form mt-6">
               <label for="my-input">Contraseña</label>
               <input class="form-control" type="text" name="psw" id="psw" >
               </div>




  <button type="submit" name="enviar" id="enviar" class="btn btn-outline" style="color: white; background-color: danger" > Registrar </button>

      </div>
</div>
</div>
</div>
</center>
</form>

<?php
    if (isset($_POST['enviar'])) {
       
      $user=$_POST['user'];
      $psw=$_POST['psw'];
   
    
      if (!empty($user) &&!empty($psw)) {


        $sql=$cnnPDO->prepare('INSERT INTO users VALUES (:user,:psw)');
        $sql->bindParam(':user',$user);
        $sql->bindParam(':psw',$psw);
    

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

  <center>
<div class="col-sm-11">
              <div class="row">
                <div class="col-md-12 p-2">

             <font face="Century Gothic" color="#22DF08"><table class="  table">

      <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table" style="background-color:#29B68B">
                          <tr style="text-align: center">
                            <th scope="col">USUARIO</th>
                            <th scope="col">CONTRASEÑA</th>
                             <th scope="col">Operaciones</th>
              
                          </tr>
                        
      </thead>

      <tbody>
        <?php
        $sql = "SELECT * FROM users"; 
        $query = $cnnPDO -> prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ); 

        if($query -> rowCount() > 0)   { 
          foreach($results as $result) { 
            echo "<tr>
            <td>".$result -> user."</td>
            <td>".$result -> psw."</td>
            


            <td>
            <form method='POST' action='".$_SERVER['PHP_SELF']."'>
            <input type='hidden'  name='matricula' value='".$result -> user."'>
            <center><button name='editar' class='btn btn-#22DF08'>Editar</button></center>
            </td>
            <td>
            </form>
            <form method='POST' action='elimina2.php'><input type='hidden' name='matricula' value='".$result -> user."'> 
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
</section>



<!-- SCRIPTS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>



</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
    let emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

    $("#enviar").click(function() {

      if ($("#user").val() == "") {

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 5000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'error',
                //  Aqui pones el mensaje donde diga tittle
                title: 'El usuario esta incompleto, por favor llena el campo'
            })
        return false;


      } else if ($("#psw").val() == "") {

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 5000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'error',
          title: 'La contraseña esta incompleta, llena este campo'
        })
        return false;

       



        }

    });


  });

</script>    



<?php ob_end_flush(); ?>