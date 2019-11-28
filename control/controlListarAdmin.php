<?php

   include '../../model/modelAdmin.php';

   if(listarAdmin()){

      $listAdmin = listarAdmin();

      return $listAdmin;

   }else{

      return false;

   }

?>
