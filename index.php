<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    if (isset($_GET['logout'])) {
        unset($_SESSION['login']);
        session_destroy();
        header('Location: index.php');
        exit();
    }

    // Se não estiver logado
    if (!isset($_SESSION['login'])) {

        // Verifica se formulário foi enviado
        if (isset($_POST['acao'])) {
            $login = 'Marcos';
            $senha = '123456';

            $loginForm = $_POST['login'];
            $senhaForm = $_POST['senha'];

            if ($login === $loginForm && $senha === $senhaForm) {
                $_SESSION['login'] = $login;
                header('Location: index.php');
                exit();
            } else {
                $erroLogin = true;
            }
        }

        
        include('login.php');

    } else {
        
        include('home.php');
    }
    ?>
</body>

</html>