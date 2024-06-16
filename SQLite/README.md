Oficial page: https://sqlite.org/

**What Is SQLite?**

SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine. SQLite is the most used database engine in the world. SQLite is built into all mobile phones and most computers and comes bundled inside countless other applications that people use every day. More Information...

The SQLite file format is stable, cross-platform, and backwards compatible and the developers pledge to keep it that way through the year 2050. SQLite database files are commonly used as containers to transfer rich content between systems [1] [2] [3] and as a long-term archival format for data [4]. There are over 1 trillion (1e12) SQLite databases in active use [5].

SQLite source code is in the public-domain and is free to everyone to use for any purpose.

# Erro que indica que a classe SQLite3 não está disponível no seu ambiente PHP

Isso geralmente acontece quando a extensão SQLite3 não está habilitada no PHP.Aqui estão os passos para resolver esse problema

**Passo 1:** Verificar se a extensão SQLite3 está instaladaCrie um arquivo PHP com o seguinte conteúdo e execute-o:

```php
<?php
phpinfo();
?>
```

Procure por informações sobre SQLite3 na página gerada. Se você não encontrar nenhuma menção ao SQLite3, significa que a extensão não está instalada.

**Passo 2:** Instalar a extensão SQLite3Se você estiver usando um sistema baseado em Linux (como Ubuntu), você pode instalar a extensão SQLite3 para PHP usando o gerenciador de pacotes:

```sudo apt-get install php-sqlite3```

Depois de instalar a extensão, reinicie o servidor web (por exemplo, Apache ou Nginx):
**Para Apache**
```sudo systemctl restart apache2 ```

**Para Nginx**
```sudo systemctl restart nginx```
Se você estiver usando Windows, verifique se a linha abaixo no arquivo php.ini está descomentada (remova o ponto e vírgula no início):extension=sqlite3Depois de modificar o arquivo php.ini, reinicie o servidor web.
**Passo 3:** Verificar novamente
Execute novamente o script phpinfo() para garantir que a extensão SQLite3 está habilitada.