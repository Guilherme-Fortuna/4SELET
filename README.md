<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://4selet.com.br/wp-content/uploads/2023/09/logo-light-1024x229.png">
  <source media="(prefers-color-scheme: light)" srcset="https://4selet.com.br/wp-content/uploads/2023/09/logo-dark-1024x229.png">
  <img alt="4SELET Logo" src="https://4selet.com.br/wp-content/uploads/2023/09/logo-dark-1024x229.png">
</picture>

# Questionário de Avaliação Nível Júnior Frontend

Baseado no [protótipo](https://www.figma.com/design/PcKMPYarCWOxKJNMtYl1g7/4Selet---Furniture-Website-(Avalia%C3%A7%C3%A3o)?node-id=0-1&t=LeUrvTtmtiSZkNqo-1) de uma landing page, com design para web e mobile.

**Obs.:** Este questionário tem o objetivo de avaliar suas habilidades em desenvolver
interfaces de usuário com base em um design pré-definido.
Utilize o framework Bootstrap 5.3 para estilização.

Em nossos projetos utilizamos **Laravel com Blade**, sendo assim, é um diferencial se
realizarem a construção desta landing page utilizando Laravel

## Perguntas

1. **Implementação do Layout Responsivo:** <span style="color:red">**Desenvolvimento de código**</span><br>
Com base no layout do protótipo anexado no hiperlink acima, recrie a landing page utilizando Bootstrap. Certifique-se de que a página seja responsiva, ou seja,
se adapte a diferentes tamanhos de tela, ajustando corretamente os
elementos para exibição em dispositivos móveis.
**Dica:** Utilize o sistema de grid do Bootstrap para gerenciar o layout.<br>

2. **Melhores Práticas de Performance:** <span style="color:red">**Explicação textual e código**</span><br>
A landing page contém diversas imagens de alta qualidade e elementos dinâmicos.
Quais estratégias você adotaria para otimizar o carregamento da página sem
comprometer a experiência do usuário
**Dica:**  Considere lazy loading de imagens e/ou minificação de arquivos.<br>

3. **Implementação de Animações com Bootstrap e JavaScript:** <span style="color:red">**Desenvolvimento código.**</span><br>
A landing page inclui interações, como botões e seções de destaque, que podem se beneficiar de animações. Como você implementaria uma animação suave quando o usuário rola a página até a seção de "Benefícios"? Utilize animações complementares ao Bootstrap ou JavaScript para criar uma transição elegante.<br>

4. **Exibição Condicional de Conteúdo:** <span style="color:red">**Explicação textual.**</span><br>
Imagine que o backend envie diferentes tipos de dados, e dependendo do tipo, o conteúdo exibido deve mudar. No caso de "Produtos Populares", como você implementaria uma lógica de exibição condicional para mostrar diferentes informações de acordo com o tipo de produto (ex: livros, móveis, eletrônicos)?<br>

5. **Menu Mobile:** <span style="color:red">**Explicação textual e código**</span><br>
O protótipo inclui uma versão mobile com um menu colapsado. Descreva como você implementaria o menu mobile usando Bootstrap, garantindo que ele funcione corretamente em dispositivos de diferentes tamanhos e inclua uma animação suave ao ser expandido.<br>

6. **Caso seja do seu interesse,**  crie outras funcionalidades e páginas que
complementam o design do protótipo seguindo essa linha de estilos.

# Comandos para rodar o projeto

1. ``composer install`` e ``npm install`` para instalar as dependências/pacotes
2. ``php artisan migrate`` para rodar a criação do banco de dados
3. Criar uma cópia do arquivo ``.env.desenv`` e renomear a cópia para ``.env``
4. Para startar a aplicação use ``npm run dev`` e ``php artisan serve``
