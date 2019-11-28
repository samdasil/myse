<?php

   include '../model/modelServico.php';

   if(isset($_POST)){
      if((isset($_GET['acao']) && ($_GET['acao'] == 'editar')) && (isset($_GET['id']))){

         $id = $_GET['id'];

         $servico = ["id"=>$_POST['id'],
                     "descricao"=>$_POST['descricao'],
                     "categoria"=>$_POST['categoria']
                    ];

         if(atualizarServico($servico, $id)){
           echo "Sucesso";
         }else{
           echo "Erro ao atualizar dados.";
         }
      }else{
         echo "Falha ao receber parâmetros.";
      }
   }else{
      echo "Erro no envio dos dados.";
   }
?>
