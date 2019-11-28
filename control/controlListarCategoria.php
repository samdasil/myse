<?php

   include '../../model/modelCategoria.php';

   if(listarCategoria()){

      $listCategoria = listarCategoria();

      return $listCategoria;

   }else{

      return false;

   }

?>
