<h1>Novo Cadastro</h1>
<form action="salvar-cadastro.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Sexo</label>
        <input type="radio" id="masculino" name="sexo" value="masculino" required>
        <label for="masculino">Masculino</label>
    <input type="radio" id="feminino" name="sexo" value="feminino" required>
        <label for="masculino">Feminino</label></div>
    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" class="form-control">
    </div>
    <div class="mb-3">
        <label>Bairro</label>
        <input type="text" name="bairro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Rua</label>
        <input type="text" name="rua" class="form-control">
    </div>
    <div class="mb-3">
        <label>Número:</label>
        <input type="number" name="numero" class="form-control">
    </div>
    <div class="mb-3">
        <label>Complemento</label>
        <input type="text" name="complemento" class="form-control">
    </div>
    <div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>