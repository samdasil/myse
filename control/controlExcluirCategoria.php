<?php

   include_once '../model/modelCategoria.php';

   if((isset($_GET['acao']) && (($_GET['acao'] == 'deletar'))) && (isset($_GET['id']))){

      $id = $_GET['id'];

      if(excluirCategoria($id)){

        echo "Sucesso ao excluir";

      }else{
        //header('location:../../index.php');
        echo "Erro ao tentar excluir.";
      }
   }else{
      echo "Erro ao receber parâmetros";
   }

?>
