# challenge-mesha
Desafio elaborado para o processo seletivo a vaga FullStack PHP Jr.

ATIVIDADE
Um paciente deseja ser atendido em uma clínica para realizar alguns procedimentos, cada procedimento tem um valor específico (em R$) e  o paciente pode ser atendido por um profissional, esse profissional recebe uma comissão percentual pela realização de cada procedimento.
Com essas informações você irá construir um fluxo de atendimento permitindo que sejam adicionados em um atendimento um ou mais procedimentos com seus respectivos valores com a informação dos valores individuais de cada serviço e o total a ser pago.
Ao finalizar deverá exibir um resumo do atendimento com o valor total a ser pago pelo paciente e o valor da comissão que o profissional irá receber pelo atendimento.



# Requisitos funcionais
- [x] Desenvolvimento de CRUD.
- [x] Desenvolver o fluxo de atendimento de uma clinica.

# Requisitos não funcionais
- [x] Utilize o banco PostgreSQL/Mysql.
- [x] O código deve estar disponível no GitHub, Gitlab ou Bitbucket.
- [x] Deve ter o “Readme” com as instruções.
- [x] Organização e padrão de Commits.
- [x] Não commitar na branch master.
- [x] Desenvolvimento do Backend com laravel.
- [ ] Desenvolvimento do frontend com React/Angular.

# Diagrama de casos de uso
![Demo](https://github.com/JamersonWalderson/challenge-mesha/blob/main/doc/caso-de-uso.jpg)

# Diagrama de classes e relacionamentos
![Demo](https://github.com/JamersonWalderson/challenge-mesha/blob/main/doc/diagrama-de-classes.png)

# Projeto de telas (Figma)
Ajustes: layout gride, columns, count: 12, type: center, width: 70, gutter: 30. 
![Demo](https://github.com/JamersonWalderson/challenge-mesha/blob/main/doc/projeto-de-telas.png)

# Projeto de telas
Fluxo 1
![Demo](https://github.com/JamersonWalderson/challenge-mesha/blob/main/doc/fluxo-1.jpg)
Fluxo 2
![Demo](https://github.com/JamersonWalderson/challenge-mesha/blob/main/doc/fluxo-2.jpg)
Fluxo 3
![Demo](https://github.com/JamersonWalderson/challenge-mesha/blob/main/doc/fluxo-3.jpg)
Fluxo 3
![Demo](https://github.com/JamersonWalderson/challenge-mesha/blob/main/doc/fluxo-4.png)

# Como fazer a instação
- $ git clone https://github.com/JamersonWalderson/challenge-mesha.git
- $ cd challenge-mesha
- $ composer install
- copiar o conteúdo de .env.example
- criar um arquivo .env
- colar o conteúdo de .env.example
- $ php artisan key:generate

O projeto é composto de uma API RESTful desenvolvida em Laravel 8, então para usar as funcionalidades dela é necessário baixar o Postman
<a href="https://www.postman.com/downloads/">Link para download direto da página oficial</a>

# Rotas: web
As rotas abaixo não são protegidas e podem ser acessadas livremente


-Rota para login e cadastro de usuários
/login
/register

- Médicos
/doctor

- Comissões
/comission

- Agendamentos
/schedule

- rotas protegidas contem o prefixo 'auth'

#Rotas: api
As rotas abaixo não são protegidas e podem ser acessadas livremente

/login
/register

- Médicos
/api/doctor

- Comissões
/api/comission

- Agendamentos
/api/schedule

- rotas protegidas contem o prefixo 'api/auth'

# Observações
Como o tempo de desenvolvimento foi curto, foi possivel finalizar apenas a api e algumas telas da aplicação, a api foi inteiramente construida usando Laravel 8, porém, as telas do Frontend foram desenvolvidas usando Bootstrap 5, sei que o desafio pede que seja feito em React/Angular, porém no momento não possuo conhecimentos suficientes para fazer com a mesma qualidade que se encontra no momento usando essas outras tecnologias, entretanto, isso não me impede em nada de estudá-las, e com uma curva de aprendizado mais longa usar em projetos futuros.

A api está funcional e é necessário usar o Postman, para uma melhor visualização, a autenticação foi feita usando a tecnologia JWT(JSON WEB Token), e está funcional, assim como as funcionalidades da API, o frontend foi feito usando Blade, porém, com o curto tempo não foi possível adaptá-lo as funcionalidades já existentes, portanto, a parte WEB, não está concluída, a parte entregue conta somente com as telas estáticas e lorem ipsum.

# Ferramentas usadas
XAMPP, Figma(Prototipação do frontend), VS Code, Postman, Draw.io(criação dos diagramas), todoist(kanban), Pomodoro(controle de tempo), Toggle?(não se foi necessário)
