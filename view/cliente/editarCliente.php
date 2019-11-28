<?php

    $id = $_GET['id'];

    include "../../control/controlVisualizarPerfilCliente.php";
    $cliente = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>MySE | Editar</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
      <meta charset="UTF-8"/>
      <meta name="description" content="Sistema de Gerenciamento de Solicitaçao de Serviços"/>
      <meta name="keywords"    content="interface, home, fametro, serviços, Cliente, condominio"/>
      <meta name="robots"      content="nofollow, index"/>
      <meta name="viewport"    content="width=device-width initial-scale=1.0"/>

      <link rel="icon"       type="image/png" href="../../assets/img/icone-login-mySE 136x155.png"/>
      <!-- Iconografia -->
      <link rel="stylesheet" type="text/css" href="../../assets/addons/font-awesome-4.7.0/css/font-awesome.css"/>
      <!-- Bootstrap -->
      <link rel="stylesheet" type="text/css" href="../../assets/addons/bootstrap/css/bootstrap.min.css">
      <!-- FolhaEstilos -->
      <link rel="stylesheet" type="text/css" href="../../assets/css/app2.css"/>


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
            <div class="sidebar">
               <div class="tituloMenu">
                  MENU
               </div>
               <ul class="nav">
                  <li>
                     <a href="home.php?id=<?php echo $cliente['cliid']; ?>">Home</a>
                  </li>
                  <li>
                     <a class="ativo" href="visualizarCliente.php?id=<?php echo $nome['cliid']; ?>">Perfil</a>
                  </li>
                  <li>
                     <a href="listarSolicitacao.php?id=<?php echo $cliente['cliid']; ?>">Solicitações</a>
                  </li>
                  <li>
                     <a href="listarHistorico.php?id=<?php echo $cliente['cliid']; ?>">Histórico</a>
                  </li>
                  <li>
                     <a href="creditos.php?id=<?php echo $cliente['cliid']; ?>">Créditos</a>
                  </li>
                  <li>
                     <a href="logout.php">Sair</a>
                  </li>
                </ul>
            </div>
            <!-- CONTEÚDO -->
            <div class="conteudo aberto">
                 <a class="botaoMenu"></a>
                 <span class="caminhoURL">
                  <!--<i class="fa fa-briefcase"></i> &nbsp cliente &nbsp &nbsp-->
                  <i class="fa fa-pencil"></i> &nbsp editar
               </span>

               <!-- INICIO PAINEL -->
               <div class="painel">
                  <div class="painel_titulo">
                     <h4><i class="fa fa-pencil"></i> &nbsp Editar Meu Perfil</h4>
                  </div>

                  <!-- INICIO PAINEL CORPO -->
                  <div class="painel_corpo">

                    <!-- INÍCIO FORM BOOTSTRAP -->

                    <form name="formulario" id="formulario" method="POST" action="" onsubmit="">

                      <?php
                        include '../../control/controlVisualizarCliente.php';
                        $cliente = mysqli_fetch_assoc($result);
                      ?>

                      <input type="text" name="condominio" id="condominio" minlength="6" maxlength="7" placeholder="" value="<?php echo $cliente['cliconid']; ?>"  hidden >

                      <div class="row">
                        <div class="form-group col-md-8">
                          <label for="condominio">Condomínio</label>
                          <input type="text" class="form-control" name="nomecondominio" id="nomecondominio" minlength="6" maxlength="7" placeholder="" value="<?php echo $cliente['connome']; ?>" autocapitalize readonly >
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-8">
                          <label for="id">Identificador</label>
                          <input type="text" class="form-control" name="id" id="id"  value="<?php echo $cliente['cliid']; ?>" readonly />
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-8">
                          <label for="nome">Nome do Autônomo</label>
                          <input type="text" class="form-control" name="nome" id="nome" minlength="4" maxlength="50" placeholder="teste" value="<?php echo $cliente['clinome']; ?>" required />
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="fone">Fone</label>
                          <input type="text" class="form-control" name="fone" id="fone" minlength="15" maxlength="15" placeholder="" value="<?php echo $cliente['clifone']; ?>" required />
                        </div>
                        <div class="form-group col-md-5">
                          <label for="email">Fone</label>
                          <input type="email" class="form-control" name="email" id="email" minlength="4" maxlength="80" placeholder="" value="<?php echo $cliente['cliemail']; ?>" required />
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-2">
                          <label for="cep">CEP</label>
                          <input type="text" class="form-control" name="cep" id="cep" minlength="0" maxlength="8" width="100%" placeholder="" value="<?php echo $cliente['clicep']; ?>" required />
                        </div>
                        <div class="form-group col-md-2">
                          <label for="numero">Número</label>
                          <input type="text" class="form-control" name="numero" id="numero" minlength="1" maxlength="8" width="10%" placeholder="" value="<?php echo $cliente['clinumero']; ?>" required/>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="complemento">Complemento</label>
                          <input type="text" class="form-control" name="complemento" id="complemento" minlength="0" maxlength="80" width="100%" value="<?php echo $cliente['clicomplemento']; ?>" required />
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-5">
                          <label for="rua">Rua</label>
                          <input type="text" class="form-control" name="rua" id="rua" minlength="8" maxlength="120" width="100%" placeholder="" value="<?php echo $cliente['clirua']; ?>" required/>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="bairro">Bairro</label>
                          <input type="text" class="form-control" name="bairro" id="bairro" minlength="1" maxlength="50" width="100%" placeholder="bairro" value="<?php echo $cliente['clibairro']; ?>" required/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-5">
                          <label for="cidade">Cidade</label>
                          <input type="text" class="form-control" name="cidade" id="cidade" minlength="8" maxlength="120" width="100%" placeholder="" value="<?php echo $cliente['clicidade']; ?>" required/>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="uf">UF</label>
                          <input type="text" class="form-control" name="uf" id="uf" minlength="1" maxlength="2" width="100%" placeholder="" value="<?php echo $cliente['cliuf']; ?>" required/>
                        </div>
                      </div>
                      <br>
                      <legend style="font-size: 10pt; color: #005241;"> Configuraçao de acesso</legend>
                      <div class="row">
                          <div class="form-group col-md-3">
                            <label for="login">Login</label>
                            <input type="text" class="form-control" name="login" id="login" minlength="3" maxlength="20" width="100%" placeholder="" value="<?php echo $cliente['clilogin']; ?>" required/>
                          </div>
                          <div class="form-group col-md-3">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" minlength="5" maxlength="8" width="100%" placeholder="********" value="<?php echo $cliente['clisenha']; ?>" required/>
                          </div>
                      </div>


                      <input type="text" name="perfil" id="perfil" minlength="1" maxlength="8" width="100%" placeholder="" value="<?php echo $cliente['clitpuid']; ?>" hidden />

                      <div class="row">
                        <div class="col-md-12">
                          <div style="float:left;">
                            <a class="btn btn-light btn-xs" href="home.php?id=<?php echo $cliente['cliid'] ?>"><i class="fa fa-arrow-left fa-3x"></i></a>
                          </div>
                          <div style="float:right;">
                            <button type="submit" id="editarCliente" name="editarCliente" class="btn btn-primary enviar-dados"><i class="fa fa-save fa-3x"></i></button>
                          </div>
                        </div>
                      </div>

                    </form>
                    <!-- FIM FORM BOOTSTRAP -->
                  </div>
                    <!-- FIM PAINEL CORPO -->
            </div>
            <!-- FIM PAINEL -->

         </div>
         <!-- FIM DIV CONTEUDO ABERTO -->

         <!-- INICIO MODAL - DELETAR -->
         <?php
            require '../layout/infoAcao.php';
            include '../../assets/js/editarCliente.js';
         ?>
         <!-- FIM MODAL - DELETAR -->

         <!-- INICIO FOOTER -->
         <div id="fimPrincipal">
            <?php require '../layout/footer.php'; ?>
         </div>
         <!-- FIM  FOOTER -->
      </div>
      <!-- FIM DIV CONTEUDO TOTAL -->
   </body>
</html>
