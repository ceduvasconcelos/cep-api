## Instalação

O projeto utiliza contêineres Docker, através do pacote *Laravel Sail*, para facilitar a configuração do ambiente de desenvolvimento. Portanto, é necessário possuir o Docker e o Docker Compose já instalados.

Também é possível rodar apenas com o PHP 8.2 ou superior instalado localmente.

### Passos para o rodar o projeto localmente:

- Faça o clone do projeto
- Crie um arquivo `.env`, utilize o `.env-example` como base
- Acesse a raiz do projeto via console
- Execute o comando:
```shell
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
 ```
- Finalizado o processamento, execute o comando `./sail up -d`

O primeiro comando realiza a instalação dos pacotes via composer especificados no arquivo `composer.json` e uma vez que a instalação termina, a pasta *vendor* passa a ficar disponível no projeto. O comando seguinte levanta os contêineres baseado na descrição de serviços feita no arquivo `docker-compose.yml`.

Por padrão, não é necessária nenhuma configuração no arquivo *.env* do projeto.

Seja feliz!!!
