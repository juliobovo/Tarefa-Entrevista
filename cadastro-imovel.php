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
         <a href="index.php">Início</a>
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
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 titulo">Cadastro de Imóvel</div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centro">
              <form role="form" method="POST" action="insere-imovel.php" >
                <div class="form-group col-xs-12 col-sm-8 col-md-10 col-lg-10 esquerda">
                  <label for="tipo">Tipo</label>
                  <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Ex. Casa ou Apartamento" required Maxlength="11" />
                </div>
                <div class="form-group col-xs-12 col-sm-4 col-md-2 col-lg-2 esquerda">
                  <label for="dormitorios">Nº Dormitorios</label>
                  <input type="number" class="form-control" id="dormitorios" name="dormitorios"  placeholder="" required Maxlength="2" />
                </div>
                <div class="form-group col-xs-12 col-sm-4 col-md-5 col-lg-5 esquerda">
                  <label for="bairro">Bairro</label>
                  <input type="text" class="form-control" id="bairro" name="bairro"  placeholder="" required Maxlength="50" />
                </div>
                <div class="form-group col-xs-12 col-sm-4 col-md-5 col-lg-5 esquerda">
                   <label for="cidade">Cidade</label>
                   <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" required />
                </div>
                <div class="form-group col-xs-12 col-sm-4 col-md-2 col-lg-2 esquerda">
                  <label for="estado">Estado</label>
                  <input type="text" class="form-control" id="estado" name="estado" placeholder="" required Maxlength="140" />
                </div>
                
                <button type="submit" class="btn btn-primary" id="btn_finalizarcadastro">Finalizar Cadastro</button>
                <button type="reset" class="btn btn-default">Limpar Dados</button>
              </form>
            </div>
          </div>
        </div><!-- end #conteudo -->
      </div>
    </div>    
        
    <?php 
      mysql_close($conexao );
    ?>
        
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  S</body>
</html>