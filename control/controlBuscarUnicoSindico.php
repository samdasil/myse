<?php

    include_once '../../model/modelSindico.php';

    if(isset($_GET['id'])){
      $id=$_GET['id'];
      echo "<script>
                alert('2 ".$id."');
            </script>";
    }
    if(buscarUnico($id)){

      $result = buscarUnico($id);

    }else{
      echo "<script>
                alert('Erro ao buscar síndico');
            </script>";
      
    }



	?>
