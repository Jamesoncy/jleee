module.exports = function ( grunt ) {

  'use strict';

  // let's start with the gruntConfig
  grunt.initConfig({
    pkg: grunt.file.readJSON('senp-validate.jquery.json'),
    uglify: {
      options: {
        banner: '/*\n'+
          ' * <%= pkg.title %> - <%= pkg.description %>\n'+
          ' * by <%= pkg.author.name %> ( <%= pkg.author.email %> )\n'+
          ' * v.<%= pkg.version %>\n'+
          ' * last update: <%= grunt.template.today("dd-mm-yyyy") %>\n'+
          ' * released under MIT licence\n'+
          ' */\n'
      },
      '<%= pkg.name %>-min.js': '<%= pkg.name %>.js'
    }
  });
  
  grunt.loadNpmTasks('grunt-contrib-uglify');
  
  grunt.registerTask( 'default', [ 'uglify' ] );
}