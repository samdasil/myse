<?php

   include '../model/modelSolicitacao.php';

   if(isset($_POST)){

      $solicitacao = ["id"=>$_POST['id'],
                     "data"=>$_POST['data'],
                     "hora"=>$_POST['hora'],
                     "valor"=>$_POST['valor'],
                     "obs"=>$_POST['obs'],
                     "datafinal"=>$_POST['datafinal'],
                     "horafinal"=>$_POST['horafinal'],
                     "status"=>$_POST['status'],
                     "nota"=>$_POST['nota'],
                     "cliente"=>$_POST['cliente'],
                     "servico"=>$_POST['servico']

                     ];

                     //var_dump($solicitacao);

      if(!cadastrarSolicitacao($solicitacao)){

        //echo "<script>  alert('Estado salvo com Sucesso!'); window.open('../views/estado/index.php','_self')</script>";

         echo "Erro ao salvar.";

      }else{

        //echo "<script>   alert('Erro ao salvar dados. Verifique e tente novamente.'); window.open('../views/estado/vw_cadastrar_estado.php', '_self') </script>";
        echo "Sucesso"; 

      }
   }else{
      echo "Erro no envio dos dados.";
   }

?>
