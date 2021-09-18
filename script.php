<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if($idade < 18)
    {
        print("O nadador $nome não poderá competir pois possui apenas $idade anos");
    }
    else{
        print("<h1>Bem vindo</h1><h2>$nome!</h2>");
    }
?>