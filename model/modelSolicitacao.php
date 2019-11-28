<?php

function cadastrarSolicitacao($solicitacao){

   require_once 'conexao.php';
   $dataBR = $solicitacao['data'];
   $dataEN = date("Y-m-d",strtotime(str_replace('/','-',$dataBR)));
   $sql = "INSERT INTO tb_solicitacao  VALUES (null,'$dataEN',
                                                   '".$solicitacao["hora"]."',
                                                   '".$solicitacao["valor"]."',
                                                   '".$solicitacao["obs"]."',
                                                   '".$solicitacao["datafinal"]."',
                                                   '".$solicitacao["horafinal"]."',
                                                   '".$solicitacao["status"]."',
                                                   '".$solicitacao["nota"]."',
                                                   '".$solicitacao["cliente"]."',
                                                   '".$solicitacao["servico"]."',
                                                   null
                                                   )";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $contador = "SELECT * FROM tb_solicitacao WHERE soldata = '".$solicitacao['data']."'
                                               AND solvalor = '".$solicitacao['valor']."'
                                               AND solobs = '".$solicitacao['obs']."'
                                               AND solstatus = '".$solicitacao['status']."' ";

   $cont   = mysqli_query($con,$contador) or die(mysqli_error($con));

   $valida = mysqli_num_rows($cont);

   // validar cadastro contando registro identico
   if($result){
     return true;
   }else{
      return false;
   }
}

//fim funcao cadastrar

function cancelarSolicitacao($id){

   require_once 'conexao.php';

   $sql = "UPDATE tb_solicitacao SET solstatus = 'Cancelada' WHERE solid =  $id";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   // verifica se a atualizaço foi bem-sucedida
   if($result){
      return true;
   }else{
      return false;
   }
}
// fim funcao excluir

function buscarUnicoSolicitacao($id){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_solicitacao
                         INNER JOIN tb_cliente ON solcliid = cliid
                         INNER JOIN tb_servico ON solserid = serid
                         INNER JOIN tb_autonomo ON solautid = autid
                         WHERE solid = $id ";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

  // $result = mysqli_fetch_assoc($sindico);

   $valida = mysqli_num_rows($result);

   //valida busca e retorna o resultado unico ou falso
   if($valida == 1){
      return $result;
   }else{
      return false;
   }
}
// fim da funcao buscar

function buscarNovas($solicitacao, $cliente){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_solicitacao
           INNER JOIN tb_cliente ON solcliid = cliid
           INNER JOIN tb_servico ON solserid = serid
           INNER JOIN tb_autonomo ON solautid = autid
           WHERE solcliid = $cliente";

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

function buscarNovasSolicitacoes($solicitacao){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_solicitacao
           INNER JOIN tb_cliente ON solcliid = cliid
           INNER JOIN tb_servico ON solserid = serid
           INNER JOIN tb_autonomo ON solautid = autid
           WHERE solstatus = 'Aguardando autônomo' AND (soldata LIKE '%".$solicitacao."%' OR serdescricao OR '%".$solicitacao."%' OR solstatus LIKE '%".$solicitacao."%' )";

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


function listarSolicitacoesBusca($solicitacao,$cliente){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_solicitacao
           INNER JOIN tb_cliente ON solcliid = cliid
           INNER JOIN tb_servico ON solserid = serid

           WHERE solcliid = $cliente AND (solstatus = 'Pendente' OR solstatus = 'Aguardando Autônomo') AND (soldata LIKE '%".$solicitacao."%' OR serdescricao OR '%".$solicitacao."%' OR solstatus LIKE '%".$solicitacao."%' )";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >  0){
      return $result;

   }else{

     return false;
   }
}

function listarNovasSolicitacoesBusca($solicitacao){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_solicitacao
           INNER JOIN tb_cliente ON solcliid = cliid
           INNER JOIN tb_servico ON solserid = serid

           WHERE solstatus = 'Aguardando autônomo' AND (soldata LIKE '%".$solicitacao."%' OR serdescricao LIKE '%".$solicitacao."%' OR solstatus LIKE '%".$solicitacao."%' )";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >  0){
      return $result;

   }else{

     return false;
   }
}

function listarHistorico($cliente){

   require 'conexao.php';

   $sql = "SELECT * FROM tb_solicitacao
           INNER JOIN tb_cliente ON solcliid = cliid
           INNER JOIN tb_servico ON solserid = serid
           INNER JOIN tb_autonomo ON solautid = autid
           WHERE solcliid = $cliente AND (solstatus = 'Cancelado' OR solstatus = 'Finalizado')";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >  0){
      return $result;
   }else{
     return false;
   }
}


