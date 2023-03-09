<?php
    //Função editar Formulario
    $sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();

?>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>Editar Usuário</h1>
            <form action="?page=salvar" method="POST" class="row g-3">
                <input type="hidden" name="acao" value="editar">
                <input type="hidden" name="id" value="<?php print $row->id; ?>">
                <div class="col-md-6">
                    <label for="" class="form-label">Nome</label>
                    <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">CPF</label>
                    <input type="number" name="cpf" value="<?php print $row->cpf; ?>" class="form-control">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">CNPJ</label>
                    <input type="number" name="cnpj" value="<?php print $row->cnpj; ?>" class="form-control">
                    <div class="form-text">(Não é obrigatorio!)</div>
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Telefone</label>
                    <input type="tel" name="telefone" value="<?php print $row->telefone; ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">CEP</label>
                    <input type="text" name="cep" value="<?php print $row->cep; ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Estado</label>
                    <select name="estado" value="<?php print $row->estado; ?>" class="form-select">
                        <option></option>
                        <option>MG</option>
                        <option>BH</option>
                        <option>RJ</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Endereço</label>
                    <input type="text" name="endereco" value="<?php print $row->endereco; ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Numero</label>
                    <input type="number" name="numero" value="<?php print $row->numero; ?>" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Cidade</label>
                    <input type="text" name="cidade" value="<?php print $row->cidade; ?>" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Bairro</label>
                    <input type="text" name="bairro" value="<?php print $row->bairro; ?>" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Complemento</label>
                    <input type="text" name="complemento" value="<?php print $row->complemento; ?>" class="form-control">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>