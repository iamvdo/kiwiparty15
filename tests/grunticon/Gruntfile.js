module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    grunticon: {
      myIcons: {
        files: [{
          expand: true,
          cwd: 'input',
          src: ['*.svg'],
          dest: "output"
        }],
        options: {
        }
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-grunticon');

  // Default task(s).
  grunt.registerTask('default', ['grunticon:myIcons']);

};