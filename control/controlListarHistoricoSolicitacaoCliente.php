<?php

   include '../../model/modelSolicitacao.php';

   if(listarHistorico($id)){

      $resultado = listarHistorico($id);

      return $resultado;

   }else{

      return false;

   }

?>
