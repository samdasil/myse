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
            <!-- CONTEÚDO -->
            <div class="conteudo aberto">
               <a class="botaoMenu"></a>
               <span class="caminhoURL">
                  <i class="fa fa-puzzle-piece"></i> &nbsp servico &nbsp &nbsp
                  <i class="fa fa-plus"></i> &nbsp cadastro
               </span>

               <!-- INICIO PAINEL -->
               <div class="painel">
                  <div class="painel_titulo">
                     <h4><i class="fa fa-puzzle-piece"></i> Novo Serviço</h4>
                  </div>

                  <!-- INICIO PAINEL CORPO -->
                  <div class="painel_corpo">

                    <!-- INÍCIO FORM BOOTSTRAP -->

                    <form name="formulario" id="formulario" method="POST" action="." onsubmit="">

                      <input type="text" name="id" id="id"  value="" hidden/>

                      <div class="row">
                        <div class="form-group col-md-4">
                           <label for="categoria">Categoria</label>
                           <select  id='categoria' name='categoria' class="form-control valid" >
                              <option value=""  disabled selected>Selecione...</option>
                              <?php
                                   if(!$result){
                                       include '../../control/controlListarCategoria.php';
                                   }
                                   while ($categoria = mysqli_fetch_array($listCategoria)) {
                               ?>
                              <option value="<?php echo $categoria['catid']; ?>"><?php echo $categoria['catdescricao']; ?></option>
                              <?php }  ?>
                           </select>
                       </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-4">
                          <label for="descricao">Descrição</label>
                          <input type="text" class="form-control" name="descricao" id="descricao" minlength="2" maxlength="30" placeholder="" required autofocus/>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div style="float:left;">
                            <button type="submit" id="cadastrarServico" name="cadastrarServico" class="btn btn-primary enviar-dados">Salvar</button>
                            <a href="listarServico.php"><button type="button"  name="cancelar" class="btn btn-default">Cancelar</button></a>
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
            //include '../../assets/js/mask.js';
            include '../../assets/js/cadastrarServico.js';
         ?>
         <!-- FIM FUNCOES DE MASCARAS -->

         <!-- INICIO FOOTER -->
         <div id="fimPrincipal">
            <?php include '../layout/footer.php'; ?>
         </div>
         <!-- FIM  FOOTER -->
      </div>
      <!-- FIM DIV CONTEUDO TOTAL -->
    </div>
    <!-- FIM DIV PRINCIPAL -->
   </body>
</html>
