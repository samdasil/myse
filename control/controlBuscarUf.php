<?php

    include_once '../../model/modelUf.php';

		if(isset($_POST['buscarUf'])){ // buscaAdmin é o nome do submit

        $uf = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

        if(buscar($uf)){
            $result = buscar($uf);
            return $result;
			  }else{
          echo "<script>
                    alert('Nenhum resultado encontrado.');
                </script>";
          $result = listar();
          return $result;
			  }
		}else{
			listar();
		}

	?>
