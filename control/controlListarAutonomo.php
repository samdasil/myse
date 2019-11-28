<?php

   include '../../model/modelAutonomo.php';

   if(listarAutonomo()){

      $result = listarAutonomo();

      return $result;

   }else{

      return false;

   }

?>
