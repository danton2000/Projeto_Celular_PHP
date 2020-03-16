<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../lib/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.min.css">
    <title>Sistema de escolha de SmarthPhone</title>
</head>

<body>
    <div class="container">
        <form action="mostrar_celular.php" method="POST">
            <div id="conteudo_menu" class="container">
                <div class="row">
                    <div class="col-md-4">
                        <label id="label_celular">Sistema do celular</label>
                        <!-- Group of default radios - option 1 -->
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="android" name="sistema_cel" checked>
                            <label class="custom-control-label" for="android">Android</label>
                        </div>

                        <!-- Group of default radios - option 2 -->
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="ios" name="sistema_cel">
                            <label class="custom-control-label" for="ios">iOS</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label id="label_celular">Armazenamento do celular</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="armazenamento_8" name="armazenamento_cel" checked>
                            <label class="custom-control-label" for="armazenamento_8">8 GB</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="armazenamento_32" name="armazenamento_cel">
                            <label class="custom-control-label" for="armazenamento_32">32 GB</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="armazenamento_64" name="armazenamento_cel">
                            <label class="custom-control-label" for="armazenamento_64">64 GB</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="armazenamento_128" name="armazenamento_cel">
                            <label class="custom-control-label" for="armazenamento_128">128 GB</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="armazenamento_256" name="armazenamento_cel">
                            <label class="custom-control-label" for="armazenamento_256">256 GB</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="armazenamento_512" name="armazenamento_cel">
                            <label class="custom-control-label" for="armazenamento_512">512 GB</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="radio_celular custom-control-input" id="armazenamento_1" name="armazenamento_cel">
                            <label class="custom-control-label" for="armazenamento_1">1 TB</label>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <label id="label_celular">Memória do celular</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="memoria_1" name="memoria_cel" checked>
                            <label class="custom-control-label" for="memoria_1">1 GB</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="memoria_2" name="memoria_cel">
                            <label class="custom-control-label" for="memoria_2">2 GB</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="memoria_3" name="memoria_cel">
                            <label class="custom-control-label" for="memoria_3">3 GB</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="memoria_4" name="memoria_cel">
                            <label class="custom-control-label" for="memoria_4">4 GB</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="memoria_6" name="memoria_cel">
                            <label class="custom-control-label" for="memoria_6">6 GB</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="memoria_8" name="memoria_cel">
                            <label class="custom-control-label" for="memoria_8">8 GB</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="memoria_12" name="memoria_cel">
                            <label class="custom-control-label" for="memoria_12">12 GB</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label id="label_celular">Tamanho do celular</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="tela_5" name="tela_cel" checked>
                            <label class="custom-control-label" for="tela_5">5 Polegadas</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="tela_6" name="tela_cel">
                            <label class="custom-control-label" for="tela_6">6 Polegadas</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="tela_7" name="tela_cel">
                            <label class="custom-control-label" for="tela_7">7 Polegadas</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label id="label_celular">Qualidade da Camera do celular</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="camera_8" name="camera_cel" checked>
                            <label class="custom-control-label" for="camera_8">8 MP</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="camera_12" name="camera_cel">
                            <label class="custom-control-label" for="camera_12">12 MP</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="camera_13" name="camera_cel">
                            <label class="custom-control-label" for="camera_13">13 MP</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="camera_16" name="camera_cel">
                            <label class="custom-control-label" for="camera_16">16 MP</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="radio_celular custom-control-input" id="camera_20" name="camera_cel">
                            <label class="custom-control-label" for="camera_20">20 MP</label>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <label id="label_celular">Resultado</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="botoes">
                        <div class="col-md-5">
                            <input type="submit" class="btn btn-success" value="Pesquisar">
                        </div>

                        <div class="col-md-5">
                            <input type="submit" class="btn btn-dark" value="Limpar">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>