<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Jogadores</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/js/bootstrap.min.js" integrity="sha512-zKeerWHHuP3ar7kX2WKBSENzb+GJytFSBL6HrR2nPSR1kOX1qjm+oHooQtbDpDBSITgyl7QXZApvDfDWvKjkUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="/pages/home.php">
                <img src="/public/image/iconNavBar.svg" style="width: 22px;" alt="">
                Visitantes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <!-- Centralizado -->

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="/pages/home.php">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="/pages/visitantes.php">Visitantes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/pages/gerarRelatorio.php">Relatório</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/pages/historico.php">Histórico</a>
                    </li>
                </ul>
                <!-- Alinhado à direita -->
                <ul class="navbar-nav ">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Opções
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item disabled">Perfil: </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- <li><a class="dropdown-item" href="#">Alterar Senha</a></li> -->
                            <li><a class="dropdown-item text-danger" href="/config/protect/logout.php">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </nav>