<?php
  error_reporting(0);
  include('conexao.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Imobiliaria</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="topo" class="container-fluid">
      <div class="row">
        <div id="logo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centro">
          <img src="logo.jpg" />
        </div>
      </div>
    </div><!-- end #top -->

    <div class="container-fluid">
      <div class="row">
        <div id="menu" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 centro">
          <h4>Menu</h4>
          <p><a href="cadastro-imovel.php">Cadastrar Novo Im&oacute;vel</a></p>
        </div><!-- end #menu -->
        <div id="conteudo" class="col-xs-12 col-sm-10 col-md-10 col-lg-10 ">
          <?php
            $result=mysql_query("select registro, tipo, dormitorios, bairro,cidade, estado from imoveis");
          ?> 

          <table id="tabela_imoveis1" class="table table-condensed table-striped">
            <thead>
              <tr>
                <th>Tipo</th>
                <th>Dormitórios</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
              </tr>
            </thead>
           
            <?php while($linha = mysql_fetch_array($result)) { ?>
              <tr>
                <td><?php echo $linha['tipo'] ?></td>
                <td><?php echo $linha['dormitorios'] ?></td>
                <td><?php echo $linha['bairro'] ?></td> 
                <td><?php echo $linha['cidade'] ?></td> 
                <td><?php echo $linha['estado'] ?></td> 
                <td><a href=editar.php?id=<?php echo $linha['registro'];?>> Editar</a></td>
                <td><a href=decisao.php?id=<?php echo $linha['registro'];?>> Excluir</a></td> 
              </tr>
            <?php } ?>
          </table>

          <?php 
            mysql_close($conexao);
          ?>
        </div><!-- end #conteudo -->
      </div>
    </div>
                      
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>