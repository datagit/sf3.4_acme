- bash common script
```bash 
#check port:
$ sudo lsof -i :8080
```
- git commands
```bash
#git init project
$ git init
$ git add .
$ git commit -m "First commit"
$ git remote add origin https://github.com/datagit/sf3.4_acme.git
$ git remote -v
$ git pull origin master --allow-unrelated-histories
$ git push -u origin master
#git alias: https://git-scm.com/book/en/v2/Git-Basics-Git-Aliases
$ git config --global alias.co checkout
$ git config --global alias.br branch
$ git config --global alias.ci commit
$ git config --global alias.st status
$ git config --global alias.unstage 'reset HEAD --'
$ git config --global alias.last 'log -1 HEAD'
$ git config --global alias.log.graph 'log --oneline --decorate --graph --all'
```
- composer commands
```bash
#show installed package
$ composer show -i
```