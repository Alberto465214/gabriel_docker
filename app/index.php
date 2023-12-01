<?php
include 'cdn.html'; 
require_once 'cnn.php';


if (isset($_POST['enviar'])) {
    $user=$_POST['user'];
    $psw=$_POST['psw'];

    if (!empty($user) && !empty($psw)) {

        $sql=$cnnPDO->prepare('SELECT * FROM users WHERE user=:user AND psw=:psw');
        $sql->bindParam(':user',$user);
        $sql->bindParam(':psw', $psw);
        $sql->execute();

        $count=$sql->rowCount();

        if($count != 0) { 

            $campo = $sql->fetch();

            if($campo['user']=="FEHC" AND $campo['psw']==$psw) {

                $_SESSION['user'] = $campo['user'];
                $_SESSION['psw']=$campo['psw'];

                header("location:administrador.php");

            }else{

                $_SESSION["user"] = $campo['user'];
                $_SESSION["psw"] = $campo['psw'];



                header("location:usuario.php");

            }
        }else{


            echo '¡Usuario o contraseña incorrectos!';

        }
    }
}
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


   <title>SACI | Iniciar Sesion</title>
   <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2zqycbfL-wiIi2csxzYm8lDl7ccpzQ0_7Gg&usqp=CAU">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script >
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
     <font face="" color="#000000"><strong>Sistema De Archivo De Carpetas De Investigacion(SACI). </strong>
     </div> 
 </div>

 <!-- contact form -->
 <div class="center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-12 mb-lg-0">

                <div class="form-title">
                   <center><h1><em>Ingresa tus datos</em></center></h1>                       
               </div>


               <div id="form_status"></div>
               <form method="POST">

                 <div class="card">
                     <div class="card-body">              
                         <div class="md-form mt-6">
                             <label for="my-input">Usuario</label>
                             <input class="form-control" type="text" name="user" id="name" >
                         </div>


                         <div class="md-form mt-6">
                            <label for="my-input">Contraseña</label>
                            <input class="form-control" type="password" name="psw" id="psw" ><br>
                        </div>
                        <button type="submit" name="enviar" id="enviar" class="btn btn-outline" style="color: white; background-color: danger" > Iniciar sesion </button>

                    </div>
                </div>

            </div>
        </div>
    </div>
</form>



<!-- end contact form -->

</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
    let emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

    $("#enviar").click(function() {

      if ($("#name").val() == "") {

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
