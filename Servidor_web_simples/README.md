# Servidor simples em PHP

## Para iniciar um servidor web simples a partir do PHP 5.4, você pode usar o servidor embutido para desenvolvimento, o que é muito conveniente

**Aqui está como fazer isso. Passos para iniciar um servidor PHP:**

Abra o terminal (ou prompt de comando).
Navegue até o diretório onde deseja iniciar o servidor.
Execute o seguinte comando:
sh
Copiar código
php -S localhost:8000
Este comando inicia um servidor PHP no diretório atual, que estará disponível no endereço `http://localhost:8000`. Você pode mudar o número da porta (8000) para qualquer número de porta que desejar, desde que não esteja em uso.

é uma maneira rápida e fácil de testar e desenvolver aplicações PHP localmente, sem a necessidade de configurar um servidor web completo como Apache ou Nginx.

```bash
php -S localhost:8000
```

php
Copiar código

<?php
$port = 8000;
$dir = __DIR__;
echo "Starting server at http://localhost:$port\n";
chdir($dir);
exec("php -S localhost:$port");
Depois, execute este script a partir da linha de comando:

sh
Copiar código
php start_server.php
Considerações Finais
O servidor embutido do PHP é projetado apenas para desenvolvimento. Não use este servidor em produção, pois ele não é adequado para esse fim.
O comando php -S localhost:8000 serve arquivos a partir do diretório atual. Certifique-se de navegar para o diretório correto antes de executar o comando.
Usar o servidor embutido do PHP
