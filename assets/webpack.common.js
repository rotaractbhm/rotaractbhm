/*
==========================================================================================
  Dependencies
==========================================================================================
*/

const path = require("path");
const MiniCssExtract = require("mini-css-extract-plugin");

/*
==========================================================================================
  Configuration
==========================================================================================
*/

module.exports = {
  entry: {
    app: path.resolve(__dirname, "js", "app.js")
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader"
        }
      },
      {
        test: /\.css$/,
        exclude: /node_modules/,
        use: [
          MiniCssExtract.loader,
          {
            loader: "css-loader",
            options: {
              importLoaders: 1
            }
          },
          {
            loader: "postcss-loader",
            options: {
              ident: "postcss",
              plugins: () => [
                require("autoprefixer"),
                require("postcss-nested"),
                require("cssnano")
              ]
            }
          }
        ]
      },
      {
        test: /\.(jpg|png|svg)$/,
        exclude: /node_modules/,
        use: {
          loader: "file-loader"
        }
      }
    ]
  }
};
