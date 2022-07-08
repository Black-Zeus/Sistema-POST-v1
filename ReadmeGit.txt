Comandos Git

Tutorial
https://www.atlassian.com/es/git/tutorials/using-branches/git-checkout#:~:text=El%20comando%20git%20branch%20permite,para%20cambiar%20a%20esa%20rama.

//Listar configuracion Actual
git config --list

//Identificacion del usuario
git config --global user.name "Nombre usuario"
git config --global user.email user@mail.com

//Configuracion del editor
git config --global core.autocrlf false
git config --global core.editor code

//Crear Branch (Rama)
git checkout -b Permisos

//Crear Commit
git commit -m "Mensaje Commit"

//Subir cambios al servidor
git push -u origin Permisos


//Merge
# Start a new feature
git checkout -b Permisos main

# Edit some files
git add <file>
git commit -m "Start a feature"



# Edit some files
git add <file>
git commit -m "Finish a feature"

# Merge in the Permisos branch
git checkout main
git merge Permisos
git branch -d Permisos