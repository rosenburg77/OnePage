module.exports = {
    content: [
    './app/**/*.php',
    './resources/views/**/*.blade.php',
    './public/**/*.html',
    './public/**/*.js',
    ],
    defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || [],
    css: [
    './public/css/*.css',
    './public/app-assets/css/*.css',
    './public/app-assets/css/pages/*.css',
    './public/app-assets/css/plugins/*.css',
    './public/app-assets/css/themes/*.css',
    './public/app-assets/css/core/*.css',
    './public/app-assets/css/core/menu/*.css',
    './public/app-assets/css/core/mixins/*.css',
    './public/app-assets/css/core/colors/*.css',
    ]
    }