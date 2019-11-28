<?php

    include_once '../../model/modelCategoria.php';

		if(isset($_POST['buscarCategoria'])){ // buscaAdmin é o nome do submit

        $cat = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

        if(buscarCategoria($cat)){
            $listCategoria = buscarCategoria($cat);
            return $listCategoria;
			  }else{
               echo "<script>
                        alert('Nenhum resultado encontrado.');
                     </script>";
               $listCategoria = listarCategoria();
               return $listCategoria;
			  }
		}else{
			listarCategoria();
		}

	?>
