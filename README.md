## Sobre o Projeto

Projeto feito em mvc para o gerenciamento de livros.
O projeto está em constante mudança conforme eu aprendo tecnologias e conceitos novos. 

## Instalação
Basta clonar o repositorio e rodar 1º `composer install` para instalar as dependencias do laravel 11 e depois rodar o `php artisan migrate` para rodar o schema do banco de dados (Recomendo no arquivo .env colocar em sqlite).

## Funcionalidades

- O sistema registra livros, autores e clientes. (CRUD de cada um).
- Os clientes têm um limite de 2 livros por empréstimo.
- Os livros só podem ser registrados se tiver o autor.
- Lista de todos livros do autor.
- O sistema possui uma parte de empréstimo de livro que lista os empréstimos pendentes.
- Links para outras listagens e detalhes (Ex: link para o detalhe do cliente ou livro na lista de empréstimo / ou link para o autor na listagem de livros).


## Tecnologias

- ### [Laravel na versão 11](https://laravel.com/docs/11.x).
- O laravel foi escolhido por facilitar a interação com o banco de dados com o ORM do [Eloquent](https://laravel.com/docs/11.x/eloquent), a facilidade de criar um sistema em mvc, e uma boa estrutura para fazer um sistema escalável como filas/jobs, sistema de injeção de dependência.
- ### [MariaDb](https://www.apachefriends.org/pt_br/index.html).
- O mariadb foi escolhido como banco de dados relacional por vir com o xampp gratuitamente (Atualmente recomendo o sqlite que ja vem padrão com o laravel 11).


## Observações

- ### Como explicado acima esse projeto terá novas funcionalidades conforme eu vou aprendendo por isso peço que fiquem de olho sempre no readme e nos commit.

- ### Duvidas ou sugestões por favor entre em [contato](https://www.linkedin.com/in/hugo-antonio-515b641a6/).
