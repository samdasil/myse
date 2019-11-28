<?php

    include_once '../../model/modelCondominio.php';

		if(isset($_POST['buscarCondominio'])){

        $cond = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

        if(buscarCondominio($cond)){
            $listCondominio = buscarCondominio($cond);
            return $listCondominio;
			  }else{
            echo "<script>
                      alert('Nenhum resultado encontrado.');
                  </script>";
            $listCondominio = listarCondominio();
            return $listCondominio;
			  }
		}else{
			listarCondominio();
		}

	?>
