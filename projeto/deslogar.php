<?php
    session_start();
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    unset($_SESSION['doisfa']);
    header("Location: login.php");
?>