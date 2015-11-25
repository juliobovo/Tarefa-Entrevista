<?php
  error_reporting(0);
  include('conexao.php');
  $id = $_GET['id'];
  $tipo=$_POST['txt_tipo'];
  $dormitorios=$_POST['txt_dormitorios'];
  $bairro= $_POST['txt_bairro'];
  $cidade= $_POST['txt_cidade'];
  $estado= $_POST['txt_estado'];
  $result=mysql_query("UPDATE imoveis SET tipo='$tipo', dormitorios='$dormitorios', bairro='$bairro', cidade='$cidade', estado='$estado'"
          . "WHERE registro='$id'");

?>
<script type="text/javascript">
  alert("IMÓVEL ALTERADO COM SUCESSO!");
  window.location.href = "index.php";
</script>