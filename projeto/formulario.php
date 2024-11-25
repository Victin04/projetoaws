<?php

  if(isset($_POST['submit']))
  {
    // print_r('Nome: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Email: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('Telefone ' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('Sexo: ' . $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Cidade ' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado: ' . $_POST['estado']);
    // print_r('<br>');
    // print_r('Endereco ' . $_POST['endereco']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $confirmarsenha = $_POST['confirmarsenha'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $data_nasc = $_POST['data_nascimento'];
    $nomematerno = $_POST['nomematerno'];
    $cpf = $_POST['cpf'];
    $cpf_user = $_POST['cpf_user'];
    $sexo = $_POST['genero'];
    $endereco = $_POST['endereco'];
    $ntelefone = $_POST['ntelefone'];
    $doisfa = $_POST['doisfa'];
    
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,confirmarsenha,usuario,email,data_nascimento,nomematerno,cpf,sexo,endereco,doisfa)
    VALUES ('$nome','$senha','$confirmarsenha','$usuario','$email','$data_nasc','$nomematerno','$cpf','$sexo','$endereco','$doisfa')");

    $result = mysqli_query($conexao, "INSERT INTO telefone(ntelefone, cpf_user) VALUES ('$ntelefone', '$cpf')");

    header('Location: login.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#formulario.css">
    <title>Formulário Telecall</title>
    <style>
body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(imagens/telafundo.png);
    background-repeat: no-repeat;
    background-size: cover;
    
}
a{
    text-align: center;
    color: aliceblue;
}
.box{
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(0, 0, 0, 0.6);
    padding: 15px;
    border-radius: 15px;
    width: 20%;
}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}
.inputUser:focus ~ .labelInput,
.inputUser:valid ~ .labelInput{
    top: -20px;
    font-size: 12px;
    color: dodgerblue;
}
#data_nascimento{
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px;
}
#submit{
    background-color: dodgerblue;
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
.box{
    margin-top: 75px;
    border-radius: 20px;
    padding: 35px;
}
.boxdata{
    display: flex;
    flex-direction: column;
    text-align: center;
}
p{
    text-align: center;
}
h1{
    text-align: center;
}
h4{
    text-align: center;
}
        
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
                <h1>Cadastro</h1>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="confirmarsenha" id="confirmarsenha" class="inputUser" required>
                    <label for="senha" class="labelInput">Confirmar senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="usuario" id="usuario" class="inputUser" required>
                    <label for="usuario" class="labelInput">Usuario</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="boxdata">
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nomematerno" id="nomematerno" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Materno</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <h4>Sexo:</h4>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="ntelefone" id="ntelefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="doisfa" id="doisfa" class="inputUser" maxlength="8" required>
                    <label for="doisfa" class="labelInput">Qual o CEP do seu endereço?</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            <p>Já tem uma conta?<a href="login.php">Logar</a></p>
        </form>
    </div>
</body>
</html>