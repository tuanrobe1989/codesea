const path = require('path');
const webpack = require('webpack');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const BUILD_DIR = path.resolve(__dirname, '../dist');
const IMG_DIR = path.resolve(__dirname, './images');

let mode = "development";
let target = "web";
const output = {
    path: BUILD_DIR,
    filename: 'js/[name].js',
    // assetModuleFilename: 'aaaaaaaaaaa/[name][ext][query]'
};
const entry = {
    scripts: './src/scripts.js',
};
let plugins = [
    new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery'
    }),
    new MiniCssExtractPlugin({
        filename: 'css/styles.css'
    }),
    new BrowserSyncPlugin({
        host: 'tpfthink.loc',
        proxy: 'tpfthink.loc',
        port: 9000,
        //server: { baseDir: ['../dist'] },
        injectChanges: true,
        open: true,
        files: [
            "../**/**/*.css",
            "../**/**/*.js",
            {
                match: ["../**/**/*.html", "../**/**/*.php"],
                // fn:    function (event, file) {
                //     /** Custom event handler **/
                // }
            }
        ]

    }, {
        reload: false
    })
];

if (process.env.NODE_ENV === "production") {
    mode = "production";
    // target = "brwoserslist"
}
module.exports = [{
    mode: mode,
    output: output,
    entry: entry,
    devtool: "source-map",
    target: target,
    resolve: {
        alias: {
            'images': IMG_DIR
        }
    },
    module: {
        rules: [
            {
                test: /\.(s[ac]|c)ss*/i,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader', 'sass-loader',]
            },
            {
                test: /\.(gif|jpg|jpeg)$/,
                type: 'asset/resource',
                generator: {
                    filename: 'images/[name][ext][query]'
                }
            },
            {
                test: /\.(png|svg)$/,
                type: 'asset/inline',
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",

                }
            }
        ],
    },

    plugins: plugins,

    externals: {
        jquery: 'jQuery',
    },

}, {
    mode: mode,
    entry: {
        editor: ['./src/styles/editor.scss'],
    },
    output: {
        path: BUILD_DIR,
        filename: './js/leftover/[name].min.js',
    },
    resolve: {
        alias: {
            'images': IMG_DIR
        }
    },
    module: {
        rules: [
            {
                test: /\.(s[ac]|c)ss*/i,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader', 'sass-loader',]
            },
            {
                test: /\.(gif|jpg|jpeg)$/,
                type: 'asset/resource',
                generator: {
                    filename: 'images/[name][ext][query]'
                }
            },
            {
                test: /\.(png|svg)$/,
                type: 'asset/inline',
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",

                }
            }
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: './css/[name].css',
        }),
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery'
        }),
    ],
}
]