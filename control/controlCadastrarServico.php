<?php

   include '../model/modelServico.php';

   if(isset($_POST)){

      $servico = ["id"=>$_POST['id'],
                    "descricao"=>$_POST['descricao'],
                    "categoria"=>$_POST['categoria']
                   ];

      if(cadastrarServico($servico)){
         echo "Sucesso";
      }else{
         echo "Erro ao salvar.";
      }

   }else{
      echo "Erro no envio dos dados.";
   }

?>
