const path = require("path");
const webpack = require("webpack");

module.exports = {
  entry: {
    main: "./resources/main.js",
    signin: "./resources/signin.js",
    signup: "./resources/signup.js",
  },
  output: {
    filename: "[name].bundle.js",
    path: path.resolve(__dirname, "./public/src/js"),
  },
  resolve: {
    modules: [path.join(__dirname, "public/dist"), "node_modules"],
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery",
    }),
  ],
};
