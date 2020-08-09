/*
==========================================================================================
  Dependencies
==========================================================================================
*/

const path = require("path");
const { merge } = require("webpack-merge");
const common = require("./webpack.common.js");
const MiniCssExtract = require("mini-css-extract-plugin");
const TerserWebpack = require("terser-webpack-plugin");

/*
==========================================================================================
  Configuration
==========================================================================================
*/

module.exports = merge(common, {
  mode: "production",
  devtool: "source-map",
  output: {
    filename: "[name].js",
    path: path.resolve(__dirname)
  },
  optimization: {
    minimizer: [
      new TerserWebpack()
    ]
  },
  plugins: [
    new MiniCssExtract({
      filename: "style.css"
    })
  ]
});
