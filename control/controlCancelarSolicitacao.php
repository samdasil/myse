<?php

   include_once '../model/modelSolicitacao.php';

   if((isset($_GET['acao']) && (($_GET['acao'] == 'cancelar'))) && (isset($_GET['id']))){

      $id = $_GET['id'];

      if(cancelarSolicitacao($id)){

        echo "Sucesso ao excluir";

      }else{
        //header('location:../../index.php');
        echo "Erro ao tentar excluir.";
      }
   }else{
      echo "Erro ao receber parâmetros";
   }

?>
