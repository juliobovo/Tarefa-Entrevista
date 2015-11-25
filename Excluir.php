<?php
	error_reporting(0);
	include('conexao.php');
  $id = $_GET['id'];
  $result=mysql_query("DELETE FROM imoveis WHERE registro='$id'");
?>

<script type="text/javascript">
  alert("IMÓVEL EXCLUIDO COM SUCESSO ");
  window.location.href = "index.php";
</script> 