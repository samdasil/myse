<?php

    include_once '../../model/modelCliente.php';

		if(isset($_POST['buscarCliente'])){ // buscaAdmin é o nome do submit

        $aut = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

        if(buscarCliente($cli)){
            $result = buscarCliente($cli);
            return $result;
			  }else{
          echo "<script>
                    alert('Nenhum resultado encontrado.');
                </script>";
          $result = listarCliente();
          return $result;

			  }
		}else{
			listarCliente();
		}

	?>
