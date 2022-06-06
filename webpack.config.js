const path = require('path');
const { WebpackManifestPlugin } = require('webpack-manifest-plugin');

module.exports = {
    plugins: [
        new WebpackManifestPlugin(),
    ],

    entry: [
        path.join(__dirname, 'src', 'app.js'),
        path.join(__dirname, 'src/assets/scss/', 'app.scss'),
    ],
    output: {
        path: path.resolve(__dirname, 'dist'),
    },
    module: {
        rules: [
          {
            test: /\.jsx?$/, 
            resolve: {
              extensions: [".js", ".jsx"]
            },
            include: path.resolve(__dirname, 'src'),
            exclude: /node_modules/,
            use: {
                loader: 'babel-loader',
                options: {
                    presets: [
                        ['@babel/preset-env', {
                          "targets": "defaults" 
                        }],
                        '@babel/preset-react'
                      ]
                    }
                }
            },
            {
                test: /\.s[ac]ss$/i,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'file-loader',
                        options: { outputPath: 'css/', name: '[name].css'}
                    },
                  'sass-loader', // compiles Sass to CSS, using Node Sass by default
                  'postcss-loader' // post process the compiled CSS
                ]
            },
            {
                test: /\.(svg|png|jpe?g|gif)$/i,
                type: 'asset/resource',
            },
        ],
    },

}