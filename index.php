<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="./sweealert/sweetalert.js"></script>
</head>

<body>
    <!-- Menu -->
    
    <?php
    
        include('./login/protection.php');
    

    ?>
    
    <header>  
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Cadastro de Usuários</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=novo">Novo Usuário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=listar">Listar Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login/logout.php">Sair</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" action="./page_pesquisar/pesquisar.php">
                        <input class="form-control me-2" type="search" name="filtroPesquisa" placeholder="Pesquisar Usuários" aria-label="Search" id="pesquisar">
                        <button onclick="searchData()" class="btn btn-outline-success" type="submit" value="buscar">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

   
    <!-- Conexão com a pagina salvar-usuario para puxar as funções -->
    <?php

    include("./config/banco_de_dados_pages/conexao.php");

    switch (@$_REQUEST["page"]) {
        case "novo":
            include("novo-usuarios.php");
            break;
        case "listar":
            include("./listar-usuario.php");
            break;
        case "salvar":
            include("./config/funcoes.php");
            break;
        case "editar":
            include("editar-usuario.php");
            break;
        default:
            print "<main>";
                print "<div class='container'>";
                    print "<div class='row'>";
                        print "<div class='col mt-5'>";
                            print "<h1>Bem Vindo</h1>";
                        print "</div>";
                    print "</div>";
                print "</div>";
            print "</main>";
    }
    //Pesquisa

    ?>

    <footer>
        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>