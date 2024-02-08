<?php
//INICIA O BANCO DE DADOS
require '../../includes/app.php';
use \WilliamCosta\DatabaseManager\Database;
$db = new Database('usuario');

//TRATAMENTO DOS DADOS
$email = "'" . $_POST['email'] . "'";
$senha =  "'" . md5($_POST['senha']) . "'";

$usuario = $db->select("email = ". $email . " and senha = ". $senha)->fetchObject();

//E-MAIL E SENHA INCORRETO
if(!$usuario) {
    header("Location: ../index.php");
    exit;
}

//STARTA A SESSÃO E SETA O EMAIL NELA
session_start();

$_SESSION['usuario']['email'] = $usuario->email;

//REDIRECIONA PARA A HOME DO ADMINISTRADOR
header("Location: ../home-admin.php");