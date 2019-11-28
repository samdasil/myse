<?php

/*function cadastrar($admin){

   require_once 'conexao.php';

   $sql = "INSERT INTO tb_administrador VALUES (null,'".$admin["admnome"]."', '".$admin["admlogin"]."', '".$admin["admsenha"]."', 0, 1)";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $contador = "SELECT * FROM tb_administrador WHERE admnome = '".$admin['admnome']."' AND admlogin = '".$admin['admlogin']."' AND admsenha = '".$admin['admsenha']."' ";

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

function excluir($id){

   require_once 'conexao.php';

   $sql = "UPDATE tb_administrador SET admstatus = 1 WHERE admid = $id"; // 1 = desativado  0 = ativado

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   // verifica se a atualizaço foi bem-sucedida
   if($result){
      return true;
   }else{
      return false;
   }
}*/
// fim funcao excluir

function buscarUnico($id){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_uf WHERE ufid = $id ";

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

function buscar($uf){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_uf WHERE ufnome LIKE '%".$uf."%' OR ufsigla LIKE '%".$uf."%'";

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

function listar(){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_uf";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >=  0){
      return $result;
   }else{
     die();
     return false;
   }
}

function verificaExistencia($id){

      require 'conexao.php';

      $sql = "SELECT tb_uf FROM tb_uf WHERE ufid = $id";

      $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

      $valida = mysqli_num_rows($result);

      if($valida >=   0){
        return $result;
      }else{
        die();
        return false;
      }
}

function atualizar($uf, $id){

   require_once 'conexao.php';

   $sql = "UPDATE tb_uf SET ufnome = '".$uf["nome"]."',
                            ufsigla ='".$uf["sigla"]."'";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   if(!mysqli_errno($con)){
      return true;
   }else{
     die();
     return false;
   }
}

?>
