<?php

   include '../model/modelAdmin.php';

   if(isset($_POST)){
      if((isset($_GET['acao']) && ($_GET['acao'] == 'editar')) && (isset($_GET['id']))){

         $id = $_GET['id'];

         $adm = ["id"=>$_POST['id'],
                 "nome"=>$_POST['nome'],
                 "login"=>$_POST['login'],
                 "senha"=>$_POST['senha'],
                 "status"=>$_POST['status'],
                 "perfil"=>$_POST['perfil']
                ];

         //var_dump($adm); //debug

         //$res = salvar($estado);

         if(atualizarAdmin($adm, $id)){

           echo "Sucesso";
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
   }else{
      echo "Erro Fatal";
      //echo "<script>  alert('[ Erro ]: Não existem dados a serem atualizados, ou ocorreu erro ao passar parâmetros'); window.open('vw_editar_estado.php','_self')</script>";
   }
?>
