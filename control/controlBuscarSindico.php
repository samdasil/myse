<?php

    include_once '../../model/modelSindico.php';

		if(isset($_POST['buscarSindico'])){ // buscaAdmin é o nome do submit

        $sin = $_POST['buscar']; // pesquisa é o nome do campo de pesquisa

        if($sin <> ''){
          if(buscarSindico($sin)){
              $listSindico = buscarSindico($sin);
              return $listSindico;
          }else{
            echo "<script>
                      alert('Nenhum resultado encontrado.');
                  </script>";
          $listSindico = listarSindico();
            return $listSindico;
          }
        }else{
          echo "<script>
                    alert('Favor preencher o campos de pesquisa.');
                </script>";
          $listSindico = listarSindico();
          return $listSindico;
        }

		}else{
			listarSindico();
      return $result;
		}

	?>
