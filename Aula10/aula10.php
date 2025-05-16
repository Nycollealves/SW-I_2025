<?php
    include_once 'Conta.class.php';
    
    $conta1 = new Conta();

    // var_dump($conta1);

    $conta1->Nome = "FULANO DE TAL";
    $conta1->Cpf = "123.456.789-00";
    //$conta1->Saldo = 500;

    $conta1->ConsultarSaldo(100);
    
    echo"<hr>";

    echo $conta1->Depositar(250);

    echo"<hr>";

    echo $conta1->Sacar(800);

    echo"<hr>";




?>
