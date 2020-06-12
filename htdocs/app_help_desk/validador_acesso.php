<?php 
  session_start();
  if (isset($_SESSION['autenticado'])==false || $_SESSION['autenticado'] != 'SIM') {
    header('Location: index.php?login=erro2');
  } else {
    echo "nao deu erro";
  }

 ?>