<?php

   include '../../model/modelSolicitacao.php';

   if(listarSolicitacoes($id)){

      $resultado = listarSolicitacoes($id);

      return $resultado;

   }else{

      return false;

   }

?>
