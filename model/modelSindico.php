<?php

function cadastrarSindico($sindico){

   require_once 'conexao.php';

   $sql = "INSERT INTO tb_sindico VALUES (null,'".$sindico["nome"]."',
                                               '".$sindico["fone"]."',
                                               '".$sindico["email"]."',
                                               '".$sindico["cep"]."',
                                               '".$sindico["rua"]."',
                                               '".$sindico["numero"]."',
                                               '".$sindico["complemento"]."',
                                               '".$sindico["login"]."',
                                               '".$sindico["senha"]."',
                                               2,
                                               '".$sindico["bairro"]."',
                                               '".$sindico["cidade"]."',
                                               '".$sindico["uf"]."'
                                               )";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $contador = "SELECT * FROM tb_sindico WHERE sinnome = '".$sindico['nome']."'
                                               AND sinfone = '".$sindico['fone']."'
                                               AND sinemail = '".$sindico['email']."'
                                               AND sinlogin = '".$sindico['login']."'
                                               AND sinsenha = '".$sindico['senha']."' "
                                               ;

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

function excluirSindico($id){

   require_once 'conexao.php';

   $sql = "DELETE FROM tb_sindico WHERE sinid =  $id";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   // verifica se a atualizaço foi bem-sucedida
   if($result){
      return true;
   }else{
      return false;
   }
}
// fim funcao excluir

function buscarUnicoSindico($id){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_sindico WHERE sinid = $id ";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

  // $result = mysqli_fetch_assoc($sindico);

   $valida = mysqli_num_rows($result);

   //valida busca e retorna o resultado unico ou falso
   if($valida > 0){
      return $result;
   }else{
      return false;
   }
}
// fim da funcao buscar

function buscarSindico($sindico){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_sindico WHERE sinnome LIKE '%".$sindico."%' OR sinemail LIKE '%".$sindico."%' OR sinlogin LIKE '%".$sindico."%'";

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

function listarSindico(){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_sindico ";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >=  0){
      return $result;

   }else{
     
     return false;
   }
}


function atualizarSindico($sindico, $id){

   require_once 'conexao.php';

   $sql = "UPDATE tb_sindico SET sinnome = '".$sindico['nome']."',
                                 sinfone = '".$sindico['fone']."',
                                 sinemail = '".$sindico['email']."',
                                 sincep = '".$sindico['cep']."',
                                 sinrua = '".$sindico['rua']."',
                                 sinnumero = '".$sindico['numero']."',
                                 sincomplemento = '".$sindico['complemento']."',
                                 sinlogin = '".$sindico['login']."',
                                 sinsenha = '".$sindico['senha']."',
                                 sintpuid = '".$sindico['perfil']."',
                                 sinbairro = '".$sindico['bairro']."',
                                 sincidade = '".$sindico['cidade']."',
                                 sinuf = '".$sindico['uf']."'
                                 WHERE sinid = $id";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));
   //echo mysqli_query($con,$sql);
   if(!mysqli_errno($con)){
     if(mysqli_query($con,$sql)){
        return true;
     }
   }else{
     //die();
     return false;
   }
}

?>
