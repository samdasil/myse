<?php

    include_once '../../model/modelSolicitacao.php';

		if(isset($_POST['buscarSolicitacao'])){ // buscaAdmin é o nome do submit

        $sol = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa
        $cli = $_POST['cliente'];
        if(buscarNovas($sol, $cli)){
            $resultado = buscarNovas($sol, $cli);
            return $resultado;
			  }else{
          echo "<script>
                    alert('Nenhum resultado encontrado.');
                </script>";
          $resultado = listarSolicitacoes($cli);
          return $resultado;

			  }
		}else{
			listarSolicitacoes($cli);
		}

	?>
