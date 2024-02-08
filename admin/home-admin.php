<?php
session_start();

if(!isset($_SESSION['usuario']['email'])) header("Location: index.php");

//INICIA O BANCO DE DADOS
require '../includes/app.php';
use \WilliamCosta\DatabaseManager\Database;
$db = new Database('convidados');

//BUSCA CONVIDADOS CONFIRMADOS
$convidados = $db->select('confirmado = "s"')->fetchAll();
//CONTADOR DE CONVIDADOS
$contadorConvidadoConfirmado = 0;
foreach($convidados as $convidado) $contadorConvidadoConfirmado ++;

//BUSCA CONVIDADOS QUE NAO VÃO
$convidadosQueNaoVao = $db->select('confirmado = "n"')->fetchAll();
//CONTADOR DE CONVIDADOS QUE NÃO VÃO
$contadorConvidadoNaoVao = 0;
foreach($convidadosQueNaoVao as $convidado) $contadorConvidadoNaoVao ++;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" type="imagex/png" href="../img/logo-3.ico">
    <title>Home - Admin</title>
    <style>
        body {
            background-image: url('../img/fundo2.jpg');
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
        .card-body {
            padding: 20px;
        }
        .list-group-item {
            background-color: #f8f9fa;
            border: none;
            border-bottom: 1px solid #dee2e6;
        }
        .list-group-item:last-child {
            border-bottom: none;
        }
        .list-group-item:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Bem-vindo à home do admin!</h1>
        <div class="card">
            <div class="card-header font-weight-bold">
                Lista de Convidados confirmados
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <?php
                    // Verifica se existem convidados
                    if (!empty($convidados)) {
                        // Loop para percorrer os convidados
                        foreach ($convidados as $convidado) {
                            // Exibe o nome do convidado em um item da lista
                            echo '<li class="list-group-item">' . $convidado['nome'] . '</li>';
                        }
                    } else {
                        // Se não houver convidados, exibe uma mensagem indicando isso
                        echo '<li class="list-group-item">Nenhum convidado encontrado.</li>';
                    }
                    ?>
                </ul>
                <?php
                    echo '<h6> Total: ' . $contadorConvidadoConfirmado . '</h6>'
                ?>
            </div>
        </div>
<br>
<hr>
        <div class="card">
            <div class="card-header font-weight-bold">
                Lista de Convidados que não vão comparecer
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <?php
                    // Verifica se existem convidados
                    if (!empty($convidadosQueNaoVao)) {
                        // Loop para percorrer os convidados
                        foreach ($convidadosQueNaoVao as $convidado) {
                            // Exibe o nome do convidado em um item da lista
                            echo '<li class="list-group-item">' . $convidado['nome'] . '</li>';
                        }
                    } else {
                        // Se não houver convidados, exibe uma mensagem indicando isso
                        echo '<li class="list-group-item">Nenhum convidado encontrado.</li>';
                    }
                    ?>
                </ul>
                <?php
                    echo '<h6> Total: ' . $contadorConvidadoNaoVao . '</h6>'
                ?>
            </div>
        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
