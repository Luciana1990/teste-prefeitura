<h1>Novo Protocolo</h1>
<form action="salvar-cadastro.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Descrição</label>
        <input type="textarea" name="bairro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data</label>
        <input type="text" name="rua" class="form-control">
    </div>
    <div class="mb-3">
        <label>Prazo</label>
        <input type="text" name="complemento" class="form-control">
    </div>
    <div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>