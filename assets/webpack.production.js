/*
==========================================================================================
  Dependencies
==========================================================================================
*/

const path = require("path");
const { merge } = require("webpack-merge");
const common = require("./webpack.common.js");

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const TerserWebpackPlugin = require("terser-webpack-plugin");
const CopyWebpackPlugin = require("copy-webpack-plugin");

/*
==========================================================================================
  Configuration
==========================================================================================
*/

module.exports = merge(common, {
  mode: "production",
  output: {
    filename: "[name].js",
    path: path.resolve(__dirname, "../")
  },
  optimization: {
    minimizer: [
      new TerserWebpackPlugin({}),
      new OptimizeCSSAssetsPlugin({})
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "style.css",
    }),
    new CopyWebpackPlugin({
      patterns: [
        {
          from: "./static/",
          to: "../"
        }
      ]
    })
  ]
});
