<?php

function cadastrarCategoria($categoria){

   require_once 'conexao.php';

   $sql = "INSERT INTO tb_categoria VALUES (null,'".$categoria["descricao"]."')";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $contador = "SELECT * FROM tb_categoria WHERE catdescricao = '".$categoria['descricao']."' ";

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

function excluirCategoria($id){

   require_once 'conexao.php';

   $sql = "DELETE FROM tb_categoria WHERE catid =  $id";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   // verifica se a atualizaço foi bem-sucedida
   if($result){
      return true;
   }else{
      return false;
   }
}
// fim funcao excluir

function buscarUnicoCategoria($id){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_categoria WHERE catid = $id ";

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

function buscarCategoria($cat){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_categoria WHERE  catdescricao LIKE '%".$cat."%'";

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

function listarCategoria(){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_categoria ";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >=   0){
      return $result;
   }else{
     die();
     return false;
   }
}

function atualizarCategoria($cat, $id){

   require_once 'conexao.php';

   $sql = "UPDATE tb_categoria SET catdescricao = '".$cat["descricao"]."' WHERE catid = $id";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   if(!mysqli_errno($con)){
      return true;
   }else{
     die();
     return false;
   }
}

?>
