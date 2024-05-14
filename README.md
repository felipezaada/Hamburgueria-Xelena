# Projeto Xelena - Site da Hamburgueria

## Descrição

Este projeto consiste na criação de um site para a hamburgueria Xelena, desenvolvido como parte da disciplina de Programação Web 2, ministrada pelo professor Ricardo Pouças.

## Tecnologias Utilizadas

- PHP
- HTML

## Configuração do Banco de Dados

Para que o projeto funcione corretamente, é necessário criar um banco de dados no phpMyAdmin com o nome 'cefet'. Em seguida, crie uma tabela chamada 'usuario' com os seguintes campos:

- `codigo` (auto increment, int)
- `nome` (varchar 50)
- `email` (varchar 50)
- `senha` (varchar 50)
- `data_cadastro` (date)
- `ultimo_login` (date)

**ATENÇÃO**: Todos os nomes de tabelas e campos devem ser criados com atenção ao 'case sensitivity'.

## Como Contribuir

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`)
3. Faça commit das suas mudanças (`git commit -am 'Adiciona nova feature'`)
4. Faça push para a branch (`git push origin feature/nova-feature`)
5. Crie um novo Pull Request