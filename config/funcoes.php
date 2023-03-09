<?php

    // Todas as funções da página

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $cnpj = $_POST["cnpj"];
            $telefone = $_POST["telefone"];
            $cep = $_POST["cep"];
            $estado = $_POST["estado"];
            $endereco = $_POST["endereco"];
            $numero = $_POST["numero"];
            $cidade = $_POST["cidade"];
            $bairro = $_POST["bairro"];
            $complemento = $_POST["complemento"];
            
            $sql = "INSERT INTO usuarios (
                    nome, email,
                    cpf, cnpj,
                    telefone, cep,
                    estado, endereco,
                    numero, cidade,
                    bairro, complemento
                ) VALUES (
                    '{$nome}', '{$email}',
                    '{$cpf}', '{$cnpj}',
                    '{$telefone}', '{$cep}',
                    '{$estado}', '{$endereco}',
                    '{$numero}', '{$cidade}',
                    '{$bairro}', '{$complemento}')";

            $res = $conn->query($sql);
            
            // Mensagem se der certo ou não o cadastro
            if($res==true){
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }    

            break;
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $cnpj = $_POST["cnpj"];
            $telefone = $_POST["telefone"];
            $cep = $_POST["cep"];
            $estado = $_POST["estado"];
            $endereco = $_POST["endereco"];
            $numero = $_POST["numero"];
            $cidade = $_POST["cidade"];
            $bairro = $_POST["bairro"];
            $complemento = $_POST["complemento"];

            $sql = "UPDATE usuarios SET
                        nome='{$nome}', email='{$email}',
                        cpf='{$cpf}', cnpj='{$cnpj}',
                        telefone='{$telefone}', cep='{$cep}',
                        estado='{$estado}', endereco='{$endereco}',
                        numero='{$numero}', cidade='{$cidade}',
                        bairro='{$bairro}', complemento='{$complemento}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            // Mensagem se der certo ou não o cadastro
            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            } 

            break;
        case 'excluir':

            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            // Mensagem se der certo ou não o cadastro
            if($res==true){
                print "<script>alert('Usuario excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel excluir o usuario');</script>";
                print "<script>location.href='?page=listar';</script>";
            } 


            break;

    }

?>