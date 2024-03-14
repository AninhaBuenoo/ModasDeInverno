<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Bebas+Neue&family=Permanent+Marker&display=swap" rel="stylesheet">

</head>
<body>
    
    <!-- Container Fluid para abrigar o logotipo -->
    <div class="container-fluid text-dark text-center mt-3">
        <img src="img/floco.png" width="200">
        <h1 style='font-family: Permanent Marker'>Modas de Inverno</h1>
    </div>

    <!-- barra de navegação -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapseNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formLogin.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contaiber que abrigará o conteúdo da página-->
    <div class="container text-center bg-secondary mt-3 mb-5">