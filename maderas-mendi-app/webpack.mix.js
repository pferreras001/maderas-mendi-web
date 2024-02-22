const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/main.scss', 'public/css')
    .webpackConfig({
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /(node_modules|bower_components)/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: [
                                ['@babel/preset-env', { modules: false }]
                            ],
                        }
                    }
                }
            ]
        },
       plugins: [
           new BrowserSyncPlugin({
               files: ['resources/**/*', 'public/**/*', 'routes/**/*'], // Watch all relevant files
               proxy: '127.0.0.1:8000', // Your local development URL
               notify: false,
               open: false,
               reloadOnRestart: true
           })
       ]
    });