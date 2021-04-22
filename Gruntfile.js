module.exports = function(grunt) {
  grunt.initConfig({
    clean: ["assets/js/*", "assets/css/*", "assets/dist"],
    ts: {
      default : {
        tsconfig: "./tsconfig.json"
      }
    },
    browserify: {
      build: {
        src: "./assets/js/admin.js",
        dest: "./assets/dist/js/admin.js"
      }
    }
  });
  grunt.loadNpmTasks("grunt-contrib-clean");
  grunt.loadNpmTasks("grunt-ts");
  grunt.loadNpmTasks("grunt-browserify");
  grunt.registerTask("default", ["clean", "ts", "browserify"]);
};
