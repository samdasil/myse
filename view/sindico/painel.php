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
      <link rel="stylesheet" type="text/css" href="../../assets/css/estilo2.css"/>


      <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="../../assets/js/js.js"></script>
      <script type="text/javascript" src="../../assets/addons/bootstrap/js/bootstrap.min.js"></script>
   </head>
   <body onload="remove()">
      <div id="principal">
         <div id="navegacao" >Painel Administrativo - MySE</div>
         <!-- NAV SUPERIOR -->
         <div class="conteudoTotal">
            <!-- MENU LATERAL  -->
            <div class="sidebar">
               <div class="tituloMenu">
                  MENU
               </div>
               <ul class="nav">
                  <li hidden>
                     <a class="ativo" href="painel.php">Home</a>
                  </li>
                  <li>
                     <a href="listarAutonomo.php">Autônomo</a>
                  </li>
                  <li>
                     <a href="listarServico.php">Serviços</a>
                  </li>
                  <li>
                     <a href="logout.php">Sair</a>
                  </li>
               </ul>
            </div>
            <!-- CONTEÚDO -->
            <div class="conteudo aberto">
               <a class="botaoMenu"></a>
               <span class="caminhoURL"><i class="fa fa-home"></i> &nbsp home</span>
               <div class="painel">
                  <div class="painel_titulo">
                     <h4><i class="fa fa-home"></i> Painel - Bem vindo</h4>
                  </div>
                  <div class="painel_corpo">

                  </div>
               <!--  FIM PAINEL CORPO -->
               </div>
            <!--  FIM PAINEL  -->
           </div>
         <!--  FIM CONTEUDO ABERTO -->
         <div id="fimPrincipal">
            <?php include '../layout/footer.php'; ?>
         </div>
         <!--  FIM FOOTER -->
      </div>
      <!--  FIM CONTEUDO TOTAL -->
    </div>
    <!--  FIM PRINCIPAL -->
   </body>
</html>
