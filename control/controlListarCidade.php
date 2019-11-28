<?php

   include '../../model/modelCidade.php';

   if(listar()){

      $result = listar();

      return $result;

   }else{

      return false;

   }

?>
