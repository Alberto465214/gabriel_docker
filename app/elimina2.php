<?php
require_once'cnn.php';

  if (isset($_POST['matricula'])) {

    $matricula=$_POST['matricula'];

    $sql=$cnnPDO->prepare('DELETE FROM rci WHERE matricula=:matricula');
    $sql->bindParam(':matricula',$matricula);
    $sql->execute(); 

    header("location:alumnos.php");
    
}

 ?>

 <?php   

 if (isset($_POST['id'])) {

     $id=$_POST['id'];

    $sql=$cnnPDO->prepare('DELETE FROM anexos WHERE id=:id');
    $sql->bindParam(':id',$id);
    $sql->execute(); 

    header("location:usuario.php");

 }

  ?>

  <?php


 if (isset($_POST['idmateria'])) {

     $idmateria=$_POST['idmateria'];

    $sql=$cnnPDO->prepare('DELETE FROM materia WHERE idmateria=:idmateria');
    $sql->bindParam(':idmateria',$idmateria);
    $sql->execute(); 

    header("location:materias.php");

 }

  ?>