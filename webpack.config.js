const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');


module.exports = {
    // モードの設定
    mode: 'development',

    // エントリーポイントの設定
    entry: {
        blocks : './src/blocks_js/origin.js',
        standard_base:'./src/standard_base.js'
    },

    // ファイルの出力設定
    output: {
        //  出力先のパス
        path: path.join(__dirname, 'assets'),
        filename: "[name]/bundle.js",

    },

    module : {
        rules: [

            {
                test: /\.js$/,
                use: [
                    {
                        loader: 'babel-loader',
                        options: {
                            presets: [
                                '@babel/preset-env'
                            ]
                        }
                    }
                ],
                exclude: /node_modules/,
            },

            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            url: false,
                           // minimize: true,
                        }
                    },
                    {
                        loader: 'sass-loader'
                    }
                ]
            },


        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '[name]/style.css',
        })
    ]

};