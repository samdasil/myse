<?php

function realizarLogin($login, $senha){

  require 'conexao.php';

  $sql1 = "SELECT * FROM tb_administrador WHERE admlogin = '".$login."' AND admsenha = '".$senha."'";
  $sql2 = "SELECT * FROM tb_sindico WHERE sinlogin = '".$login."' AND sinsenha = '".$senha."'";
  $sql3 = "SELECT * FROM tb_cliente WHERE clilogin = '".$login."' AND clisenha = '".$senha."'";
  $sql4 = "SELECT * FROM tb_autonomo WHERE autlogin = '".$login."' AND autsenha = '".$senha."'";

  //$id = realizarLogin($login,$senha); // recebe o retorno da funcao de verificacao de existencia do login
  $result1  = mysqli_query($con,$sql1) or die(mysqli_error($con));
  $result2  = mysqli_query($con,$sql2) or die(mysqli_error($con));
  $result3  = mysqli_query($con,$sql3) or die(mysqli_error($con));
  $result4  = mysqli_query($con,$sql4) or die(mysqli_error($con));

  /*  debug  */
  //echo mysqli_num_rows($result1);echo "1br<br>";

  if(mysqli_num_rows($result1) == 1){
      $usuario = mysqli_fetch_assoc($result1);
      $status = 0;
      $view = ["../view/admin/painel.php",$status,$usuario];
      return $view;
  }else if(mysqli_num_rows($result2) == 1){
    $usuario = mysqli_fetch_assoc($result2);
    $status = 0;
    $view = ["../view/sindico/painel.php",$status,$usuario];
    return $view;
  }else if(mysqli_num_rows($result3) == 1){
    $usuario = mysqli_fetch_assoc($result3);
    $status = 0;
    $view = ["../view/cliente/home.php?id=".$usuario['cliid'],$status,$usuario];
    return $view;
  }else if(mysqli_num_rows($result4) == 1){
    $usuario = mysqli_fetch_assoc($result4);
    $status = 0;
    $view = ["../view/autonomo/home.php?id=".$usuario['autid'],$status,$usuario['autid']];
    return $view;
  }else{
    $status = 1;
    $view = ["../index.php",$status];
    return $view;
  }

}


?>
