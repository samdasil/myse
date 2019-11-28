<?php

   include '../../model/modelCliente.php';

   if(listarCliente()){

      $result = listarCliente();

      return $result;

   }else{

      return false;

   }

?>
