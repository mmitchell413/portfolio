module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            // 2. Configuration for concatinating files goes here.
                dist: {
                src: [
                    'js/libs/*.js', // All JS in the libs folder
                    'js/main.js'  // This specific file
                ],
                dest: 'js/build/production.js',
            }
        },
        
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'img/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'img/build/'
                }]
            }
        },
        
        postcss: {
            options: {
                map: true,
                processors: [
                    require('autoprefixer')({
                        browsers: ['last 2 versions']
                    })
                ]
            },
            dist: {
                src: 'css/*.css'
            }
        },
        
        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'css/build/global.css': 'css/main.scss'
                }
            } 
        },
        
          uglify: {
            my_target: {
              files: {
                'js/build/production.min.js': ['js/build/production.js']
              }
            }
          },
        
        watch: {
            scripts: {
                files: ['js/*.js'],
                tasks: ['concat'],
                options: {
                    spawn: false,
                },
            },
            css: {
                files: ['css/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                }
            },
            minify: {
                files:  ['js/*.js'], 
                tasks: ['uglify'],
                options: {
                    spawn:false,
                }
            }
        }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    
    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['postcss:dist', 'concat', 'imagemin', 'uglify']);

};