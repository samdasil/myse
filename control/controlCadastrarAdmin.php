<?php

   include '../model/modelAdmin.php';

   if(isset($_POST)){

      $admin = ["id"=>$_POST['id'],
                "nome"=>$_POST['nome'],
                "login"=>$_POST['login'],
                "senha"=>md5($_POST['senha'])
                ];

      if(cadastrarAdmin($admin)){

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
