<?php

   include_once '../../model/modelCondominio.php';

   if((isset($_GET['acao']) && (($_GET['acao'] == 'visualizar') or ($_GET['acao'] == 'editar')) ) && (isset($_GET['id']))){

      $id = $_GET['id'];

      //var_dump($estado);

      //$res = salvar($estado);

      if(buscarUnicoCondominio($id)){

         $result = buscarUnicoCondominio($id);

      }else{
        $msg = "<script> alert('[ Erro ]: item não encontrado no banco de dados.'); window.open('../view/admin/listarCondominio.php', '_self') </script>";
        return $msg;
      }
   }else{
      $msg = "<script>  alert('[ Erro ]: ocorreu erro ao receber os parâmetros'); window.open('../view/admin/listarCondominio.php','_self')</script>";
      return $msg;
   }

?>
