<?php
   if(!isset($_SESSION)) session_start();
   $_SESSION['ativo'] = 'condominio';
   require '../layout/header-admin.php';
?>

<!-- INICIO CONTEÚDO -->
<div class="conteudo aberto">
   <a class="botaoMenu"></a>
   <span class="caminhoURL"><i class="fa fa-university"></i> &nbsp condominio</span>

   <!-- INICIO PAINEL -->
   <div class="painel">
      <div class="painel_titulo">
          <h4><i class="fa fa-university"></i> Condomínio
              <a href="cadastrarCondominio.php"><span id="botaoCadastro"><input type="button" value="&#10009; Cadastrar"/></span></a>
          </h4>
      </div>

      <!-- INICIO PAINEL CORPO -->
      <div class="painel_corpo">

            <!-- INÍCIO TABELA BOOTSTRAP -->
            <div id="list" class="row">

                <!-- INÍCIO DIV TABLE -->
                <div class="table-responsive col-md-12">
                  <?php
                      //include '../../model/modelAdmin.php';

                      if(isset($_POST['buscarCondominio'])){
                        include  '../../control/controlBuscarCondominio.php';
                      }else{
                        include '../../control/controlListarCondominio.php';
                      }
                  ?>
                  <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" method="POST" action="" name="formularioBuscar">
                      <input class="form-control mr-sm-1" type="search" placeholder="" maxwidth="20%" aria-label="Buscar" name="buscar" id="buscar" minlength="1" required>
                      <button class="btn btn-primary my-1 my-sm-0" type="submit" name="buscarCondominio">Buscar</button>
                      <a href="listarCondominio.php"><button class="btn btn-inline-success my-1 my-sm-0" type="button" value="Limpar" />Limpar</button></a>
                    </form>
                  </nav>
               <table class="table table-striped" cellspacing="0" cellpadding="0">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Nome do Condomínio</th>
                        <th>CEP</th>
                        <th>Rua</th>
                        <th>Nº</th>
                        <th>Sindico</th>
                        <th>Cidade</th>
                        <th>Bairro</th>
                        <th>UF</th>
                        <th class="actions">Ações</th>
                     </tr>
                  </thead>

                  <!-- Utilizar os TRs e TDs para exibir as informações de conteúdo -->
                  <tbody>
                     <?php while($condominio = mysqli_fetch_array($listCondominio)){ ?>
                        <tr>
                           <td><?php echo $condominio['conid']; ?></td>
                           <td><?php echo $condominio['connome'];   ?></td>
                           <td><?php echo $condominio['concep'];   ?></td>
                           <td><?php echo $condominio['conrua'];   ?></td>
                           <td><?php echo $condominio['connumero'];   ?></td>
                           <td><?php echo $condominio['sindico'];   ?></td>
                           <td><?php echo $condominio['concidade'];   ?></td>
                           <td><?php echo $condominio['conbairro'];   ?></td>
                           <td><?php echo $condominio['conuf'];   ?></td>
                           <td class="actions">
                              <a class="btn btn-success btn-xs" href="visualizarCondominio.php?acao=visualizar&id=<?php echo $condominio['conid']; ?>"><i class="fa fa-eye"></i></a>
                              <a class="btn btn-warning btn-xs" href="editarCondominio.php?acao=editar&id=<?php echo $condominio['conid']; ?>"><i class="fa fa-pencil"></i></a>
                              <a class="btn btn-danger btn-xs" href="" data-toggle="modal" data-id="<?php echo $condominio['conid']; ?>" ><i class="fa fa-times"></i></a>
                           </td>
                        </tr>
                     <?php } ?>
                  </tbody>
               </table>
            </div>
            <!-- FIM DIV TABLE -->
         </div>
         <!-- FIM TABELA BOOTSTRAP -->
      </div>
      <!-- FIM PAINEL CORPO -->
   </div>
   <!-- FIM PAINEL -->
</div>

<?php
   include '../layout/infoAcao.php';
   include '../../assets/js/excluirCondominio.js';
   include '../layout/footer.php';
?>
