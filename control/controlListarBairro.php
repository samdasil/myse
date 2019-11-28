<?php

   include '../../model/modelBairro.php';

   if(listar()){

      $result = listar();

      return $result;

   }else{

      return false;

   }

?>
