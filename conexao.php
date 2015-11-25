<?php
  $conexao = mysql_connect("localhost","u549346905_root","123456");
        
  if (!$conexao){
      die('Nao foi possivel conectar: ' . mysql_error());
  }
        
  mysql_select_db("u549346905_imob");
?>