<?php

function cadastrarAdmin($admin){

   require_once 'conexao.php';

   $sql = "INSERT INTO tb_administrador VALUES (null,'".$admin["nome"]."', '".$admin["login"]."', '".$admin["senha"]."', 0, 1)";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $contador = "SELECT * FROM tb_administrador WHERE admnome = '".$admin['nome']."' AND admlogin = '".$admin['login']."' AND admsenha = '".$admin['senha']."' ";

   $cont   = mysqli_query($con,$contador) or die(mysqli_error($con));

   $valida = mysqli_num_rows($cont);

   // validar cadastro contando registro identico
   if($valida == 1){
     return true;
   }else{
      return false;
   }
}
//fim funcao cadastrar

function excluirAdmin($id){

   require_once 'conexao.php';

   $sql = "UPDATE tb_administrador SET admstatus = 1 WHERE admid = $id"; // 1 = desativado  0 = ativado

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   // verifica se a atualizaço foi bem-sucedida
   if($result){
      return true;
   }else{
      return false;
   }
}
// fim funcao excluir

function buscarUnicoAdmin($id){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_administrador WHERE admid = $id AND admstatus <> 1"; // 1 = desativado  0 = ativado

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   //valida busca e retorna o resultado unico ou falso
   if($valida > 0){
      return $result;
   }else{
      return false;
   }
}
// fim da funcao buscar

function buscarAdmin($adm){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_administrador WHERE (admnome LIKE '%".$adm."%' OR admlogin LIKE '%".$adm."%') AND admstatus <> 1";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   //valida busca e retorna o resultado ou falso
   if($valida > 0){
      return $result;
   }else{
      return false;
   }
}
// fim da funcao buscar

function listarAdmin(){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_administrador WHERE admstatus <> 1 ;"; // 1 = desativado  0 = ativado

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >=   0){
      return $result;
   }else{
      die();
      return false;
   }
}

function atualizarAdmin($adm, $id){

   require_once 'conexao.php';

   $sql = "UPDATE tb_administrador SET admnome = '".$adm["nome"]."',
                                       admlogin ='".$adm["login"]."',
                                       admsenha ='".$adm["senha"]."',
                                       admstatus ='".$adm["status"]."',
                                       admtpuid ='".$adm["perfil"]."'
                                       WHERE admid = $id";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   if(!mysqli_errno($con)){
      return true;
   }else{
     die();
     return false;
   }
}

?>
