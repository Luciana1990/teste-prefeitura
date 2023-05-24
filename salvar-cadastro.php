<?php
    
            require_once "config.php";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $data_nasc = $_POST["data_nasc"];
            $cpf = $_POST["cpf"];
            $sexo = $_POST["sexo"];
            $cidade = $_POST["cidade"];
            $bairro = $_POST["bairro"];
            $rua = $_POST["rua"];
            $numero = $_POST["numero"];
            $complemento = $_POST["complemento"];

            $sql = "INSERT INTO pessoa (nome, data_nascimento, cpf, sexo, cidade, bairro, rua, numero, complemento) VALUES ('{$nome}', '{$data_nasc}', '{$cpf}', '{$sexo}', '{$cidade}', '{$bairro}', '{$rua}', '{$numero}', '{$complemento}')";

            if ($conn->connect_error) {         die("Falha na conexão com o banco de dados: " . $conn->connect_error);     }

            $res = $conn->query($sql);

            if ($res === TRUE) {         echo "Cadastro realizado com sucesso!";     } else {         echo "Erro ao cadastrar: " . $conn->error;     }
            }
            else if ($_SERVER["REQUEST_METHOD"] == "PUT") {
                $nome = $_POST["nome"];
                $data_nasc = $_POST["data_nasc"];
                $cpf = $_POST["cpf"];
                $sexo = $_POST["sexo"];
                $cidade = $_POST["cidade"];
                $bairro = $_POST["bairro"];
                $rua = $_POST["rua"];
                $numero = $_POST["numero"];
                $complemento = $_POST["complemento"];

                $sql = "UPDATE pessoa SET
                            nome='{$nome}',
                            data_nascimento='{$data_nasc}',
                            cpf='{$cpf}',
                            sexo='{$sexo}',
                            cidade='{$cidade}',
                            bairro='{$bairro}',
                            rua='{$rua}',
                            numero='{$numero}',
                            complemento='{$complemento}'
                        WHERE
                            id=".$_REQUEST["id"];
                            
                $res = $conn->query($sql);

                if ($res === TRUE) {         echo "Editado com sucesso!";     } else {         echo "Não foi possível editar" . $conn->error;     }

            } 
            else if ($_SERVER["REQUEST_METHOD"] == "DELETE") {

                $sql = "DELETE FROM pessoa WHERE ID."$_REQUEST["id"];

                $res = $conn->query($sql);

                if ($res === TRUE) {         echo "Excluído com sucesso!";     } else {         echo "Não foi possível excluir!" . $conn->error;     }
                
            }
