<?php
    $mensagem = "Vamos tomar um vinho hoje e ficar de love??\nEscreva 's' para SIM ou 'n' para NÃO: ";

    echo $mensagem;

    $resposta = trim(fgets(STDIN));

    while ($resposta != "s") {
        echo "Ops... resposta errada  :/\nTente novamente meu amor :) :) :)\n" . "\n$mensagem";
        $resposta = trim(fgets(STDIN));
    }
    $teamo = "Te amo :D\nTe amo :D\nTe amo :D\n";
    echo "\n:)\nEscolha perfeita\nTe vejo mais tarde <3\n" . "$teamo";
?>