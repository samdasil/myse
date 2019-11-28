<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>MySE | Listar</title>
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
                     <a href="listarAutonomo.php">Autônomo</a>
                  </li>
                  <li>
                     <a class="ativo" href="listarServico.php">Serviços</a>
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
                  <i class="fa fa-puzzle-piece"></i> &nbsp servico &nbsp &nbsp
                  <i class="fa fa-eye"></i> &nbsp visualizar
               </span>

               <!-- INICIO PAINEL -->
               <div class="painel">
                  <div class="painel_titulo">
                     <h4><i class="fa fa-eye"></i> Visualizar dados da Serviço</h4>
                  </div>

                  <!-- INICIO PAINEL CORPO -->
                  <div class="painel_corpo">

                    <!-- INÍCIO FORM BOOTSTRAP -->

                    <form name="formulario" id="formulario" method="POST" action="" onsubmit="">

                      <?php
                        include '../../control/controlVisualizarServico.php';
                        $servico = mysqli_fetch_assoc($result);
                      ?>

                      <div class="row">
                        <div class="form-group col-md-8">
                          <label for="id">Identificador</label>
                          <input type="text" class="form-control" name="id" id="id"  value="<?php echo $servico['serid']; ?>" readonly />
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-8">
                          <label for="categoria">Categoria</label>
                          <input type="text" class="form-control" name="categoria" id="categoria" minlength="2" maxlength="50" placeholder="" value="<?php echo $servico['catdescricao']; ?>" readonly />
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-8">
                          <label for="descricao">Descricao</label>
                          <input type="text" class="form-control" name="descricao" id="descricao" minlength="2" maxlength="50" placeholder="" value="<?php echo $servico['serdescricao']; ?>" readonly />
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div style="float:left;">
                            <!--<button type="submit" id="editarAdmin" name="editarAdmin" class="btn btn-primary enviar-dados">Guardar</button>-->
                            <a href="listarServico.php"><button type="button"  name="cancelar" class="btn btn-default">Voltar</button></a>
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
            //require '../../assets/js/mask.js';
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
