<?php

    include_once '../../model/modelServico.php';

		if(isset($_POST['buscarServico'])){ // buscaAdmin é o nome do submit

        $ser = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

        if(buscarServico($ser)){
            $listServico = buscarServico($ser);
            return $listServico;
			  }else{
          echo "<script>
                    alert('Nenhum resultado encontrado.');
                </script>";
          $listServico = listarServico();
          return $listServico;
			  }
		}else{
			listarServico();
		}

	?>
