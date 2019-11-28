<?php

    include_once '../../model/modelBairro.php';

		if(isset($_POST['buscarBairro'])){ // buscaAdmin é o nome do submit

        $bai = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

        if(buscar($bai)){
            $result = buscar($bai);
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
