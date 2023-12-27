const glob = require('glob');
const path = require('path');
const mix = require('laravel-mix');

require('laravel-mix-twig');

const PUBLIC_PATH = path.join(__dirname, 'public');
const DIST_PATH = path.join(__dirname, 'dist');
const TWIG_PATH = path.join(__dirname, 'src/twig');

mix.setPublicPath(DIST_PATH);

mix.webpackConfig({
    stats: {
        children: true
    }
});

mix.twig({
    root: '',
    entries: glob.sync(path.join(TWIG_PATH, '**/!(_)*.twig'), {
        ignore: ['**/_**/**'],
    }),
    data: path.join(TWIG_PATH, 'data/**/*.{y?(a|)ml,json}'),
    output: './',
    replaceOutputPath: TWIG_PATH,
    loader: {
        namespaces: {
            layouts: path.join(TWIG_PATH, '_layouts'),
        },
    },
    html: {
        // Custom `html-webpack-plugin` options
        // https://github.com/jantimon/html-webpack-plugin
        inject: false,
        minify: false,
    },
    beautify: {
        'editorconfig': true,
    },
});

mix.copyDirectory(PUBLIC_PATH, DIST_PATH, {base: PUBLIC_PATH});
mix.browserSync({ server: DIST_PATH, proxy: null, watch: true, open: false });