<?php

   include '../../model/modelAdmin.php';
   //include '../models/connection/connection.php';

   //print_r($_POST['estnome']);

   if((isset($_GET['acao']) && (($_GET['acao'] == 'visualizar') or ($_GET['acao'] == 'editar')) ) && (isset($_GET['id']))){

      $admin = $_GET['id'];

      //var_dump($estado);

      //$res = salvar($estado);

      if(buscarUnicoAdmin($admin)){

         $result = buscarUnicoAdmin($admin);

      }else{
        //header('location:../../index.php');
        $msg = "<script> alert('[ Erro ]: item não encontrado no banco de dados.'); window.open('../view/admin/listarAdmin.php', '_self') </script>";
        return $msg;
      }
   }else{
      $msg = "<script>  alert('[ Erro ]: ocorreu erro ao receber os parâmetros'); window.open('../view/admin/listarAdmin.php','_self')</script>";
      return $msg;
   }

?>
