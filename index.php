<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmaSenha = $_POST['confirmaSenha'];

    exibeVariavel(){
        
    }

    function exibeVariavel(){

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Página de Login em PHP||Kelvin Vale</title>
</head>
<body>
    <h1>Página de login</h1>
    <form method="post">
        <section>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo">
            <span>Por favor, digite um nome válido!</span>
            <span>Não são permitidos os caracteres especiais:<br>("/^[a-zA-Z' ]*$/")</span>
            <input type="email" name="email" id="email" placeholder="Digite seu E-mail">
            <span>Por favor, verifique se o email está dentro do padrão.</span>
            <input type="password" name="senha" id="senha" placeholder="Digite sua Senha">
            <span>A senha deve conter no mínimo 6 dígitos.<br></span>
            <span>A senha deve conter no minimo 1 número e uma letra.</span>
            <input type="password" name="confirmaSenha" id="confirmaSenha" placeholder="Confirme sua senha">
            <span>A confirmação da senha deve ser igual à do campo anterior.</span>
        </section>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>