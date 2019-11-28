<?php

    $id = $_GET['id'];
    date_default_timezone_set('America/Manaus');
    include "../../control/controlVisualizarPerfilCliente.php";
    $cliente = mysqli_fetch_assoc($resultado);

?>
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
      <script type="text/javascript" src="../../assets/js/funcoes.js"></script>
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
                     <a href="visualizarCliente.php?id=<?php echo $cliente['cliid']; ?>">Perfil</a>
                  </li>
                  <li>
                     <a class="ativo" href="listarSolicitacao.php?id=<?php echo $cliente['cliid']; ?>">Solicitações</a>
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
                  <!--<i class="fa fa-bullhorn"></i> &nbsp solicitação &nbsp &nbsp-->
                  <i class="fa fa-plus"></i> &nbsp nova
               </span>

               <!-- INICIO PAINEL -->
               <div class="painel">
                  <div class="painel_titulo">
                     <h4><i class="fa fa-bullhorn"></i> Nova Solicitação</h4>
                  </div>

                  <!-- INICIO PAINEL CORPO -->
                  <div class="painel_corpo">

                    <!-- INÍCIO FORM BOOTSTRAP -->

                    <form name="formulario" id="formulario" method="POST" action="" onsubmit="">

                      <input type="text" name="id"      id="id"      value="" hidden >
                      <input type="text" name="data"    id="data"    value="<?php echo date("d/m/Y"); ?>" hidden >
                      <input type="text" name="hora"    id="hora"    value="<?php echo date("H:i"); ?>" hidden >
                      <input type="text" name="cliente" id="cliente" value="<?php echo $cliente['cliid']; ?>" hidden >
                      <input type="text" name="autonomo" id="autonomo"  value="" hidden >

                      <!--<div class="row">
                        <div class="form-group col-md-2">
                          <label for="data">Data</label>
                          <input type="date" class="form-control" name="data" id="data" minlength="" maxlength="" placeholder="" >
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-2">
                          <label for="hora">Hora</label>
                          <input type="time" class="form-control" name="hora" id="hora" minlength="4" maxlength="5" placeholder=""    >
                        </div>
                      </div>-->

                      <div class="row">
                        <div class="form-group col-md-4">
                           <label for="categoria">Categoria</label>
                           <?php
                                  require_once '../../control/controlListarCategoria.php';
                                  include_once '../../control/controlListarServico.php';
                            ?>
                           <select  id='categoria' name='categoria' class="form-control valid" >
                              <option value=""  disabled  selected>Selecione...</option>
                              <?php
                                   while ($categoria = mysqli_fetch_array($listCategoria)) {
                               ?>
                              <option value="<?php echo $categoria['catid']; ?>"><?php echo $categoria['catdescricao']; ?></option>
                            <?php }  ?>
                           </select>
                       </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-4">
                           <label for="servico">Serviço</label>
                           <select  id='servico' name='servico' class="form-control valid" >
                                <option value=""  disabled selected>Selecione...</option>
                                <?php
                                     while ($servico = mysqli_fetch_array($listServico)) {
                                 ?>
                                 <option value="<?php echo $servico['serid']; ?>"><?php echo $servico['serdescricao']; ?></option>
                               <?php }  ?>
                           </select>
                       </div>
                     </div>
                      <!--<div class="row">
                        <div class="form-group col-md-4">
                           <label for="servico">Serviço</label>
                           <select  id='servico' name='servico' class="form-control valid" >
                              <option value=""  disabled selected>Selecione...</option>
                              <?php /*

                                  while ($servico = mysqli_fetch_array($listDropServico)) {
                               ?>
                              <option value="<?php echo $servico['serid']; ?>"><?php echo $servico['serdescricao']; ?></option>
                              <?php } */ ?>
                           </select>
                       </div>
                     </div>-->

                      <div class="row">
                        <div class="form-group col-md-8">
                          <label for="obs">Observações</label>
                          <textarea type="text" class="form-control" name="obs" id="obs" maxlength="250" placeholder="" ></textarea>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-2">
                          <label for="valor">Valor (R$)</label>
                          <input type="text" class="form-control" name="valor" id="valor" maxlength="" width="100%" placeholder="000,00"   >
                        </div>
                      </div>

                      <input type="date" name="datafinal" id="datafinal" minlength="" maxlength="" value="" hidden >
                      <input type="time" name="horafinal" id="horafinal" minlength="4" maxlength="5" value="" hidden >
                      <input type="text" name="status" id="status" width="100%" value="Aguardando autônomo" hidden >
                      <input type="text" name="nota" id="nota" minlength="1" maxlength="50" width="100%" value="" hidden >

                      <!--<div class="row">
                        <div class="form-group col-md-2">
                          <label for="datafinal">Data Final</label>
                          <input type="date" class="form-control" name="datafinal" id="datafinal" minlength="" maxlength="" placeholder=""    >
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-2">
                          <label for="horafinal">Hora Final</label>
                          <input type="time" class="form-control" name="horafinal" id="horafinal" minlength="4" maxlength="5" placeholder=""    >
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-5">
                          <label for="status">Status</label>
                          <input type="text" class="form-control" name="status" id="status" width="100%" placeholder="" />
                        </div>
                        <div class="form-group col-md-3">
                          <label for="nota">Nota</label>
                          <input type="text" class="form-control" name="nota" id="nota" minlength="1" maxlength="50" width="100%" placeholder="" required/>
                        </div>
                      </div>-->

                      <br>

                      <div class="row">
                        <div class="col-md-12">
                          <div style="float:left;">
                            <a href="home.php?id=<?php echo $cliente['cliid']; ?>"><button type="button"  name="cancelar" class="btn btn-default">Cancelar</button></a>
                          </div>
                          <div style="float:right;">
                            <button type="submit" id="cadastrarSolicitacao" name="cadastrarSolicitacao" class="btn btn-primary enviar-dados">Confirmar Solicitação</button>
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
            include '../../assets/js/cadastrarSolicitacao.js';
            //include '../../assets/js/carregarListaServicos.js';
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
