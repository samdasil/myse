<?php

    include_once '../../model/modelAutonomo.php';

		if(isset($_POST['buscarAutonomo'])){ // buscaAdmin é o nome do submit

        $aut = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

        if(buscarAutonomo($aut)){
            $result = buscarAutonomo($aut);
            return $result;
			  }else{
          echo "<script>
                    alert('Nenhum resultado encontrado.');
                </script>";
          $result = listarAutonomo();
          return $result;

			  }
		}else{
			listarAutonomo();
		}

	?>
