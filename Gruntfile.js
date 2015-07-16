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
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');

    // Default task(s).
    grunt.registerTask('default', 'watch', ['uglify', 'cssmin', 'htmlmin']);
};
