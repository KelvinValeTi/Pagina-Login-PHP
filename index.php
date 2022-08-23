<?php
    include_once('validacao.php');
?>


<!--HTML--->
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
            <!--NOME-->
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" required 
                <?php
                    if(isset($_POST['nome'])){
                        echo "value='".$_POST['nome']."'";
                    }
                ?>
            >
            <span><?php echo $nomeInvalido;?></span>

            <!--EMAIL--->
            <input type="email" name="email" id="email" placeholder="Digite seu E-mail" required 
                <?php
                    if(isset($_POST['email'])){
                        echo "value='".$_POST['email']."'";
                    }
                ?>
            >
            <span><?php echo $emailInvalido;?></span>
            
            <!--SENHA--->
            <input type="password" name="senha" id="senha" placeholder="Digite sua Senha" required>
            <span><?php echo $senhaErroDigito;?></span>
            <span><?php echo $senhaErroLetraNumero;?></span>
            
            <!--CONFIRMAÇÃO DE SENHA--->
            <input type="password" name="confirmaSenha" id="confirmaSenha" placeholder="Confirme sua senha" required>
            <span><?php echo $confirmaSenhaInvalida;?></span>
        </section>

        <!--BOTÃO--->
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>