<?php

function cadastrarCondominio($condominio){

   require_once 'conexao.php';

   $sql = "INSERT INTO tb_condominio VALUES ('".$condominio["id"]."',
                                             '".$condominio["nome"]."',
                                             '".$condominio["cep"]."',
                                             '".$condominio["rua"]."',
                                             '".$condominio["numero"]."',
                                             '".$condominio["sindico"]."',
                                             '".$condominio["subsindico"]."',
                                             '".$condominio["bairro"]."',
                                             '".$condominio["cidade"]."',
                                             '".$condominio["uf"]."'
                                             )";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $contador = "SELECT * FROM tb_condominio WHERE connome = '".$condominio['nome']."' AND concep = '".$condominio['cep']."' AND conrua = '".$condominio['rua']."' AND connumero = '".$condominio['numero']."' AND conrua = '".$condominio['rua']."' ";

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

function excluirCondominio($id){

   require_once 'conexao.php';

   $sql = "DELETE FROM tb_condominio WHERE conid = $id";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   // verifica se a atualizaço foi bem-sucedida
   if($result){
      return true;
   }else{
      return false;
   }
}
// fim funcao excluir

function buscarUnicoCondominio($id){

   require 'conexao.php';

   $sql = "SELECT con.*,sin1.sinnome as sindico, sin2.sinnome as subsindico FROM tb_condominio con
           INNER JOIN tb_sindico sin1 ON con.consinid = sin1.sinid
           INNER JOIN tb_sindico sin2 ON con.consubsindico = sin2.sinid
           WHERE con.conid = $id";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   //valida busca e retorna o resultado unico ou falso
   if($valida == 1){
      return $result;
   }else{
      return false;
   }
}
// fim da funcao buscar

function buscarCondominio($cond){

   require 'conexao.php';

   $sql = "SELECT con.*,sin1.sinnome as sindico, sin2.sinnome as subsindico FROM tb_condominio con
           INNER JOIN tb_sindico sin1 ON con.consinid = sin1.sinid
           INNER JOIN tb_sindico sin2 ON con.consubsindico = sin2.sinid
           WHERE connome LIKE '%".$cond."%' OR concep LIKE '%".$cond."%' OR conrua LIKE '%".$cond."%' OR sin1.sinnome LIKE '%".$cond."%' ";

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

function listarCondominio(){

   require 'conexao.php';

   $sql = "SELECT con.*,sin1.sinnome as sindico, sin2.sinnome as subsindico FROM tb_condominio con
           INNER JOIN tb_sindico sin1 ON con.consinid = sin1.sinid
           INNER JOIN tb_sindico sin2 ON con.consubsindico = sin2.sinid";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >=   0){
      return $result;
   }else{

     return false;
     die();
   }
}

function atualizarCondominio($cond, $id){

   require_once 'conexao.php';

   $sql = "UPDATE tb_condominio SET connome = '".$cond["nome"]."',
                                       concep ='".$cond["cep"]."',
                                       conrua ='".$cond["rua"]."',
                                       connumero ='".$cond["numero"]."',
                                       consinid ='".$cond["sindico"]."',
                                       consubsindico ='".$cond["subsindico"]."',
                                       conbairro ='".$cond["bairro"]."',
                                       concidade ='".$cond["cidade"]."',
                                       conuf ='".$cond["uf"]."'
                                       WHERE conid = $id";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   if(!mysqli_errno($con)){
      return true;
   }else{
     die();
     return false;
   }
}

?>
