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
    <?php
      error_reporting(0);
      $id = $_GET['id'];
      include('conexao.php');
      $result=mysql_query("select * from imoveis where registro='$id'");
      $dados=  mysql_fetch_array($result);
    ?>
        
    <div class="container-fluid">
      <div class="row">
        <div id="menu" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 centro">
          <h4>Menu</h4>
          <p><a href="cadastro-imovel.php">Editar Im&oacute;vel</a></p>
        </div><!-- end #menu -->
        <div id="conteudo" class="col-xs-12 col-sm-10 col-md-10 col-lg-10 ">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 titulo">Cadastro de Imóvel</div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centro">
              <form role="form" method="POST" action="alterarimovel.php?id=<?php echo $id;?>" >
                <div class="form-group col-xs-12 col-sm-8 col-md-10 col-lg-10 esquerda">
                  <label for="tipo">Tipo</label>
                  <input type="text" class="form-control" id="tipo" name="txt_tipo" value="<?php echo $dados['tipo']; ?>" />
                </div>
                <div class="form-group col-xs-12 col-sm-4 col-md-2 col-lg-2 esquerda">
                  <label for="dormitorios">Nº Dormitorios</label>
                  <input type="text" class="form-control" id="dormitorios" name="txt_dormitorios" value="<?php echo $dados['dormitorios']; ?>" />
                </div>
                <div class="form-group col-xs-12 col-sm-4 col-md-5 col-lg-5 esquerda">
                  <label for="bairro">Bairro</label>
                  <input type="text" class="form-control" id="bairro" name="txt_bairro"  value="<?php echo $dados['bairro']; ?>" />
                </div>
                <div class="form-group col-xs-12 col-sm-4 col-md-5 col-lg-5 esquerda">
                   <label for="cidade">Cidade</label>
                   <input type="text" class="form-control" id="cidade" name="txt_cidade" value="<?php echo $dados['cidade']; ?>" />
                </div>
                <div class="form-group col-xs-12 col-sm-4 col-md-2 col-lg-2 esquerda">
                  <label for="estado">Estado</label>
                  <input type="text" class="form-control" id="estado" name="txt_estado" value="<?php echo $dados['estado']; ?>" />
                </div>
                
                <button type="submit" class="btn btn-primary" id="btn_alterarimovel">Alterar</button>
              </form>
            </div>
          </div>
        </div><!-- end #conteudo -->
      </div>
    </div>
              
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>