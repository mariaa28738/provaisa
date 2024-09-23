<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ffeef8, #ffb3d9);
            font-family: 'Helvetica', sans-serif;
            color: #d5006d;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        h2 {
            font-size: 2em;
            margin-bottom: 20px;
            font-weight: 700;
        }
        p {
            font-size: 1.2em;
            margin: 10px 0;
        }
        footer {
            margin-top: 50px;
            font-size: 0.8em;
            color: #d5006d;
        }
        .menu {
            margin-bottom: 20px;
        }
        .back-button {
            padding: 10px 20px;
            background-color: #d5006d;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        .back-button:hover {
            background-color: #a5004c;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="index.php" class="back-button">Clique aqui para voltar à página dos exercícios</a>
    </div>
    <h2>Resultado</h2>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeroMes = intval($_POST['numeroMes']);

        switch ($numeroMes) {
            case 1:
                echo "<p>O mês correspondente ao número $numeroMes é Janeiro.</p>";
                break;
            case 2:
                echo "<p>O mês correspondente ao número $numeroMes é Fevereiro.</p>";
                break;
            case 3:
                echo "<p>O mês correspondente ao número $numeroMes é Março.</p>";
                break;
            case 4:
                echo "<p>O mês correspondente ao número $numeroMes é Abril.</p>";
                break;
            case 5:
                echo "<p>O mês correspondente ao número $numeroMes é Maio.</p>";
                break;
            case 6:
                echo "<p>O mês correspondente ao número $numeroMes é Junho.</p>";
                break;
            case 7:
                echo "<p>O mês correspondente ao número $numeroMes é Julho.</p>";
                break;
            case 8:
                echo "<p>O mês correspondente ao número $numeroMes é Agosto.</p>";
                break;
            case 9:
                echo "<p>O mês correspondente ao número $numeroMes é Setembro.</p>";
                break;
            case 10:
                echo "<p>O mês correspondente ao número $numeroMes é Outubro.</p>";
                break;
            case 11:
                echo "<p>O mês correspondente ao número $numeroMes é Novembro.</p>";
                break;
            case 12:
                echo "<p>O mês correspondente ao número $numeroMes é Dezembro.</p>";
                break;
            default:
                echo "<p>Não existe mês correspondente ao número $numeroMes. Por favor, insira um número entre 1 e 12.</p>";
        }
    } else {
        echo "<p>O número não foi enviado.</p>";
    }
    ?>
    <footer>
        Clique <a href="exercicio10.html">aqui</a> para voltar ao formulário.
    </footer>
</body>
</html>