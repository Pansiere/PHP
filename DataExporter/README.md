# Exportador simples

Este repositório contém um projeto simples para exportar informações de filmes utilizando HTML, PHP e JSON. Abaixo está uma breve descrição do que cada arquivo faz:

## Arquivos Principais:

1. **index.html**:

   - Este arquivo contém um formulário HTML básico para coletar informações sobre um filme, incluindo nome, ano de lançamento, nota e gênero. Quando o formulário é submetido, os dados são enviados para `exporta-arquivo.php`.

2. **exporta-arquivo.php**:

   - Recebe os dados do formulário via método POST, cria um array PHP com esses dados e os salva em um arquivo JSON chamado `filme.json`. Após salvar os dados, redireciona o usuário para `sucesso.php` com o nome do filme como parâmetro.

3. **sucesso.php**:
   - Exibe os detalhes do filme inserido usando os dados armazenados no `filme.json`. Os dados são lidos do arquivo JSON e exibidos dinamicamente na página HTML.

#### Funcionamento Geral:

- **Formulário HTML**: Coleta informações sobre um filme (nome, ano de lançamento, nota e gênero).
- **exporta-arquivo.php**: Recebe os dados do formulário, cria um arquivo JSON com esses dados e redireciona para `sucesso.php`.
- **sucesso.php**: Exibe os detalhes do filme inserido utilizando os dados armazenados no arquivo JSON.

#### Utilização:

Para usar este projeto:

1. Clone o repositório para sua máquina local.

   ```
   git clone https://github.com/pansiere/PHP.git && \
   cd PHP/DataExporter && \
   php -S localhost:8001 -t .
   ```

2. Abra `index.html` em seu navegador para acessar o formulário de inserção de filmes.

3. Preencha o formulário e envie os dados.

4. Após o envio, você será redirecionado para `sucesso.php`, onde poderá ver os detalhes do filme inserido.

Este projeto é um exemplo simples de como coletar dados via formulário HTML, processá-los com PHP e armazená-los em um arquivo JSON para exibição posterior.
