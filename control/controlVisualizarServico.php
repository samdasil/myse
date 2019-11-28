<?php

   include_once '../../model/modelServico.php';

   if((isset($_GET['acao']) && (($_GET['acao'] == 'visualizar') or ($_GET['acao'] == 'editar')) ) && (isset($_GET['id']))){

      $id = $_GET['id'];

      if(buscarUnicoServico($id)){

         $result = buscarUnicoServico($id);

      }else{
        $msg = "<script> alert('[ Erro ]: item não encontrado no banco de dados.'); window.open('../view/sindico/listarServico.php', '_self') </script>";
        return $msg;
      }
   }else{
      $msg = "<script>  alert('[ Erro ]: ocorreu erro ao receber os parâmetros'); window.open('../view/sindico/listarServico.php','_self')</script>";
      return $msg;
   }

?>
