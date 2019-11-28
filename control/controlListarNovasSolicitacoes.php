<?php

   include '../../model/modelSolicitacao.php';

   if(listarNovasSolicitacoes($id)){

      $resultado = listarNovasSolicitacoes($id);

      return $resultado;

   }else{

      return false;

   }

?>
