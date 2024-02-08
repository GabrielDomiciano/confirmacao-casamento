<?php
session_start();

if(isset($_SESSION['usuario']['email'])) header("Location: home-admin.php");
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
    <title>Admin</title>
    <style>
        body {
            background-image: url('../img/fundo2.jpg');
            background-color: #f8f9fa;
            padding-top: 50px; 
        }
        form {
            max-width: 400px; 
            margin: 0 auto; 
            background-color: #fff; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
        }
        form label {
            font-weight: bold; 
            color: #007bff;
        }
        form button {
            background-color: #007bff;
            border: none;
            border-radius: 5px; 
            padding: 10px 20px; 
            cursor: pointer; 
            transition: background-color 0.3s ease;
        }
        form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="forms-admin/login.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu e-mail" name="email">
            <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com ninguém.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" name="senha">
        </div>
        <button type="submit" class="btn btn-primary">Logar-se</button>
    </form>
</body>
</html>
