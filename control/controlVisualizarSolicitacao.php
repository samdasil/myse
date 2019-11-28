<?php

   include_once '../../model/modelSolicitacao.php';

   if((isset($_GET['acao']) && (($_GET['acao'] == 'visualizar') or ($_GET['acao'] == 'editar')) ) && (isset($_GET['sol'])) && (isset($_GET['id'])) ){

      $sol = $_GET['sol'];

      if(visualizarSolicitacao($sol)){

         $itemSolicitacao = visualizarSolicitacao($sol);

      }else{
        $msg = "<script> alert('[ Erro ]: item não encontrado no banco de dados.'); window.open('../view/cliente/listarSolicitacao.php?id='".$cli."', '_self') </script>";
        return $msg;
      }
   }else{
      $msg = "<script>  alert('[ Erro ]: ocorreu erro ao receber os parâmetros'); window.open('../view/cliente/listarSolicitacao.php?id='".$_GET['id']."''_self')</script>";
      return $msg;
   }

?>
