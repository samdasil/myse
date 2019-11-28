<?php

    include_once '../../model/modelSolicitacao.php';

		if(isset($_POST['buscarSolicitacao'])){ // buscaAdmin é o nome do submit

        $aut = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

        if(listarMeusAtendimentosHistorico($aut)){
            $resultado = listarMeusAtendimentosHistorico($aut);
            return $resultado;
			  }else{
          echo "<script>
                    alert('Nenhum resultado encontrado.');
                </script>";
          $resultado = listarMeusAtendimentosHistorico($aut);
          return $resultado;

			  }
		}else{
			listarMeusAtendimentosHistorico($aut);
		}

	?>
