<?php

namespace Pansiere\Exe;

#use PHPUnit\Framework\TestCase; // for testing phpunit

class ExecutaScripPeloComposer # extends TestCase // for testing phpunit
{
    public static function mensagem()
    {
        $mensagem = "\n";
        $mensagem .= str_repeat("#", 47) . "\n";
        $mensagem .= "# " . str_pad("Mensagem programada exibida com sucesso!!", 43, " ", STR_PAD_BOTH) . " #\n";
        $mensagem .= str_repeat("#", 47) . "\n\n";

        echo $mensagem;
    }
}
