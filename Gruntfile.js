var mozjpeg = require('imagemin-mozjpeg');
var pngquant = require('imagemin-pngquant');
var svgo = require('imagemin-svgo');
module.exports = function (grunt) {
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            my_target: {
                files: [{
                    expand: true,
                    cwd: 'js',
                    src: '**/*.js',
                    dest: 'build/js'
      }]
            }
        },
        htmlmin: { // Task
            options: { // Target options
                removeComments: true,
                collapseWhitespace: true
            },
            files: { // Dictionary of files
                expand: true,
                cwd: '',
                src: '{,*/}*.php',
                dest: 'build'
            }
        },
        php: {
            dist: {
                options: {
                    port: 5000
                }
            }
        },
        uncss: {
            dist: {
                options: {
                    ignore: ['#added_at_runtime', '.created_by_jQuery'],
                    stylesheets: ['css/index.css','css/style.css','https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css'],
                },
                files: {
                    'build/css/indexTidy.css': ['http://172.0.0.1:5000/index.php']
                }
            }
        },
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'css',
                    src: ['*.css', '!*.min.css'],
                    dest: 'build/css',
                    ext: '.css'
      }]
            }
        },
        imagemin: {
            target: {
                options: {
                    optimizationLevel: 3,
                    progressive: true,
                    use: [pngquant(), mozjpeg(), svgo()]
                }, // options
                files: [{
                        expand: true,
                        cwd: 'img/',
                        src: ['**/*.{png,jpg,jpeg,gif,svg}'],
                        dest: 'build/img'
        }] // files
            } // target
        }, // imagemin
        watch: {
            imageopti: {
                files: ['img/*.*'],
                tasks: ['imagemin']
            } // imageopti
        } // watch
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-php');
    grunt.loadNpmTasks('grunt-uncss');

    // Default task(s).
    grunt.registerTask('default', 'watch', ['uglify', 'cssmin', 'htmlmin']);
    grunt.registerTask('gocss', 'watch', ['php', 'uncss']);
};
