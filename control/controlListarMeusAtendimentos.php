<?php

   include '../../model/modelSolicitacao.php';

   if(listarMeusAtendimentos($id)){

      $resultado = listarMeusAtendimentos($id);

      return $resultado;

   }else{

      return false;

   }

?>
