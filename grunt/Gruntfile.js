/*

UTILISATION :

- Watch
    grunt watch -app=cadreo
    grunt watch -app=blogmetier -local // watch de blogmetier en local (avec git)

- Compilation Compass :
    grunt compass:prod -app=cadreo -force=true (pour prod)
    grunt compass:dev -app=cadreo -force=true (pour dev)

- Concaténation JS :
    grunt concat -app=cadreo

- Minification JS :
    grunt minjs -app=cadreo

- Packaging :
    grunt package -app=cadreo -tag=1.1.5 -force=true


*/


module.exports = function(grunt) {

    // PARAMETRES GRUNT
    var applications = ['korrigan'];

    var app = grunt.option('app') || null; // Application
    var os = grunt.option('os') || null; // OS pour la lib Ruby
    var env = grunt.option('env') || 'dev'; // Environnement
    var tag = grunt.option('tag') || null; // Tag
    var production = grunt.option('production') || false; // Production
    var paramForce = grunt.option('force') || false;
    var local = grunt.option('local') || false; // Recette

    
    // CHEMINS d'accès aux répertoires projets
    var pathsToRessources = '../';
    var pathsToProject = {
        'korrigan': '../ressources/',
    };



    // SOURCES JS
    var sourcesJS = {
        'korrigan' : [
            // MODERNIZR
            pathsToProject[app] + '_sources/js/plugins/modernizr.js',
            //PLUGINS
            pathsToProject[app] + '_sources/js/plugins/bootstrap.min.js',
            pathsToProject[app] + '_sources/js/plugins/wow.min.js',  
            pathsToProject[app] + '_sources/js/plugins/slick.min.js',  
        
            pathsToProject[app] + '_sources/js/plugins/jquery.fancybox.pack.js',     
            pathsToProject[app] + '_sources/js/plugins/jquery.lazyload.min.js', 
            
            pathsToProject[app] + '_sources/js/fonctions/fleche.js',     
            pathsToProject[app] + '_sources/js/scripts.js',
        ]

    };




    // var conf = grunt.file.readJSON('conf.json');
    // var cssTwitter = conf.cssTwitter;

    var cssTwitter = "/Users/firdion-froge/.rbenv/versions/2.3.1/lib/ruby/gems/2.3.0/gems/compass_twitter_bootstrap-2.3.1";


  
    // CONF commune watch task

    var confWatch = {
        css: {
            files: pathsToProject[app] + '_sources/css/**/*.scss',
            tasks: ['compass:' + env]
        },
        js: {
            files: [sourcesJS['korrigan']],
            tasks: ['concat']
        }
    };
 

    // CONF commune copy for tag
    var confCopyTag = {
        main: {
            files: [
                // copy css files
                {expand: true, cwd: pathsToProject[app] + '/', src: ['css/**'], dest: pathsToProject[app] + '/tags/' + tag + '/'},

                // copy js files
                {expand: true, cwd: pathsToProject[app] + '/', src: ['js/**'], dest: pathsToProject[app] + '/tags/' + tag + '/'},

                // copy img files
                {expand: true, cwd: pathsToProject[app] + '/', src: ['img/**'], dest: pathsToProject[app] + '/tags/' + tag + '/'},

                // copy font files
                {expand: true, cwd: pathsToProject[app] + '/', src: ['fonts/**'], dest: pathsToProject[app] + '/tags/' + tag + '/'}
            ]
        },
       
    };


    // CONFIGURATIONS pour grunt en fonction de l'application
    var confs = {



        /************************************************
         * korrigan
         ***********************************************/

        'korrigan': {
            pkg: grunt.file.readJSON('package.json'),
            // COMPASS
            compass: {
                // options: {
                //     importPath: [cssTwitter],
                //     // httpPath: "../",
                //     cssDir: pathsToProject[app] + "css",
                //     sassDir: pathsToProject[app] + "_sources/css/",
                //     imagesPath: "../../img",
                //     imagesDir: pathsToProject[app] + "img",
                //     httpImagesPath: "/img",
                //     spriteLoadPath: pathsToProject[app] + "img/sprites/",
                //     cacheDir: pathsToProject[app] + "_compilation/css/__cache",
                //     force: paramForce
                // },
                options: {
                    importPath: [cssTwitter],
                    relativeAssets: true,
                    assetCacheBuster: 'none',
                    force: paramForce,
                    httpPath: "/",
                    httpJavascriptsPath: '/js/',
                    httpStylesheetsPath: '/css/',
                    httpImagesPath:  '/css/img/',
                    httpFontsPath: '/css/fonts/',

                    javascriptsDir: pathsToProject[app] + 'scripts',
                    cssDir: pathsToProject[app] + "css",
                    sassDir: pathsToProject[app] + "_sources/css/",
                    // imagesPath: pathsToProject[app] + "img",
                    imagesDir: pathsToProject[app] + "img/",
                    fontsDir: pathsToProject[app] + 'fonts/',
                    // httpImagesPath: pathsToProject[app] + "img",
                    spriteLoadPath: pathsToProject[app] + "img/sprites/",
                    cacheDir: pathsToProject[app] + "_compilation/css/__cache"

                },
                dev: {
                    options: {
                        // http_path: "/" + pathsToProject[app] + "/",
                        // http_path: "../",
                        debug: true,
                        environment: 'development',
                        outputStyle: 'expanded',
                        // noLineComments: 'false',
                        sassOptions: {
                            debugInfo: 'true',
                            sourceMap: 'true'
                        }
                    }
                },
                prod: {
                    options: {
                        httpPath: "../",
                        debug: false,
                        environment: 'production',
                        outputStyle: 'compressed',
                        // noLineComments: 'false',
                        sassOptions: {
                            debugInfo: 'false'
                        }
                    }
                }
            },
            // CONCAT
            concat: {
                korrigan: {
                    options: {
                        separator: "\n\n"
                    },
                    files: {
                      "../ressources/js/korrigan.js": sourcesJS.korrigan,
                    }
                }
            },
            // UGLIFY
            uglify: {
                min: {
                    files: {
                        "../ressources/js/korrigan.min.js": ["../ressources/js/korrigan.js"],
                    }
                }
            },
            // CLOSURE COMPILER
            'closure-compiler': {
                frontend: {
                  closurePath: 'closure_compiler',
                  js: pathsToProject[app] + "js/cadreo_test.min.js",
                  jsOutputFile: pathsToProject[app] + 'js/cadreo_closure.min.js',
                  maxBuffer: 5000,
                  options: {
                    // compilation_level: 'SIMPLE_OPTIMIZATIONS',
                    compilation_level: 'ADVANCED_OPTIMIZATIONS',
                    language_in: 'ECMASCRIPT5_STRICT'
                  }
               }
            },
            // WATCH
            watch: confWatch,
            // CREATE TAG
            copy: confCopyTag
        }
        
       

    };


    // CHARGEMENT DE LA CONF GRUNT POUR L'APPLICATION CHOISIE
    if (applications.indexOf(app) > -1) {

        // INIT CONFIG
        grunt.initConfig(confs[app]);

        // TASKS
        grunt.registerTask('default', ['watch']);

        grunt.registerTask('minjs', ['concat', 'uglify']);

        grunt.registerTask('recette', ['compass:prod', 'concat', 'copy:recette' ] ); // déploiement vers ressources.regionsjob.dom
        grunt.registerTask('dev', ['compass:prod', 'concat', 'copy:dev' ] );         // déploiement vers dev.ressources.regionsjob.dom


        // Le numéro de tag doit être renseigné et correct
        if (tag !== null && /^[1-9](.)[0-9](.)[0-9]$/.test(tag)) {
            grunt.registerTask('package', ['compass:prod', 'minjs' ,'copy:main']);
            grunt.registerTask('packageDeploy', ['package', 'deploy', 'http']);
        }


        // CHARGEMENT PLUGINS
        grunt.loadNpmTasks('grunt-contrib-compass');
        grunt.loadNpmTasks('grunt-contrib-watch');
        grunt.loadNpmTasks('grunt-contrib-uglify');
        grunt.loadNpmTasks('grunt-contrib-concat');
        grunt.loadNpmTasks('grunt-contrib-copy');
        grunt.loadNpmTasks('grunt-http');
        grunt.loadNpmTasks('grunt-newer');
        grunt.loadNpmTasks('grunt-concat-css');


    } else {
        console.log('#### Veuillez indiquer une application cible (ex : --app=cvtheque) #####');
    }
};