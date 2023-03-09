<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>Novo Usuário</h1>
            <form action="?page=salvar" method="POST" class="row g-3">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="col-md-6">
                    <label for="" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">CPF</label>
                    <input type="number" name="cpf" class="form-control">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">CNPJ</label>
                    <input type="number" name="cnpj" class="form-control">
                    <div class="form-text">(Não é obrigatorio!)</div>
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Telefone</label>
                    <input type="tel" name="telefone" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">CEP</label>
                    <input type="text" name="cep" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Estado</label>
                    <select name="estado" class="form-select">
                        <option selected></option>
                        <option>MG</option>
                        <option>BH</option>
                        <option>RJ</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Endereço</label>
                    <input type="text" name="endereco" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Numero</label>
                    <input type="number" name="numero" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Cidade</label>
                    <input type="text" name="cidade" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Bairro</label>
                    <input type="text" name="bairro" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Complemento</label>
                    <input type="text" name="complemento" class="form-control">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

