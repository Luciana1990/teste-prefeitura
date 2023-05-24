<h1>Editar Cadastro</h1>
    <?php 
        $sql = "SELECT * FROM pessoa WHERE id=".    $_REQUEST["id"];
        $res = $conn->query($sql);
        $row = $res->fetch_object();
    ?>
<form action="salvar-cadastro.php" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nascimento; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf" value="<?php print $row->cpf; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Sexo</label>
        <input type="radio" id="masculino" name="sexo" value="masculino" required>
        <label for="masculino">Masculino</label>
    <input type="radio" id="feminino" name="sexo" value="feminino" required>
        <label for="masculino">Feminino</label></div>
    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" value="<?php print $row->cidade; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Bairro</label>
        <input type="text" name="bairro" value="<?php print $row->bairro; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Rua</label>
        <input type="text" name="rua" value="<?php print $row->rua; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Número:</label>
        <input type="number" name="numero" value="<?php print $row->numero; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Complemento</label>
        <input type="text" name="complemento" value="<?php print $row->complemento; ?>" class="form-control">
    </div>
    <div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>