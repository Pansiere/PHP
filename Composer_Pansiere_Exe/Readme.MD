# Pansiere/Exe

Este projeto demonstra como executar métodos de classes PHP através de scripts definidos no Composer. Ele inclui uma classe simples que exibe uma mensagem quando executada por meio do Composer.

## Instalação

Para instalar as dependências necessárias, use o Composer:

```bash
composer install
```

## Autoloading

O projeto utiliza o autoloading do Composer, configurado no `composer.json` para carregar classes da namespace `Pansiere\Exe` a partir do diretório `src/`.

## Executando Scripts Personalizados

Você pode definir e executar scripts personalizados através do Composer. Neste projeto, um script foi configurado para rodar a função `mensagem()` da classe `ExecutaScripPeloComposer`.

### Classe: `ExecutaScripPeloComposer`

A classe `ExecutaScripPeloComposer` contém um método estático `mensagem()` que simplesmente imprime a string "Testando" no terminal.

```php
<?php

namespace Pansiere\Exe;

class ExecutaScripPeloComposer
{
    public static function mensagem()
    {
        $mensagem = 'Testando';
        echo $mensagem . PHP_EOL;
    }
}
```

### Configuração do Script no Composer

No `composer.json`, o script é registrado da seguinte forma:

```json
"scripts": {
    "command": "Pansiere\\Exe\\ExecutaScripPeloComposer::mensagem"
}
```

### Executando o Script

Para executar o método `mensagem()` através do Composer, use o seguinte comando:

```bash
composer command
```

Isso exibirá a mensagem "Testando" no terminal.

### Outros Scripts

O `composer.json` também define outros scripts úteis para testes, verificação de código, e análise estática:

- **test**: Executa os testes PHPUnit.
- **cs**: Verifica a conformidade do código com o padrão PSR-12.
- **phan**: Realiza análise estática do código com Phan.
- **check**: Roda todas as verificações de código de uma vez, incluindo `phan`, `cs`, e `test`.

Para executar todas as verificações de código de uma vez:

```bash
composer check
```

## Autores

- **Joao Pedro V. Pansiere** - [ojp027@gmail.com](mailto:ojp027@gmail.com)
