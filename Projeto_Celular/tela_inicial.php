<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Menu</title>
  <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="lib/css/style.css">
  <script src="https://kit.fontawesome.com/06ffaaed9a.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="tela_inicial">
  <div class="container" id="">
    <a href="../index.html" role="button" id="botao_voltar_login" class="btn btn-sm"><i class="fas fa-door-open"></i>Voltar para Site</a>
  </div>

  <div class="container" id="icones_menu">
    <div class="row">
      <div class="col-sm-6">
        <div class="hoverzoom">
          <img id="img_celular" class="img-webp img-thumbnail" src="img/smartphones.webp">
          <div class="retina">
            <a href="telas/celular/pesquisa_celular.php" id="btn_mostrar_pesquisa" class="a1 btn btn-sm">Escolher SmartPhone</a>
            <a href="telas/celular/listar_celular.php" id="btn_mostrar_listas" class="a2 btn btn-sm">Listar SmartPhone</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="hoverzoom">
          <img id="img_celular" class="img-webp img-thumbnail" src="img/administradores.webp">
          <div class="retina">
            <a href="telas/celular/adicionar_celular.php" id="btn_mostrar_add" class="a1 btn btn-sm">Adicionar SmartPhone</a>
            <a href="telas/administrador/listar_admin.php" id="btn_listar_admin" class="a2 btn btn-sm">Listar Administradores</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha385-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>