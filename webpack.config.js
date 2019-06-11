const path = require('path');

// js minification plugin
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");


module.exports = {
  entry: ['./js/src/app.js', './css/src/app.scss'],
  output: {
    filename: './js/build/app.min.js',
    path: path.resolve(__dirname)
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }, {
        test: /\.(sass|scss)$/,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        // use: [ 'file-loader' ],
        loader: 'url-loader?limit=1024&name=fonts/[name].[ext]'
      }, {
        test:/\.html$/,
        include: path.resolve(__dirname, 'src/templates/includes'),
        loader: [
          'raw-loader',
        ]
      }
    ]
  },

  plugins: [

    new MiniCssExtractPlugin({
      filename: './css/build/main.min.css'
    }),

    new CleanWebpackPlugin({
      cleanOnceBeforeBuildPatterns: ['./js/build/*','./css/build/*']
    }),

  ],

  optimization: {
    minimizer: [
      new UglifyJSPlugin({
        cache: true,
        parallel: true
      }),
      new OptimizeCSSAssetsPlugin({})
    ]
  }
};
