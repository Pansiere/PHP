<?php
    $peso = 109;   
    $altura = 1.8;
    $imc = $peso / ($altura ** 2);

    if ($imc < 17) { // Muito abaixo do peso.
        echo "Esta muito abaixo do peso. Procure um médico. Algumas pessoas têm um baixo peso por características do seu organismo e tudo bem. Outras podem estar enfrentando //problemas, como a desnutrição. É preciso saber qual é o caso.";
        } elseif ($imc == 17 || $imc <= 18.4) { // Abaixo do peso.
            echo "Esta abaixo do peso. Procure um médico. Algumas pessoas têm um baixo peso por características do seu organismo e tudo bem. Outras podem estar enfrentando problemas, como a desnutrição. É preciso saber qual é o caso.";
        } elseif ($imc == 18.5 || $imc <= 24.9) { // Peso normal.
            echo "Que bom que você está com o peso normal! E o melhor jeito de continuar assim é mantendo um estilo de vida ativo e uma alimentação equilibrada.";
        } elseif ($imc == 25 || $imc <= 29.99) { // Acima do peso.
            echo "Esta acima do peso. Ele é, na verdade, uma pré-obesidade e muitas pessoas nessa faixa já apresentam doenças associadas, como diabetes e hipertensão. Importante rever hábitos e buscar ajuda antes de, por uma série de fatores, entrar na faixa da obesidade pra valer.";
        } elseif ($imc == 30 || $imc <= 34.9) { // Obesidade grau I.
            echo "Esta em Obesidade I. Sinal de alerta! Chegou na hora de se cuidar, mesmo que seus exames sejam normais. Vamos dar início a mudanças hoje! Cuide de sua alimentação. Você precisa iniciar um acompanhamento com nutricionista e/ou endocrinologista.";
        } elseif ($imc == 35 || $imc <= 40) { // Obesidade grau II.
            echo "Esta em Obesidade II(severa). Mesmo que seus exames aparentem estar normais, é hora de se cuidar, iniciando mudanças no estilo de vida com o acompanhamento próximo de profissionais de saúde.";
        } else { // Obesidade grau III.
            echo "Esta em Obesidade III(mórbida). Aqui o sinal é vermelho, com forte probabilidade de já existirem doenças muito graves associadas. O tratamento deve ser ainda mais urgente.";
        }
    echo "\n$imc";
?>