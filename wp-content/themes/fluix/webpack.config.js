const path = require("path");
const NODE_ENV = process.env.NODE_ENV || "development";
const webpack = require("webpack");
const autoprefixer = require("autoprefixer");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ESLintPlugin = require("eslint-webpack-plugin");
const {CleanWebpackPlugin} = require("clean-webpack-plugin");


module.exports = {

    watch: false,

    entry: {
        "main":                         "./src/entry.es6",

        "section-accordion":            "./src/js/sections/section-accordion.es6",
    },

    output: {
        path: path.resolve(__dirname, "assets/build"),
        filename: "./[name].min.js"
    },

    plugins: [
        new CleanWebpackPlugin(),
        new webpack.DefinePlugin({
            NODE_ENV: JSON.stringify(NODE_ENV)
        }),
        new webpack.ProvidePlugin({
            Promise: "es6-promise-promise"
        }),
        new MiniCssExtractPlugin({
            filename: "./[name].min.css",
        }),
        new ESLintPlugin({
            extensions: "es6",
        }),
    ],

    module: {

        rules: [
            {
                test: /\.es6$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ["@babel/preset-env"]
                    }
                }
            },
            {
                test: /\.s?css$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader
                    },
                    {
                        loader: "css-loader",
                        options: {
                            sourceMap: NODE_ENV === "development",
                        }
                    },
                    {
                        loader: "resolve-url-loader",
                        options: {
                            sourceMap: NODE_ENV === "development"
                        }
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            postcssOptions: {
                                plugins: [
                                    autoprefixer
                                ],
                            },
                            sourceMap: true
                        }
                    },
                    {
                        loader: "sass-loader",
                        options: {
                            sourceMap: true
                        }
                    }
                ],
            },
            {
                test: /\.(jpg|png|woff|woff2|eot|ttf|svg|gif)$/,
                loader: "url-loader",
                options: {
                    limit: 100000,
                }
            }

        ]
    },

    devtool: NODE_ENV === "development" ? "source-map" : false,

    externals: {
        "jquery": "jQuery"
    }

};
