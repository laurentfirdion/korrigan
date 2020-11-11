# korrigan

How to compile ressources

You need NodeJS to install & run
(it might need an old version of nodejs)

install project : npm install

### WARNING ###
need Ruby On Rail installed with version 2.3.0 and update path in variable  cssTwitter in grunt/gruntfile.js  with path of your own ruby file system

cd grunt
command "grunt" to start watch task

command grunt package -tag=[number.number.number] -force=true
ex: grunt package -tag=1.0.0 -force=true
to create compressed file for production 

you can find the folder created in ressources/tags you can then upload it to the server via FTP

If you change tag number, you have to update ressources path in functions.php and upload that file to the server via FTP

Feel free to change that old grunt setup to a new gulp or webpack stackprocessor