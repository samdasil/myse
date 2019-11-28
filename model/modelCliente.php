<?php

function cadastrarCliente($cliente){

   require_once 'conexao.php';

   $sql = "INSERT INTO tb_cliente VALUES (null,'".$cliente["nome"]."',
                                                '".$cliente["fone"]."',
                                                '".$cliente["email"]."',
                                                '".$cliente["cep"]."',
                                                '".$cliente["rua"]."',
                                                '".$cliente["numero"]."',
                                                '".$cliente["complemento"]."',
                                                '".$cliente["login"]."',
                                                '".$cliente["senha"]."',
                                                3,
                                                '".$cliente["condominio"]."',
                                                '".$cliente["bairro"]."',
                                                '".$cliente["cidade"]."',
                                                '".$cliente["uf"]."'
                                                )";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $contador = "SELECT * FROM tb_cliente WHERE clinome = '".$cliente['nome']."'
                                               AND clifone = '".$cliente['fone']."'
                                               AND cliemail = '".$cliente['email']."'
                                               AND clilogin = '".$cliente['login']."'
                                               AND clisenha = '".$cliente['senha']."' "
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

function excluirCliente($id){

   require_once 'conexao.php';

   $sql = "DELETE FROM tb_cliente WHERE cliid =  $id";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   // verifica se a atualizaço foi bem-sucedida
   if($result){
      return true;
   }else{
      return false;
   }
}
// fim funcao excluir

function buscarUnicoCliente($id){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_cliente
           INNER JOIN tb_tipousuario ON clitpuid = tpuid
           INNER JOIN tb_condominio ON cliconid = conid
           WHERE cliid = $id ";

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

function buscarCliente($cliente){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_cliente
           INNER JOIN tb_tipousuario ON clitpuid = tpuid
           INNER JOIN tb_condominio ON cliconid = conid
           WHERE clinome LIKE '%".$cliente."%' OR cliemail LIKE '%".$cliente."%' OR clilogin LIKE '%".$cliente."%'";

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

function listarCliente(){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_cliente
           INNER JOIN tb_tipousuario ON clitpuid = tpuid
           INNER JOIN tb_condominio ON cliconid = conid";

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

function atualizarCliente($cliente, $id){

   require_once 'conexao.php';

   $sql = "UPDATE tb_cliente SET clinome = '".$cliente['nome']."',
                                 clifone = '".$cliente['fone']."',
                                 cliemail = '".$cliente['email']."',
                                 clicep = '".$cliente['cep']."',
                                 clirua = '".$cliente['rua']."',
                                 clinumero = '".$cliente['numero']."',
                                 clicomplemento = '".$cliente['complemento']."',
                                 clilogin = '".$cliente['login']."',
                                 clisenha = '".$cliente['senha']."',
                                 clitpuid = '".$cliente['perfil']."',
                                 cliconid = '".$cliente['condominio']."',
                                 clibairro = '".$cliente['bairro']."',
                                 clicidade = '".$cliente['cidade']."',
                                 cliuf = '".$cliente['uf']."'
                                 WHERE cliid = $id";

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
