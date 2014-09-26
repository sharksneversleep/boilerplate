module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),


    watch: {
        compass: {
            files: ['<%= compass.dist.options.sassDir %>**/*.scss'],
            tasks: ['compass']
        },
        coffee: {
            files: ['<%= coffee.compile.cwd %>**/*.coffee'],
            tasks: ['coffee']
        }
    },

    compass: {
      dist: {
        options: {
          outputStyle: 'expanded', // For minified, replace with 'compressed'
          sassDir: '../_sass/',
          cssDir: '../../css/',
        environment: 'production'
        }
      },
      dev: {
        options: {
          sassDir: '../_sass/',
          cssDir: '../../css/',
        }
      }
    },

    coffee: {
        compile: {
          expand: true,
          cwd: '../_coffee/',
          src: ['**/*.coffee'],
          dest: '../../js/',
          ext: '.js'
      }
    },

    uglify: {
      options: {
        mangle: false
      },
      my_target: {
        files: {
        'dest/output.min.js': ['src/input.js']
        }
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-coffee');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['jshint', 'compass']);
  grunt.registerTask('default', ['uglify']);

};