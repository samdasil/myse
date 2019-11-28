<?php

   include_once '../model/modelAdmin.php';

   if((isset($_GET['acao']) && (($_GET['acao'] == 'deletar'))) && (isset($_GET['id']))){

      $id = $_GET['id'];

      if(excluirAdmin($id)){

        echo "Sucesso ao excluir";

      }else{
        //header('location:../../index.php');
        echo "Erro ao deletar dados. Verifique e tente novamente.";
      }
   }else{
      echo "[ Erro ]: não existem dados a serem deletados, ou ocorreu erro ao passar parâmetros";
   }

?>
