<?php

    $id = $_GET['id'];

    include "../../control/controlVisualizarPerfilCliente.php";
    $cliente = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>MySE | Home</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
      <meta charset="UTF-8"/>
      <meta name="description" content="Sistema de Gerenciamento de Solicitaçao de Serviços"/>
      <meta name="keywords"    content="interface, home, fametro, serviços, autonomo, condominio"/>
      <meta name="robots"      content="nofollow, index"/>
      <meta name="viewport"    content="width=device-width initial-scale=1.0"/>

      <link rel="icon"       type="image/png" href="../../assets/img/icone-login-mySE 136x155.png"/>
      <!-- Iconografia -->
      <link rel="stylesheet" type="text/css" href="../../assets/addons/font-awesome-4.7.0/css/font-awesome.css"/>
      <!-- Bootstrap -->
      <link rel="stylesheet" type="text/css" href="../../assets/addons/bootstrap/css/bootstrap.min.css">
      <!-- FolhaEstilos -->
      <link rel="stylesheet" type="text/css" href="../../assets/css/app.css"/>


      <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="../../assets/js/js.js"></script>
      <script type="text/javascript" src="../../assets/addons/bootstrap/js/bootstrap.min.js"></script>
   </head>
   <body onload="remove()">
      <div id="principal">
         <div id="navegacao" >MySE - Cliente</div>
         <!-- NAV SUPERIOR -->
         <div class="conteudoTotal">
            <!-- MENU LATERAL  -->
            <!--<div class="sidebar">
               <div class="tituloMenu">
                  MENU
               </div>
               <ul class="nav">
                  <li>
                     <a class="ativo" href="painel.php">Home</a>
                  </li>
                  <li>
                     <a href="listarAdmin.php">Administrador</a>
                  </li>
                  <li>
                     <a href="listarCondominio.php">Condominio</a>
                  </li>
                  <li>
                     <a href="listarSindico.php">Sindico</a>
                  </li>
                  <li>
                     <a href="listarCategoria.php">Categoria</a>
                  </li>
                  <li>
                     <a href="logout.php">Sair</a>
                  </li>
               </ul>
            </div>-->
            <!-- CONTEÚDO -->
            <div class="conteudo aberto">
                <!--<a class="botaoMenu"></a>-->
                 <span class="caminhoURL">
                 <i class="fa fa-home"></i> &nbsp home</span>
               <div class="painel">
                  <div class="painel_titulo">
                     <h4><i class="fa fa-home"></i>&nbsp Olá Sr(a) <?php echo $cliente['clinome']; ?> </h4>
                  </div>
                  <div class="painel_corpo">

                      <div class="linha">
                        <div class="col1">
                          <a href="visualizarCliente.php?id=<?php echo $cliente['cliid']; ?>"><i class="fa fa-user fa-5x"></i></a><br>
                          <label class="label-icone">PERFIL</label>
                        </div>
                        <div class="col2">
                          <a href="listarSolicitacao.php?id=<?php echo $cliente['cliid']; ?>"><i class="fa fa-bullhorn fa-5x"></i></a>
                          <label class="label-icone">SOLICITAÇÕES</label>
                        </div>
                      </div>
                      <div class="linha">
                        <div class="col1">
                          <a href="listarHistorico.php?id=<?php echo $cliente['cliid']; ?>"><i class="fa fa-th-list fa-5x"></i></a>
                          <label class="label-icone">HISTÓRICO</label>
                        </div>
                        <div class="col2">
                          <a href="creditos.php?id=<?php echo $cliente['cliid']; ?>"><i class="fa fa-coffee fa-5x"></i></a>
                          <label class="label-icone">CRÉDITOS</label>
                        </div>
                      </div>

                    </div>
                  </div>
               <!--  FIM PAINEL CORPO -->
               </div>
            <!--  FIM PAINEL  -->
           </div>
         <!--  FIM CONTEUDO ABERTO -->
      </div>
      <!--  FIM CONTEUDO TOTAL -->
      <div id="fimPrincipal">
         <?php include '../layout/footer.php'; ?>
      </div>
      <!--  FIM FOOTER -->
    </div>
    <!--  FIM PRINCIPAL -->

   </body>
</html>
