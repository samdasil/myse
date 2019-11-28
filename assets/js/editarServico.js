<script type="text/javascript">

  $('.enviar-dados').on('click', function(evento) {

         evento.preventDefault();
            var id = document.getElementById("id").value;
            var dados = $("#formulario").serialize();

            //alert(estcodigo);  /*DEBUG*/

            console.log(dados);

            $.ajax({
                type: "POST",
                dataType: "html",
                url: "../../control/controlEditarServico.php?acao=editar&id="+id+"",
                data: dados,

                success: function(respostaDaURL) {

                    if (respostaDaURL == "") {
                        respostaDaURL = "Não houve resposta da página" + url;
                    }

                    $('span.status').text(respostaDaURL);
                    $("#modalStatus").modal('show');

                    $("a.status-yes").click(function() {
                        window.location.href="../../view/sindico/listarServico.php";
                    });


                },
                error: function(respostaDaURL) {

                    if (respostaDaURL == "") {
                        respostaDaURL = "Não houve resposta da página" + url;
                    }

                    $('span.status').text(respostaDaURL);
                    $("#modalStatus").modal('show');

                    $("a.status-yes").click(function() {
                        window.location.reload();
                    });
                }
            });
    });
</script>
