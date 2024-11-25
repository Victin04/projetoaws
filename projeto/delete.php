<?php

    if(!empty($_GET['cpf']))
    {
        include_once('config.php');

        $cpf = $_GET['cpf'];
        
        $sqlSelect = "SELECT * FROM usuarios WHERE cpf=$cpf";
        
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuarios WHERE cpf=$cpf";
            $resultDelete = $conexao->query($sqlDelete);

        }
    }
    header('Location: sistema.php');
   
?>