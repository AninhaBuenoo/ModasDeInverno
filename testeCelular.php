<?php
    // Incluir o arquivo da classe
    require "Celular.php";

    // Instanciar um objeto de ContaCorrente
    $meuCelular = new Celular();

    // Definir os valores dos atributos da conta
    $minhaConta->conta = "1000-1";
    $minhaConta->agencia = "100";
    $minhaConta->nome = "Mauro";


    // Exibir o saldo atual da conta
    $minhaConta->imprimirSaldo();

    // Efetuar um saque
    $minhaConta->efetuarSaque(300);

    // Exibir o saldo atual da conta
    $minhaConta->imprimirSaldo();