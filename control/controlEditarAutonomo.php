<?php

   include '../model/modelAutonomo.php';

   if(isset($_POST)){
      if((isset($_GET['acao']) && ($_GET['acao'] == 'editar')) && (isset($_GET['id']))){

         $id = $_GET['id'];

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
                     "perfil"=>$_POST['perfil'],
                     "bairro"=>$_POST['bairro'],
                     "cidade"=>$_POST['cidade'],
                     "uf"=>$_POST['uf']
                     ];

         if(atualizarAutonomo($autonomo, $id)){

           echo "Sucesso";
            //echo "<script>  alert('Estado atualizado com Sucesso!'); window.open('../views/estado/index.php','_self')</script>";
           //header('location:../views/index.php');

         }else{

           echo "Erro ao atualizar dados.";
           //header('location:../../index.php');
           //echo "<script>   alert('[ Erro ]: não foi possível atualizar dados. Verifique e tente novamente.'); window.open('vw_editar_estado.php', '_self') </script>";
         }
      }else{
         echo "Falha ao receber parâmetros.";
         //echo "<script>  alert('[ Erro ]: erro ao passar parâmetros'); window.open('vw_editar_estado.php','_self')</script>";
      }
   }else{
      echo "Erro no envio dos dados.";
   }
?>
