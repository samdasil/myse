<?php

function cadastrarAutonomo($autonomo){

   require_once 'conexao.php';

   $sql = "INSERT INTO tb_autonomo VALUES (null,'".$autonomo["nome"]."',
                                                '".$autonomo["fone"]."',
                                                '".$autonomo["email"]."',
                                                '".$autonomo["cep"]."',
                                                '".$autonomo["rua"]."',
                                                '".$autonomo["numero"]."',
                                                '".$autonomo["complemento"]."',
                                                '".$autonomo["login"]."',
                                                '".$autonomo["senha"]."',
                                                4,
                                                '".$autonomo["bairro"]."',
                                                '".$autonomo["cidade"]."',
                                                '".$autonomo["uf"]."'
                                                )";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $contador = "SELECT * FROM tb_autonomo WHERE autnome = '".$autonomo['nome']."'
                                               AND autfone = '".$autonomo['fone']."'
                                               AND autemail = '".$autonomo['email']."'
                                               AND autlogin = '".$autonomo['login']."'
                                               AND autsenha = '".$autonomo['senha']."' "
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

function excluirAutonomo($id){

   require_once 'conexao.php';

   $sql = "DELETE FROM tb_autonomo WHERE autid =  $id";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   // verifica se a atualizaço foi bem-sucedida
   if($result){
      return true;
   }else{
      return false;
   }
}
// fim funcao excluir

function buscarUnicoAutonomo($id){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_autonomo
           INNER JOIN tb_tipousuario ON auttpuid = tpuid
           WHERE autid = $id ";

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

function buscarAutonomo($autonomo){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_autonomo
           INNER JOIN tb_tipousuario ON auttpuid = tpuid
           WHERE autnome LIKE '%".$autonomo."%' OR autemail LIKE '%".$autonomo."%' OR autlogin LIKE '%".$autonomo."%'";

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

function listarAutonomo(){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_autonomo
           INNER JOIN tb_tipousuario ON auttpuid = tpuid";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >=  0){
      return $result;
      die();
   }else{
     die();
     return false;
   }
}

function atualizarAutonomo($autonomo, $id){

   require_once 'conexao.php';

   $sql = "UPDATE tb_autonomo SET autnome = '".$autonomo['nome']."',
                                 autfone = '".$autonomo['fone']."',
                                 autemail = '".$autonomo['email']."',
                                 autcep = '".$autonomo['cep']."',
                                 autrua = '".$autonomo['rua']."',
                                 autnumero = '".$autonomo['numero']."',
                                 autcomplemento = '".$autonomo['complemento']."',
                                 autlogin = '".$autonomo['login']."',
                                 autsenha = '".$autonomo['senha']."',
                                 auttpuid = '".$autonomo['perfil']."',
                                 autbairro = '".$autonomo['bairro']."',
                                 autcidade = '".$autonomo['cidade']."',
                                 autuf = '".$autonomo['uf']."'
                                 WHERE autid = $id";

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
