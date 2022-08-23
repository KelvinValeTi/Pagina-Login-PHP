<?php
     //inicialização das variaveis
     $nomeInvalido = "";
     $emailInvalido = "";
     $senhaErroDigito="";
     $senhaErroLetraNumero="";
     $confirmaSenhaInvalida = "";
  
    /*============================
    inicio da validação dos inputs
    =============================*/
    if($_SERVER['REQUEST_METHOD']=="POST"){
        //validacao do nome
        if(empty($_POST['nome'])){
            $nomeInvalido = "Por favor, digite um nome válido!<br>Não são permitidos os caracteres especiais:";
        }else{
            $nome = htmlspecialchars($_POST['nome']);
            if(!preg_match("/^[a-zA-Z-' ]*$/",$nome)){
                $nomeInvalido = "Por favor, digite um nome válido!<br>Não são permitidos os caracteres especiais:";
            }
        }
        
        //validacao do email
        if(empty($_POST['email'])){
            $emailInvalido="Por favor, verifique se o email está dentro do padrão.";
        }else{
            $email = htmlspecialchars($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailInvalido="Por favor, verifique se o email está dentro do padrão.";
            }
        }

        //validação da senha
        if(empty($_POST['senha'])){
            $senhaInvalida = "A senha deve conter no mínimo 6 dígitos.";
        }else{
            $senha = htmlspecialchars($_POST['senha']);
            if(strlen($senha)<6){
                $senhaErroDigito = "A senha deve conter no mínimo 6 dígitos.";
            }
            if(SenhaTemLetraNumero($senha)==false){
                $senhaErroLetraNumero = "A senha deve conter no mínimo um número e uma letra.";
            }
        }

        //validacao da confirmação de senha
        if(empty($_POST['confirmaSenha'])){
            $confirmaSenhaInvalida = "A confirmação da senha deve ser igual à do campo anterior.";
        }else{
            $confirmaSenha = htmlspecialchars($_POST['confirmaSenha']);
            
            if($confirmaSenha != $senha){
                $confirmaSenhaInvalida = "A confirmação da senha deve ser igual à do campo anterior.";
            }
        }

        //se todos os campos foram preenchidos corretamente
        if(($nomeInvalido=="") && ($emailInvalido=="") && ($senhaErroDigito=="") &&($senhaErroLetraNumero=="") && ($confirmaSenhaInvalida=="")){
            header('Location: obrigado.php');
        }
    }

    //verifica se a senha contem letras e números
    function SenhaTemLetraNumero($value){
        //se a primeira parte da expressão for false = há números
        //se a segunda parte da expressão for false = há letras
        if(!preg_match("/^[a-zA-Z]*$/", $value) && !(preg_match("/^[0-9]*$/",$value))){
            return true;
        }else{
            return false;
        }
    }
?>