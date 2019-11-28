<?php

    include_once '../../model/modelSolicitacao.php';

		if(isset($_POST['buscarSolicitacao'])){ // buscaAdmin é o nome do submit

        $aut = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

        if(listarMeusAtendimentos($aut)){
            $resultado = listarMeusAtendimentos($aut);
            return $resultado;
			  }else{
          echo "<script>
                    alert('Nenhum resultado encontrado.');
                </script>";
          $resultado = listarMeusAtendimentos($aut);
          return $resultado;

			  }
		}else{
			listarMeusAtendimentos($aut);
		}

	?>
