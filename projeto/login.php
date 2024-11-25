<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#login.css">
    <title>Login Telecall</title>
    <style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(imagens/telafundo.png);
    background-repeat: no-repeat;
    background-size: cover;
}

form{
    text-align: center;
}

h1{
    text-align: center;
}
a{
    text-align: center;
    color: aliceblue;
}
p{
    text-align: center;
}

div{
    background-color: rgba(0, 0, 0, 0.6);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 80px;
    border-radius: 15px;
    color: #fff;
}
input{
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
}
.inputSubmit{
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    
}
.inputSubmit:hover{
    background-color: deepskyblue;
    cursor: pointer;
}

.login-container {
    text-align: center;
}

input, button {
    margin-bottom: 5px;
}
    </style>
</head>
<body>

    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <label for="doisfa" class="labelInput">Qual o CEP do seu endereço?</label>
            <br><br>
            <input type="number" name="doisfa" placeholder="Ex: 00000000">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
        <p>Ainda não se cadastrou?<a href="formulario.php">Cadastrar-se</a></p>
    </div>
</body>
</html>