var mozjpeg = require('imagemin-mozjpeg');
var pngquant = require('imagemin-pngquant');
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
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'css',
                    src: ['*.css', '!*.min.css'],
                    dest: 'build/css',
                    ext: '.min.css'
      }]
            }
        },
        compress: {
            main: {
                options: {
                    mode: 'gzip'
                },
                expand: true,
                cwd: 'build/js',
                src: ['**/*'],
                dest: 'build/js/'
            }
        },
        imagemin: {
            target: {
                options: {
                    optimizationLevel: 3,
                    progressive: true,
                    use: [pngquant(), mozjpeg()]
                }, // options
                files: [{
                        expand: true,
                        cwd: 'img/',
                        src: ['**/*.{png,jpg,jpeg,gif}'],
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
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-contrib-imagemin');

    // Default task(s).
    grunt.registerTask('default', 'watch', ['uglify', 'cssmin', 'compress']);
};
