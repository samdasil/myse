<?php

function cadastrarServico($servico){

   require_once 'conexao.php';

   $sql = "INSERT INTO tb_servico VALUES (null,'".$servico["descricao"]."', '".$servico["categoria"]."')";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $contador = "SELECT * FROM tb_servico WHERE serdescricao = '".$servico['descricao']."' ";

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

function excluirServico($id){

   require_once 'conexao.php';

   $sql = "DELETE FROM tb_servico WHERE serid =  $id";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   // verifica se a atualizaço foi bem-sucedida
   if($result){
      return true;
   }else{
      return false;
   }
}
// fim funcao excluir

function buscarUnicoServico($id){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_servico
           INNER JOIN tb_categoria ON catid = sercatid
           WHERE serid = $id ";

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

function buscarServico($ser){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_servico INNER JOIN tb_categoria ON catid = sercatid WHERE  serdescricao LIKE '%".$ser."%'";

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

function listarServicoDropdown($ser){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_servico INNER JOIN tb_categoria ON catid = sercatid WHERE  sercatid = $ser ";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   //valida busca e retorna o resultado ou falso
   if($valida > 0){
     while($linhas_result = mysqli_fetch_assoc($result)){
        $sub_servicos[] = array(
                          'serid' => $linhas_result['serid'],
                          'serdescricao'   => $linhas_result['serdescricao'],
                          'sercatid'   => $linhas_result['sercatid']
                          );
     }
     //echo (json_encode($sub_servicos));
      return Json_encode($sub_servicos);
   }else{
      return false;
   }
}

function listarServico(){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_servico
           INNER JOIN tb_categoria ON catid = sercatid
           ";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >=   0){
      return $result;
   }else{
     die();
     return false;
   }
}

function atualizarServico($ser, $id){

   require_once 'conexao.php';

   $sql = "UPDATE tb_servico SET serdescricao = '".$ser["descricao"]."', sercatid = '".$ser["categoria"]."' WHERE serid = $id ";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   if(!mysqli_errno($con)){
      return true;
   }else{
     die();
     return false;
   }
}

?>
