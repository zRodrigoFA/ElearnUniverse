<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos.css">

    <title>eLearnUniverse:: Mensagem Recebida</title>
</head>

<body>

    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg navbar-bg-dark bg-black border-bottom shadow-sm mb-3">
            <div class="container-fluid">
                <a class="navbar-brand text-info" href="index.php">
                    <img src="IMG/logo.png" alt="logo" width="50" height="50" class="d-inline-center text-center"> eLearnUniverse
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                  <span class=" navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse ">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link active text-info" href="index.php ">Principal</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active text-info" href="contato.php">Contato</a>
                        </li>
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="cadastro.php" class="nav-link text-info">Quero Me Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link text-info">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="carrinho.php" class="nav-link text-info">
                                    <i class="bi-cart" style="font-size: 24px;line-height: 24px;">
                                </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="flex-fill">
            <div class="container text-info">
                <h1>Mensagem Recebida!</h1>
                <hr>
                <p>
                    Caro cliente,
                </p>
                <p>
                    Informamos que sua mensagem foi recebida com sucesso por nossa central de relacionamento com clientes e que em até <b>2 dias úteis</b> ela será respondida. Para evitarmos problemas de comunicação, evite reenviar esta mesma mensagem
                    dentro do prazo de resposta.
                </p>
                <p>
                    Agradecemos pela confiança em nossos serviços.
                </p>
                <p>
                    Cordialmente,<br> Central de Relacionamento Loja de Cursos
                </p>
            </div>
        </main>

        <footer class=" border-top text-muted bg-dark ">
            <div class="container ">
                <div class="row py-3 ">
                    <div class="col-12 col-md-4 text-center text-info">
                    <a href="localizacao.php"class="text-decoration-none text-info">  R. Amador Bueno, 389/491 - Santo Amaro, São Paulo - SP, 04752-900<br> CNPJ 99.999.999/0001-99</a>
                    </div>
                    <div class="col-12 col-md-4 text-center ">
                        <a href="privacidade.php " class="text-decoration-none text-info">Política de Privacidade</a><br>
                        <a href="termos.php " class="text-decoration-none text-info ">Termos de Uso</a><br>
                        <a href="quemsomos.php " class="text-decoration-none text-info">Quem Somos</a><br>
                        <a href="cancelamento.php " class="text-decoration-none text-info ">Política de Cancelamento</a>
                        <br>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="contato.php " class="text-decoration-none text-info">Contato pelo Site</a><br>
                        <a href="mailto:email@dominio.com " class="text-decoration-none text-info">E-mail: email@dominio.com</a><br>
                        <a href="phone:28999999990 " class="text-decoration-none text-info"> Telefone:(28) 99999-9990</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src=" node_modules/bootstrap/dist/js/bootstrap.bundle.min.js "></script>

</body>

</html>