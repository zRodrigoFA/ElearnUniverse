<?php
session_start(); // Iniciar a sessão

include('conexao.php');

if (isset($_SESSION['user_nome'])) {
    // O usuário já está logado, redirecionar para a página de usuário
    header("Location: usuario.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos.css">
    

    <title>Loja de Cursos :: Página Principal</title>
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
                            
                            <a href="login.php" class="nav-link text-info">
                                <i class="bi-cart" style="font-size: 24px;line-height: 24px;">
                            </i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<div class="localização"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.633304899221!2d-46.71427362454293!3d-23.653299864976574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce51aaf11432ad%3A0x4578b756c7a1a2e7!2sUNINOVE%20-%20Campus%20Santo%20Amaro!5e0!3m2!1spt-BR!2sbr!4v1699827418162!5m2!1spt-BR!2sbr" width="800" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></a>
 </div>
</body>
</html>