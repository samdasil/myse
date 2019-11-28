<?php
  header("Location: ../../index.php");

    if(!isset($_SESSION)) session_start();

    if(!isset($_SESSION['autlogin'])){

        session_unset();
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <title>MySE | Login</title>
       <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
       <meta charset="UTF-8"/>
       <meta name="description" content="Sistema de Gerenciamento de Solicitaçao de Serviços"/>
       <meta name="keywords"    content="interface, home, fametro, serviços, autonomo, condominio"/>
       <meta name="robots"      content="nofollow, index"/>
       <meta name="viewport"    content="width=device-width initial-scale=1.0"/>
       <link rel='shortcut icon'   type='image/x-icon' href='../../assets/img/icone-login-mySE 136x155.png' />
       <link rel='stylesheet'      type="text/css"     href='../../assets/css/geral.css' />
       <link rel="stylesheet" type="text/css" href="../../assets/addons/font-awesome-4.7.0/css/font-awesome.css"/>
       <!-- Bootstrap -->
       <link rel="stylesheet" type="text/css" href="../../assets/addons/bootstrap/css/bootstrap.min.css">
       <script src='../../assets/js/funcoes.js'></script>
 </head>

    <body>

    <header>
         <nav>
            <ul>
              <li>MySE</li>
            </ul>
         </nav>
    </header>

    <div class="corpo">
        <div class="formulario">

            <!--<p> Acesso </p>-->
            <div class="logo-login">
                <img src="../../assets/img/myse-1250x747.png" Title="Logue-se!"><br>
            </div>
            <form name="formulario" target="_self" method="POST" action="../../control/controlRealizarLogin.php" ;>
                <input type='text' name='login' id='login' placeholder="login" autofocus required/><br><br>
                <input type='password' name='senha' id='senha' placeholder="senha" required/>
                <br/><br/>
                <input name='logar' type='submit' value="Entrar">
            </form>
        </div>
    </div>

    <!-- RODAPE  -->
    <?php
        include '../layout/footer.php';
    ?>

</body>
</html>
