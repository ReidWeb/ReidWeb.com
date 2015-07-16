module.exports = function(grunt) {

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
    cwd: 'img',
    src: ['**/*'],
    dest: 'build/'
  }
}
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-compress');

  // Default task(s).
  grunt.registerTask('default', ['uglify','cssmin','compress']);
};
