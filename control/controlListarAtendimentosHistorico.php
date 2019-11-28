<?php

   include '../../model/modelSolicitacao.php';

   if(listarAtendimentosHistorico($id)){

      $resultado = listarAtendimentosHistorico($id);

      return $resultado;

   }else{

      return false;

   }

?>
