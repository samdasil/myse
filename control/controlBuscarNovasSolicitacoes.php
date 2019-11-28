<?php

    include_once '../../model/modelSolicitacao.php';

		if(isset($_POST['buscarSolicitacao'])){ // buscaAdmin é o nome do submit

        $sol = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

        if(listarNovasSolicitacoesBusca($sol)){
            $resultado = listarNovasSolicitacoesBusca($sol);
            return $resultado;
			  }else{
          echo "<script>
                    alert('Nenhum resultado encontrado.');
                </script>";
          $resultado = listarNovasSolicitacoes();
          return $resultado;

			  }
		}else{
			listarNovasSolicitacoes();
		}

	?>
