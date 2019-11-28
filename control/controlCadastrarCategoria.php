<?php

   include '../model/modelCategoria.php';

   if(isset($_POST)){

      $categoria = ["id"=>$_POST['id'],
                    "descricao"=>$_POST['descricao']
                   ];

      if(cadastrarCategoria($categoria)){
         echo "Sucesso";
      }else{
         echo "Erro ao salvar.";
      }

   }else{
      echo "Erro no envio dos dados.";
   }

?>
