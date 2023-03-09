<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>

    <?php

    include('db.php'); // -> BANCO DE DADOS

    if (isset($_POST['usuario']) || isset($_POST['senha'])) {
        if (strlen($_POST['usuario']) == 0) {

             print "<div class='alert alert-danger d-flex align-items-center' role='alert'>"."Prencha o campo do usuario"."</div>";

           //$retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o campo usuario!"];

        } else if (strlen($_POST['senha']) == 0) {

             print "<div class='alert alert-danger d-flex align-items-center' role='alert'>"."Prencha o campo da senha!"."</div>";

            //$retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o campo senha!"];

        } else {

            $usuario = $connLogin->real_escape_string($_POST['usuario']);
            $senha = $connLogin->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM cadastro WHERE usuario = '$usuario' AND senha = '$senha'";
            $sql_query = $connLogin->query($sql_code) or die("Falha na execução do código SQL:" . $connLogin->error);

            $quantidade = $sql_query->num_rows;

            if ($quantidade == 1) {

                $usuario = $sql_query->fetch_assoc(); // -> DADOS DO USUARIO

                if (!isset($_SESSION)) { //-> SE NÃO TIVER SESSÂO
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];

                header("location: ../index.php"); //-> LINK PARA HOME

            } else {

                print "<div class='alert alert-danger d-flex align-items-center' role='alert'>"."Falha ao logar! Usuario ou senha estão incorretos."."</div>";

            }
            
        }

    }

    

    ?>
    <section class="area-login">
        <div class="login">
            <div class=""><img src="../img/unitri.png"></div>
                <form action="" method="POST" id="form-login">
                        <input type="text" name="usuario" placeholder="Usuário" autofocus class="">
                        <input type="password" name="senha" placeholder="Senha" class="">
                        <input type="submit" name="login" value="Logar" class="btn btn-primary" id="login-usuario-btn"></button>
                </form>
                <p>Você nao tem uma conta?<a href="https://unitri.edu.br/">Criar</a></p>
            </div>
    </section>

    <!-- <script src="../sweealert/sweetalert.js"></script>
    <script src="../sweealert/custom.js"></script> -->
</body>

</html>


