<?php
      $host        = "localhost";
      $user        = "root";
      $pass        = "";
      $dbase       = "myse_db";

      $con = new mysqli($host, $user, $pass, $dbase);

      if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());

      mysqli_query($con,"SET NAMES 'utf8'");
      mysqli_query($con,'SET character_set_connection=utf8');
      mysqli_query($con,'SET character_set_client=utf8');
      mysqli_query($con,'SET character_set_results=utf8');
?>
