<?php

    include_once '../../model/modelAdmin.php';

		//if(isset($_POST['buscarAdmin'])){ // buscaAdmin é o nome do submit

        $adm = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

         if(buscarAdmin($adm)){
            $listAdmin = buscarAdmin($adm);
            return $listAdmin;
   		}else{
            echo "<script>
                     alert('Nenhum resultado encontrado.');
                  </script>";
            $listAdmin = listarAdmin();
            return $listAdmin;
   		}
	//	}else{
			listarAdmin();
	//	}

	?>
