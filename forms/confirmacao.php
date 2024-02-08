<?php

//INICIA O BANCO DE DADOS
require '../includes/app.php';
use \WilliamCosta\DatabaseManager\Database;
$DbConvidados = new Database('convidados');

if(!isset($_POST['nome']) or empty($_POST['nome']) or !isset($_POST['confirmacao']) or empty($_POST['confirmacao'])) {
    header("Location: ../index.php?error=true");
    exit;
}

$arrayInsertConvidado = [
    'nome'          => $_POST['nome'],
    'confirmado'    => $_POST['confirmacao']
];

$DbConvidados->insert($arrayInsertConvidado);


header("Location: ../index.php?success=true");
exit;

