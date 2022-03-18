# impacta
=====================================================

Iniciar git
$ git init

=====================================================

Adicionar um repositório remoto
$ git remote add origin https://github.com/LavyniaBS23/roboticapratica.git

=====================================================

Troca branch
$ git checkout nome-branch

=====================================================

Baixar arquivos da origem
$ git pull nome_branch

=====================================================

Antes de fazer as alterações

1 - Criar uma nova branch
$ git checkout -b nome-branch

=====================================================

Após alterações para subir pro github

1 - Checar status git
$ git status

2 - Se existir novos arquivos
$ git add .

3 - Fazer commit
$ git commit -m "Indicar alteração feita"

4 - Subir pro github
$ git push origin nome-branch

5 - trocar de branch 
$git chackout noma-da-branch

=====================================================

Voltar um commit anterior

$ git reset HEAD~1

=====================================================

Resetar arquivis unitários

$ git checkout origin/nome-branch caminho/nome_arquivo
