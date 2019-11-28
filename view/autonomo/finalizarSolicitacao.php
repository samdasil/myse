<?php

    $id = $_GET['id'];

    include "../../control/controlVisualizarPerfilAutonomo.php";
    $autonomo = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>MySE | Visualizar</title>
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
      <link rel="stylesheet" type="text/css" href="../../assets/css/app.css"/>


      <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="../../assets/js/js.js"></script>
      <script type="text/javascript" src="../../assets/addons/bootstrap/js/bootstrap.min.js"></script>
   </head>
   <body onload="remove()">
      <div id="principal">
         <div id="navegacao" >MySE - Autônomo</div>
         <!-- NAV SUPERIOR -->
         <div class="conteudoTotal">
            <!-- MENU LATERAL  -->
            <div class="sidebar">
               <div class="tituloMenu">
                  MENU
               </div>
               <ul class="nav">
                  <li>
                     <a href="home.php?id=<?php echo $autonomo['autid']; ?>">Home</a>
                  </li>
                  <li>
                     <a href="visualizarAutonomo.php?id=<?php echo $autonomo['autid']; ?>">Perfil</a>
                  </li>
                  <li>
                     <a href="listarNovasSolicitacoes.php?id=<?php echo $autonomo['autid']; ?>">Solicitações</a>
                  </li>
                  <li>
                     <a href="listarHistorico.php?id=<?php echo $autonomo['autid']; ?>">Histórico</a>
                  </li>
                  <li>
                     <a  class="ativo" href="listarMeusAtendimentos.php?id=<?php echo $autonomo['autid']; ?>">Atendimentos</a>
                  </li>
                  <li>
                     <a href="visualizarNota.php?id=<?php echo $autonomo['autid']; ?>">Nota</a>
                  </li>
                  <li>
                     <a href="creditos.php?id=<?php echo $autonomo['autid']; ?>">Créditos</a>
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
                  <!--<i class="fa fa-briefcase"></i> &nbsp solicitação &nbsp &nbsp-->
                  <i class="fa fa-eye"></i> &nbsp finalizar
               </span>

               <!-- INICIO PAINEL -->
               <div class="painel">
                  <div class="painel_titulo">
                     <h4><i class="fa fa-bullhorn"></i> &nbsp Finalizar Solicitação</h4>
                  </div>

                  <!-- INICIO PAINEL CORPO -->
                  <div class="painel_corpo">

                    <!-- INÍCIO FORM BOOTSTRAP -->

                    <form name="formulario" id="formulario" method="POST" action="" onsubmit="">

                      <?php
                        include '../../control/controlVisualizarSolicitacao.php';
                        $solicitacao = mysqli_fetch_assoc($itemSolicitacao);
                      ?>

                        <div class="row">
                          <div class="form-group col-md-2">
                            <label for="id">Identificador</label>
                            <input type="text" class="form-control" name="id" id="id"  value="<?php echo $solicitacao['solid']; ?>" readonly >
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-2">
                            <label for="cliente">Cliente</label>
                            <input type="text"  name="cliente" id="cliente"  value="<?php echo $solicitacao['solcliid']; ?>" hidden >
                            <input type="text" class="form-control" name="nomecliente" id="nomecliente"  value="<?php echo $solicitacao['clinome']; ?>" readonly >
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-2">
                            <label for="data">Data</label>
                            <input type="text" class="form-control" name="data" id="data" minlength="" maxlength="" value="<?php echo $solicitacao['soldata']; ?>" readonly >
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-2">
                            <label for="hora">Hora</label>
                            <input type="text" class="form-control" name="hora" id="hora" value="<?php echo $solicitacao['solhora']; ?>"  readonly  >
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-2">
                            <label for="categoria">Categoria</label>
                            <input type="text"  name="categoria" id="categoria" value="<?php echo $solicitacao['setcatid']; ?>"  hidden  >
                            <input type="text" class="form-control" name="desccategoria" id="desccategoria" value="<?php echo $solicitacao['catdescricao']; ?>"  readonly  >
                          </div>
                        </div>

                        <!--<div class="row">
                          <div class="form-group col-md-4">
                             <label for="categoria">Categoria</label>
                             <?php /*
                                    require_once '../../control/controlListarCategoria.php';
                                    include_once '../../control/controlListarServico.php';
                              ?>
                             <select  id='categoria' name='categoria' class="form-control valid" >
                                <option value=""  disabled  selected>Selecione...</option>
                                <?php
                                     while ($categoria = mysqli_fetch_array($listCategoria)) {
                                 ?>
                                <option value="<?php echo $categoria['catid']; ?>"><?php echo $categoria['catdescricao']; ?></option>
                              <?php }  */?>
                             </select>
                         </div>
                       </div>-->

                       <div class="row">
                         <div class="form-group col-md-2">
                           <label for="servico">Serviço</label>
                           <input type="text"  name="servico" id="servico" value="<?php echo $solicitacao['setcatid']; ?>"  hidden  >
                           <input type="text" class="form-control" name="descservico" id="descservico" value="<?php echo $solicitacao['serdescricao']; ?>"  readonly  >
                         </div>
                       </div>
                        <!--<div class="row">
                          <div class="form-group col-md-4">
                             <label for="servico">Serviço</label>
                             <select  id='servico' name='servico' class="form-control valid" >
                                  <option value=""  disabled selected>Selecione...</option>
                                  <?php /*
                                       while ($servico = mysqli_fetch_array($listServico)) {
                                   ?>
                                   <option value="<?php echo $servico['serid']; ?>"><?php echo $servico['serdescricao']; ?></option>
                                 <?php }  */ ?>
                             </select>
                         </div>
                       </div>-->
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
                            <textarea type="text" class="form-control" name="obs" id="obs" maxlength="250" value="<?php echo $solicitacao['solobs']; ?>" readonly></textarea>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-2">
                            <label for="valor">Valor (R$)</label>
                            <input type="text" class="form-control" name="valor" id="valor" maxlength="" width="100%" value="<?php echo $solicitacao['solvalor']; ?>" readonly   >
                          </div>
                        </div>


                        <input type="text" name="status" id="status" maxlength="" width="100%" value="<?php echo $solicitacao['solstatus']; ?>" hidden  >

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
                              <a class="btn btn-light btn-xs" href="listarMeusAtendimentos.php?id=<?php echo $autonomo['autid']; ?>"><i class="fa fa-arrow-left fa-3x"></i></a>
                            </div>

                            <div style="float:right;">
                              <a class="btn btn-warning btn-xs" data-toggle="modalFinalizacao" data-id="<?php echo $solicitacao['solid']; ?>" data-aut="<?php echo $autonomo['autid']; ?>" href=""><i class="fa fa-check-circle fa-3x"></i><br>Finalizar Atendimento</a>
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
            require '../layout/infoFinalizacao.php';
            include '../../assets/js/finalizarAtendimento.js';
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
