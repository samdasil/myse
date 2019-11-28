<!-- Modal Info -->
<div class='modal fade' id='modalStatus' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' data-backdrop="static">
    <div class='modal-dialog'>
        <div class='modal-content'>
            <!-- Modal Header -->
            <div class='modal-header'>

                <h4 class="modal-title">
                    <i  class='fa fa-refresh' style='font-size:20px; padding-right:1%;' aria-hidden='true'></i>
                    Informações da Atualização
                </h4>

            </div>
            <div class="modal-body">
                <center>Status: <strong><span class="status"></span></strong></center>
            </div>
            <div class="modal-footer">
                <a href="../../view/autonomo/listarMeusAtendimentos.php?id=<?php echo $autonomo['autid']; ?>" type="button" class="btn btn-default status-yes">Ok</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Info -->
<div class="modal fade" id="modalFinalizacao" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
            <i  class='fa fa-refresh' style='font-size:20px; padding-right:1%;' aria-hidden='false'></i>
            Finalizar Atendimento ?
        </h4>
      </div>
      <div class="modal-body">
        Cliente   : <strong><?php echo $solicitacao['clinome']; ?></strong><br>
        Serviço   : <strong><?php echo $solicitacao['serdescricao']; ?></strong><br>
        Valor (R$): <strong><?php echo $solicitacao['solvalor']; ?></strong><br>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-success confirma-sim">Sim, Finalizar.</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
      </div>
    </div>
  </div>
</div>
