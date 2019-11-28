<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>MySE | Editar</title>
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
      <script type="text/javascript" src="../../assets/js/buscaCep.js"></script>
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
            </div>
            <!-- FIM MENU LATERAL -->

            <!-- INICIO CONTEÚDO -->
            <div class="conteudo aberto">
               <a class="botaoMenu"></a>
               <span class="caminhoURL">
                  <i class="fa fa-briefcase"></i> &nbsp autonomo &nbsp &nbsp
                  <i class="fa fa-pencil"></i> &nbsp editar
               </span>

               <!-- INICIO PAINEL -->
               <div class="painel">
                  <div class="painel_titulo">
                     <h4><i class="fa fa-pencil"></i> Editar dados do Autônomo</h4>
                  </div>

                  <!-- INICIO PAINEL CORPO -->
                  <div class="painel_corpo">

                    <!-- INÍCIO FORM BOOTSTRAP -->

                    <form name="formulario" id="formulario" method="POST" action="" onsubmit="">

                      <?php
                        include '../../control/controlVisualizarAutonomo.php';
                        $autonomo = mysqli_fetch_assoc($result);
                      ?>

                      <div class="row">
                        <div class="form-group col-md-8">
                          <label for="id">Identificador</label>
                          <input type="text" class="form-control" name="id" id="id"  value="<?php echo $autonomo['autid']; ?>" readonly />
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-8">
                          <label for="nome">Nome do Autonomo</label>
                          <input type="text" class="form-control" name="nome" id="nome" minlength="4" maxlength="50" placeholder="Digite o nome do autdico" value="<?php echo $autonomo['autnome']; ?>" required />
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="fone">Fone</label>
                          <input type="text" class="form-control" name="fone" id="fone" minlength="8" maxlength="20" placeholder="" value="<?php echo $autonomo['autfone']; ?>" required />
                        </div>
                        <div class="form-group col-md-5">
                          <label for="email">Fone</label>
                          <input type="email" class="form-control" name="email" id="email" minlength="4" maxlength="80" placeholder="exemplo@email.com" value="<?php echo $autonomo['autemail']; ?>" required />
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-2">
                          <label for="cep">CEP</label>
                          <input type="text" class="form-control" name="cep" id="cep" minlength="0" maxlength="15" width="100%" placeholder="cep" value="<?php echo $autonomo['autcep']; ?>" required />
                        </div>
                        <div class="form-group col-md-2">
                          <label for="numero">Número</label>
                          <input type="text" class="form-control" name="numero" id="numero" minlength="1" maxlength="8" width="10%" placeholder="xxxx" value="<?php echo $autonomo['autnumero']; ?>" required/>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="complemento">Complemento</label>
                          <input type="text" class="form-control" name="complemento" id="complemento" minlength="0" maxlength="80" width="100%" value="<?php echo $autonomo['autcomplemento']; ?>"  />
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-5">
                          <label for="rua">Rua</label>
                          <input type="text" class="form-control" name="rua" id="rua" minlength="8" maxlength="120" width="100%" placeholder="Digite o nome da rua" value="<?php echo $autonomo['autrua']; ?>" required/>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="bairro">Bairro</label>
                          <input type="text" class="form-control" name="bairro" id="bairro" minlength="2" maxlength="50" width="100%" placeholder="bairro" value="<?php echo $autonomo['autbairro']; ?>" required/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-5">
                          <label for="cidade">Cidade</label>
                          <input type="text" class="form-control" name="cidade" id="cidade" minlength="3" maxlength="50" width="100%" placeholder="" value="<?php echo $autonomo['autcidade']; ?>" required/>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="uf">UF</label>
                          <input type="text" class="form-control" name="uf" id="uf" minlength="2" maxlength="2" width="100%" placeholder="" value="<?php echo $autonomo['autuf']; ?>" required/>
                        </div>
                      </div>

                      <br>
                      <div class="row">
                          <legend style="font-size: 10pt; color: #005241;" class="form-group col-md-5"> Configuraçao de acesso</legend>
                      </div>
                      <div class="row">
                          <div class="form-group col-md-2">
                            <label for="login">Login</label>
                            <input type="text" class="form-control" name="login" id="login" minlength="3" maxlength="20" width="100%" placeholder="login" value="<?php echo $autonomo['autlogin']; ?>" required />
                          </div>
                          <div class="form-group col-md-3">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" minlength="3" maxlength="8" width="100%" placeholder="********" value="<?php echo $autonomo['autsenha']; ?>" required/>
                          </div>
                          <div class="form-group col-md-3">
                            <label for="confirmasenha">Confirmar Senha</label>
                            <input type="password" class="form-control" name="confirmasenha" id="confirmasenha" minlength="2" maxlength="8" width="100%" placeholder="********" required/>
                          </div>
                      </div>


                      <input type="text" name="perfil" id="perfil" minlength="1" maxlength="8" width="100%" placeholder="" value="<?php echo $autonomo['auttpuid']; ?>" hidden/>


                      <div class="row">
                        <div class="col-md-12">
                          <div style="float:left;">
                            <button type="submit" id="editarAutonomo" name="editarAutonomo" class="btn btn-primary enviar-dados">Guardar</button>
                            <a href="listarAutonomo.php"><button type="button"  name="cancelar" class="btn btn-default">Cancelar</button></a>
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
            include '../../assets/js/editarAutonomo.js';
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
