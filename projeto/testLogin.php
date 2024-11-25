<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']) && !empty($_POST['doisfa']))
    {
        // Acessa
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $doisfa = $_POST['doisfa'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);
        // print_r('<br>);
        // print_r('doisfa: ' . $doisfa);

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha' and doisfa = '$doisfa'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            unset($_SESSION['doisfa']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            $_SESSION['doisfa'] = $doisfa;
            header('Location: principal.html');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>