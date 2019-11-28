<?php

   include '../../model/modelServico.php';


   if(listarServico()){

      $listServico = listarServico();

      return $listServico;

   }else{

      return false;

   }

?>
