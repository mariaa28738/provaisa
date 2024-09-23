<!DOCTYPE html>
<html>
<head>
    <title>Atualização da Carga Horária</title>
</head>
<body>
    <h1>Atualização da Carga Horária</h1>

    <?php
    // conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "aula_php");

    // verifica se a conexão foi bem-sucedida
    if (!$conexao) {
        die("Erro de conexão com o banco de dados");
    }

    // verifica se os campos do formulário foram enviados
    if (isset($_POST['matricula']) && isset($_POST['nova_carga'])) { // Corrigido para 'nova_carga'
        // obtém os valores do formulário HTML via método POST
        $matricula = $_POST['matricula'];
        $nova_carga_horaria = $_POST['nova_carga']; // Corrigido para 'nova_carga'

        // consulta a carga horária atual do aluno
        $sql = "SELECT carga_horaria FROM alunos WHERE matricula='$matricula'";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            // aluno encontrado
            $row = mysqli_fetch_assoc($resultado);
            $carga_horaria_atual = $row['carga_horaria'];

            // calcula a nova carga horária
            $carga_horaria_total = $carga_horaria_atual + $nova_carga_horaria;

            // atualiza a carga horária no banco de dados
            $sql_update = "UPDATE alunos SET carga_horaria=$carga_horaria_total WHERE matricula='$matricula'";
            if (mysqli_query($conexao, $sql_update)) {
                echo "<p>Carga horária atualizada com sucesso!</p>";
            } else {
                echo "<p>Erro ao atualizar a carga horária: " . mysqli_error($conexao) . "</p>";
            }
        } else {
            // aluno não encontrado
            echo "<p>Erro: matrícula não registrada.</p>";
        }
    } else {
        // se os campos não foram enviados, exiba uma mensagem de erro
        echo "<h1>Erro: todos os campos são obrigatórios.</h1>";    
    }

    // fecha a conexão com o banco de dados para liberar recursos
    mysqli_close($conexao);
    ?>
</body>