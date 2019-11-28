
<?php if(!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>MySE</title>
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
      <link rel="stylesheet" type="text/css" href="../../assets/css/estilo.css"/>


      <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="../../assets/js/js.js"></script>
      <script type="text/javascript" src="../../assets/addons/bootstrap/js/bootstrap.min.js"></script>
   </head>
   <body onload="remove()">
      <div id="principal">
         <div id="navegacao" >Painel Administrativo</div>
         <!-- NAV SUPERIOR -->
         <div class="conteudoTotal">
            <!-- MENU LATERAL  -->
            <div class="sidebar">
               <div class="tituloMenu">
                  MENU
               </div>
               <ul class="nav">
                     <li>
                        <a class="<?php if($_SESSION['ativo'] == 'home'){echo "ativo";} ?>" href="painel.php">Home</a>
                     </li>
                     <li>
                        <a class="<?php if($_SESSION['ativo'] == 'administrador'){echo "ativo";} ?>" href="listarAdmin.php">Administrador</a>
                     </li>
                     <li>
                        <a class="<?php if($_SESSION['ativo'] == 'condominio'){echo "ativo";} ?>" href="listarCondominio.php">Condominio</a>
                     </li>
                     <li>
                        <a class="<?php if($_SESSION['ativo'] == 'sindico'){echo "ativo";} ?>" href="listarSindico.php">Sindico</a>
                     </li>
                     <li>
                        <a class="<?php if($_SESSION['ativo'] == 'categoria'){echo "ativo";} ?>" href="listarCategoria.php">Categoria</a>
                     </li>
                     <li>
                        <a class="<?php if($_SESSION['ativo'] == 'sair'){echo "ativo";} ?>" href="logout.php">Sair</a>
                     </li>
               </ul>
            </div>
