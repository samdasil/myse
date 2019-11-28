<?php

   include_once '../../model/modelSindico.php';

   if(listarSindico()){

      $listSindico = listarSindico();

      return $listSindico;

   }else{

      return false;

   }

?>
