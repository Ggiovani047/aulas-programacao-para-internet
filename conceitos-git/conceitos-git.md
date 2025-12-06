# Conceitos de Git e Github 
Este arquivo foi desenvolvido em uma aula de programação para internet, e tem como objetivo armazenar os comandos basicos para a utilização do GIt e Github

## Configuração Inicial
Rode os comandos no terminal do seu computador
```bash
git config --global user.name "Giovani Henrique"

git config --global user.email giovani.cornelio@fatec.sp.gov.br
```

## Comandos do Git
Para iniciar o git ewm uma pasta usamos o init
```bash
git init
```
para vincular o projeto ao github utilizamos o comando remote.<br> 
**IMPORTANTE** Depois do remote deve ser executado outros 2 comando da página.
```bash
git remote add origin <url_do_repositorio>
```

Para Verificar a situação atual do repositório
```bash
git status
```

Para elencar (preparar) todas as mudanças
```bash
git add .
```

Para salvar a alteração de fato no git
```bash
git commit -m "Mensagem"
```

Para baixar as alterações que estão somente no repositório remoto utilizamos o pull. <br>
**IMPORTANTE:** Sempre de pull antes de subir novas versões na nuvem
```bash
git pull
```

Para enviar todos os commits do local para a nuvem utilizamos o push.
```bash
git pull
```

Para baixar o repositório do github em um novo computador utilizamos o clone.
```bash
git <url_do_repositorio>
```
