module.exports = function (grunt) {
  grunt.initConfig({
    clean: ["assets/js/*", "assets/css/*", "assets/dist"],
    browserify: {
      admin: {
        src: "./src/backend/js/main.ts",
        dest: "./assets/js/admin.js",
      },
      frontend: {
        src: "./src/frontend/js/main.ts",
        dest: "./assets/js/frontend.js",
      },
      options: {
        browserifyOptions: {
          debug: true,
        },
        configure: function (bundler) {
          bundler.plugin(require("tsify"));
          bundler.transform(require("babelify"), {
            presets: ["@babel/preset-env"],
            extensions: [".ts"],
          });
        },
      },
    },
  });
  grunt.loadNpmTasks("grunt-contrib-clean");
  grunt.loadNpmTasks("grunt-browserify");
  grunt.registerTask("default", ["clean", "browserify"]);
};
