const path = require('path');
const { WebpackManifestPlugin } = require('webpack-manifest-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
    plugins: [
        new WebpackManifestPlugin(),
        new MiniCssExtractPlugin({
            filename: "css/app.css",
            chunkFilename: "[name].css"
        }),
    ],

    entry: [
        path.join(__dirname, 'src', 'app.js'),
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
                test: /\.(s[ac]ss|css)$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            sourceMap: true,
                            url: true,
                        }
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            sourceMap: true
                        }
                    },
                    'postcss-loader'
                ]
            },
            {
                test: /\.(svg|png|jpe?g|gif)$/i,
                type: 'asset/resource',
                use: [
                    {
                        loader: 'file-loader',
                    },
                ],
            },
        ],
    },
}