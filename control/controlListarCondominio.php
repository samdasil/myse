<?php

   include '../../model/modelCondominio.php';

   if(listarCondominio()){

      $listCondominio = listarCondominio();

      return $listCondominio;

   }else{

      return false;

   }

?>
