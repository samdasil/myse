<?php

    include_once '../model/modelPerfil.php';

    if(isset($_POST['logar'])){

      $login = $_POST['login'];
      $senha = $_POST['senha'];

      $result = realizarLogin($login,$senha);

      if($result){

        switch ($result[1]) {
          case 0:
                //echo $result[1];
                //header("Location: .$result[0]");
                echo "<script>
                          alert('Login realizado com sucesso.');
                          window.open('".$result[0]."','_self');
                      </script>";
            break;

          case 1:
                //echo $result[1];
                echo "<script>
                          alert('Login ou senha incorretos.');
                          window.open(' ".$result[0]." ','_self');
                      </script>";
              break;

          default:
            // code...
            break;
        }
      }else{
          header("Location: ../../../index.php ");
      }
    }else{
      header("Location: ../../../index.php ");
    }
    // FIM VERIFICAR POST

?>
