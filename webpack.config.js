const path = require('path');
const MiniCSSExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    entry: [
        path.resolve(__dirname, "js", "index.js"),
        path.resolve(__dirname, "styles", "index.scss")
    ],
    output: {
        path: path.resolve(__dirname, "_build"),
        filename: "index.js"
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [MiniCSSExtractPlugin.loader, "css-loader", "sass-loader"]
            },
            {
                test: /\.(woff2?|ttf|otf|eot|svg)$/,
                exclude: /node_modules/,
                loader: 'file-loader',
                options: {
                    name: '[path][name].[ext]'
                }
            }
        ]
    },
    plugins: [
        new MiniCSSExtractPlugin({
            filename: "./style.css"
        })
    ]
}