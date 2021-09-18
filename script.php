<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    $erro = false;

    if(checarNome($nome) || checarIdade($idade))
    {
        return;
    }

    print("<h1>Bem vindo $nome!</h1>");


    function checarNome($nome)
    {
        $erro = false;

        if(empty($nome))
        {
            print("O Nome não pode ser vazio! ");
            return $erro = true;
        }

        if(strlen($nome) < 3 || strlen($nome) > 40 && $nome != null)
        {
            echo 'O nome deve conter no maximo 40 caracteres e no minimo 3';
            return $erro = true;
        }   

        return false;    
    }

    function checarIdade(string $idade)
    {
        $erro = false;

        if(empty($idade))
        {
            print("A idade deve conter um valor!");
            return $erro = true;
        }

        if(!is_numeric($idade))
        {
            echo 'A idade não deve conter letras';
            return $erro = true;
        }

        if($idade < 18)
        {
            print("você não poderá competir pois possui apenas $idade anos");
            return $erro = true;
        }
        return false;
    }
?>