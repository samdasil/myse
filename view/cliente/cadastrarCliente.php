<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>MySE | Cadastrar</title>
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
      <link rel="stylesheet" type="text/css" href="../../assets/css/app2.css"/>


      <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="../../assets/js/buscaCep.js"></script>
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
                  <li hidden>
                     <a href="painel.php">Home</a>
                  </li>
                  <li>
                     <a class="ativo" href="listarAutonomo.php">Autônomo</a>
                  </li>
                  <li>
                     <a href="listarServico.php">Serviços</a>
                  </li>
                  <li>
                     <a href="logout.php">Sair</a>
                  </li>
               </ul>
            </div>-->
            <!-- CONTEÚDO -->
            <div class="conteudo aberto">
               <!--<a class="botaoMenu"></a>
               <span class="caminhoURL">
                  <i class="fa fa-briefcase"></i> &nbsp autonomo &nbsp &nbsp
                  <i class="fa fa-plus"></i> &nbsp cadastro
               </span>-->

               <!-- INICIO PAINEL -->
               <div class="painel">
                  <div class="painel_titulo">
                     <h4><i class="fa fa-plus"></i> Bem-vindo</h4>
                  </div>

                  <!-- INICIO PAINEL CORPO -->
                  <div class="painel_corpo">

                    <!-- INÍCIO FORM BOOTSTRAP -->

                    <form name="formulario" id="formulario" method="POST" action="." onsubmit="">

                      <input type="text" name="id" id="id" minlength="4" maxlength="50" value="" hidden/>

                      <div class="row">
                        <div class="form-group col-md-8">
                          <label for="condominio">Código do Condomínio</label>
                          <input type="text" class="form-control" name="condominio" id="condominio" minlength="6" maxlength="7" placeholder="" autocapitalize required autofocus >
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-8">
                          <label for="nome">Nome</label>
                          <input type="text" class="form-control" name="nome" id="nome" minlength="4" maxlength="50" placeholder="" autocapitalize required autofocus >
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="fone">Fone</label>
                          <input type="tel" class="form-control" name="fone" id="fone" minlength="8" maxlength="15" placeholder="" pattern="(\d{2}) \d{5}-\d{4}" required="" >
                        </div>
                        <div class="form-group col-md-5">
                          <label for="email">E-mail</label>
                          <input type="email" class="form-control" name="email" id="email" minlength="4" maxlength="80" placeholder="exemplo@email.com" required >
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-2">
                          <label for="cep">CEP</label>
                          <input type="text" class="form-control" name="cep" id="cep" minlength="0" maxlength="8" width="100%" placeholder=""  required >
                        </div>
                        <div class="form-group col-md-2">
                          <label for="numero">Número</label>
                          <input type="text" class="form-control" name="numero" id="numero" minlength="1" maxlength="8" width="10%" placeholder="" required />
                        </div>
                        <div class="form-group col-md-4">
                          <label for="complemento">Complemento</label>
                          <input type="text" class="form-control" name="complemento" id="complemento" minlength="0" maxlength="80" width="100%" placeholder="quadra, bloco, apto" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-5">
                          <label for="rua">Rua</label>
                          <input type="text" class="form-control" name="rua" id="rua" minlength="8" maxlength="120" width="100%" placeholder="" required/>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="bairro">Bairro</label>
                          <input type="text" class="form-control" name="bairro" id="bairro" minlength="1" maxlength="50" width="100%" placeholder="" required/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-5">
                          <label for="cidade">Cidade</label>
                          <input type="text" class="form-control" name="cidade" id="cidade" minlength="8" maxlength="120" width="100%" placeholder="" required/>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="uf">UF</label>
                          <input type="text" class="form-control" name="uf" id="uf" minlength="1" maxlength="8" width="100%" placeholder="" required/>
                        </div>
                      </div>
                      <br>
                      <legend style="font-size: 10pt; color: #005241;"> Configuraçao de acesso</legend>
                      <div class="row">
                          <div class="form-group col-md-3">
                            <label for="login">Login</label>
                            <input type="text" class="form-control" name="login" id="login" minlength="3" maxlength="20" width="100%" placeholder="login" required/>
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-md-3">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" minlength="5" maxlength="8" width="100%" placeholder="********" required/>
                          </div>
                          <div class="form-group col-md-3">
                            <label for="confirmasenha">Confirmar Senha</label>
                            <input type="password" class="form-control" name="confirmasenha" id="confirmasenha" minlength="5" maxlength="8" width="100%" placeholder="********" required/>
                          </div>
                      </div>

                      <input type="text" name="perfil" id="perfil"  value="" hidden/>

                      <div class="row">
                        <div class="col-md-12">
                          <div style="float:left;">
                            <a href="index.php"><button type="button"  name="cancelar" class="btn btn-default">Cancelar</button></a>
                          </div>
                          <div style="float:right;">
                            <button type="submit" id="cadastrarCliente" name="cadastrarCliente" class="btn btn-primary enviar-dados">Finalizar Cadastro</button>
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

         <!-- INICIO FUNCOES DE MASCARAS -->
         <?php
            include '../layout/infoAcao.php';
            include '../../assets/js/cadastrarCliente.js';
         ?>
         <!-- FIM FUNCOES DE MASCARAS -->

         <!-- INICIO FOOTER -->
         <div id="fimPrincipal">
            <?php include '../layout/footer.php'; ?>
         </div>
         <!-- FIM  FOOTER -->
      </div>
      <!-- FIM DIV CONTEUDO TOTAL -->

   </body>
</html>
