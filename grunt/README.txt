---------
- USAGE -
---------

1) Watch (compass:dev) + livereload
grunt watch -app=cvtheque

2) Compiler en production (compass:prod, create min css files, compile js)
grunt compiler_prod -app=cvtheque

3) Créer un tag
grunt create_tag --app=cvtheque --tag=1.1.5



--------
- BUGS -
--------

. compiler_prod pour cadreo ne fonctionne pas à cause de la compilation js

--------
- TODO -
--------

. voir pour ajouter un paramètre env "dev/prod" et si c'est utile