# Servidor simples em PHP

## Para iniciar um servidor web simples, a partir do PHP 5.4, você pode usar o servidor embutido para desenvolvimento, o que é muito conveniente. É uma maneira rápida e fácil de testar e desenvolver aplicações PHP localmente, sem a necessidade de configurar um servidor web completo como Apache ou Nginx

**Atenção:**
**O servidor embutido do PHP é projetado apenas para fins de desenvolvimento. Ele não é adequado para uso em produção, pois não é otimizado para desempenho, segurança ou escalabilidade. É recomendado usar servidores web robustos, como Apache ou Nginx, em ambientes de produção para garantir melhor desempenho e segurança das suas aplicações.**

**Aqui está como fazer isso:**

**Passo 1 - Crie um arquivo chamado index.php no diretório onde você está rodando o servidor com o seguinte conteúdo:**

```PHP
<?php
// List files and directories
$directory = '.';
$files = scandir($directory);

echo "<h1>Directory listing for $directory</h1>";
echo "<ul>";

foreach ($files as $file) {
    if ($file === '.' || $file === '..') continue;
    echo "<li><a href='$file'>$file</a></li>";
}

echo "</ul>";
?>
```

Este script PHP listará todos os arquivos e diretórios no diretório atual e criará links para cada um deles. Quando você acessar `http://localhost:8000` após iniciar o servidor PHP, você verá uma listagem dos arquivos e diretórios no local.

**Passo 2 - Inicie o servidor PHP:**  
No terminal, navegue até o diretório onde você criou o arquivo index.php e execute:

```BASH
php -S localhost:8000
```

**Passo 3:** Acesse o servidor:  
Abra o navegador e vá para `http://localhost:8000` Você verá a listagem dos arquivos e diretórios no diretório atual.
