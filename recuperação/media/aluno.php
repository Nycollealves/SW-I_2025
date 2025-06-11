<?php   
    include_once 'Aluno.class.php';

    $fulano = new Aluno("Maria", 8, 6);


    $nota1 = $fulano->getNota1();
    $nota2 = $fulano->getNota2();
    $nome = $fulano->getNome();

    $media = $fulano->Media($nota1,$nota2);

    $verificacao = $fulano->VerificarSituacao($media);

    echo "ALUNO:". $nome. "<br>";
    echo "MÉDIA:". $media ."<br>";
    echo "VERIFICAR:" . $verificacao . "<br>";
    echo "<hr>"

    




?> 