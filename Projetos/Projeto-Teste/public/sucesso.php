<?php

$conteudoArquivoJson = file_get_contents('filme.json');
$filme = json_decode($conteudoArquivoJson, true);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Filme inserido</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <h1><?= $filme['nome']; ?></h1>
    <dl>
        <dt>Ano de lançamento</dt>
        <dd><?= $filme['anoLancamento']; ?></dd>

        <dt>Nota</dt>
        <dd><?= $filme['nota']; ?></dd>

        <dt>Gênero</dt>
        <dd><?= $filme['genero']; ?></dd>
    </dl>
</body>

</html>