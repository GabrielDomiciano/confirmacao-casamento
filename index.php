<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="shortcut icon" type="imagex/png" href="img/logo-3.ico">
    <title>Gabriel & Nayra</title>
    <style>
        body {
            background-image: url('img/fundo2.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-color: #ffc0cb;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        h3 {
            color: #343a40;
            text-align: center;
            margin-bottom: 40px;
        }
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        select {
            margin-bottom: 20px;
        }
        label {
            color: #343a40;
            font-weight: bold;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .div-bem-vindo{
            background-color: #FFE4E1;
            font-family: Lucida Handwriting, Cursive;
            border-radius: 50px;
        }
        .texto-bem-vindo{
            color: #696969;
            text-align: center;
        }
        .descricao{
            font-size: 10px;
        }
        .alert {
            display: none; /* Inicialmente, oculta a div de alerta */
            margin-top: 20px; /* Espaçamento superior */
            text-align: center; /* Centraliza o texto */
        }
        .icon-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .icon {
            text-align: center;
        }
        .icone{
            font-size: 15px;
            font-family: Lucida Handwriting, Cursive;
        }
        .icone-2{
          font-size: 19px;
          font-family: Lucida Handwriting, Cursive;
        }
        @media screen and (max-width: 768px){
            .icone{
                font-size: 13px !important;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="div-bem-vindo shadow-lg p-3 mb-5 rounded">
            <h3 class="texto-bem-vindo">Bem-vindo a confirmação de presença do nosso casamento!</h3>
            <h2 class="texto-bem-vindo"> <b>Gabriel & Nayra</b></h2>
        </div>
        <?php
        // Verifica se a operação foi bem-sucedida
        if (isset($_GET['success'])) {
            // Se sim, mostra a div de alerta
            echo '<div class="alert alert-success" role="alert">
                    Confirmação enviada com sucesso!
                </div>';
        }
        if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert">
                    OPS !! Algo deu errado e não consegui processar sua requisição
                </div>';
        }
        ?>
        <form action="forms/confirmacao.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Insira seu nome <b class="descricao">(Caso tenha alguma função, coloque do lado)</b></label>
                <input class="form-control" type="text" name="nome" placeholder="Nome Sobrenome - Função">
                <label for="exampleFormControlSelect1">Irá comparecer?</label>
                <select class="form-control" id="exampleFormControlSelect1" name="confirmacao">
                    <option value="s">Sim</option>
                    <option value="n">Não</option>
                </select>
                <input type="submit" value="Confirmar Presença">
            </div>
        </form>
        <div class="icon-container">
            <div class="icon">
                <a href="https://www.querodecasamento.com.br/lista-de-casamento/gabriel-nayra" target="_blank"> <img src="img/presente.png" alt="Nayra" style="height: 42px; width: 42px;"> </a>
                <p class="icone"> Lista de<br> Presentes </p>
             </div>
            <div class="icon">
                <a href="#" id="whatsappLink" target="_blank"> <img src="img/icon-cardapio.png" alt="Nayra" style="height: 42px; width: 42px;"> </a>
                <p class="icone"> Cardápio </p>
            </div>
            <div class="icon">
                <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5518991353887" target="_blank"> <img src="img/whatsapp.png" alt="Gabriel" style="height: 42px; width: 42px;"> </a>
                <p class="icone"> WhatsApp </p>
            </div>
            <div class="icon">
                <a href="https://maps.app.goo.gl/KNvX8dZyk7VTSHE7A" target="_blank"><img src="img/localizacao.png" alt="Gabriel" style="height: 42px; width: 42px;"></a>
                <p class="icone">Localização</p>
            </div>
            <div class="icon">
                <p class="icone-2"><b> 31/08/2024 <br> às 17h30 </b></p>
            </div>
        </div>
        <p class="descricao">Disponibilizamos uma lista de presentes com produtos simbólicos.
            <br> Ou seja, os produtos serão convertidos em valores para comprarmos posteriormente.</p>
        <br>
        <br>
    </div>

    <script>
        var alertDiv = document.querySelector('.alert');
        alertDiv.style.display = 'block';

        setTimeout(function() {
            alertDiv.style.display = 'none';
        }, 2500);
    </script>
    <script>
        document.getElementById('whatsappLink').onclick = function(event) {
            event.preventDefault();
            window.open('img/cardapio.jpg', '_blank');
        };
    </script>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
