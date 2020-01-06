<div align='justify'>
<div align='center'>

# Knight of Games

</div>

# Abstrato

# 1 Introdução
No âmbito da unidade curricular de Aplicações Centradas em Redes, foi proposto que os alunos desenvolvessem uma aplicação web, com o objetivo de introduzir os alunos ao que normalmente é conhecido por _full stack development_. Durante o desenvolvimento desta aplicação é dever dos alunos tomarem todas as decisões de implementação desde a base de dados até ao _front end_ do sistema. 

## 1.1 Visão geral
Durante o desenvolvimento deste projeto era esperado que os alunos ganhassem competências nos seguintes campos:
 - Desenvolvimento com bibliotecas externas;
 - Desenvolvimento MVC com uma framework externa;
 - _Debugging_ do lado do servidor;
 - _Debugging_ do lado do cliente;
 - Comunicação com o cliente;
 - Trabalho em equipa;
 - Design de bases de dados;
 - Tecnologias: PHP, Javascript, Jquery, CSS, MySQL, Apache e Laravel.

## 1.2 Requisitos de Implementação
No âmbito do desenvolvimento desta aplicação era esperado que a aplicação cumprisse alguns requisitos práticos pré-definidos.

### 1.2.1 Requisitos Base

A aplicação a ser desenvolvida deve:
1. Suportar pelo menos 3 tipos de utilizadores diferentes.
2. Conter pelo menos 6 views diferentes.
3. A base de dados da aplicação deverá conter pelo menos 5 tabelas distintas.
4. Implementar funcionalidades de _API_.
5. Ser desenvolvida utilizado a _framework_ [Laravel](https://www.laravel.com).
6. Conclusão

### 1.2.2 Requisitos Extra
Para além dos requisitos base, também foram propostos alguns requisitos extra, nomeadamente: 
- Comunicação com _API_ externa.
- Utilização de [_SASS_](https://sass-lang.com/).
- API implementada com autenticação.
  
# 2 Problema
Para o desenvolvimento deste projeto realizou-se um _brainstorming_ sobre que tipo de aplicação deveria ser desenvolvida na qual fosse possível implementar todos os requisitos acima descritos.
Na sequência deste _brainstorming_, com inspiração no blog [_AllKeyShop_](https://allkeyshop.com), sugeriu-se ao docente a implementação de um _site_ de jogos. Este site teria o objetivo de procurar e comparar jogos vendidos online, disponibilizando assim hiperligações para redirecionar o utilizador para _websites_ onde tais jogos podem ser efetivamente adquiridos.

# 3 Revisão da literatura e plano de ação
Durante o desenvolvimento deste site foram realizadas várias pesquisas utilizando o motor de pesquisa [_Google_](https://www.google.com) que muitas vezes conduziu essa pesquisa até a página [_Stackoverflow_](https://stackoverflow.com/), durante o desenvolvimento de _front-end_, procurou-se tutoriais, sobretudo de _CSS_, de entre as várias fontes, acabou por destacar-se a página [_w3schools.com_](https://www.w3schools.com/) a qual revelou-se deveras a mais importante na elaboração do _front-end_. O aspeto da aplicação desenvolvida teve como fontes de inspiração o blog acima referido, [_AllKeyShop_](https://allkeyshop.com), além disso alguns menus e cores foram inspirados na página [_Trakt_](https://trakt.tv) que teve um impacto positivo na elaboração do site.

# 4 Solução proposta
Seguindo os requisitos descritos anteriormente, deu-se início à implementação sob o padrão arquitetural ___MVC___ recorrendo à _framework_ [_Laravel_](https://laravel.com/).

## 4.1 Descrição geral da solução
Durante a elaboração desta aplicação foram utilizados vários controladores para desempenharem as várias funções necessárias para o bom funcionamento da aplicação.

__CommentController__: Num ponto de vista geral, este controlador trata dos comentários dos utilizadores. Inicialmente um utilizador iria poder realizar comentários aos jogos, lojas ou até mesmo notícias publicadas na aplicação _Knight of Games_. No caso de haver algum algum comentário abusivo ou que não siga as regras do site, este poderia ser reportado a um moderador (_moderator_) ou a um administrador (_administrator_) a fim de ser eliminado. Embora não tenha sido possível implementar esta ferramenta o controlador para este efeito foi encontra-se pronto a ser utilizado. Este controlador possuí as seguintes funções:
    - _createCommentProduct_;
    - _createCommentWebsite_;
    - _createCommentNews_;
    - _deleteCommentProduct_;
    - _deleteCommentWebsite_;
    - _deleteCommentNews_;
  
__CompanyController__: Este controlador tem como funcionalidade indicar as companhias que distribuem e/ou desenvolvem jogos. Tem 4 _functions_, que recorre ao Modelo _Company_: 
  - _index_: Indica todas as companhias existentes no site.
  - _viewCompany_: Indica uma companhia em específico fornecendo as suas informações básicas assim como os produtos que esta fornece.
  - _createNewCompany_: Insere uma nova companhia na base de dados. Esta recorre a várias condições a fim de verificar se existe algum dado repetido ou se há algum dado em falta.
     
__GenreController__: A função deste controlador é indicar os géneros dos jogos, cada jogo pertence a uma categoria como por exemplo aventura ou terror. Permitindo que o utilizador possa filtrar os jogos de acordo com a sua preferência. Este controlador possuí 4 funções:
 - _index_: Indica todos os géneros que existem na base de dados.
 - _viewGenre_: Devolve especificamente os jogos que seguem um determinado género.
 - _createNewGenre_. Verifica a existência de um novo género antes de proceder à sua inserção. Se não  existirem resultados, esta insere. 

__HomeController__: Este é um controlador dos controladores predefinidos do [_Laravel_](https://laravel.com/) este devolve a página _home_, também possuí o _middleware_ necessário para efetuar a autenticação no site.

__NewsController__: Trata-se de um controlador com a função de criar e expor as notícias para o site de maneira a que todos os utilizadores possam visualizar. Tem algumas funcionalidades básicas, tal como os outros controladores, contudo estas funções não foram testadas. O funcionamento das notícias é _LIFO_, ou seja, as notícias vão acumulando fazendo com que as últimas sejam as primeiras a serem visíveis. As funções implementadas foram: _index_, _viewNews_, _beforeCreateNews_ e _createNews_. Estas devem ser testadas (e modificadas) de futuro, aquando implementados novos dados.

__ProductController__: Este controlador tem como funcionalidade de expor todos os jogos existentes na base de dados, como também, fornecer informações básicas sobre o jogo tais como: os websites que o fornecem, companhias e géneros. Este controlador tem 6 funções implementadas:
 - _index_: Indica os produtos existentes na base de dados.
 - _viewProduct_: Devolve dados específicos de um produto previamente escolhido.
 - _createNewProduct_: Insere um novo produto na base de dados, após verificar se o mesmo não existe.
 - _editProduct_: Criada para poder editar um produto.

estas últimas duas não foram completamente testadas, no entanto podem servir o seu propósito nesta aplicação.

__RoleController__: Este controlador foi criado para poder modificar os utilizadores, podendo dar e remover privilégios dos mesmos. Por predefinição a criação de um novo utilizador está feita com o _role_ 1, ou seja, um utilizador comum. 

__SocialController__: A função deste controlador implementar novos utilizadores utilizando as _APIs_ da _Google_, _Facebook_ e _Twitter_. Este controlador exige a instalação do [_Socialite_](https://laravel.com/docs/6.x/socialite#installation) através do _Composer_. 
  
- __WebsiteController__: Este controlador fornece todos os websites que existe na base de dados, cada website indica os produtos existentes. Tem 6 funções: _index_, _viewWebsite_, _beforeCreateNewWebsite_, _createNewWebsite_, _beforeEditWebsite_ e _editWebsite_. A função _index_ indica todos os websites existentes, a função _viewWebsite_ fornece informação especifica do website e os produtos que distribui. As funções _beforeCreateNewWebsite_, _createNewWebsite_, _beforeEditWebsite_ e _editWebsite_ são funções restritas apenas para os administradores, as duas primeiras servem para criar um novo website e as últimas duas índica faz o edit para o website e talvez inserir mais alguns jogos que o tal site distribuí. 
 
# 5 Utilização da aplicação
Esta aplicação foi desenvolvida recorrendo à framework [Laravel](https://www.laravel.com). Por este motivo existem alguns pré-requisitos que devem ser tomados em conta antes de se proceder à instalação da mesma.

## 5.1 Requisitos do sistema
Préviamente à instalação o servidor onde esta aplicação deverá correr necessita dos seguintes softwares instalados:
- [Bash](https://www.gnu.org/software/bash/)
- [Node.js](https://nodejs.org/en/)
- [npm](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/)
- PHP >= 7.2.0
- BCMath PHP Extention
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- [Composer](https://getcomposer.org/)

## 5.2 Instalação
Uma vez tendo todos os pré-requisitos instalados na máquina servidor devem os seguintes comandos devem ser introduzidos no terminal _Bash_ desta máquina: 

	git clone https://github.com/pedroagrodrigues/Knight-of-Games.git project
    cd project
    composer install
    npm install
	
    

### 5.2.1 Inicialização:
Uma vez concluídos os passos acima descridos, procede-se então à configuração do ficheiro _.env_, para tal copiar o ficheiro _.env.example_ e renomear para _.env_. Posto isto devem ser configurados os acessos à base de dados. Para tal devem ser editados os parâmetros compreendidos entre a linha 9 e a linha 14 de forma a corresponderem às configurações do _MySQL_. De seguida executar os próximos passos.

    php artisan key:generate
    php artisan db:seed
    php artisan serve

Concluídas as indicações acima descritas deverá ser apresentada a seguinte mensagem no terminal:

    Laravel development server started: http://127.0.0.1:8000

Por outras palavras a instalação foi bem sucedida e o servidor está a correr em localhost na porta 8000.

# 6 Conclusão
Em conclusão, este framework fornece o conhecimento mais apropriado para Sistema de Gestão de Base Dados e o desenvolvimento Front-End, recorrendo SASS, JavaScript e entre outros. Uma vez estabelecido esses conhecimentos, os programadores poderão desenvolver futuros websites com este Framework ou com outros semelhantes. 

</div>