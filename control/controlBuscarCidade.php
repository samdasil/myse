<?php

    include_once '../../model/modelCidade.php';

		if(isset($_POST['buscarCidade'])){ // buscaAdmin é o nome do submit

        $cid = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

        if(buscar($cid)){
            $result = buscar($cid);
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
