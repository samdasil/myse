<?php

   include '../../model/modelSolicitacao.php';

   if(listarMeusAtendimentosHistorico($id)){

      $resultado = listarMeusAtendimentosHistorico($id);

      return $resultado;

   }else{

      return false;

   }

?>
