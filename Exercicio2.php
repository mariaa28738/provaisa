<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
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
    <h2>Exibição da tabuada de um número</h2>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST['numero']);

        echo "<p>Tabuada do número $numero:</p>";
        echo "<ul>";

        for ($i = 0; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }

        echo "</ul>";
    } else {
        echo "<p>Poxa, nenhum número foi enviado :( Volte ao formulário e insira novamente.</p>";
    }
    ?>
    <footer>
        Clique <a href="exercicio2.html">aqui</a> para voltar ao formulário.
    </footer>
</body>
</html>