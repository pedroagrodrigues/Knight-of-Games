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
5. Ser desenvolvida utilizado a framework Laravel.

### 1.2.2 Requisitos Extra
Para além dos requisitos base, também foram propostos alguns requisitos extra, nomeadamente: 
- Comunicação com _API_ externa.
- Utilização de [_SASS_](https://sass-lang.com/).
- API implementada com autenticação.
  
# 2 Problema
Para o desenvolvimento deste projeto realizou-se um _brainstorming_ sobre que tipo de aplicação deveria ser desenvolvida na qual fosse possível implementar todos os requisitos acima descritos.
Na sequência deste _brainstorming_, com inspiração no blog [_AllKeyShop_](https://allkeyshop.com), sugeriu-se ao docente a implementação de um _site_ de jogos. Este site teria o objetivo de procurar e comparar jogos vendidos online, disponibilizando assim hiperligações para redirecionar o utilizador para _websites_ onde tais jogos podem ser efetivamente adquiridos.

# 3 Revisão da literatura e plano de ação
Durante o desenvolvimento deste site foram realizadas várias pesquisas utilizando o motor de pesquisa [_Google_](https://www.google.com) que muitas vezes conduziu essa pesquisa até a página [_Stackoverflow_](https://stackoverflow.com/), durante o desenvolvimento de front end, procurou-se tutoriais, sobretudo de _CSS_, de entre as várias fontes, acabou por destacar-se a página [_w3schools.com_](https://www.w3schools.com/) a qual revelou-se deveras a mais importante na elaboração do _front-end_. O aspeto da aplicação desenvolvida teve como fontes de inspiração o blog acima referido, [_AllKeyShop_](https://allkeyshop.com), além disso alguns menus e cores foram inspirados na página [_Trakt_](https://trakt.tv) que teve um impacto positivo na elaboração do site.

# 4 Solução proposta
Seguindo os requisitos descritos anteriormente, deu-se início à implementação sob o padrão arquitetural ___MVC___ recorrendo à framework [_Laravel_](https://laravel.com/).

## 4.1 Descrição geral da solução
Durante a elaboração desta aplicação foram utilizados vários controladores para desempenharem as várias funções necessárias para o bom funcionamento da aplicação.
- __CommentController__:
Trata-se no ponto de vista geral, os comentários dos utilizadores. Um comentário do utilizador podia ser um produto, de um determinado site que distribui os jogos ou de uma notícia que aparecesse no site _Knight of Games_. Caso houve algum comentário abusivo ou que não seguisse às regras do site, podia ser eliminado ou reportado por um moderador (_moderator_) ou de um administrador (_administrator_). No fim não foi desenvolvido a implementação para o produto final. No entanto, de futuro pode ser desenvolvido para por em prática juntamente com a framework [_Laravel_](https://laravel.com/). As funções que foram implementadas, caso haja continuação de desenvolvimento com esta framework, são: _createCommentProduct_, _createCommentWebsite_, _createCommentNews_, _deleteCommentProduct_, _deleteCommentWebsite_, _deleteCommentNews_ 
- __CompanyController__:
Este controlador tem como funcionalidade de indicar as companhias que distribuem e/ou desenvolvem os video-jogos. Tem 4 _functions_, que recorre ao Modelo Company: _index_, _viewCompany_, _beforeCreateNewCompany_ e _createNewCompany_. A função _index_ tem como base de indica todas as companhias existentes no site. A função _viewCompany_ tem como função de indicar uma companhia especifica que o utilizador escolhendo fornecendo as suas informações básicas, como também os produtos que fornece e/ou distribui. As funções _beforeCreateNewCompany_ e _createNewCompany_ são funções que recorrem aos métodos GET e POST quando um Administrador (_administrator_) cria uma nova companhia para a base de dados. Na função _createNewCompany_ recorre as várias condições para verificar se tem algum dado repetido quando o administrador insere novas informações ou se tem algo em falta.   
- __GenreController__:
Um controlador básico que indica os géneros (_Genres_) dos jogos, cada género indica os jogos que seguem uma determinada categoria caso o utilizador pode estar interessado. No controlador tem 4 funções (_functions_): _index_, _viewGenre_, _beforeCreateNewGenre_, _createNewGenre_. A função index serve para indicar todos os géneros que existem na base de dados do site, a função viewGenre serve para indicar especificamente jogos que seguem a esse estilo de género. As funções _beforeCreateNewGenre_ e _createNewGenre_ são funções restritas que recorrem aos métodos GET e POST para os administradores que insere novos géneros, a função _createNewGenre_ verifica se há existencia de género na base de dados após a inserção de um novo valor.
- __HomeController__:
- __NewsController__:
- __ProductController__:
- __RoleController__:
- __SocialController__:
- __UserController__:
- __WebsiteController__:
 
</div>