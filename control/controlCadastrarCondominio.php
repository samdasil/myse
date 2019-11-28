<?php

   include '../model/modelCondominio.php';

   if(isset($_POST)){

      $condominio = ["id"=>$_POST['id'],
                     "nome"=>$_POST['nome'],
                     "cep"=>$_POST['cep'],
                     "rua"=>$_POST['rua'],
                     "numero"=>$_POST['numero'],
                     "sindico"=>$_POST['sindico'],
                     "subsindico"=>$_POST['subsindico'],
                     "bairro"=>$_POST['bairro'],
                     "cidade"=>$_POST['cidade'],
                     "uf"=>$_POST['uf']
                     ];

      if(cadastrarCondominio($condominio)){

        //echo "<script>  alert('Estado salvo com Sucesso!'); window.open('../views/estado/index.php','_self')</script>";
         echo "Sucesso";

      }else{

        //echo "<script>   alert('Erro ao salvar dados. Verifique e tente novamente.'); window.open('../views/estado/vw_cadastrar_estado.php', '_self') </script>";
         echo "Erro ao salvar.";

      }
   }else{
      echo "Erro no envio dos dados.";
   }

?>
