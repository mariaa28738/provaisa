<?php
include 'Conexao12.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da Pesquisa e Exclusão de Alunos</title>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ffeef8, #ffb3d9);
            font-family: 'Helvetica', sans-serif;
            color: #d5006d;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
            text-align: center;
        }
        h1 {
            font-size: 2.5em;
            margin: 20px 0;
            font-weight: 700;
        }
        table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        th, td {
            border: 1px solid #d5006d;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #ffb3d9;
        }
        tr:nth-child(even) {
            background-color: #ffeef8;
        }
        .message {
            margin: 20px 0;
            font-size: 1.5em;
        }
        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #d5006d;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .back-button:hover {
            background-color: #a0003a;
        }
    </style>
</head>
<body>

<?php
if (isset($_POST['criterio']) && isset($_POST['valor'])) {
    $criterio = $_POST['criterio'];
    $valor = $_POST['valor'];

    $sql = "SELECT * FROM alunos WHERE $criterio='$valor'";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<h1>Resultados da Pesquisa:</h1>";
        echo "<table>
                <tr>
                    <th>Nome</th>
                    <th>Matrícula</th>
                    <th>Curso</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Curso para Horas Complementares</th>
                    <th>Carga Horária</th>
                </tr>";
        
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <td>{$row['nome']}</td>
                    <td>{$row['matricula']}</td>
                    <td>{$row['curso']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['telefone']}</td>
                    <td>{$row['endereco']}</td>
                    <td>{$row['cep']}</td>
                    <td>{$row['cidade']}</td>
                    <td>{$row['uf']}</td>
                    <td>{$row['curso_horas']}</td>
                    <td>{$row['carga_horaria']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<div class='message'>Nenhum registro encontrado.</div>";
    }
}

if (isset($_POST['excluir_criterio']) && isset($_POST['excluir_valor'])) {
    $excluir_criterio = $_POST['excluir_criterio'];
    $excluir_valor = $_POST['excluir_valor'];

    $sql_delete = "DELETE FROM alunos WHERE $excluir_criterio='$excluir_valor'";
    if (mysqli_query($conn, $sql_delete)) {
        echo "<div class='message'>Registro excluído com sucesso!</div>";
    } else {
        echo "<div class='message'>Erro ao excluir registro: " . mysqli_error($conn) . "</div>";
    }
}

mysqli_close($conn);
?>

<a href="index.php" class="back-button">Clique aqui para voltar à página dos exercícios</a>
<a href="exercicio6.html" class="back-button">Clique aqui para voltar ao formulário</a>
</body>
</html>