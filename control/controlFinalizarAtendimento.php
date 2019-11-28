<?php

   include '../model/modelSolicitacao.php';


      if((isset($_GET['acao']) && ($_GET['acao'] == 'finalizar')) && (isset($_GET['sol']))){

         $sol = $_GET['sol'];


         if(finalizarAtendimento($sol)){

           echo "Atendimento Finalizado.";
            //echo "<script>  alert('Estado atualizado com Sucesso!'); window.open('../views/estado/index.php','_self')</script>";
           //header('location:../views/index.php');

         }else{

           echo "Falha";
           //header('location:../../index.php');
           //echo "<script>   alert('[ Erro ]: não foi possível atualizar dados. Verifique e tente novamente.'); window.open('vw_editar_estado.php', '_self') </script>";
         }
      }else{
         echo "Erro";
         //echo "<script>  alert('[ Erro ]: erro ao passar parâmetros'); window.open('vw_editar_estado.php','_self')</script>";
      }

?>
