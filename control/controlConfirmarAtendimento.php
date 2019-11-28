<?php

   include '../model/modelSolicitacao.php';


      if((isset($_GET['acao']) && ($_GET['acao'] == 'confirmar')) && (isset($_GET['sol'])) && (isset($_GET['aut']))){

         $sol = $_GET['sol'];
         $aut = $_GET['aut'];
         
         if(confirmarAtendimento($sol, $aut)){

           echo "Atendimento Confirmado.";
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
