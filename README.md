# Back-End para o projeto para TradeUp

Esse é um back-end utilizando Laravel para a chamada da api externa do cep feito para o teste da TradeUp

## Desenvolvimento

Para iniciar o desenvolvimento, é necessário clonar o projeto do GitHub num diretório de sua preferência:

```shell
cd "diretorio de sua preferencia"
git clone https://github.com/puegue1999/tradeup-back.git
```

### Construção

Para construir o projeto execute os comando abaixo:

```shell
php artisan serve
```

O comando irá começar um server local [http://127.0.0.1:8000], isso mostrará que seu back está funcionando.

## Features

O projeto foi desenvolvido para requisitar para uma api externa o cep dado. Com a resposta recebida, é devolvido ao front o json que foi obtido.