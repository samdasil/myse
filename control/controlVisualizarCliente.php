<?php

   include_once '../../model/modelCliente.php';

   if(isset($_GET['id'])){

      $id = $_GET['id'];

      if(buscarUnicoCliente($id)){

         $result = buscarUnicoCliente($id);

      }else{
        $msg = "<script> alert('[ Erro ]: item não encontrado no banco de dados.'); window.open('../view/cliente/home.php?id=$id', '_self') </script>";
        return $msg;
      }
   }else{
      $msg = "<script>  alert('[ Erro ]: ocorreu erro ao receber os parâmetros'); window.open('../view/cliente/home.php?id=$id','_self')</script>";
      return $msg;
   }

?>
