<?php

   include '../model/modelAutonomo.php';

   if(isset($_POST)){

      $autonomo = ["id"=>$_POST['id'],
                  "nome"=>$_POST['nome'],
                  "fone"=>$_POST['fone'],
                  "email"=>$_POST['email'],
                  "cep"=>$_POST['cep'],
                  "rua"=>$_POST['rua'],
                  "numero"=>$_POST['numero'],
                  "complemento"=>$_POST['complemento'],
                  "login"=>$_POST['login'],
                  "senha"=>$_POST['senha'],
                  "perfil"=>$_POST['perfil'],// 4 autonomo
                  "bairro"=>$_POST['bairro'],
                  "cidade"=>$_POST['cidade'],
                  "uf"=>$_POST['uf']
                  ];

      if(cadastrarAutonomo($autonomo)){

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