function listarSolicitacoes($cliente){
   require 'conexao.php';

   $sql = "SELECT * FROM tb_solicitacao
           INNER JOIN tb_cliente ON solcliid = cliid
           INNER JOIN tb_servico ON solserid = serid

           WHERE solcliid = $cliente AND (solstatus = 'Pendente' OR solstatus = 'Aguardando Autônomo')";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >=  0){
      return $result;

   }else{
     return false;
   }
}

function listarNovasSolicitacoes(){
   require 'conexao.php';

   $sql = "SELECT * FROM tb_solicitacao
           INNER JOIN tb_cliente ON solcliid = cliid
           INNER JOIN tb_servico ON solserid = serid

           WHERE solstatus = 'Aguardando Autônomo'";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >=  0){
      return $result;

   }else{
     return false;
   }
}

function listarMeusAtendimentos($aut){
   require 'conexao.php';

   $sql = "SELECT * FROM tb_solicitacao
           INNER JOIN tb_cliente ON solcliid = cliid
           INNER JOIN tb_servico ON solserid = serid
           INNER JOIN tb_autonomo ON solautid = autid
           WHERE solautid = $aut AND solstatus = 'Pendente'";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >=  0){
      return $result;

   }else{
     return false;
   }
}

function listarMeusAtendimentosHistorico($aut){
   require 'conexao.php';

   $sql = "SELECT * FROM tb_solicitacao
           INNER JOIN tb_cliente ON solcliid = cliid
           INNER JOIN tb_servico ON solserid = serid
           INNER JOIN tb_autonomo ON solautid = autid
           WHERE solautid = $aut AND solstatus = 'Finalizado'";

   $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

   $valida = mysqli_num_rows($result);

   if($valida >=  0){
      return $result;

   }else{
     return false;
   }
}

function visualizarSolicitacaoCliente($cli,$sol){

  require 'conexao.php';

  $sql = "SELECT * FROM tb_solicitacao
          INNER JOIN tb_cliente ON solcliid = cliid
          INNER JOIN tb_servico ON solserid = serid
          INNER JOIN tb_categoria ON sercatid = catid
          WHERE solcliid = $cli AND solid = $sol";

  $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

  $valida = mysqli_num_rows($result);

  if($valida >  0){
     return $result;

  }else{

    return false;
  }
}

function visualizarSolicitacao($sol){

  require 'conexao.php';

  $sql = "SELECT * FROM tb_solicitacao
          INNER JOIN tb_cliente ON solcliid = cliid
          INNER JOIN tb_servico ON solserid = serid
          INNER JOIN tb_categoria ON sercatid = catid
          WHERE solid = $sol";

  $result  = mysqli_query($con,$sql) or die(mysqli_error($con));

  $valida = mysqli_num_rows($result);

  if($valida >  0){
     return $result;

  }else{

    return false;
  }
}

function atualizarSolicitacao($solicitacao, $id){

   require_once 'conexao.php';

   $sql = "UPDATE tb_solicitacao SET soldata = '".$solicitacao['data']."',
                                     solhora = '".$solicitacao['hora']."',
                                     solvalor = '".$solicitacao['valor']."',
                                     solobs = '".$solicitacao['obs']."',
                                     soldatafinal = '".$solicitacao['datafinal']."',
                                     solhorafinal = '".$solicitacao['horafinal']."',
                                     solstatus = '".$solicitacao['status']."',
                                     solnota = '".$solicitacao['nota']."',
                                     solcliid = '".$solicitacao['cliente']."',
                                     solserid = '".$solicitacao['serviço']."',
                                     solautid = '".$solicitacao['autonomo']."',
                                     WHERE solid = $id";

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

function confirmarAtendimento($sol,$aut){

   require_once 'conexao.php';

   $sql = "UPDATE tb_solicitacao SET solstatus = 'Pendente',
                                     solautid  = $aut
                                     WHERE solid = $sol";

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

function finalizarAtendimento($sol){

   require_once 'conexao.php';
   date_default_timezone_set('America/Manaus');
   $datafinal = date("Y-m-d");
   $horafinal = date("H:i");
   $sql = "UPDATE tb_solicitacao SET soldatafinal = '$horafinal',
                                     solhorafinal = '$horafinal',
                                     solstatus = 'Finalizado'
                                     WHERE solid = $sol";

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
