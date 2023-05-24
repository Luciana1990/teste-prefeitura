<h1>Lista Cadastros</h1>
<?php
    $sql = "SELECT * FROM pessoa";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>ID</th>";
            print "<th>Nome</th>";
            print "<th>Data Nascimento</th>";
            print "<th>CPF</th>";
            print "<th>Sexo</th>";
            print "<th>Cidade</th>";
            print "<th>Bairro</th>";
            print "<th>Rua</th>";
            print "<th>N°</th>";
            print "<th>Compl</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->data_nascimento."</td>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->sexo."</td>";
            print "<td>".$row->cidade."</td>";
            print "<td>".$row->bairro."</td>";
            print "<td>".$row->rua."</td>";
            print "<td>".$row->numero."</td>";
            print "<td>".$row->complemento."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick class='btn btn-danger'>Excluir</button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>