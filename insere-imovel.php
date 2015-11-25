<?php
	error_reporting(0);
  
	include('conexao.php');
	include('Imovel.php');
  
	$tipo = $_POST['tipo'];
	$dormitorios = $_POST['dormitorios'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
  
	$imovel = new Imovel($tipo, $dormitorios, $bairro, $cidade, $estado);
	$imovel->cadastrar();
?>
<script type="text/javascript">
	alert("CADASTRO EFETUADO COM SUCESSO ");
	window.location.href = "index.php";
</script>  
