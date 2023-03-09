<h1>Listar Usuários</h1>

<?php

    include "./config/banco_de_dados_pages/conexao.php";
    //banco de dados - selecionando
    $sql = "SELECT * FROM usuarios";

    //resultado
    $res = $conn->query($sql);

    //quantidade
    $qtd = $res->num_rows;
    
    if ($qtd > 0) {
        //Retornar todos os cadastro dentro da variavel res (resultado)
        print "<div class='container-fluid'>";
        print "<table class='table table-striped table-hover'>";
            print "<thead class='table-dark'>";
                    print "<tr>";
                        print "<th>".'ID'."</th>";
                        print "<th>".'Nome'."</th>";
                        print "<th>".'Email'."</th>";
                        print "<th>".'CPF'."</th>";
                        print "<th>".'CNPJ'."</th>";
                        print "<th>".'Telefone'."</th>";
                        print "<th>".'CEP'."</th>";
                        print "<th>".'Estado'."</th>";
                        print "<th>".'Endereço'."</th>";
                        print "<th>".'Número'."</th>";
                        print "<th>".'Cidade'."</th>";
                        print "<th>".'Bairro'."</th>";
                        print "<th>".'Complemento'."</th>";
                        print "<th>".'Opções'."</th>";
                        print "<th>".''."</th>";
                    print "</tr>";
                    print "</tr>";
                print "</thead>";
        while ($row = $res->fetch_object()) {
            print "<tbody>";
                print "<tr>";
                    print "<td>".$row->id."</td>";
                    print "<td>".$row->nome."</td>";
                    print "<td>".$row->email."</td>";
                    print "<td>".$row->cpf."</td>";
                    print "<td>".$row->cnpj."</td>";
                    print "<td>".$row->telefone."</td>";
                    print "<td>".$row->cep."</td>";
                    print "<td>".$row->estado."</td>";
                    print "<td>".$row->endereco."</td>";
                    print "<td>".$row->numero."</td>";
                    print "<td>".$row->cidade."</td>";
                    print "<td>".$row->bairro."</td>";
                    print "<td>".$row->complemento."</td>";
                    print "<td>
                                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                        </td>";
                    print "<td>
                                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                        </td>";
                print "</tr>";
            print "</tbody>";
        }
        print "</table>";
        print "</div>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }

?>