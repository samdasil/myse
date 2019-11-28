<?php

   include_once '../../model/modelAutonomo.php';

   if(isset($_GET['id'])){

      $id = $_GET['id'];

      if(buscarUnicoAutonomo($id)){

         $resultado = buscarUnicoAutonomo($id);

      }else{
        $msg = "<script> alert('[ Erro ]: item não encontrado no banco de dados.'); window.open('../view/autonomo/visualizarAutonomo.php?id=$id', '_self') </script>";
        return $msg;
      }
   }else{
      $msg = "<script>  alert('[ Erro ]: ocorreu erro ao receber os parâmetros'); window.open('../view/autonomo/home.php?id=$id','_self')</script>";
      return $msg;
   }

?>
