<?php

   include '../../model/modelUf.php';

   if(listar()){

      $result = listar();

      return $result;

   }else{

      return false;

   }

?>
